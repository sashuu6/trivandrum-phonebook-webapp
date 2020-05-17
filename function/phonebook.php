<?php
error_reporting(1);
function phonebook_public_form ($post_data) {
    $post_data = decrypt_public(WEB_KEY, $post_data);
    if(!isset($post_data['section']) || !isset($post_data['name']))
        json_output($post_data, 'We did not get the data! Please contact admin.', 0);
    $section = list_sections($post_data['section']);
    if(empty(list_sections($post_data['section'])))
        json_output($post_data, 'You have not selected Section of the contact', 0);
    $roles = array();
    if(isset($post_data['roles']))
        $roles = $post_data['roles'];
    $show = array();
    if(isset($post_data['show_dashboard']))
        $show['show_dashboard'] = true;
    $result = phonebook_insert(
        $section[0]['id'], $post_data['name'], $post_data['address1'], $post_data['address2'], $post_data['city'], $post_data['state'], 'India', array(
            'Work' => array(
                91, $post_data['phone1']
            ),
            'Home' => array(
                91, $post_data['phone2']
            )
        ), $roles, $show
    );
    if($result)
        json_output($post_data, 'Contact: ' . $post_data['name'] . ' encrypted & saved successfully.');
    else
        json_output($post_data, 'Contact: ' . $post_data['name'] . ' not saved.', 0);
}

function phonebook_insert(
    $section, $name, $address_1, $address_2, $city, $state, $country,
    $phone_array = array(), $role_array = array(),
    $show = array(
        'dashboard' => 0
    )
) {
    global $database;
    $key = random_key();
    try {
        $result = $database->insert(TABLE_PREFIX . TABLE_PHONEBOOK, [
            "secret" => $key,
            "section_id" => $section,
            "name" => encrypt($key, $name),
            "address_1" => encrypt($key, $address_1),
            "address_2" => encrypt($key, $address_2),
            "city" => encrypt($key, $city),
            "state" => encrypt($key, $state),
            "country" => encrypt($key, $country)
        ]);
    } catch (Exception $e){
        exit("Error");
    }
    if(!$result)
        return false;
    $row_id = $database->id();
    if(!empty($phone_array)) {
        foreach($phone_array as $descr => $num) {
            $result = $database->insert(TABLE_PREFIX . TABLE_PHONEBOOK_NUMBERS, [
                "phonebook_id" => $row_id,
                "description" => $descr,
                "international_code" => $num[0],
                "number" => encrypt($key, $num[1])
            ]);
            if(!$result)
                return false;
        }
    }
    if(!empty($show)) {
        foreach ($show as $key => $value) {
            if($key == 'show_dashboard') {
                $database->insert(TABLE_PREFIX . TABLE_PHONEBOOK_SHOW, [
                    "phonebook_id" => $row_id,
                    "show_dashboard" => 1
                ]);
                if(!$result)
                    return false;
            }
        }
    }
    return true;
}
<?php

function section_public_form ($post_data) {
    $post_data = decrypt_public(WEB_KEY, $post_data);
    if(!isset($post_data['name']))
        json_output($post_data, 'We did not get the data! Please contact admin.', 0);

    $result = section_insert($post_data['name']);
    if($result)
        json_output($post_data, 'Section: ' . $post_data['name'] . ' saved successfully.');
    else
        json_output($post_data, 'Section: ' . $post_data['name'] . ' not saved.', 0);
}

function section_insert($name) {
    global $database;
    try {
        $result = $database->insert(TABLE_PREFIX . TABLE_PHONEBOOK_SECTIONS, [
            "name" => $name
        ]);
    } catch (Exception $e) {
        exit("Error");
    }
    if (!$result)
        return false;
    return true;
}

function list_sections($id = 0) {
    global $database;
    if($id != 0)
        $data = $database->select(TABLE_PREFIX . TABLE_PHONEBOOK_SECTIONS, [
            'id',
            'secret',
            'name',
            'created_timestamp',
            'modified_timestamp'
        ], [
            'secret' => $id,
            'status' => 1
        ]);
    else
        $data = $database->select(TABLE_PREFIX . TABLE_PHONEBOOK_SECTIONS, [
            'id',
            'secret',
            'name',
            'created_timestamp',
            'modified_timestamp'
        ], [
            'id[>]' => 0,
            'status' => 1
        ]);
    return $data;
}
<?php

function phonebook_list($section = 0) {
    global $database;
    if($section != 0) {
        $section = list_sections($section);
        if(empty($section))
            return array();
        $data = $database->select(TABLE_PREFIX . TABLE_PHONEBOOK, "*", [
            'section_id' => $section[0]['id'],
            'status[>]' => 0
        ]);
    } else
        $data = $database->select(TABLE_PREFIX . TABLE_PHONEBOOK, "*", [
            'id[>]' => 0,
            'status[>]' => 0
        ]);
    return $data;
}

function get_profile_letters($name) {
    if($name == '')
        return $name;
    $words = explode(" ", $name);
    $acronym = "";
    foreach ($words as $w) {
        $acronym .= $w[0];
    }
    return $acronym;
}

function phonebook_public_list_view($get_data) {
    if(isset($get_data['section'])) {
        $result = phonebook_list($get_data['section']);
        $section = list_sections($get_data['section']);
    } else {
        $result = phonebook_list();
        $section = array();
    }
    if(empty($section))
        $section = array();
    if(!empty($section))
    echo '  <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title encrypted d-none">' . encrypt_public( $section[0]['name']) . '</h4>
                    <div class="nk-block-des encrypted d-none">
                        <p>' . encrypt_public('Here you can see the phone contacts in the section.') . '</p>
                    </div>
                </div>
            </div>';
    echo '  <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                    <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col"><span class="sub-text">User</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">City</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">State</span></th>
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Country</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                        <th class="nk-tb-col nk-tb-col-tools text-right">
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>';
    foreach ($result as $row) {
        if($row['status'] == -1)
            continue;
        if($row['status'] == 1)
            $status = 'Active';
        else
            $status = 'Inactive';
        echo '                                        <tr class="nk-tb-item">
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-dark d-none d-sm-flex">
                                                                    <span class="encrypted d-none">' . encrypt_public(get_profile_letters(decrypt($row['secret'], $row['name']))) . '</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead encrypted d-none">' . encrypt_public(decrypt($row['secret'], $row['name'])) . '<span class="dot dot-success d-md-none ml-1"></span></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb">
                                                            <span class="encrypted d-none">' . encrypt_public(decrypt($row['secret'], $row['city'])) . '</span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span class="encrypted d-none">' . encrypt_public(decrypt($row['secret'], $row['state'])) . '</span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span class="encrypted d-none">' . encrypt_public(decrypt($row['secret'], $row['country'])) . '</span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span class="encrypted d-none" class="tb-status text-info">' . encrypt_public($status) . '</span>
                                                        </td>
                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <!--<ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li class="divider"></li>
                                                                                <li><a href="#"><em class="icon ni ni-na"></em><span class="text-info">Disable Phonebook</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-na"></em><span class="text-danger">Delete Phonebook</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>-->
                                                        </td>
                                                    </tr><!-- .nk-tb-item  -->';
    }
    echo '                                          </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .card-preview -->';
}

function phonebook_public_form($get_data) {
    echo '<div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <form method="POST" id="registerSubmit">
                        <div class="card no-b  no-r">
                            <div class="card-body">
                                <h5 class="card-title encrypted">' . encrypt_public('Section Selection') . '</h5>
                                <div class="form-row">
                                    <div class="form-group col-5 m-0">
                                        <label class="my-1 mr-2 encrypted d-none" for="inlineFormCustomSelectPref">' . encrypt_public('Section of the user that you are adding') . '</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select" name="section" data-search="on" required>';
                                            foreach (list_sections() as $section) {
                                                echo '<option value="' . $section['secret'] . '">' . $section['name'] . '</option>';
                                            }
    echo '                                    </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <h5 class="card-title encrypted">' . encrypt_public('User Information') . '</h5>
                                        <div class="form-group m-0">
                                            <label for="name" class="col-form-label s-12 encrypted d-none">' . encrypt_public('Name') . '</label>
                                            <input name="name" id="name" placeholder="Enter Name" class="form-control r-0 light s-12 name" type="text" required>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-6 m-0">
                                                <label for="address1" class="col-form-label s-12 encrypted d-none">' . encrypt_public('Address 1') . '</label>
                                                <input name="address1" type="text" class="form-control r-0 light s-12" id="address1" placeholder="Eg. House No. 1, Street Name">
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="address2" class="col-form-label s-12 encrypted d-none">' . encrypt_public('Address 2') . '</label>
                                                <input name="address2" type="text" class="form-control r-0 light s-12" id="address2" placeholder="Eg. P.O BOX No., Place Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-4 m-0">
                                        <label for="state" class="col-form-label s-12 encrypted d-none">' . encrypt_public('State') . '</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select" name="state" id="state" onchange="print_city(\'city\', this.selectedIndex);" data-search="on" required></select>
                                        </div>
                                    </div>

                                    <div class="form-group col-4 m-0">
                                        <label for="city" class="col-form-label s-12 encrypted d-none">' . encrypt_public('City') . '</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select" name="city" id="city" data-search="on" required></select>
                                        </div>
                                    </div>
                                    <div class="form-group col-4 m-0">
                                        <label for="phone1" class="col-form-label s-12 encrypted d-none">' . encrypt_public('Work') . '</label>
                                        <input name="phone1" placeholder="1234567890" class="form-control r-0 light s-12 " type="tel" required>
                                    </div>
                                    <div class="form-group col-4 m-0">
                                        <label for="phone2" class="col-form-label s-12 encrypted d-none">' . encrypt_public('Home') . '</label>
                                        <input name="phone2" placeholder="1234567890" class="form-control r-0 light s-12 " type="tel">
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <h5 class="card-title encrypted">' . encrypt_public('Permission Selection') . '</h5>
                                <div class="form-row">';
                                    foreach(list_roles() as $key => $role) {
                                        echo '<div class="custom-control custom-checkbox mt-1 mb-3 pr-4">
                                        <input type="checkbox" class="custom-control-input" id="customControlValidation' . $key . '" name="roles[]" value="' . $role['secret'] . '">
                                        <label class="custom-control-label encrypted" for="customControlValidation' . $key . '">' . encrypt_public($role['name']) . '</label>
                                    </div>';
                                    }
echo '                                </div>
                                <div class="form-row">
                                    <div class="custom-control custom-checkbox mb-3 pr-4">
                                        <input type="checkbox" class="custom-control-input" id="show_dashboard" name="show_dashboard" value="show_dashboard">
                                        <label for="show_dashboard" class="custom-control-label encrypted">' . encrypt_public('Show in Dashboard') . '</label>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="card-body">
                                <button id="submit" type="submit" class="btn btn-primary btn-lg encrypted d-none">' . encrypt_public('Add Phonebook') . '</button>
                            </div>
                        </div>
                    </form>
                                  </div>
          </div>';
}

function phonebook_public_form_submit($post_data) {
    $post_data = decrypt_public(WEB_KEY, $post_data);
    if(!isset($post_data['section']) || !isset($post_data['name']))
        json_output($post_data, 'We did not get the data! Please contact admin.', 0);
    if($post_data['name'] == '')
        json_output($post_data, 'Name is not entered!   ', 0);
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
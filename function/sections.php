<?php

function section_public_form_submit ($post_data) {
    $post_data = decrypt_public(WEB_KEY, $post_data);
    if(!isset($post_data['name']))
        json_output($post_data, 'We did not get the data! Please contact admin.', 0);

    $result = section_insert($post_data['name']);
    if($result)
        json_output($post_data, 'Section: ' . $post_data['name'] . ' saved successfully.');
    else
        json_output($post_data, 'Section: ' . $post_data['name'] . ' not saved.', 0);
}

function section_public_form ($get_data) {
    echo '<div class="card card-bordered card-preview">
             <div class="card-inner">
                  <form method="POST" id="registerSubmit">
                    <div class="card no-b  no-r">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <h5 class="card-title">Section Information</h5>
                                        <div class="form-group m-0">
                                            <label for="name" class="col-form-label s-12">Name</label>
                                            <input name="name" id="name" placeholder="Enter Name" class="form-control r-0 light s-12 name" type="text" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <button id="submit" type="submit" class="btn btn-primary btn-lg">Save Data</button>
                            </div>
                        </div>
                  </form>
              </div>
          </div>';
}

function section_public_list() {
    $result = list_sections();
    foreach ($result as $section) {
        echo '<div class="col-sm-6">
                <div class="card text-white bg-secondary">
                    <div class="card-header">Section</div>
                    <div class="card-inner">
                        <h5 class="card-title">' . $section['name'] . '</h5>
                        <p class="card-text"><a href="' . PUBLIC_URL . 'phonebooks_list.php?section=' . $section['secret'] . '" class="btn btn-primary">Show Phonebook</a></p>
                    </div>
                </div>
            </div>';
    }
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
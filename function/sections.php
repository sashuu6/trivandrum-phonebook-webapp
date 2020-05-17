<?php

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
<?php

function list_roles($id = 0) {
    global $database;
    if($id != 0)
        $data = $database->select(TABLE_PREFIX . TABLE_ROLES, [
            'secret',
            'name',
            'created_timestamp',
            'modified_timestamp'
        ], [
            'secret' => $id,
            'status' => 1
        ]);
    else
        $data = $database->select(TABLE_PREFIX . TABLE_ROLES, [
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
<?php

function is_login() {
    $ci = get_instance();
    if (!$ci->ion_auth->logged_in()) {
        // redirect them to the login page
        redirect('auth/login', 'refresh');
    }
}

function cmb_dinamis($name, $table, $field, $pk, $selected) {
    $ci = get_instance();
    $cmb = "<select name='$name' class='form-control'>";
    $data = $ci->db->get($table)->result();
    foreach ($data as $d) {
        $cmb .="<option value='" . $d->$pk . "'";
        $cmb .= $selected == $d->$pk ? " selected='selected'" : '';
        $cmb .=">" . strtoupper($d->$field) . "</option>";
    }
    $cmb .="</select>";
    return $cmb;
}

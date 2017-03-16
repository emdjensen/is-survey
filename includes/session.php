<?php

namespace fsu;

function session_cookie_create($session_id) {
    setcookie(SESSION_COOKIE, $session_id, time() + 60*60*24*365);
}

function session_cookie_get() {
    return $_COOKIE[SESSION_COOKIE];
}

function session_create() {
    $session_id = uniqid();

    if (session_file_exists($session_id)) {
        $session_id = session_create();
    }

    session_file_create($session_id);
    session_cookie_create($session_id);

    return $session_id;
}

function session_exists() {
    return isset($_COOKIE[SESSION_COOKIE]) 
        && session_file_exists($_COOKIE[SESSION_COOKIE]);
}

function session_file_create($session_id) {
    file_save(SESSIONS_DIR . '/' . $session_id);
}

function session_file_exists($session_id) {
    return file_exists(SESSIONS_DIR . '/' . $session_id);
}

function session_data_get($session_id) {
    $data = file_get_contents(SESSIONS_DIR . '/' . $session_id);

    if (empty($data)) {
        return [];
    }

    return unserialize($data);
}

function session_data_save($session_id, $data) {
    file_save(SESSIONS_DIR . '/' . $session_id, $data);
}

function session_get_id() {
    if (!session_exists()) {
        return false;
    }

    return session_cookie_get();
}

function session_start() {
    if (!$session_id = session_get_id()) {
        $session_id = session_create();
    }

    return $session_id;
}

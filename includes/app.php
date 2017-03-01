<?php

namespace fsu;

require __DIR__ . '/settings.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/session.php';
require __DIR__ . '/test.php';

function app() {
    $session_id = session_get_id();

    test_process($session_id);

    $session_data = session_data_get($session_id);

    if (empty($session_data)) {
        view('main');
        return;
    }

    view($session_data['step']);
}

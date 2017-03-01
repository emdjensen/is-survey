<?php 

namespace fsu;

function test_process($session_id) {
    if (empty($_POST)) {
        return;
    }

    $session_data = session_data_get($session_id);
    $session_data['step'] = test_next_step($_POST['step']);

    if (isset($_POST['cancel'])) {
        $session_data['step'] = 'confirm';
        session_data_save($session_id, $session_data);
        return;
    }

    test_process_answers($session_id, $session_data);
    session_data_save($session_id, $session_data);
}

function test_process_answers($session_id, &$session_data) {
    if (!isset($_POST['step'])) {
        return;
    }

    $answers = &$session_data['answers'];
    $submitted_answers = $_POST;
    unset($submitted_answers['step']);

    $answers[$_POST['step']] = $submitted_answers;
}


function test_next_step($step) {
    $steps = [
        'main' => 'consent',
        'consent' => 'page1',
        'page1' => 'page2',
        'page2' => 'page3',
        'page3' => 'page4',
        'page4' => 'page5',
        'page5' => 'page6',
        'page6' => 'page7',
        'page7' => 'confirm',
    ];

    return isset($steps[$step]) ? $steps[$step] : null;
}

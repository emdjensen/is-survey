<?php 

require __DIR__ . '/includes/app.php';
$session_id = fsu\session_start();
$session_data = fsu\session_data_get($session_id);

if (isset($_GET['logout'])) {
    $session_data['admin'] = false;
    fsu\session_data_save($session_id, $session_data);
}

if (!empty($_POST['password']) && $_POST['password'] === PASSWORD) {
    $session_data['admin'] = true;
    fsu\session_data_save($session_id, $session_data);
}

if (empty($session_data['admin'])) {
    print <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>Authorized Personnel Only</title>
</head>

<body>
    <h1>Survey Results - Login</h1>
    <form action="results.php" method="post">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Go">
    </form>
</body>
</html>
HTML;
}
else {
    $results = fsu\test_get_results();

    $table_headers = $table_data_row = $table_data = [];

    foreach ($results as $session_id => $result) {
        if (!in_array('Participant ID', $table_headers)) {
            $table_headers[] = 'Participant ID';
        }
        $table_data_row[$session_id][] = $session_id;

        foreach ($result as $page => $questions) {
            foreach ($questions as $question => $answer) {
                if (!in_array($question, $table_headers)) {
                    $table_headers[] = $question;
                }

                $table_data_row[$session_id][] = $answer;
            }
        }
    }

    $table_headers = '<tr><th>' 
        . implode('</th>' . PHP_EOL . '<th>', $table_headers) 
        . '</th></tr>';

    foreach ($table_data_row as $session_id => $row) {
        $table_data[$session_id] = '<tr><td>' 
            . implode('</td>' . PHP_EOL . '<td>', $row)
            . '</td></tr>';
    }
    $table_data = implode(PHP_EOL, $table_data);

    print <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>Survery Results</title>
    <style type="text/css">
        @media print {
            .links {
                display: none;
            }
        }
    </style>

    <script type="text/javascript">
        window.onload = function () {
            document.getElementById('print').onclick = function (event) {
                event.preventDefault();
                window.print();
            };
        };
    </script>
</head>

<body>
    <h1>Survey Results</h1>
    <div class="links">
        <a href="results.php?logout=1">Logout</a> &dash;
        <a href="#" id="print">Print</a>
    </div>
    <br>
    <table border="1" cellspacing="0">
        {$table_headers}
        {$table_data}
    </table>
</body> 
</html> 
HTML;
}

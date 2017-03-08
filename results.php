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

    $table_data = '';
    foreach ($results as $session_id => $result) {
        $table_data .= <<<HTML
    <br>
    <table border="1">
        <tr>
            <th>Submission ID</th>
            <th>Page</th> 
            <th>Question</th>
            <th>Answer</th>
        </tr>
HTML;
        foreach ($result as $page => $questions) {
            foreach ($questions as $question => $answer) {
                $table_data .= <<<HTML
        <tr>
            <td>{$session_id}</td>
            <td>{$page}</td> 
            <td>{$question}</td>
            <td>{$answer}</td>
        </tr>
HTML;
            }
        }

        $table_data .= '</table>';
    }

    print <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>Survery Results</title>
</head>

<body>
    <h1>Survey Results</h1>
    <div><a href="results.php?logout=1">Logout</a></div>
    {$table_data}
</body> 
</html> 
HTML;
}

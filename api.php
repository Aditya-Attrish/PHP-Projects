<?php
// tasks_api.php

header('Content-Type: application/json');

try {
    $db = new SQLite3('todo.db');

    $results = $db->query('SELECT * FROM tasks');
    $tasks = [];

    while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
        $tasks[] = $row;
    }

    echo json_encode(['success' => true, 'tasks' => $tasks]);

} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>

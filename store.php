<?php

$new_todo = $_POST['todo'] ?? '';

$response = [
    'success' => true,
];

if($new_todo) {
$todos_string = file_get_contents('./todo.json');
$todos = json_decode($todos_string, true);

$todos [] = $new_todo;
$response['todos'] = $todos;

$todos_string = json_encode($todos);
file_put_contents('./todo.json', $todos_string);
} else {
    $response['success'] = false;
    $response['message'] = 'Please enter a todo';
}

header('Content-Type: application/json');
echo json_encode($response);






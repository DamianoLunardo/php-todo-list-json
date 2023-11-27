<?php

$index = $_POST['index'] ?? '';

$response = [
    'success' => true,
];

if ($index !== '') {
    $todos_string = file_get_contents('./todo.json');
    $todos = json_decode($todos_string, true);

    array_splice($todos, $index, 1);

    $response['todos'] = $todos;

    $todos_string = json_encode($todos);
    file_put_contents('./todo.json', $todos_string);
} else {
    $response['success'] = false;
    $response['message'] = 'Index not provided';
}

header('Content-Type: application/json');
echo json_encode($response);

<?php

// GET-запрос: получение списка постов
function performGetRequest() {
    $url = 'https://jsonplaceholder.typicode.com/posts';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}

// POST-запрос: создание нового поста
function performPostRequest() {
    $url = 'https://jsonplaceholder.typicode.com/posts';
    $data = [
        'title' => 'Новый пост',
        'body' => 'Содержание поста',
        'userId' => 1
    ];
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}

// PUT-запрос: обновление поста с ID=1
function performPutRequest() {
    $url = 'https://jsonplaceholder.typicode.com/posts/1';
    $data = [
        'title' => 'Обновленный заголовок',
        'body' => 'Обновленное содержание'
    ];
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}

// DELETE-запрос: удаление поста с ID=1
function performDeleteRequest() {
    $url = 'https://jsonplaceholder.typicode.com/posts/1';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response === '' ? 'Успешно удалено' : 'Ошибка';
}

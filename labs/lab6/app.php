<?php
require_once 'ApiClient.php';

// Пример использования класса ApiClient с JSONPlaceholder
$client = new ApiClient('https://jsonplaceholder.typicode.com');

try {
    // Получить все посты
    $posts = $client->get('/posts');
    echo "GET Response: " . print_r($posts[0], true) . "\n";

    // Создать новый пост
    $newPost = $client->post('/posts', [
        'title' => 'Пример поста',
        'body' => 'Тело поста',
        'userId' => 1
    ]);
    echo "POST Response: " . print_r($newPost, true) . "\n";

    // Обновить пост с ID=1
    $updatedPost = $client->put('/posts/1', [
        'title' => 'Обновленный заголовок'
    ]);
    echo "PUT Response: " . print_r($updatedPost, true) . "\n";

    // Удалить пост с ID=1
    $deleteResponse = $client->delete('/posts/1');
    echo "DELETE Response: " . print_r($deleteResponse, true) . "\n";

} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage() . "\n";
}

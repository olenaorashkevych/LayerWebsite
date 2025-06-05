<?php
$uploadDir = './'; // Папка для завантаження зображень

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $originalFilename = isset($_POST['originalFilename']) ? $_POST['originalFilename'] : 'default.jpg';

    // Перевіряємо наявність помилок при завантаженні
    if ($file['error'] !== UPLOAD_ERR_OK) {
        echo json_encode(['error' => false, 'message' => 'Помилка завантаження файлу']);
        exit;
    }

    // Перевіряємо, чи є файл зображенням
    $fileType = mime_content_type($file['tmp_name']);
    if (strpos($fileType, 'image') === false) {
        echo json_encode(['error' => false, 'message' => 'Файл має бути зображенням']);
        exit;
    }

    // Отримуємо вміст файлу
    $data = file_get_contents($file['tmp_name']);

    // Створюємо унікальне ім'я файлу
    $fileName = uniqid() . '-' . basename($originalFilename);
    $filePath = $uploadDir . $fileName;

    // Зберігаємо файл на сервері
    if (file_put_contents($filePath, $data) !== false) {
        $fileUrl = '/' . $filePath; // Формуємо URL до збереженого файлу
        echo json_encode(['success' => true, 'url' => $fileUrl]);
    } else {
        echo json_encode(['error' => false, 'message' => 'Не вдалося зберегти файл']);
    }

}
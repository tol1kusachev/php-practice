<?php
if (isset($_GET['user_text'])) {
    $text = $_GET['user_text'];
    
    $result = [
        'text' => $text,
        'length' => mb_strlen($text, 'UTF-8')
    ];
    
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
} else {
    header('Location: index.html');
    exit;
}
?>

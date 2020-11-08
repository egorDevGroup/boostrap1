<?php



try {
    $pdo = new PDO('mysql:host=localhost;dbname=task', 'root', '');
    echo 'Ok';
} catch (Exception $e) {
    echo $e->getMessage();
}


?>
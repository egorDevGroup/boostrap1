<?php



<<<<<<< HEAD
try {
    $pdo = new PDO('mysql:host=localhost;dbname=info', 'root', 'root');

} catch (Exception $e) {
    echo $e->getMessage();
}


function connect($user='admin', $pass='1234')
{
   return new PDO('mysql:host=localhost;dbname=info', "$user", "$pass");
}

$pdo = connect('root','root');



$pdo1=connect('qrth');
=======
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=info', 'root', 'root');

    } catch (Exception $e) {
        echo $e->getMessage();
    }

    echo "ok";
>>>>>>> origin/master

?>
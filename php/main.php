<?php
    require 'connect.php';
    //echo $_POST['name']. '<br>'. $_POST['tel'];
    $name = $_POST['name'];
    $tel = $_POST['tel'];
/*    $query = "INSERT INTO `info`(`name`, `telephone`) VALUES('$name', '$tel')";


    $answer = $pdo->exec($query_get);*/
    $query_get = 'SELECT `telephone` FROM `info` WHERE `id`=1';






<<<<<<< HEAD:php/main.php
    function getdata($SQL){
        $worker = $pdo->prepare($SQL);
        $worker->execute();

        $data =$worker->fetchAll();
        return $data;
    }


    $data = getdata($query_get);
    echo $data;




=======
>>>>>>> origin/master:main.php
?>

<?php


class OutInfo
{


    public function echoCards($array){

        $pubOutput = "";

     $arrayCount=count($array);

        foreach ($array as $item) {

                $pubOutput .= "<div class='card' style='width: 18rem;'>
            <img class='card-img-top' src='img/img.png' alt='Card image cap'>
            <div class='card-body'>
                <h5 class='card-title'>" .$item['name'] . "</h5>
                <p class='card-text'>" . $item['rate']. "</p>
            </div>
            </div>";





        }


return $pubOutput;
    }


}
<?php

/**
* 
*/
class Snippet
{
    // function __construct()
    // {
    //     require_once './addwish.php';
    // }

    public function get_formbook()
    {
        require_once "addwish.php";
    }

    public function get_card($title, $message, $sender, $img = "front.jpg")
    {
        echo "
        <div class='card'>
            <div class='back'></div>
            <div class='front'>
                <div class='imgset'>
                    <img width='100%' src='./img/$img'>
                </div>
            </div>
            <div class='text-container'>
            <p id='head'>$title</p>
            <p>$message</p>
            <p class 'sender'>~$sender</p>
            </div>
        </div>";
    }
}

// $db = new Database();
// echo $db->connect();

?>
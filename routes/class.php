<?php

/**
* 
*/
class Snippet
{
    function __construct()
    {
        require_once 'processor.php';
    }

    public function get_formbook()
    {
        require_once "addwish.php";
    }

    public function get_cards($img = "front.jpg")
    {
        $rows = $this->card_data();
        if($rows != 'NO_DATA')
        {
            foreach ($rows as $data) {
                echo "
                <div class='card'>
                    <div class='back'></div>
                    <div class='front'>
                        <div class='imgset'>
                            <img width='100%' src='./img/$img'>
                        </div>
                    </div>
                    <div class='text-container'>
                    <p id='head'>".$data['title']."</p>
                    <p>".$data['message']."</p>
                    <p class 'sender'>~".$data['name']."</p>
                    <p class 'sender' style='font-size: 12px'>".date('h:i A', strtotime($data['date']))."</p>
                    </div>
                </div>";
            }
        }else{
            echo "
            <div class='card'>
                <div class='back'></div>
                <div class='front'>
                <div class='imgset'>
                    <img width='100%' src='./img/front.jpg'>
                    </div>
                </div>
                <div class='text-container'>
                    <p id='head'>Themanbentil💻</p>
                    <p>Happy Birthday to myself!🎊🎉🎵🏆</p>
                    <p>~qBentil</p>
                    </div>
            </div>
            
            ";
        }
    }

    public function card_data()
    {
        $processor = new Processor();
        return $processor->get_card_data();
    }
}

// $db = new Database();
// echo $db->connect();

?>
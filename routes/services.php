<?php
if(isset($_POST['action']) && $_POST['action'] == 'send_wish')
{
    require_once "processor.php";
    $proccessor = new Processor("./");
    $name = $_POST['name'];
    $add = $proccessor->send_wish($_POST['name'], $_POST['phone'], $_POST['subject'], $_POST['message']);
    if($add)
    {
        echo json_encode(["status" => 1, "message" => "Thank you for your wonderful words $name 🥰"]);
    }else{
        echo json_encode(["status" => 0, "message" => "Sorry $name, each person is entitle to one wish book. Thank you🥰"]); 
    }
}
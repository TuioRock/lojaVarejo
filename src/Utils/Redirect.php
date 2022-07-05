<?php


namespace APP\Utils;

class Redirect{


   public static function redirect(string | array $message, 
        string $type = 'success', 
        $url = '../View/message.php')
        {
        session_start();
        if(is_array($message)){
            $itens = "";
            foreach($message as $$msg){
                $itens .= "<li>$msg</li>";
            }
            $_SESSION['msg_warning'] = $itens;
        }else{
        if($type == "success"){
            $_SESSION['msg_success'] = $message;
        }else if($type == 'error'){
            $_SESSION["msg_error"] = $message;
        }
    }
    header("location:$url");
    exit;
}
}
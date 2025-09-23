<?php
class fxns{
    public function setmessage($name, $value, $class){
        if(is_array($value)){
            $_SESSION[$name] = $value;
        }else{
            $_SESSION[$name] = "<div class='alert alert-".$class."' role='alert'>".$value."</div>";
        }
    }

    public function getmessage($name){
        if(isset($_SESSION[$name])){
            $message = $_SESSION[$name];
            unset($_SESSION[$name]);
            return $message;
        }
        return null;
    }
}
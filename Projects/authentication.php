<?php
class authentication{
    public function signup($conf, $ObjFxns){
        if(isset($_POST['signup'])){

            $error_check= [];

            $fullname = $_SESSION['fullname'] = ucwords(strtolower($_POST['fullname']));
            $email = $_SESSION['email'] = strtolower($_POST['email']);
            $password = $_SESSION['password'] = $_POST['password'];
            
            //Allow only letters and whitespace in fullname
            if (!preg_match("/^[a-zA-Z-' ]*$/",$fullname)) {
                $error_check['name_error'] = "Only letters and white space allowed in fullname";
            }
            //email format validation
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_check['mail_error'] = "Invalid email format";
            }

            //email domain validation
            $email_domain = substr(strrchr($email, "@"), 1);
            if (!in_array($email_domain, $conf['allowed_email_domains'])) {
                $error_check['domain_error'] = "Email domain not allowed.";
            }
            
            //password length validation
            if (strlen($password) < $conf['password_min_length']) {
                $error_check['password_error'] = "Password must be at least ".$conf['password_min_length']." characters long.";
            }

            if (!count($error_check)) {
                die($fullname." ".$email." ".$password);
            }else{
                $ObjFxns->setmessage("errors", $error_check, "danger");
                $ObjFxns->setmessage('message','Correct the errors and try again', 'danger');
            }

        }
    }
}
<?php

//start session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//set timezone
date_default_timezone_set('Africa/Nairobi');

// Site information
$conf['site_name'] = "ICS Community";
$conf['site_url'] = "http://localhost/I_O_P";
$conf['admin_email'] = "admin@benjaminswebsite.com";


//Database configuration
$conf['db_type'] = "pdo";
$conf['db_host'] = "localhost";
$conf['db_user'] = "root";
$conf['db_pass'] = " ";
$conf['db_name'] = "I_O_P";

//Site language
$conf['site_lang'] = "en";

//Email Configuration
$conf['mail_type'] = "smtp";
$conf['smtp_host'] = "smtp.gmail.com";
$conf['smtp_user'] = "example@gmail.com";
$conf['smtp_pass'] = "secret password";
$conf['smtp_port'] = 587;
$conf['smtp_secure'] = "tls";

//password length
$conf['password_min_length'] = 6;

//email domain validation
$conf['allowed_email_domains'] = ["gmail.com", "yahoo.com", "outlook.com","strathmore.edu"];
<?php 

require_once 'conf.php';

$directories = ["Global", "Forms", "Layouts", "Projects", "fxns"];

spl_autoload_register(function ($class_name) use ($directories) {
    foreach ($directories as $directory) {
        $file = __DIR__ . "/$directory/".$class_name.".php";
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

//create an instance of the Greeting class
$ObjSendMail = new SendMail();
$ObjForm = new forms();
$ObjLayout = new layouts();

$ObjAuthentication = new Authentication($conf);
$ObjFxns = new fxns();

$ObjAuthentication->signup($conf, $ObjFxns);

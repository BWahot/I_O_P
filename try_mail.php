<?php
require_once 'ClassAutoLoad.php';

$mailCnt=[
    'name_from'=>'ICS C COMMUNITY',
    'email_from'=>'no-reply@icsccommunity.com',
    'name_to'=>'Benjamins World',
    'email_to'=>'smraula01@gmail.com',
    'subject'=>'Welcome to ICS Community',
    'body'=>"This is a new semester.<b>Let's make it great!</b>"
];

$ObjSendMail->Send_Mail($conf, $mailCnt);

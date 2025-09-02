<?php
class Greeting {
    public function sayHello() {
        return "<H1>Hello, Benjamin's World!</H1>";
    }

    public function todayDate() {
        return "<p>Today is " . date("l") . "</p>";
    }
}

//create an instance of the Greeting class
$greeting = new Greeting();

//call the sayHello method
print $greeting->sayHello();

//call the todayDate method
print $greeting->todayDate();

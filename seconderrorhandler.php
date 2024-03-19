<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

function customerrorhandler1($errn, $errstr, $errfile, $errline)
{ //wiht this fucntion the errors will not be in the browser but it will be in the error_logs.txt file

    $message="the errro number is $errn,and the message of error is  $errstr,in the file $errfile,in line $errline";
    
    // 3 meaning that i want to put the erorrs in a file (the second param can be 0,1,2,3) each one mean some thing.
    error_log($message.PHP_EOL,3,"error_logs.txt");

}


function customerrorhandler2($errorno,$errorstr,$errorfile,$errorline){

echo "ERROR:Nomero [$errorno] <br> and the error message is [$errorstr] <br> in the file=> [$errorfile] <br> in line =>[$errorline]";


}



function customerrorhandler3($errno, $errstr, $errfile, $errline) {
    echo "<b>Custom error:</b> [$errno] $errstr<br>";
    echo " Error on line $errline in $errfile<br>";
}

set_error_handler("customerrorhandler1");

echo $alolaa;

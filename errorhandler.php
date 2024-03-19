<?php 
session_start();
$_SESSION['errors']=array();
if($_SERVER["REQUEST_METHOD"]=="POST"){
if(empty($_POST["name"])){
$_SESSION['errors']['name']="the name is requeired";
}
if(($_POST["name"]=="alolaa") ){
$_SESSION['errors']['name']="the name is not valid";
}
if(empty($_POST["email"])){
    $_SESSION['errors']['email']="the emial is requeired";

}

if(str_contains($_POST["email"],"#")){
$_SESSION['errors']['email']="the email is not valid";
}

if(!empty($_SESSION['errors'])){
    // var_dump($_SESSION['errors']);
    header("Location:index.php");
    

}
else{
echo "you are welcomed MR.".$_POST["name"];

}

}
    else{
    header("Location:index.php");
    }





<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email= $_POST['email'];
    $title = $_POST['title'];
    $message= $_POST['message'];


    //file_get_contents
    //file_set_contents

    $file = file_get_contents("output.txt");
    $info = $file. "\n name: " .$name. "\n email: " .$email. "\n title: " .$title. "\n message: " .$message;
    $finalOuptput = file_put_contents("output.txt", $info);

    if($finalOutput) {

        header("Location: index.php"); 
            
    }
    else{
        echo "error";
    }
}







?>
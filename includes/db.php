<?php
include ('connection.php');

if(isset($_POST["submit"])) {
    $user_name = $_POST['name'];
    $user_email = $_POST['email'];


    function emptyInput($user_name, $user_email) {
        $result;
        if(empty($user_name) || empty($user_email)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function invalidEmail($user_email) {
        $result;
        if(filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }

    if(emptyInput($user_name, $user_email) !== false){
        echo "Enter values into fields";
    } 

    if(invalidEmail($user_email) !== true) {
        echo "Enter Correct Values";
    } else {
        $query = "INSERT INTO users (user_name, user_email) VALUES (:name, :email)";
        $query_run = $connection -> prepare($query);
        $data = [':name' => $user_name, ':email' => $user_email];
        $query_execute = $query_run -> execute($data);
    }
   



} //end of isset function








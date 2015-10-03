<?php

ob_start();
session_start();
require_once("Creds.php");

try{
    //create new PDO object connected to mySQL server
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $user = trim($_POST['username']);
    //Add encryption later
    $pass = urldecode($_POST['password']);
    $auth = false;

    $sql = "SELECT * from student WHERE user_name = ?;";
    //prepare query statement
    $pdoStatement = $pdo->prepare($sql);
    //bind parameters to prepared statement variables
    $pdoStatement->bindParam(1, $user, PDO::PARAM_STR);

    if($pdoStatement->execute()){

        $count = $pdoStatement->rowCount();

        if($count==1){
            //get the user id from the table after verifying information
            $user_info_row = $pdoStatement->fetch(PDO::FETCH_ASSOC);
            $_SESSION['student_id'] = $user_info_row['student_id'];
            $_SESSION['first_name'] = $user_info_row['first_name'];
            $_SESSION['last_name'] = $user_info_row['last_name'];
            $_SESSION['user_name'] = $user_info_row['user_name'];
            $_SESSION['promise_cash'] = $user_info_row['promise_cash'];

            //check to see if password matches hash
            //fake hash
            $user_hash = $user_info_row['password_hash'];
            if($user_hash == $pass){
                //error here where you get a 404 if you put invalid id/pass from login.php - Montana
                $backURL = (empty($_SESSION['backURL'])) ? '../Templates/index.php' : $_SESSION['backURL'];
                unset($_SESSION['backURL']);
                header('Location:'.$backURL);
            }
            else{
                header("Location: ../Templates/login.html?action=wp");
            }

        }
        else{
            //die(print_r($_POST) . "MY USER NAME IS " . $_POST['email'] . $count);
            header("Location: ../Templates/login.html?action=wp");
        }

    }


    else{
        header("Location: ../Templates/login.html?action=wp");
    }
}
catch(Exception $e){
    header("Location: ../Templates/login.html?action=se");
}




ob_end_flush();
?>
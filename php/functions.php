<?php
/**
 * Created by PhpStorm.
 * User: montanawong
 * Date: 10/2/15
 * Time: 22:17
 */

require_once('Creds.php');

//testing function
function getStudentInfo($student_id){
    $dsn = 'mysql:host=127.0.0.1:3307;dbname=' . DB_NAME;
    //return $dsn;
    //return DB_NAME . ' ' . DB_USERNAME . ' ' . DB_PASSWORD;
    try {
        $pdo = new PDO($dsn,DB_USERNAME,DB_PASSWORD);
    }
    catch (PDOException $pe){
        return $pe->getTraceAsString();
    }

    //pdo = new PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $query = "SELECT * FROM student WHERE student_id = ?;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(1, $student_id, PDO::PARAM_STR);
    if($stmt->execute()){
        //select success
        return $stmt->fetchAll() ;
    }
    else{
        //temp
        return "";
    }

}

?>
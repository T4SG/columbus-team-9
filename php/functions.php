<?php
/**
 * Created by PhpStorm.
 * User: montanawong
 * Date: 10/2/15
 * Time: 22:17
 */

require_once('Creds.php');

//testing function
public function getStudentInfo($student_id){
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $query = "SELECT * FROM students WHERE student_id = ?;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(1, $student_id, PDO::PARAM_STR);
    if($stmt->execute()){
        //select success
        return $stmt->fetchAll() ;
    }
    else{
        //temp
        return false;
    }

}

?>
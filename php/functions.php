<?php
/**
 * Created by PhpStorm.
 * User: montanawong
 * Date: 10/2/15
 * Time: 22:17
 */

require_once('Creds.php');


function getStudentInfo($student_id){
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
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
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        //return var_dump($row);
        $student_info =  '<div class="image">' .
                                '<img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>'.
                            '</div>'.
                            '<div class="content">'.
                                '<div class="author">'.
                                     '<a href="#">'.
                                    '<img class="avatar border-gray" src="../assets/img/faces/face-3.jpg" alt="..."/>'.
                                      '<h4 class="title">'.$row['first_name'] . ' ' . $row['last_name'] .  '<br />'.
                                         '<small>'. $row['user_name'] .  '</small>'.
                                      '</h4>'.
                                    '</a>'.
                                '</div>'.
                                '<p class="description text-center"> "Lamborghini Mercy <br>'.
                                                    'Your chick she so thirsty" <br>'.
                                                    'I\'m in that two seat Lambo'.
                                '</p>';
        return $student_info;
    }
    else{
        //temp
        return "";
    }

}

?>
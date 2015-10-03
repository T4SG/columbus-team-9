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
        $student_info =
        '<div class="content" style="margin-top: 20px;">'.
            '<div class="author">'.
                '<a href="#"><br/>'.
                    '<img class="avatar border-gray" src="../assets/img/faces/face-3.jpg" alt="..."/>'.
                      '<h4 class="title">'.$row['first_name'] . ' ' . $row['last_name'] . ' '.
        '<br />'.
                         '<small>'. $row['user_name'] .  '</small>'.
                      '</h4>'.
                    '</a>'.
            '</div>'.
            '<h5 class="title" style="text-align:center;">Aspiring: JOB HERE' . '</h5>'.
            '<p class="description text-center">'. $row['quote'] .
            '</p>';
            return $student_info;
    }
    else{
        return "Error";
    }

}

function getRewardInfo($student_id){
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
    $pdo = null;
    try {
        $pdo = new PDO($dsn,DB_USERNAME,DB_PASSWORD);
    }
    catch (PDOException $pe){
        return $pe->getTraceAsString();
    }

    //get student's promise cash
    $promise_cash = 0;
    $query1 = "SELECT promise_cash FROM student WHERE student_id = ?;";
    $stmt = $pdo->prepare($query1);
    $stmt->bindParam(1, $student_id, PDO::PARAM_STR);
    if($stmt->execute()){
        $promise_cash = $stmt->fetch(PDO::FETCH_ASSOC)['promise_cash'];
    }
    else{
        // failure
        return 0;
    }



    //get all rewards with promise cash value of equal or lesser value
    $query = "SELECT * FROM rewards
                WHERE promise_cash_value <= ?
                ORDER BY promise_cash_value ASC;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(1, $promise_cash, PDO::PARAM_STR);
    $reward_info = '';
    if($stmt->execute()){
        //select success
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $reward_info.= '<div class="box">'.
				'<img src="" . $row['image_url'] ."" width="320" alt="" />'.
				'<div class="details">'.
					'<p>' .$row['name'] . '</p>'.
				'</div>'.
				'<a class="button">' . '$' .$row['promise_cash_value'] . '</a>'.
			'</div>';
        }
        return $reward_info;
    }
    else{
        //temp
        return "Error";
    }

}

?>

<?php

require_once('Creds.php');

function getrewardInfo($student_id){
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
    try {
        $pdo = new PDO($dsn,DB_USERNAME,DB_PASSWORD);
    }
    catch (PDOException $pe){
        return $pe->getTraceAsString();
    }

    $promise_cash = "SELECT promise_cash FROM student WHERE student_id = " . $student_id . ";"
    $query = "SELECT * FROM rewards WHERE promise_cash_value >= ?;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(1, $promise_cash, PDO::PARAM_STR);
    if($stmt->execute()){
        //select success
        $reward_info = '';
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $reward_info .= '<h1>' . $row['name'] . " " . $row['description'] . '</h1>';
        }
        return $reward_info;
    }
    else{
        //temp
        return "";
    }

}

?>
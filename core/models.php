<?php
require_once "dbConfig.php";

function insertIntoGameDevRecords($pdo, $firstName, $lastName, $email, $contactNum, $gender ,$gameEngine, $progLang) {
    $sql = "INSERT INTO game_devs (first_name, last_name, email, contact_num, gender, using_game_engine, known_prog_lang, date_added) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute(array($firstName, $lastName, $email, $contactNum, $gender ,$gameEngine, $progLang, $dateAdded));

    if ($executeQuery){
        return true;
    }
}

function seeAllGameDevRecords($pdo){
    $sql = "SELECT * FROM game_devs";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery){
        return $stmt->fetchAll();
    }
}

function getGameDevByID($pdo, $id){
    $sql = "SELECT * FROM game_devs WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$id])){
        return $stmt->fetch();
    }
}

function updateGameDev($pdo, $id, $firstName, $lastName, $email, $contactNum, $gender, $gameEngine, $progLang) {
    $sql = "UPDATE game_devs SET first_name = ?, last_name = ?, email = ?, contact_num = ?, gender = ?, using_game_engine = ?, known_prog_lang = ? WHERE id = ?";

    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$firstName, $lastName, $email, $contactNum, $gender, $gameEngine, $progLang, $id]);

    if ($executeQuery) {
        return true;
    }
    return false; 
}


function deleteGameDev($pdo, $id){
    $sql = "DELETE FROM game_devs WHERE id = ?";
    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$id]);

    if ($executeQuery){
        return true;
    }
}
?>
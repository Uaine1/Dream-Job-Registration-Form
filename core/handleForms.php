<?php
require_once "dbConfig.php";
require_once "models.php";

if (isset($_POST["insertNewStudentBtn"])) {
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $email = $_POST["email"];
    $contactNum = $_POST["contactNum"];
    $gender = $_POST["gender"];
    $gameEngine = $_POST["gameEngine"];
    $progLang = $_POST["progLang"];
    $dateAdded = $_POST["dateadded"];
    
    $query = insertIntoGameDevRecords($pdo, $firstName, $lastName, $email, $contactNum, $gender ,$gameEngine, $progLang);

    if ($query) {
        header("Location: ../index.php");
    }

    else {
        echo"Query Failed";
    }
}

if (isset($_POST["editGameDevBtn"])){
    $id = $_GET["id"];
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $email = $_POST["email"];
    $contactNum = $_POST["contactNum"];
    $gender = $_POST["gender"];
    $gameEngine = $_POST["gameEngine"];
    $progLang = $_POST["progLang"];

    $query = updateGameDev($pdo, $id, $firstName, $lastName, $email, $contactNum, $gender ,$gameEngine, $progLang);

    if ($query){
        header("Location: ../index.php");
    }
    else {
        echo "Update Failed";
    }
}

if (isset($_POST["deleteGameDevBtn"])){
    $query = deleteGameDev($pdo, $_GET["id"]);

    if ($query){
        header("Location: ../index.php");
    }
    else {
        echo "Deletion Failed";
    }
}

if (isset($_POST["insertNewGameDevBtn"])){
    $firstName = trim($_POST["fname"]);
    $lastName = trim($_POST["lname"]);
    $email = trim($_POST["email"]);
    $contactNum = trim($_POST["contactNum"]);
    $gender = trim($_POST["gender"]);
    $gameEngine = trim($_POST["gameEngine"]);
    $progLang = trim($_POST["progLang"]);

    if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($contactNum) && !empty($gender) && !empty($gameEngine) && !empty($progLang)){
        $query = insertIntoGameDevRecords($pdo, $firstName, $lastName, $email, $contactNum, $gender ,$gameEngine, $progLang);

        if ($query){
            header("Location: ../index.php");
        }
        else {
            echo "Insertion Failed";
        }
    }
    else {
        echo "Make sure that you fill all the fields.";
    }
}

if (isset($_POST["editGameDevBtn"])){
    $id = $_GET["id"];
    $firstName = trim($_POST["fname"]);
    $lastName = trim($_POST["lname"]);
    $email = trim($_POST["email"]);
    $contactNum = trim($_POST["contactNum"]);
    $gender = trim($_POST["gender"]);
    $gameEngine = trim($_POST["gameEngine"]);
    $progLang = trim($_POST["progLang"]);

    if (!empty($id) && !empty($firstName) && !empty($lastName) && !empty($email) && !empty($contactNum) && !empty($gender) && !empty($gameEngine) && !empty($progLang)){

        $query = updateGameDev($pdo, $firstName, $lastName, $email, $contactNum, $gender ,$gameEngine, $progLang);

        if ($query){
            header("Location: ../index.php");
        }
        else{
            echo "Update Failed";
        }
    }
    else {
        echo "Make sure that you fill all the fields.";
    }
}
?>
<?php require_once "core/dbConfig.php"; ?>
<?php require_once "core/models.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h3 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            font-size: 1.2em;
            height: 40px;
            margin-bottom: 15px;
            padding: 0 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus {
            border-color: #007BFF;
            outline: none;
        }
        input[type="submit"] {
            padding: 10px;
            background: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.2em;
            transition: background 0.3s;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
        table, th, td {border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Are you sure you want to delete this user?</h1>
    <?php $getGameDevByID = getGameDevByID($pdo, $_GET["id"]); ?>
    <form action="core/handleForms.php?id=<?php echo $_GET["id"]; ?>" method="POST">
        <div class="gameDevContainer" style="border-style: solid; font-family:'Arial';">
            <p>First Name: <?php echo $getGameDevByID["first_name"]; ?></p>
            <p>Last Name: <?php echo $getGameDevByID["last_name"]; ?></p>
            <p>Email: <?php echo $getGameDevByID["email"]; ?></p>
            <p>Contact No: <?php echo $getGameDevByID["contact_num"]; ?></p>
            <p>Gender: <?php echo $getGameDevByID["gender"]; ?></p>
            <p>Using Game Engine: <?php echo $getGameDevByID["using_game_engine"]; ?></p>
            <p>Known Programming Language: <?php echo $getGameDevByID["known_prog_lang"]; ?></p>
            <input type="submit" name="deleteGameDevBtn">
        </div>
    </form>
</body>
</html>
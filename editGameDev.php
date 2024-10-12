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
    <?php $getGameDevByID = getGameDevByID($pdo, $_GET["id"]); ?>
    <form action="core/handleForms.php?id=<?php echo $_GET["id"]; ?>" method="POST">
    <p>
        <label for="id">ID</label>
        <input type="text" name="id" value="<?php echo $getGameDevByID["id"]; ?>">
    </p>
    <p>
        <label for="fname">First Name</label> 
        <input type="text" name="fname" value="<?php echo $getGameDevByID["first_name"]; ?>">
    </p>
    <p>
        <label for="Lname">Last Name</label>
        <input type="text" name="lname" value="<?php echo $getGameDevByID["last_name"]; ?>">
    </p>
    <p>
        <label for="email">Email</label> 
        <input type="text" name="email" value="<?php echo $getGameDevByID["email"]; ?>">
    </p>
    <p>
        <label for="contactNum">Contact No.</label>
        <input type="text" name="contactNum" value="<?php echo $getGameDevByID["contact_num"]; ?>">
    </p>
    <p>
        <label for="gender">Gender</label>
        <input type="text" name="gender" value="<?php echo $getGameDevByID["gender"]; ?>">
    </p>
    <p>
        <label for="gameEngine">Using game engine</label>
        <input type="text" name="gameEngine" value="<?php echo $getGameDevByID["using_game_engine"]; ?>">
    </p>
    <p>
        <label for="progLang">Known programming language</label>
        <input type="text" name="progLang" value="<?php echo $getGameDevByID["known_prog_lang"]; ?>">
    </p>
    
    <input type="submit" name="editGameDevBtn">
    </form>
</body>
</html>
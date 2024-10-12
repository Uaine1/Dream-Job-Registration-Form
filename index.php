<?php require_once "core/dbConfig.php"; ?>
<?php require_once "core/models.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=11, initial-scale=1.0">
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
    <h3>Welcome to the Game Developer Management System. Input your details to register</h3>
    <form action="core/handleForms.php" method="POST">
        <p>
            <label for="fname">First Name</label> 
            <input type="text" name="fname" placeholder="Type Here...">
        </p>
        <p>
            <label for="Lname">Last Name</label>
            <input type="text" name="lname" placeholder="Type Here...">
        </p>
        <p>
            <label for="email">Email</label> 
            <input type="text" name="email" placeholder="Type Here...">
        </p>
        <p>
            <label for="contactNum">Contact No.</label>
            <input type="text" name="contactNum" placeholder="Type Here...">
        </p>
        <p>
            <label for="gender">Gender</label>
            <input type="text" name="gender" placeholder="Type Here...">
        </p>
        <p>
            <label for="gameEngine">Using game engine</label>
            <input type="text" name="gameEngine" placeholder="Type Here...">
        </p>
        <p>
            <label for="progLang">Known programming language</label>
            <input type="text" name="progLang" placeholder="Type Here...">
        </p>
        <input type="submit" name="insertNewGameDevBtn">
    </form>

    <a href="testGetVariable.php?gameDevName=Angelo&usingGameEngine=RPGMaker">Test Get Superglobal</a>
    <table style="width:75%; margin-top: 50px;">
        <tr>
            <th>Game Dev ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Contact No.</th>
            <th>Gender</th>
            <th>Using Game Engine</th>
            <th>Known Programming Language</th>
            <th>Action</th>
        </tr>

        <?php $seeAllGameDevRecords = seeAllGameDevRecords($pdo); ?>
        <?php foreach ($seeAllGameDevRecords as $row) { ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["first_name"]; ?></td>
                <td><?php echo $row["last_name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["contact_num"]; ?></td>
                <td><?php echo $row["gender"]; ?></td>
                <td><?php echo $row["using_game_engine"]; ?></td>
                <td><?php echo $row["known_prog_lang"]; ?></td>
                <td>
                    <a href="editGameDev.php?id=<?php echo $row["id"];?>">Edit</a>
                    <a href="deleteGameDev.php?id=<?php echo $row["id"];?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
<?php
session_start();

$poprawny_login = "admin";
$poprawne_haslo = "admin";

if (isset($_SESSION["zalogowany"])) {
    header("Location: panel.php");
    exit;
}

$blad = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $login = $_POST["login"];
    $haslo = $_POST["haslo"];

    if ($login == $poprawny_login && $haslo == $poprawne_haslo) {

        $_SESSION["zalogowany"] = true;
        $_SESSION["login"] = $login;

        header("Location: panel.php");
        exit;

    } else {
        $blad = "Nieprawidłowy login lub hasło!";
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            margin: 0;
            padding: 30px 15px;
        }

        .karta {
            max-width: 400px;
            margin: 60px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 6px;
            font-weight: bold;
            color: #444;
        }

        input {
            width: 100%;
            padding: 11px;
            border: 1px solid #ccc;
            border-radius: 7px;
            font-size: 14px;
        }

        input:focus {
            outline: none;
            border-color: #667eea;
        }

        button {
            width: 100%;
            margin-top: 25px;
            padding: 13px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 7px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #5266d5;
        }

        .blad {
            margin-top: 15px;
            padding: 10px;
            background: #fff0f0;
            border: 1px solid red;
            border-radius: 7px;
            color: red;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>

<body>

<div class="karta">

    <h1>Logowanie</h1>

    <form method="post" action="">

        <label for="login">Login:</label>
        <input type="text" id="login" name="login">

        <label for="haslo">Hasło:</label>
        <input type="password" id="haslo" name="haslo">

        <button type="submit">Zaloguj się</button>

    </form>

    <?php if ($blad != "") { ?>
        <div class="blad"><?php echo $blad; ?></div>
    <?php } ?>

</div>

</body>
</html>

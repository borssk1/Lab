<?php
session_start();

if (!isset($_SESSION["zalogowany"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel użytkownika</title>

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
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 15px;
        }

        p {
            color: #555;
        }

        .wyloguj {
            display: block;
            margin-top: 25px;
            padding: 13px;
            background: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 7px;
            font-size: 16px;
            transition: 0.3s;
        }

        .wyloguj:hover {
            background: #c0392b;
        }
    </style>
</head>

<body>

<div class="karta">

    <h1>Panel użytkownika</h1>

    <p>Witaj, <b><?php echo htmlspecialchars($_SESSION["login"]); ?></b>!</p>
    <p>Ta strona jest widoczna tylko dla zalogowanych użytkowników.</p>

    <a class="wyloguj" href="logout.php">Wyloguj się</a>

</div>

</body>
</html>

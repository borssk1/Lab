<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz osobowy</title>

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

        .formularz {
            max-width: 550px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }

        h1, h2 {
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

        input, select, textarea {
            width: 100%;
            padding: 11px;
            border: 1px solid #ccc;
            border-radius: 7px;
            font-size: 14px;
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #667eea;
        }

        .prawo-jazdy {
            display: flex;
            gap: 20px;
            margin-top: 8px;
        }

        .prawo-jazdy label {
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: normal;
            margin: 0;
        }

        .prawo-jazdy input {
            width: auto;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
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

        .dane {
            margin-top: 30px;
            padding: 20px;
            background: #f4f6ff;
            border-radius: 10px;
            color: #333;
        }

        .dane h2 {
            margin-top: 0;
            margin-bottom: 15px;
        }

        .dane p {
            margin: 8px 0;
        }

    </style>
</head>

<body>

<div class="formularz">

    <h1>Formularz osobowy</h1>

    <form method="post" action="">

        <label for="imie">Imię:</label>
        <input type="text" id="imie" name="imie">

        <label for="nazwisko">Nazwisko:</label>
        <input type="text" id="nazwisko" name="nazwisko">

        <label for="email">Adres e-mail:</label>
        <input type="text" id="email" name="email">

        <label for="telefon">Numer telefonu:</label>
        <input type="tel" id="telefon" name="telefon"
               placeholder="Np. 123456789">

        <label>Czy posiadasz prawo jazdy?</label>

        <div class="prawo-jazdy">

            <label>
                <input type="radio" name="prawo_jazdy" value="tak">
                Tak
            </label>

            <label>
                <input type="radio" name="prawo_jazdy" value="nie">
                Nie
            </label>

        </div>

        <label for="wojewodztwo">Województwo:</label>

        <select id="wojewodztwo" name="wojewodztwo">
            <option value="">Wybierz województwo</option>
            <option value="Dolnośląskie">Dolnośląskie</option>
            <option value="Kujawsko-pomorskie">Kujawsko-pomorskie</option>
            <option value="Lubelskie">Lubelskie</option>
            <option value="Lubuskie">Lubuskie</option>
            <option value="Łódzkie">Łódzkie</option>
            <option value="Małopolskie">Małopolskie</option>
            <option value="Mazowieckie">Mazowieckie</option>
            <option value="Opolskie">Opolskie</option>
            <option value="Podkarpackie">Podkarpackie</option>
            <option value="Podlaskie">Podlaskie</option>
            <option value="Pomorskie">Pomorskie</option>
            <option value="Śląskie">Śląskie</option>
            <option value="Świętokrzyskie">Świętokrzyskie</option>
            <option value="Warmińsko-mazurskie">Warmińsko-mazurskie</option>
            <option value="Wielkopolskie">Wielkopolskie</option>
            <option value="Zachodniopomorskie">Zachodniopomorskie</option>
        </select>

        <label for="adres">Adres zamieszkania:</label>
        <input type="text" id="adres" name="adres"
               placeholder="Np. Warszawa">

        <label for="ulica">Ulica:</label>
        <input type="text" id="ulica" name="ulica"
               placeholder="Np. Kwiatowa 12/5">

        <label for="kod_pocztowy">Kod pocztowy:</label>
        <input type="text" id="kod_pocztowy" name="kod_pocztowy"
               placeholder="Np. 00-001" maxlength="6">

        <label for="uwagi">Uwagi:</label>
        <textarea id="uwagi" name="uwagi"
                  placeholder="Wpisz dodatkowe informacje..."></textarea>

        <button type="submit">Wyślij formularz</button>

    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>

        <div class="dane">
            <h2>Przesłane dane</h2>

            <p><b>Imię:</b> <?php echo htmlspecialchars($_POST["imie"]); ?></p>
            <p><b>Nazwisko:</b> <?php echo htmlspecialchars($_POST["nazwisko"]); ?></p>
            <p><b>E-mail:</b> <?php echo htmlspecialchars($_POST["email"]); ?></p>
            <p><b>Telefon:</b> <?php echo htmlspecialchars($_POST["telefon"]); ?></p>
            <p><b>Prawo jazdy:</b> <?php echo htmlspecialchars($_POST["prawo_jazdy"] ?? ""); ?></p>
            <p><b>Województwo:</b> <?php echo htmlspecialchars($_POST["wojewodztwo"]); ?></p>
            <p><b>Adres zamieszkania:</b> <?php echo htmlspecialchars($_POST["adres"]); ?></p>
            <p><b>Ulica:</b> <?php echo htmlspecialchars($_POST["ulica"]); ?></p>
            <p><b>Kod pocztowy:</b> <?php echo htmlspecialchars($_POST["kod_pocztowy"]); ?></p>
            <p><b>Uwagi:</b> <?php echo htmlspecialchars($_POST["uwagi"]); ?></p>
        </div>

    <?php } ?>

</div>

</body>
</html>

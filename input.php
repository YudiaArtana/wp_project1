<!-- Nama    : I Putu Yudia Artana -->
<!-- NIM     : 21101095 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My CSS -->
    <style type="text/css">
        .cursor {
            cursor: pointer;
        }

        .textbox {
            overflow: hidden;
            margin: 8px 0;
            padding: 8px 0;
            border-bottom: 1px solid #AAB7B8;
        }

        .textbox input{
            border: none;
            outline: none;
            background: none;
            color: #AAB7B8;
            width: 100%;
        }
    </style>
    <title>Konversi Suhu</title>
</head>
<body>
    <form action="" method="POST" class="container">
        <h1 class="my-4">Konversi Suhu</h1>
        Konversi:
        <br>
        <div class="form-check form-check-inline cursor">
            <input class="form-check-input" type="radio" name="konversi" value="CkeF" id="inlineRadio1">
            <label class="form-check-label" for="inlineRadio1">Celcius ke Fahrenheit</label>
        </div>
        <div class="form-check form-check-inline cursor">
            <input class="form-check-input" type="radio" name="konversi" value="FkeC" id="inlineRadio2">
            <label class="form-check-label" for="inlineRadio2">Fahrenheit ke Celcius</label>
        </div>
        <br><br>
        <div class="textbox">
            <input type="text" name="suhu" placeholder="Nilai Suhu">
        </div>
        <?php
        include_once("prosedur.php");
        ?>
        <br>
        <input class="btn btn-success cursor" type="submit" name="submit" value="CONVERSI">
    </form>
</body>
</html>
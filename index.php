<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Pan Tadeusz</title>
</head>
<body>
    <header class="container text-center">
        <h1>Pan Tadeusz, czyli ostatni zajazd na Litwie: historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem
        </h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h2>Spis treści</h2>
                <ul>
                    <li><a href="./">Strona główna</li>
                    <?php
                        for ($k=1; $k<=12; $k++) { 
                            print("<li><a href='./index.php?k=$k'>Księga $k</a></li>");
                        }
                    ?>
                </ul>
            </div>
            <div class="col-8">
                <?php
                    if (isset($_GET['k'])) {
                        $k = $_GET['k'];
                        include_once("k$k.html");
                    } else {
                        print('<img src="./pan_tadeusz.jpg" alt="Pan Tadeusz" class="img-fluid">');
                    }
                ?>
                
            </div>
        </div>
    </div>
    <footer class="container">
        <p>&copy; Katarzyna Wójcik</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>

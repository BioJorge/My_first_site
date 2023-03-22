<?php
    require_once("php/Card.php");
    require_once("php/Carousel.php");
    require_once("php/global.php");
?>

<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        <!--Boxicons-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- CSS do Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!--CSS proprio-->
        <link rel="stylesheet" href="style/style_header_footer.css">
        <link rel="stylesheet" href="style/style_main.css">

    </head>

    <body>

        <?php require_once("templates/header.php")?>
        
        <main>
           
            <div class="container-fluid">
                <div class="row text-light text-center pt-lg-3 p-1">
                    <h1 class="text-light">Most anticipated games</h1>
                </div>

                 <!--Cards-->
                <?php require_once("templates/card_template.php")?>
                
            </div>
        </main>

        <?php require_once("templates/footer.php")?>

        <!-- JS do Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>

</html>
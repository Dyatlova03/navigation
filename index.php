<!DOCTYPE html>
<html>
<head>
    <?php 
        $title = "Навигация по РНПЦ OMP им. Н.Н.Александрова";
        require_once "blocks/head.php";
        require_once "functions/functions.php";
        $blocks = getBlocks(20);
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready (function () {
            $('#search_button').click (function () {
                $("#messageShow").hide();
                var search = $("#search_label").val ();
                var fail = "";
                if (search.length < 3) fail = "Введите корректную информацию";
                if (fail != ""){
                    $('#messageShow').html (fail + "<div class='clear'><br></div>");
                    $('#messageShow').show ();
                    return false;
                }
            });
        });
    </script>
</head>
<body>
    <?php require_once "blocks/header.php"?>

    <div id="wrapper">
        <div id="map"> 
            <svg viewBox="0 0 640 480">
                <?php
                    for($i = 0; $i<count($blocks); $i++){
                        echo "<a href='build/".$blocks[$i]["id"].".php' title='".$blocks[$i]["block"]."'>"
                            .$blocks[$i]["coordinates"].
                            "</a>";
                    }
                ?>
            </svg>


            </div>
                <!--                
                    <a href="Pension.html">
                        <polygon class="st0" points="432.8,66.4 406,66.6 404.1,63.6 383.5,64.6 383.5,53.6 404.1,52.8 404.1,56 431.8,54.7 "/>
                    </a>
                -->

            <div id="search">
         
            <input type="text" placeholder="Поиск..." id="search_label" name="search"><br />
            <div id="messageShow"></div><br />
            <input type="submit" action="" name="search_button" id="search_button" value="Искать">

            <?php
                for($i = 0; $i<count($blocks); $i++){
                    echo "<div id=\"result\">";
                    echo "<a href='/build/".$blocks[$i]["id"].".php' title='".$blocks[$i]["block"]."'>".$blocks[$i]["id"].'. '.$blocks[$i]["block"].' </a></div>';
                }
            ?>

        </div>
    </div>

    <?php require_once "blocks/footer.php" ?>
</body>
</html>
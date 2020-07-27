<!DOCTYPE html>
<html>
<head>
    <?php 
        $title = "Навигация по РНПЦ OMP им. Н.Н.Александрова";
        require_once "blocks/head.php";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready (function () {
            $('#search_button').click (function () {
                $('messageShow').hide();
                var search = $("#search").val ();
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
    <?php require_once"blocks/header.php"?>

    <div id="wrapper">
        <div id="map"> 
            <svg viewBox="0 0 640 480">
                
                <a href="Clinic.html">
                    <polygon class="st0" points="110.6,388.3 97,386.7 113.4,317.8 126.1,317.8 "/>
                    </a>
                <a href="Morgue.html" title="МОРГ">
                    <polygon class="st0" points="81.7,442.9 62.6,444.1 70,414.3 87.3,414.3 "/>
                </a>
                <a href="Church.html">
                    <rect x="134.3" y="192.2" class="st0" width="15.3" height="18.9"/>
                </a>
                <a href="Mammalogy.html">
                        <polygon class="st0" points="173.6,120.7 156.3,120.7 155.2,126.2 160.9,126.2 158.3,136.5 114.4,136.5 111.6,143.7 106.2,144.1 
                            105.7,147.7 113.1,148.2 112.6,150.8 118.8,150.4 119,153.9 137.4,153.4 138.9,150.3 150.1,150.3 151.6,152.9 162.2,152.6 
                            161.5,157.2 174.6,157.4 177.7,146.2 173.6,145.2 177.2,127.3 173.6,127 "/>
                    </a>
                    <a href="Positron-emission-tomography.html">
                        <path class="st0" d="M188.6,211.6l-15.2-2.7l-2.5,11.6l-2.8-0.1c-0.7,0.1-1,3.9-0.6,4.5l2.5,1.2l-8.3,40.6l-4.3,0.3l-0.8,5.4
                            l4.3,0.9l-0.5,3.5l17.4-0.3l3-0.3l9.8,0l-1.9,15.1l-24.6,0.7l0.6,2.9h-4l-7,37.3h40.9l6.8-39.7l-8.6-0.9l3.6-15.1l35.2-0.5l18.6,0.5
                            l5.1-54.4h-17.6l-1.6,17l-52,1L188.6,211.6z"/>
                    </a>
                    <a title="Поликлиника" href="Clinic.html">
                    
                        <polygon class="st0" points="349.2,115.3 295,116 293.6,130.5 313.3,130.5 311.9,164.9 330.5,164.4 330.5,129.7 348.2,129.7"/>
                        <polygon class="st0" points="270.8,134.3 257.7,134.3 254.2,165.1 240,162.3 238,180.5 250,180.5 251,175.1 307.5,174.6 
                            307.5,164.9 270.1,164.9 "/>
                        <polygon class="st0" points="403.7,155.3 405.1,177.8 393.8,178.4 393.8,173 333.9,174.6 332.9,164.3 370.2,162.8 369.3,133.5 
                            382.3,132.7 385.6,164.4 392.3,164.9 391.8,154.2 "/>
                    </a>
                    <a href="Linear-accelerator.html">
                        <polygon class="st0" points="372,316.6 274,316.6 272.7,345.1 293.3,344.7 293.3,339.5 323.8,339.4 323.8,344 373.1,344.3 "/>
                    </a>
                    <a href="Histology.html">
                        <polygon class="st0" points="454.1,352.5 422.5,353.4 423,361.3 415.3,361.3 417.2,377 456.3,378 460.1,414.6 477.5,414.6 
                        476.8,406 485,406 477.9,361.9 471.7,361.4 470.2,349 460.7,349.5 461,355.8 454.4,356.4 "/>
                    </a>
                    <a href="Carcinogenesis-laboratory.html">
                        <polygon class="st0" points="539.2,335.2 525.4,334.6 511.3,354.3 517.1,360.3 528.8,416.6 550.6,415.5 550.6,410.6 560.2,410 
                        560.3,402.4 555.5,402.4 "/>
                    </a>
                    <a href="Clinic.html">
                        <polygon class="st0" points="418.2,131.4 393.1,131.7 395.9,142.1 408.1,142.1 410.1,158.2 404.2,158.4 404.6,162.3 424.4,161.7 
                        422.5,144.8 419.3,144.9 "/>
                    </a>
                    <a href="ENT-corps.html">
                        <polygon class="st0" points="377.5,55.8 364.3,56.6 367.5,99.5 381.1,98.5 381.1,93.9 388.8,93.9 388.8,89.8 380.6,89.4 "/>
                    </a>
                    <a href="Main.html">
            
                        <path class="st0" d="M471.8,119.3l-1.4-8.7l-3.8,0.5l0.4,5.7l-8.3-1.5l22.9,111l-6.6,21.9l-25,0.1l-12.8-78.3l-15.3-0.1l3,27.3
                            l3.3,2.3l6.4,44.3l6.4-1l4.4,31.2l-9.3,0.5l2,19.5h7.8l0.5-5h40.2l3.9,2.2l13.2-0.5l-2.4-15.7l-10.3-0.9l3.2-9.9L490,247l10.3-20.6
                            l-8.8-30.9l9.8,0.5l12.2,39.7l-3.5,7.1c-2.1,4.3,0.7,10,4.7,12.2l10.2,2.8l4.9,18.2l15.1-2.7l-0.9-5.1l9.1,0.1l-3.2-15.3l2.5-4.2
                            l-20.7-77.2l13.2-0.5l-1-4.3l-20.5,0.4l-8.3-27.1l-0.5-6.2c-1.5-4.9-9-5.9-13.6-7.1l-1.2-3l-12,3.5l10.4,53.6l-9.6,0.4l-14.2-61.9
                            H471.8z"/>
                        <polygon class="st0" points="461,178.1 438.8,178.1 441.1,191.7 451.6,191.7 451.1,187.9 463.5,188.4 	"/>
                
                    </a>
                    <a href="Pension.html">
                        <polygon class="st0" points="432.8,66.4 406,66.6 404.1,63.6 383.5,64.6 383.5,53.6 404.1,52.8 404.1,56 431.8,54.7 "/>
                    </a>
                    <a href="Radiology.html">
                        <polygon class="st0" points="297.3,250.3 297.8,230.8 281.7,231 277.8,295.1 295.5,294.6 296.8,260.4 313.9,260.9 312.5,297.1 
                        332.8,297.8 332.8,259.8 349.4,260.4 349.4,294.6 369.6,295.1 365.5,230.3 348.8,232 347.6,249.3 "/>
                    </a>
                    <a href="Canteen.html">
                        <polygon class="st0" points="448.3,80.6 410.6,80.3 410.8,89.8 408,90.6 407.8,93.9 405.1,94.1 407.5,106.9 452.9,107.1 "/>
                    </a>
                    </svg>
        </div>
        <div id="search">
         
            <input type="text" placeholder="Поиск..." id="search" name="search"><br />
            <div id="messageShow"></div>
            <input type="button" name="search_button" id="search_button" value="Искать">
        </div>
    </div>

    <?php require_once "blocks/footer.php" ?>
</body>
</html>
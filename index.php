<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        require_once "widget/links.php";
    ?>
    <title>Photographer</title>
</head>
<body>
    <header>
        <?php
            require_once "widget/header.php";
        ?>
    </header>

    <main>
        <div class='Photos' id='Photos'>
            <?php
                for ($j = 0; $j < 47; $j++)
                {
                    echo '<div class="Scale">';
                        echo "<img src='IMG/Photos/" . $j . ".jpg' alt='" . $j . "' id='$j' onclick='ModalIMG(event)'>";
                    echo '</div>';
                }
            ?>
        </div>
        

        <div id="ModalBlock" class="ModalBlock">
            <span id="close"><img src="IMG/icons/interface/close.png" alt="close"></span>
            <img class="ModalIMG animate" id="ModalIMG">
        </div>
    </main>

    <footer>
        <?php
            require_once "widget/footer.php";
        ?>    
    </footer>


    <script src="JS/script.js"></script>
</body>
</html>
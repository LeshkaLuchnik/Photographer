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

    <main class="Center"> <!-- TO DO подключи БД -->
        <div class="About">
            <img src="IMG/About/Me.jpg" alt="Me">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Eaque quisquam repellat, reiciendis autem sit placeat laborum quas dicta harum libero debitis, 
                dolore et perspiciatis odio. Corrupti esse quod laudantium pariatur.
            </p>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Viewport" content="width=device-width, intrial-scale=1.0">
    <title>Practice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="flex-container">
        <div class="header">
            <?php include 'logo.php' ?>
            <?php include 'main.inc.php' ?>
        </div>
        <div class="about_me">
            <h1><?php echo $about ?></h1>
                <div class="data">
                    <div class="MyImage">
                        <?php 
                        echo '<img src="images/1.jpg">';
                        ?>
                    </div>
                    <div class="fullname">
                        <p> Меня зовут
                            <?php echo $name, ' ', $surname . '<br>';
                                echo 'Я из города', ' ', $city; ?>
                            </p>
                            <p> Мне
                                <?php echo $age, ' '; ?>лет </p>
                                <p> Я научился создавать переменные </p>
                                <p> Изучил простые операции с ними </p>
                    </div>
                </div>
                <div class="knowledge">
                    <?php include 'knowledge.php'; ?>
                    <?php echo $a, ' ', $b, ' ', $c; ?> <br>
                    <?php 
                    $a = 18;
                    $b = 23;
                    $c = $a + $b;
                    echo $c; ?> <br>
                    <?php echo $d; ?>
                </div>

                <div class="article">
                    <p class="text">
                        Это мой первый пробный сайт. Пришлось немного попыхтеть, но у меня, кажется, получилось.
                    </p>
                </div>
        </div>
            
<?php include 'footer.php' ?>
    </div>
    
</body>
</html>
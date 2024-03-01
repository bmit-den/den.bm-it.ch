<!DOCTYPE html>
<html lang="en" class="all">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stylesheet.css" type="text/css" media="screen" rel="stylesheet">
    <title>Nevio De Maria</title>
</head>

<body>
    <header>
        <div class="title">
            My certificates ...
        </div>
        <!-- Titel Homepage-->
    </header>
        <!-- Homebutton der zurück zur Startseite meiner Website führt
             die Location kann jederzeit geändert werden-->
        <form method="post" >
            <button class="homebutton" type="submit" name="home">Home</button>
        </form>
            
        <?php
            if (isset($_POST['home'])) {
                header('Location: index.php');
                exit;
            }
        ?>

    <main>
       
        
    </main>


    <footer class="footer">
        <?php
            $currentYear = date("Y");
            $footerText = "© Nevio De Maria 2022 - $currentYear";
            echo $footerText;
        ?>
    </footer>

</body>

</html>
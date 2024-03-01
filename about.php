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
               
        <!-- Titel Homepage-->
        <div class="title">
            <h1>Zu meiner Person</h1>
        </div>
        
    </header>

    <main>
        <div class="smalltitle">
            <p>Unsere größte Schwäche liegt im Aufgeben. Der sichere Weg zum Erfolg ist immer, es doch noch einmal zu versuchen. </p>
            <p>-Thomas Alva Edison</p>
        </div>
        
        </div>
        <!-- Homebutton der zurück zur Startseite meiner Website führt
             die Location kann jederzeit geändert werden-->
        <form method="post" >
            <button class="homebutton" type="submit" name="home">Home</button>
        </form>
        
        <div class="aboutimg">
                <img src="img/me.jpg" alt="me" class="aboutimg_me">
        </div>
        
    </main>

    <!-- Footer soll auf jeder Seite ersichtlich sein -->
    <footer class="footer">
        <?php
            $currentYear = date("Y");
            $footerText = "© Nevio De Maria 2022 - $currentYear";
            echo $footerText;
        ?>
    </footer>

</body>

</html>
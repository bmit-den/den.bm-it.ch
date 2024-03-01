<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="certificates" href="certificates.php">
    <link rel="aboutme" href="about.php">
    <link rel="cv" href="cv.php">
    <title>My Portfolio</title>

</head>

<body>
    <header>
        <div class="title">
            Willkommen auf meiner Bewerbungswebsite!
        </div>
        
        <!-- Navigationsleiste -->
        <div class="smalltitle">
            <ul class="nav-bar">
                <li class="nav-item"><a href="javascript:void(0);" onclick="promptPassword('about.php')">Über mich</a>
                </li>
                <li class="nav-item"><a href="javascript:void(0);" onclick="promptPassword('cv.php')">Lebenslauf</a>
                </li>
                <li class="nav-item"><a href="javascript:void(0);"
                        onclick="promptPassword('certificates.php')">Zertifikate</a></li>
            </ul>

        </div>
    </header>

    <main>


        <div class="main-content">

            <h1 class="welcome">Hier ...</h1>


            <div class="imgcontainer">
                <img src="img/network.jpg" alt="Network" class="homeimg_left">
            </div>


            <div class="welcometext">
                <p> ... präsentiere ich meine Fähigkeiten und Erfahrungen als angehender
                    Plattformentwickler und zeige Ihnen,
                    warum ich eine wertvolle Ergänzung für Ihr Unternehmen bin.</p>

                <p> Durch meine Ausbildung und praktischen Projekte habe ich fundierte Kenntnisse in
                    der
                    Entwicklung moderner Plattformen erworben.
                    Von der Gestaltung intuitiver Benutzeroberflächen bis hin zur Implementierung zuverlässiger
                    Backend-Lösungen
                    beherrsche ich verschiedene Aspekte dieses Fachbereichs.</p>

                <p> Ich stehe Ihnen gerne zur Verfügung, um weitere Fragen zu beantworten oder einen
                    persönlichen Termin zu vereinbaren.
                    Ich freue mich darauf, meine Fähigkeiten und Begeisterung für die Plattformentwicklung mit Ihnen
                    zu
                    teilen.</p>

                <p>Vielen Dank für Ihren Besuch auf meiner Website und Ihr Interesse!</p>
            </div>

            <div class="imgcontainer">
                <img src="img/network.jpg" alt="Server" class="homeimg_right">
            </div>



        </div>

    </main>

            <!--- Mit PHP den Footer mit dem Copyright und dem erstellungsjahr und dem aktuellen Jahr --->
            <footer >
                <?php
                $currentYear = date("Y");
                $footerText = "<p> © Nevio De Maria 2022 - $currentYear <p>";
                echo $footerText;
                ?>
            </footer>
</body>

</html>
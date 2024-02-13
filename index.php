<!DOCTYPE html>
<html lang="nl">

<head>

    <title>Website Ervaring Enquête</title>

    <!-- Links for Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_io/favicon-16x16.png">

    <!--meta tags for responsiveness-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta charset="utf-8">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="style.css">

    <!-- Scriptfiles -->
    <script src="script.js"></script>

</head>

<body>
    <main>

        <h1>Website Ervaring Enquête</h1>
        <h4>Hoi, het doel van deze enquête is achter halen wat jij wel of niet fijn vindt aan websites.</h4>
        <br>
        <h4>Hieronder staan 8 websites met een verschillende stijl in de gebruikersomgeving. Scrol door elke website
            heen en probeer minimaal 2 positieve en 2 negatieve punten te noteren die je hebt opgemerkt. Je hoeft ze
            niet intensief te analyseren, maar probeer gewoon door de websites heen te gaan en noteer wat je opvalt. Het
            zou niet langer dan 10 minuten van je tijd moeten nemen.
        </h4>
        <br>
        <h4>Alvast bedankt voor het invullen van de enquête! Ik waardeer het heel erg. 😁
            <br><br>
            -Bavli
        </h4>



        <form action="contactform.php" method="POST">

            <section id="generalSection">
                <h2>Algemeen</h2>

                <div class="row">
                    <label for="yourName">Naam:</label>
                    <input class="inputWidth" id="yourName" name="yourName" placeholder="Vul hier je naam in" required>
                </div>

                <div class="row">
                    <label for="yourAge">Leeftijd:</label>
                    <input class="inputWidth" id="yourAge" name="yourAge" placeholder="Vul hier je leeftijd in"
                        required>
                </div>
            </section>

            <section id="f1Website">
                <h2>hellomonday.com</h2>

                <img src="img/hellomonday.com.png" alt="hellomonday.com.png">

                <h3>Klik op <a href="https://www.hellomonday.com/" target="_blank">deze link</a> en open de website.</h3>
                <h3>Scrol rustig door de website heen en noteer hieronder minimaal 2 positieve en 2 negatieve punten die
                    je opvielen aan de site.</h3>

                    <div class="row">
                        <label for="positive1">Positief punt:</label>
                        <textarea class="inputWidth" id="positive1" name="postive1" placeholder="Positief punt"
                            rows="4" cols="50" title="Noteer een positief punt" required></textarea>
                    </div>

                    <div class="row">
                        <label for="positive2">Positief punt:</label>
                        <textarea class="inputWidth" id="positive2" name="postive2" placeholder="Positief punt"
                            rows="4" cols="50" title="Noteer een positief punt" required></textarea>
                    </div>

                    <div class="row">
                        <label for="negative1">Negatief punt:</label>
                        <textarea class="inputWidth" id="negative1" name="negative1" placeholder="Negatief punt"
                            rows="4" cols="50" title="Noteer een negatief punt" required></textarea>
                    </div>

                    <div class="row">
                        <label for="negative2">Negatief punt:</label>
                        <textarea class="inputWidth" id="negative2" name="negative2" placeholder="Negatief punt"
                            rows="4" cols="50" title="Noteer een negatief punt" required></textarea>
                    </div>

                    <div id="additionalPoints">
                        <!-- Additional points will be added here -->
                    </div>

                    <button type="button" onclick="addRow('positive')">Voeg positief punt toe</button>
                    <button type="button" onclick="addRow('negative')">Voeg negatief punt toe</button>

            </section>

            <button id="submitButton" type="submit" title="Verstuur enquête">Verstuur enquête</button>

        </form>

    </main>

</body>

</html>
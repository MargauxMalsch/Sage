<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="firstSection">
        <h1>Créez de délicieuses <br> boissons fonctionnelles en <br> 2 minutes</h1>
        <form>
            <label for="mail">Inscrivez-vous sur liste d’attente</label>
            <input type="email" id="email" name="email" placeholder="mail@gmail.com">
        </form>
    </section>

    <section id="secondSection">
        <h2>Sage c'est quoi ?</h2>
        <div>
            <p><span>✨</span><br> Des boissons 100% naturelles</p>
            <p><span>🌱</span><br> À base de plantes, de vitamines & minéraux</p>
            <p><span>⛔</span><br> Avec 0 sucre, 0 édulcorant</p>
            <p><span>♻</span><br> Au packaging réduit au maximum</p>
        </div>
    </section>
    
    <section id="ThirdSection">
        <h3>Comment ça marche ?</h3>
        <div class="container_steps">
            <div class="steps">
                <img  class="" src="../Sage/img/step_1.png" alt=""></img>
                <div>
                    <p> Prenez-un stick individuel sage : il contient pile la bonne dose pour le goût et les bénéfices recherchés !</p>
                </div>
            </div>

            <div class="steps">
                <img  class="" src="../Sage/img/step_2.png" alt=""></img>
                <div>
                    <p> Prenez-un stick individuel sage : il contient pile la bonne dose pour le goût et les bénéfices recherchés !</p>
                </div>
            </div>

            <div class="steps">
                <img  class="" src="../Sage/img/step_3.png" alt=""></img>
                <div>
                    <p> Prenez-un stick individuel sage : il contient pile la bonne dose pour le goût et les bénéfices recherchés !</p>
                </div>
            </div>
        </div>

    </section>

    <section class="sections_container" id="ContentLastSection">
        <h3> Notre mission</h3>

        <div class="content_our_mission"> 

        <p>Chez sage, on fait de notre mieux pour vous aider à reprendre le contrôle sur votre santé physique et mentale de long-terme, grâce à des boissons saines aux compositions optimisées. L’eau est la meilleure source d’hydratation.</p>
        <br>
        
        <p>Sinon, il y a sage : 
            <ul> <li>✓ un bon goût </li>
                <li>✓ pas de sucre, pas d’édulcorant </li>
                <li>✓ des vitamines, minéraux et extraits de plantes </li>
                <li>✓ pas de contenant plastique à usage unique, vous utilisez votre gourde ou un autre récipient</li> 
            </ul>
        </p>
        </div>
        
    </section>

    <footer id="LastSection">
        <h3>Si la mission vous parle, inscrivez-vous pour devenir bêta-testeur !</h3>
        <form method="POST" action="index.php">
            <div class="container_form_first_section">
                <div class="form_content">
                    <label for="name">Prénom :</label>
                    <input type="text" id="name" name="name">
                </div> 

                <div class="form_content">
                    <label for="email">Adresse mail :</label>
                    <input type="email" id="email" name="email">
                </div>
            </div>

            <div class="form_content">
                <label for="how">Comment je suis arrivé sur cette page ?</label>
                <input type="text" id="how" name="how">
            </div>
            
            <input type="submit" name="mailform" value="Envoyer la demande d'inscription">
        </form>

        <?php 

            if(isset($_POST['mailform'])) {

                $header="MIME-Version: 1.0\r\n";
                $header.='From:"sage"<sage@sage.com>'."\n";
                $header.='Content-Type:text/html; charset="uft-8"'."\n";
                $header.='Content-Transfer-Encoding: 8bit';
                $name = $_POST['name'];
                $email = $_POST['email'];
                $how = $_POST['how'];

                $message='
                <html>
                    <body>
                        <div>
                            <B>Prénom :</B>  ' . $name .'
                            <br>
                            <B>Email :</B> ' . $email . '
                            <br>
                            <B>Comment je suis arrivéé sur cette page :</B> ' . $how . '
                        </div>
                    </body>
                </html>
                ';

                mail("nicolas.mopin@gmail.com", "Inscription Waiting list", $message, $header);
            }

        ?>
        
    </footer>
</body>
</html>
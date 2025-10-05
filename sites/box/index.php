<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Box Studio</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;500&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
    <!--[if IE 7]>
        <link href="css/stylesie7.css" rel="stylesheet" type="text/css" media="screen">
    <![endif]-->
    <meta content="IE=edge" http-equiv=X-UA-Compatible>
    <meta content="width=device-width, initial-scale=1" name="viewport">
</head>

<body>

<main>
    
    <?php require 'header.php'; ?>
    
    <section class="propos">
        <div class="center1 flex">
            <figure class="apropos"></figure>
            
            <div class="wrap">
                <h2>A propos de nous</h2>
                
                <p><span>Box Studio</span> et ses ingénieurs du son vous accompagnent dans toutes les étapes de votre création sonore : <span>enregistrement</span>, <span>montage</span>, <span>mixage analogique</span>/<span>numérique</span> et <span>mastering</span>.</p>
                
                <p>Au sein même de notre studio d’enregistrement, nous pouvons créer des <span>instrumentales</span>/<span>beats</span> sur mesure dans tous les styles.
                Notre équipe de talentueux producteurs est à votre disposition pour vous accompagner dans votre processus créatif, autant en matière de <span>composition</span> que de <span>production</span>.</p>
                
                <p>Notre Studio d’enregistrement et de réalisation sonore professionnel est situé dans le centre de Bordeaux.</p>
                
                <p>Accès : 2 heures de Paris via TGV, et a 30 minutes de l’aéroport de Bordeaux.</p>
            </div>
        </div>
    </section>
    
    <section class="contact">
        <div class="center2 flex">
            <div class="wrap">
                <p>Besoin d'un <span>renseignement</span> ?</p>
                <p>Envie de <span>reserver</span> le studio ?</p>
                <p>Ou une autre <span>demande</span> ?</p>

                <p>N'hesitez pas à nous contacter</p>

                <div class="btncontact">
                    <span></span>
                    <a href="contact.php">Nous contacter</a>
                </div>
            </div>
            
            <div class="micwrap">
                <figure class="mic"></figure>
            </div>
        </div>
    </section>
    
    <section class="presta">
        <div class="center1 flex">
            <article>
                <div class="bgorange">
                    <span></span>
                    <figure class="pictoenr"></figure>
                </div>
                
                <h2>Enregistrement</h2>
                
                <p>La qualité de la prise de son est la base d'une <span>production réussie</span>. De l’enregistrement d’une <span>voix</span> à tout un <span>groupe live</span>, tous les paramètres nécessaires à la réalisation de bons enregistrement ont été scrupuleusement <span>étudiés</span>.</p>
            </article>
            
            <article>
                <div class="bgorange">
                    <span></span>
                    <figure class="pictomix"></figure>
                </div>
                
                <h2>Mixage</h2>
                
                <p>Nous pouvons réaliser <span>plusieurs formes de mixage</span>, adaptées à votre projet selon <span>vos exigences</span> et <span>vos contraintes</span>. Le mixage s’effectue sur ordinateur à l’aide des meilleurs <span>plugs-in</span> disponibles sur le marché du traitement audio professionnel</p>
            </article>
               
            <article>
                <div class="bgorange">
                    <span></span>
                    <figure class="pictomast"></figure>
                </div>
                
                <h2>Mastering</h2>
                
                <p>Le mastering, <span>étape</span> indispensable à tout projet. Nous réalisons le mastering de tout type de projet audio, enregistré au <span>Box Studio</span> ou non. Nos masterings sont réalisés avec un mélange de traitements <span>analogiques</span> et <span>informatiques</span>.</p>
            </article>
        </div>
    </section>
    
    <?php require 'footer.php'; ?>
    
</main>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

    <script type="text/javascript" language="javascript">
        
        $(document).ready(function(){
            
            var btn = ".burger"
            var menu = ".wrapmenu"
            
            $(btn).click(function(){
                $(menu).toggleClass("open");
                $(this).toggleClass("open");
            });
            
        });
        
    </script>
    
</body>
</html>
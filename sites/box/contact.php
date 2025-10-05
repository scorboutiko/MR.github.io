<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
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
    
    <section class="contact2">
        <div class="center1">
            <h2>Contact</h2>
            
            <p>Horaires d’ouverture : <br>
            Du lundi au vendredi de : <br>
            <span>11h00</span> - <span>13h00</span> et de <span>14h30</span> - <span>20h30</span></p>
            
            <p>Week-ends  sur demande</p>
            
            <ul>
                <li><span>21 Rue de l’Ynsner Bordeaux</span></li>
                <li><span>33800 France</span></li>
                <li><span>06 86 10 68 79</span></li>
                <li><span>01 81 20 51 02</span></li>
                <li><span>E-mail : <span>contact@boxstudio.com</span></span></li>
            </ul>
            
            <div class="formulaire">
                <form action="/ma-page-de-traitement" method="post">
                    <div class="flex">
                        <div class="nom">
                            <input type="text" id="name" name="user_name" placeholder="Nom Prénom">
                        </div>
                        
                        <div class="mail">
                            <input type="email" id="mail" name="user_mail" placeholder="Adresse mail">
                        </div>
                    </div>
                    
                    <div>
                        <textarea id="msg" name="user_message" placeholder="Votre message"></textarea>
                    </div>
                    
                    <div>
                        <button type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
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
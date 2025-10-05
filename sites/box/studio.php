<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Le studio</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
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
    
    <section class="studio">
        <div class="center1">
            <h2>Le studio</h2>
            
            <p><span>Box Studio</span> et ses ingénieurs du son vous accompagnent dans toutes les étapes de votre création sonore : <span>enregistrement</span>, <span>montage</span>, <span>mixage</span> <span>analogique</span>/<span>numérique</span> et <span>mastering</span>.</p>
            
            <p>Le studio est composé de <span>trois lives room</span> et d’une <span>control room</span>. La présence de ces trois lives rooms nous permet d’enregistrer de nombreux musiciens <span>simultanément</span>. Notre savoir faire et notre équipement professionnel, analogique et numérique, vous permettrons de réaliser vos productions sonores dans des <span>conditions optimales</span>.</p>
            
            <p><span>Box Studio</span> bénéficie d’un environnement inspirant pouvant prendre en charge un large éventail de projets, quelque soit le budget, les objectifs créatifs, formats, styles et challenges.</p>
            
            <p>En plus de l’espace et du confort octroyé par notre structure, nous mettons à disposition <span>tout notre backline</span>, guitares, amplis, batteries, et bien plus encore, et ce <span>sans frais supplémentaires</span>.</p>
            
            <p>Notre Studio d’enregistrement et de réalisation sonore professionnel est situé dans le centre de <span>Bordeaux</span>.</p>
            
            <p>Accès : 2 heures de Paris via TGV, et a 30 minutes de l’aéroport de Bordeaux.</p>
            
            <div class="gallerie flex">
                <h3><span>-</span> Gallerie <span>-</span></h3>

                <article class="regie flex">
                    <h2>Régie</h2>
                    <a data-fancybox="1" href="images/Gallerie/reg1.jpg"><img src="images/regie.jpg"></a>
                    <a data-fancybox="1" href="images/Gallerie/reg2.jpg"></a>
                    <a data-fancybox="1" href="images/Gallerie/reg3.jpg"></a>
                    <a data-fancybox="1" href="images/Gallerie/reg4.jpg"></a>
                    <a data-fancybox="1" href="images/Gallerie/reg5.jpg"></a>
                </article>
                
                <article class="cabine flex">
                    <h2>Cabine</h2>
                    <a data-fancybox="2" href="images/Gallerie/cab1.jpg"><img src="images/cabine.jpg"></a>
                    <a data-fancybox="2" href="images/Gallerie/cab2.jpg"></a>
                    <a data-fancybox="2" href="images/Gallerie/cab3.png"></a>
                    <a data-fancybox="2" href="images/Gallerie/cab4.jpg"></a>
                    <a data-fancybox="2" href="images/Gallerie/cab5.jpg"></a>
                </article>
                
                <article class="artistes flex">
                    <h2>Artistes</h2>
                    <a data-fancybox="3" href="images/Gallerie/art1.jpg"><img src="images/artistes.jpg"></a>
                    <a data-fancybox="3" href="images/Gallerie/art2.jpg"></a>
                    <a data-fancybox="3" href="images/Gallerie/art3.png"></a>
                    <a data-fancybox="3" href="images/Gallerie/art4.png"></a>
                    <a data-fancybox="3" href="images/Gallerie/art5.jpg"></a>
                </article>
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
    
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    
</body>
</html>
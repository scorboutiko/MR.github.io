<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>L'équipe</title>
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
    
    <section class="equipe">
        <div class="center1 flex">
            <article>
                <figure class="leroy"></figure>
                
                <h2>Leroy</h2>
                
                <p>Leroy est compositeur depuis si longtemps qu’il ne saurait nous donner une date, et ingénieur du son depuis <span>plus de 20 ans</span>.
                Il est originaire de Washington DC, et a vécu et travaillé à San Francisco durant une bonne partie de sa vie.
                Leroy est certifié <span>Pro Tools User</span> depuis 2008, il est d’ailleurs plutôt incollable sur le sujet ! <br><br>En plus de son activité de producteur et ingénieur son chez <span>Box Studio</span> et de formateur à <span>3iS Bordeaux</span> et <span>Audiocamp</span>, il est à l’origine des plus célèbres remixes pour le label <span>Wicked Mix</span> dont il est le co-fondateur, et travaille sur de nombreux projets musicaux à l’international.</p>
            </article>
            
            <article>
                <figure class="luc"></figure>
                
                <h2>Luc</h2>
                
                <p>Formé à l’<span>ISTS de Paris</span>, Luc est diplômé en Techniques du son et Sound design, où il a brillé en remportant le prix de la <span>Meilleure création musicale</span> pour un jeu vidéo et le <span>2ème prix du Meilleur film</span> en 2018.
                Il est également certifié Apple, pour la production musicale et sonore sur <span>Logic Pro</span>. <br><br>Outre les projets musicaux d’envergure sur lesquels il a travaillé aux côtés de <span>Leroy</span>, Luc est donc notre <span>expert en montage son</span> et <span>post-production</span>.
                Il a été amené à piloter des projets pour HBO, Sim For Health, Voolumes, le LABA, ou encore St-Gingembre.</p>
            </article>
               
            <article>
                <figure class="anne"></figure>
                
                <h2>Anne Laure</h2>
                
                <p>Après un petit détour outre-manche et une formation à l’anglais au <span>WEAS de Londres</span>, elle étudie la production et la communication culturelle à L‘<span>ICART Bordeaux</span> et l’administration de la musique à l’<span>IRMA Paris</span>.
                Avant <span>Box Studio</span> et Audiocamp, Anne Laure a travaillé pour l’Université de Bordeaux, La Revue de l’Histoire, Le Pitchfork Music Festival, Boxon Records et Warner Music France. <br><br>Au sein du studio, elle <span>coordonne les aspects artistiques</span> et <span>administratifs</span>, et vous conseillera pour tirer la <span>meilleure expérience</span> de votre passage chez nous.</p>
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
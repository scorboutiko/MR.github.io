<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tarifs</title>
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
    
    <section class="tarifs">
        <div class="center1">
            <h2>Tarifs</h2>
            
            <p>Tous nos prix comprennent la location du matériel appartenant au studio d'enregistrement <span>Box Studio</span>.</p>
            
            <p>1 heure : <span>54 € HT</span> <br>
            1 journée (8h) : <span>416 € HT</span> <br>
            5 jours : <span>1833 € HT</span> <br>
            Loc-out possible sur devis, veuillez <a href="contact.php">nous contacter</a>.</p>
            
            <p>TARIFS POST PRODUCTION SUR DEVIS.</p>
            
            <p>Groupes indés, autoproduits, il existe des solutions de financement de votre projet, n'hésitez pas à <a href="contact.php">nous contacter</a>.</p>
            
            <p>Pour un supplément de <span>50€ par session</span>, vous pouvez récupérer des vidéos, filmées durant votre passage au studio d'enregistrement avec un CANON EOS 5D Mark III + objectifs (CANON Série L).
            Pour un <span>clip</span>/<span>présence d'un caméraman</span>/<span>montage vidéo</span>, <a href="contact.php">contactez nous</a> pour plus d’informations.</p>
            
            <p>Tous ces prix concernent les prestations d'<span>enregistrement</span>, de <span>mixage</span> et de <span>mastering</span> en <span>journée</span> (<span>semaine</span> et <span>week end</span>)
            Pour des sessions en soirée ou de nuit (après 19h), les prix sont majorés.</p>
            
            <p>Pour les compositions originales et les arrangements, veuillez <a href="contact.php">nous contacter</a> pour un devis.</p>
            
            <p>Nos prix ne comprennent pas les éventuelles <span>locations supplémentaires</span> de <span>matériel</span> et cachets de <span>musicien</span> si nécessaire.</p>
            
            <p>Veuilez <a href="contact.php">nous contacter</a> pour une étude plus précise de votre projet.</p>
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
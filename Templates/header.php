<!--header.php-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css" />
</head>

<body>


    <header>
        <img class="logo" src="images/icons8-enclume-100.png" alt="Picture of an enclume with a hammer on it, its the logo of the entreprise">
        <h1 class="WebSiteTitle">Comics library</h1>
        <div class="link">
            <a class="headerLink" href="index.php"> Gallery</a>
            <a class="headerLink" href="GamePage.html"> Jeux</a>
            <a class="headerLink" href="AboutUs.php"> About us</a>

            <form method="post" action="traitement.php">
                <button type="submit" name="validBasket"> <img class = "ButtonPic" src ="images/cadie.jpg"></button>
            </form>

    </header>

    <?php
    /* 
    1 - Envoyer un formulaire avec les info de l'article
    
    2 - Ajouter plusieurs articles a un formulaire - afficher le contenu du formualaire apres l'envoie
    */
    ?>
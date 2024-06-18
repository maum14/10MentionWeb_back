<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logo.png" type ="favicon.ico">
    <title>Cours PHP - Introduction</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg" >
    <div class="container-fluid">
      <a class="navbar-brand" href="01_index.php"><img src="assets/img/logo.png" alt="logo php"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
                <a class="nav-link " aria-current="page" href="01_index.php">Introduction</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link" href="02_bases.php">Les bases</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="03_variables_constantes.php">Les variables et les constantes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="04_conditions.php">Les conditions en PHP</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="05_boucles.php">Les boucles en PHP</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="06_inclusions.php">Les importations des fichier</a>
          </li>
        </ul>
       
      </div>
    </div>
  </nav>
  <header class=" p-5 m-4 bg-light rounded-3 border">
    <section class="container py-5">
      <?php
       echo "<h1 class=\"display-5 fw-bold\">Les variables et les constantes en php</h1>";
      ?>
    </section>
    <main class="container-fluid px-5">
    <?php
       echo "<h2>Les variables utilisateurs / affection / concaténation</h2>";
       $number = 127; // on déclare une variable $ number et on lui affecte la valeur 127
       echo 'Ma variable $number vaut : '. $number .' <br> ' ; // je conctaéne avec le point(.)

       // Je peux  voir le type d'une variable avec la fonction prédifinie gettype()

       echo'Le type de ma variable $number est : ' . gettype($number) . '<br>'; // ici c'est integer ###############
       $double = 1.5 ;
       echo 'Ma variable $double vaut : '.$double . '<br>';
       echo ' Le type de ma variable $double est : ' . gettype($double) . '<br>' ; // ici il s'afit d'un double (nombre à virgule)

          ###########

        $chaine = 'une chaine de caractère entre simple quotes';
        echo 'Ma variable $chaine vaut : ' . $chaine . '<br>';
        echo' Le type de ma variable $chaine est : ' . gettype ($chaine) . '<br>'; // ici il s'agit d'un string
        
          ###########

        $chaine1 = "Une chaine de caractère entre double quotes";
        echo 'Ma variable $chaine1 vaut : ' .$chaine1 . '<br>';
        echo 'Le type de me variable $chaine1 est : ' . gettype($chaine1) . '<br>'; // ici il s'agit d'un string

          ###########

        $chaine2 = "127";
        echo 'Ma variable $chaine1 vaut : ' .$chaine2 . '<br>';
        echo 'Le type de me variable $chaine1 est : ' . gettype($chaine2) . '<br>'; // ici il s'agit d'un string
           
        ###########

        $chaine3 = ` Une chaine de caractère entre deux backquotes`;
        echo 'Ma variable $chaine3 vaut: ' . $chaine3 . '<br>';
        echo 'Le type de ma variable $chaine3 est :' . gettype($chaine3) . '<br>' ; // les backoquotes en PHP https://www.php.net/manual/fr/language.operators.execution.php

          ###########

        $boolean = true; // ou false // Le navigateur associe true à  et false à vide qui correspond à 
        echo 'Ma variable $boolean vaut : '. $boolean . '<br>';
        echo ' Le type de ma variable $boolean est : '  .gettype($boolean) . '<br> '; /// ici il sagit d'un boolean (booléen) : permet de savoir si quelque chose est vrai ou faux
        
          ###########

        // Concaténation , affectation et affectation comninées avec l'opérateur ".= " pour les chaines de caractères

        $prenom = 'Nicolas';
        $prenom .= 'Thomas'; // on ajoute la valeur de "Thomas" à la valeur de Nicolas SANS la remplacer grâce à la l'opérateur "=."
        // echo $prenom;

        echo '<p> Bonjour ' . $prenom . '</p>';
        echo "<p> Bonjour $prenom </p>"; // affiche "Bonjour Nicolas Thomas" . Ici j'utilise les doubles quotes , je n'ai pas besoin de concaténer avec le point(.) , dans les guiilemets la variable est évaluée : c'est son contenu qui est affiché, c'est ce qu'on apeelle la substitution de variable.

        //déclarer une chaine caractère avec qui contient des apostrophes ex : aujourd'hui
        // échappement des apostrophes

        $mesage = 'ajourd\'hui'; // ici on échappe les apostrophes quand on écrit dans les simples quotes avec "\"
        $message ="aujourd'hui"; 

          ###########

        //Exercice : Vous afficher Bleu-Blanc-Rouge en mettant le texte de chaque couleur dans des variables
        
        $bleu = 'Bleu -';
        $vert = 'Vert -';
        $rouge ='Rouge -';
       

        echo " <p><span class='text-primary'>$bleu</span><span class='text-success'>$vert</span><span class = 'text-danger'>$rouge</span></p>";

        // Créer un drapeau Français Bleu Blanc Rouge avec le mot" bleu blanc rouge" à l'intérieur de chaque couleur

          // Correction
        $bleu2 = "blue";
        $blanc2 = "white";
        $rouge2 = "red";

    echo "<div class='d-flex justify-content-center bg-dark p-5 m-auto m-5 rounded' style='width: 40%;'>
              <div class='bg-primary text-center fw-bold' style='width: 50px; height: 80px; line-height: 80px'>
                  $bleu2
              </div>
              <div class='bg-$blanc2 text-center fw-bold' style='width: 50px; height: 80px; line-height: 80px'>
                  $blanc2
              </div>
              <div class='bg-danger text-center fw-bold' style='width: 50px; height: 80px; line-height: 80px'>
                  $rouge2
              </div>
          </div>";

        echo'<h2 class = "mt-5" > Opérateurs numériques</h2>';
        $a = 10 ;
        $b = 2 ;

        echo "$a + $b = " .$a + $b . '<br> '; // affiche 12
        echo "$a - $b = " .$a - $b . '<br>'; // affiche 8
        echo "$a * $b = ".$a * $b . '<br>'; // affiche 20
        echo  "$a / $b = ".$a / $b . '<br>'; // affiche 5
        echo  "$a %$b = ".$a % $b . '<br>'; // affiche 0

        // Les opérateurs d'affectation combiné pour les valeurs numériques
        $a -=$b;
        echo $a;

        echo '<br> ';

        $a +=$b;
        echo $a;

        // il existe aussi les autres opérateur *= ou /= ou %=

        
          ###########

          // Incrémentation et décrémentation

          $i = 0;
          ++$i;
          echo $i;
          echo '<br>';
          $i --;
          echo $i;
          echo '<br>';

          $age1= 12;
        
        
          if ($age1 >= 18) {
            echo "je suis majeur";
          }else {
            echo " je ne suis pas majeur";
          }
        
          /**
           * Si je veux afficher les contenu d'une variable et qu'elle soit collé à une chaine de caractère; ex: je veux afficher :
           * aujourd'hui il fait 32°c <!DOCTYPE html>ici le 32 et °c sont collés pour le refaire en utilisant le mécanisme de subtitution des variables il faut mettre la variable entre accolades
           */
          
           $degre = 32;
           $phrase = '<p> Aujourd\'hui il fait ' . $degre . '°C !! </p>';
           echo $phrase;
           $phrase2 = "<p> Aujourd'hui il fait {$degre}°C !! </p>";
           echo $phrase2;

           echo '<h2 class="mt-5"> Transtypage des variables </h2>';
           $string1 = (int) '100';
           var_dump($string1); // affiche 100 avec type integer
           $string2 = (float) '12.5'; // affiche 12.5 avec type float
           var_dump($string2);
           $string2 = (int)'12.5';// affiche 12 avec type integer
           var_dump($string2);

           echo "<br>";

           echo '<h2 class="mt-5"> Constante utilisateurs </h2>';

           # Avec la fonction prédéfinie definie()

           define('CHAINE','la valeur de la constante CHAINE');
           echo CHAINE .'<br>';

           define('ENTIER',30);

          echo ENTIER .'<br>';

          echo "Jai ". ENTIER . " ans <br>";
          //echo gettype(ENTIER);

          # Constante avec le mot réservé const
          const SEMAINE = 52;
          const HEBDOMADAIRE = 35;
          const MOIS = 12;

          //Le nombre d'heure mensuel sous la constante HEURE

          const HEURE = (SEMAINE / MOIS) * HEBDOMADAIRE;

          echo HEURE;

          echo '<h2 class="mt-5"> Les variables prédéfinies : super-globale </h2> ';

          echo $_SERVER["HTTP_HOST"] ;
          echo '<pre>';
          var_dump($_SERVER);
          echo '</pre>' ;

          echo "<br>";

         // echo $_SERVER;

         var_dump ($_SERVER);
          function dump($tableau){
            echo '<pre>';
            var_dump($tableau);
            echo '</pre>';
          }

          echo "<br>";

          dump($_SERVER);









       
      ?>


  </main>

  </header>
    

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>
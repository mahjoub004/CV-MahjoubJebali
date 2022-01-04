<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CV JEBALI MAHJOUB</title>
  </head>
  <body>
  <!-- navbar -->

    <div class="container">
    <?php 
    include 'navBar.php';
   ////////////////////////////
  function ajouterDix($dix)
  {
   return $dix +=10;
  }
    $ajouterDix = ajouterDix(20);
    
    ?> <pre> <?php var_dump($ajouterDix); ?> </pre>
    
    
    <?php
    /////////////////////////////////////
    function somme($A,$B)
    {
      return $A + $B;
    }

    $somme = somme(10,20);

    echo "la somme de deux nombre est " .$somme;

    ///////////////////////////////////////

/*
    $bonjourEleve = direBonjour($nom);
    echo direBonjour('Alexandre'); // 'Bonjour Alexandre, ça va ?' > Niveau 1
    echo direBonjour('Alexandre', 'h1'); // '<h1>Bonjour Alexandre, ça va ?</h1>' > Niveau 2
*/
?>
<br>
<?php
    function bonjourEleve($nom)
    {
      return "Bonjour $nom , ça va ?";
    }
    echo bonjourEleve('Alexandre');


    /*
    $bonjourEleve = direBonjour($nom);
    echo direBonjour('Alexandre'); // 'Bonjour Alexandre, ça va ?' > Niveau 1
    echo direBonjour('Alexandre', 'h1'); // '<h1>Bonjour Alexandre, ça va ?</h1>' > Niveau 2
*/

     ?>

<br>
<?php
    function direBonjour($nom ,$balise ,$message )
    {
      return "<$balise> $nom $message   , ça va ? </$balise>";
    }
    echo direBonjour('Alexandre' ,'h1','bonjour');




/*
//Ecrire la methode Adequat
    $variableToDump; 
    debug($variableToDump);
    //affiche <pre>[resultat du var_dump]</pre> dans le DOM

*/ 

     ?>
<br>
<?php
      $variableToDump = [1,2,3,4];
      function debug($toDebug)
      {
        echo '<pre>';
        var_dump($toDebug);
        echo '</pre>';
      }
      //echo $variableToDump;
      debug($variableToDump);
    

     ?>***********************************************<br>
     <?php
     $liste = [1,2,3,4];
      function debug1($variable, $arret = false )
      {
        echo '<pre>';
        var_dump($variable);
        echo '</pre>';

        if ($arret = true) {
          print_r($variable);
          die();
        }
      }
      //debug1($liste)

     ?>

     <?php 
     
     $liste_eleves = [
      'Alexandre',
      'Noe', 
      'David',
      'Lila',
      'Rudy',
      'Mike',
      'Celine',
      'Celine',
      'Laetitia',
      'Samia',
      'Mahjoub',
  ];  

  foreach ($liste_eleves as $key => $value) {
    
    echo direBonjour($value , 'h5', 'bonjour');
  }
  ?>
  *****************************************************************<br>
  <?php



  function foreachList($list)
  {
    foreach ($list as $key => $value) {
    
      echo direBonjour($value , 'h5', 'bonjour');
    }
  }
  foreachList($liste_eleves);
     ?>


    
<?php 
 function dirBonjourAtous($liste, $balise, $message )
 {
  foreach ($liste as $key => $value)
   {
    
    echo direBonjour($value , $balise , $message);
  }

 }
 dirBonjourAtous($liste_eleves, 'p' , 'hello');

?>

    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
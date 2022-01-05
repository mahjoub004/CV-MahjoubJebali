<?php 
$listeMenu= [
    'Accueil' => ['lien' => ' <a href="get.php?name=accueil" > Accueil</a>'], 
    'Blog' => ['lien' => ' <a href="get.php?name=blog" > Blog</a>'], 
    'Contact' => ['lien' => ' <a href="get.php?name=contact" > Contact</a>'], 
];

$listeMenu = [
    [
        'nom' => [
            'fr' => 'Accueil',
            'en' => 'Home'
    ],
         'lien' => ' <a href="get.php?name=accueil" > Accueil</a>'
    ], 
    [
        'nom' => [
            'fr' => 'Blog',
            'en' => 'Blug'
    ],
        'lien' => ' <a href="get.php?name=blog" > Blog</a>'
    ], 
    [
        'nom' => [
            'fr' => 'Contactez-moi',
            'en' => 'Contact'
    ],
        'lien' => ' <a href="get.php?'.$name.'=contact&lang" > Contact</a>'
    ], 
];
  echo  var_dump($listeMenu[1]) ;
foreach ($listeMenu as $key => $value) {
  
    echo $value['lien'];
}



?>
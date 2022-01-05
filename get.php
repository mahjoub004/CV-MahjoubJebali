<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cours php</title>
</head>
<body>
<div style=' border-color: #849460; border-style:solid;
border-width: 2px; border-radius: 10px; width:300px; margin:auto; text-align:left; padding-left:80px;padding'>
            <a href="get.php?name=blog" > Blog</a>
            <a href="get.php?name=contact" > contact</a>
</div>
</body>
</html>


<?php
 $name = $_GET["name"];

switch ($name) {

    case 'accueil':
        echo 'Bonjour ' . htmlspecialchars($name) . '!';
        break;

    case 'blog':
        echo 'Bonjour ' . htmlspecialchars($name) . '!';
        break;

    case 'contact':
        include 'contact.php';

        break;
    
    default:
        //echo 'salut';
        break;
}
?>

<?php

$liste_personne_message = [
    "Alex" => [
        'messages' => [
            [ 
                'date' => "Aujoud'hui",
                'message' => 'Salut Alexandre, tu peux faire des cours de PHP plus simple ?'
            ],
            [
                'date' => "Demain", 
                'message' => 'Salut Alexandre, tu as pensé a prendre ton sac'
            ],
            [
                'date' => "Hier", 
                'message' => 'Quelle est ta couleur préf ?'
            ],
        ]
        ],
        "make" => [
            'messages' => [
                [ 
                    'date' => "Aujoud'hui",
                    'message' => 'Salut Alexandre, tu peux faire des cours de PHP plus simple make ?'
                ],
                [
                    'date' => "Demain", 
                    'message' => 'Salut Alexandre, tu as pensé a prendre ton sac make'
                ],
                [
                    'date' => "Hier", 
                    'message' => 'Quelle est ta couleur préf make ?'
                ],
            ]
            ],

        ];

     
       echo "<div style=' 
       border-color: #849460; 
       border-style:solid;
       border-width: 2px; 
       border-radius: 10px; 
       width:600px; 
       margin:auto; 
       text-align:left; 
       padding-left:10px;
       margin:150px;
       '>";

       echo "<ul>";

       foreach ($liste_personne_message as $name => $value) {
          // var_dump($name);
           foreach ($liste_personne_message[$name]['messages'] as $key => $value) 
       {
               echo '<br>';
               echo "<li>".$value['date']."</li>";
               echo "<li>".$value['message']."</li>";
       }
       }

       
       echo "</ul>";
        echo "</div>";
?>
<?php
    $servername = 'localhost' ;
    $username = 'root' ;
    $password = '' ;
    $dbname = 'new_collections' ;

    //Créer une connexion avec la base de données dans phpMyAdmin
    $connexion = new PDO ('localhost', 'root', '', 'new_collectons') ;

    //Vérification de la connexion
    if ($connexion->connect_error)
        {
            die ("la connexion a échoué: " . $connexion->connect_error) ; 
        }
?>

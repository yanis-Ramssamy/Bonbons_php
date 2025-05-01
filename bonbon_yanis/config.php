<?php 

//constantes de connexion
define("HOTE","localhost");
define("BDD","bonbons");
define("UTILISATEUR","root");
define("MDP","");


function connect() {


    try{
        $connect= new PDO('mysql:host='.HOTE.';dbname='.BDD,UTILISATEUR, MDP,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
    }
    catch(PDOException $e){
        echo"problèmes de connexion à la BDD<br>".$e->getMessage();
    }
    return $connect ;
}
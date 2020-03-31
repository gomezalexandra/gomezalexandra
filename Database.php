<?php

class Database
{
    
    public function getConnection()
    {
        try{
            $connection = new PDO('mysql:host=localhost;dbname=exerciceblog;charset=utf8', 'root', '');
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return 'Connexion OK';
        }
        catch(Exception $errorConnection)
        {
            die ('Erreur de connection :'.$errorConnection->getMessage());
        }
    }
}
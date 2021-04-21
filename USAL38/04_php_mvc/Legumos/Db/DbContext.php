<?php 

class DbContext 
{
    static private PDO $pdo;

    public function getDb()
    {
        if(self::$pdo === null) {
            // créer la connexion PDO
        }

        return self::$pdo;
    }
}
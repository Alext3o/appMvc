<?php
class Database
{
    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=alext30.mysql.database.azure.com;dbname=alumno;charset=utf8', 'alext30@alext30', 'Joca2000');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}

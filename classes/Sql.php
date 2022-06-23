<?php

class Sql
{
    private static string $serverName = "localhost";
    private static string $userName = "root";
    private static string $userPassword = "";
    private static string $database = "petstore";
    private static object $connexion;

    public static function connexionPDO()
    {
        try {
            self::$connexion = new PDO("mysql:host=" . self::$serverName . ";dbname=" . self::$database, self::$userName, self::$userPassword);
            self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    public static function inserer(string $query): bool
    {
        self::connexionPDO();
        try {
            $etat = self::$connexion->exec($query);
        } catch (PDOException $e) {
            $etat = false;
        } finally {
            return $etat;
        }
    }

    public static function lister(string $query): array
    {
        self::connexionPDO();
        return self::$connexion->query($query)->fetchAll();
    }
}

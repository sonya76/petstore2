<?php

interface interfaceUtilisateur
{
    public function inscrireUtilisateur(
        string $genre,
        string $prenom,
        string $nom,
        string $email,
        string $password,
        string $adresse1,
        string $adresse2,
        string $codePostal,
        string $ville,
        string $telephone
    ): bool;
    public function modifierUtilisateur();
    public function supprimerUtilisateur();
    public function connecterUtilisateur();
    public function deconnecterUtilisateur();
    public function verifierUtilisateur(string $mailUtilisateur): int | false;
    public function verifierTentativeConnexion(string $mailUtilisateur): bool;
}

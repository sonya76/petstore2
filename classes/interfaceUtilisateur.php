<?php

interface interfaceUtilisateur
{
    public function inscrireUtilisateur(string $nomUtilisateur, string $prenomUtilisateur, string $mailUtilisateur, string $mdpUtilisateur): bool;
    public function modifierUtilisateur();
    public function supprimerUtilisateur();
    public function connecterUtilisateur();
    public function deconnecterUtilisateur();
    public function verifierUtilisateur(string $mailUtilisateur): int | false;
    public function verifierTentativeConnexion(string $mailUtilisateur): bool;
}

<?php
namespace src\model;

use Client;
use Compte;
use libs\system\Model;
class CompteDb extends Model
{
    public function findAll()
    {
        return $this->entityManager
                    ->createQuery("SELECT r FROM departement r")
                    ->getResult(); 
    }
    
    public function add($nom,$prenom,$telephone,$email,$adresse,$numero,$solde,$etat)
    {
        $compte = new Compte();
        $client = new Client();
        $client->setNom($nom);
        $client->setPrenom($prenom);
        $client->setTelephone($telephone);
        $client->setEmail($email);
        $client->setAdresse($adresse);
        $this->entityManager->persist($client);
        $compte->setNumero($numero);
        $compte->setSolde($solde);
        $compte->setEtat($etat);
        $compte->setClient($client);
        $this->entityManager->persist($compte);
        $this->entityManager->flush();
    }
    public function findById($idClient)
    {
        return $this->entityManager
                    ->createQuery("SELECT c FROM client c WHERE id=$idClient")
                    ->getResult(); 
    }
}
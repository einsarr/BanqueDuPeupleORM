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
                    ->createQuery("SELECT cpt FROM compte cpt")
                    ->getResult(); 
    }
    public function findById($idC)
    {
        return $this->entityManager
                    ->createQuery("SELECT cpt FROM compte cpt WHERE cpt.id=$idC")
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
    public function addCompte($numero,$solde,$etat,$idClient)
    {
        $compte = new Compte();
        $client = new ClientDB();
        $cli= $client->findById($idClient);
        $compte->setNumero($numero);
        $compte->setSolde($solde);
        $compte->setEtat($etat);
        $compte->setClient($cli);
        $this->entityManager->persist($compte);
        $this->entityManager->flush();
    }
    
   
}
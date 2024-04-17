<?php

namespace src\Models;

use src\Services\Hydratation;

class User
{
  private int $id_utilisateur;
  private string $Nomfamille;
  private string $Prenom;
  private string $Mdp;
  private bool $id_role;
  private string $Mail;
  private bool $Compte_active;


  use Hydratation;
  /**
   * Get the value of id_utilisateur
   */
  public function getIdUtilisateur(): int
  {
    return $this->id_utilisateur;
  }

  /**
   * Set the value of id_utilisateur
   */
  public function setIdUtilisateur(int $id_utilisateur): self
  {
    $this->id_utilisateur = $id_utilisateur;

    return $this;
  }

  /**
   * Get the value of Nomfamille
   */
  public function getNomfamille(): string
  {
    return $this->Nomfamille;
  }

  /**
   * Set the value of Nomfamille
   */
  public function setNomfamille(string $Nomfamille): self
  {
    $this->Nomfamille = $Nomfamille;

    return $this;
  }

  /**
   * Get the value of Prenom
   */
  public function getPrenom(): string
  {
    return $this->Prenom;
  }

  /**
   * Set the value of Prenom
   */
  public function setPrenom(string $Prenom): self
  {
    $this->Prenom = $Prenom;

    return $this;
  }

  /**
   * Get the value of Mdp
   */
  public function getMdp(): string
  {
    return $this->Mdp;
  }

  /**
   * Set the value of Mdp
   */
  public function setMdp(string $Mdp): self
  {
    $this->Mdp = $Mdp;

    return $this;
  }

  /**
   * Get the value of id_role
   */
  public function isIdRole(): bool
  {
    return $this->id_role;
  }

  /**
   * Set the value of id_role
   */
  public function setIdRole(bool $id_role): self
  {
    $this->id_role = $id_role;

    return $this;
  }

  /**
   * Get the value of Mail
   */
  public function getMail(): string
  {
    return $this->Mail;
  }

  /**
   * Set the value of Mail
   */
  public function setMail(string $Mail): self
  {
    $this->Mail = $Mail;

    return $this;
  }

  /**
   * Get the value of Compte_active
   */
  public function isCompteActive(): bool
  {
    return $this->Compte_active;
  }

  /**
   * Set the value of Compte_active
   */
  public function setCompteActive(bool $Compte_active): self
  {
    $this->Compte_active = $Compte_active;

    return $this;
  }


}




  
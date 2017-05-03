<?php

namespace Ecommerce\EcommerceBundle\Entity;

/**
 * commandes
 */
class commandes
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var bool
     */
    private $valider;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var int
     */
    private $reference;

    /**
     * @var array
     */
    private $produits;


    /**
    *@ORM\ManyToOne(targetEntity="MyUser\UtilisateurBundle\Entityy\User", inversedBy="commande")
    *@ORM\JoinColumn(nullable = true)
    */
    private $utilisateur;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set valider
     *
     * @param boolean $valider
     *
     * @return commandes
     */
    public function setValider($valider)
    {
        $this->valider = $valider;

        return $this;
    }

    /**
     * Get valider
     *
     * @return bool
     */
    public function getValider()
    {
        return $this->valider;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return commandes
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set reference
     *
     * @param integer $reference
     *
     * @return commandes
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return int
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set produits
     *
     * @param array $produits
     *
     * @return commandes
     */
    public function setProduits($produits)
    {
        $this->produits = $produits;

        return $this;
    }

    /**
     * Get produits
     *
     * @return array
     */
    public function getProduits()
    {
        return $this->produits;
    }


 /**

     * Set utilisateur

     *

     * @param \MyUser\UtilisateurBundle\Entity\User $utilisateur

     * @return Commandes

     */

    public function setUtilisateur(\MyUser\UtilisateurBundle\Entity\User$utilisateur = null)

    {

        $this->utilisateur = $utilisateur;



        return $this;

    }



    /**

     * Get utilisateur

     *

     * @return \MyUser\UtilisateurBundle\Entity\User

     */

    public function getUtilisateur()

    {

        return $this->utilisateur;

    }

}

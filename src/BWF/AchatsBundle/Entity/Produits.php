<?php

namespace BWF\AchatsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Produits
 *
 * @ORM\Entity
 */
class Produits {
    
     /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_en", type="string", length=255, nullable=true)
     */
    private $nomEn;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", nullable=false)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_en", type="text", nullable=true)
     */
    private $texteEn;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=false)
     */
    private $image;
    
    /**
     * @var decimal
     * 
     * @ORM\column(name="prix", type="decimal", precision"10", scale"2")
     */
    private $prix;
    
    /**
     * @var boolean
     * 
     * @ORM\column(name="vendu", type="boolean", nullable="true")
     */
    private $vendu;
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="BWF\AchatsBundle\Entity\Acheteurs")
     */
    private $acheteur;
    
}

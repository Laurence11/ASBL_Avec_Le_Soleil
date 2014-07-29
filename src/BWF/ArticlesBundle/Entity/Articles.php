<?php

namespace BWF\ArticlesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Article
 *
 * @ORM\Entity
 */
class Articles {
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
     * @var \Date
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;
    
   /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=false)
     */
    private $image;
    /**
     * @var boolean
     *
     * @ORM\Column(name="vedette", type="boolean", nullable=false)
     */
    
    private $vedette;

    /**
     * @var boolean
     *
     * @ORM\Column(name="presentationAccueil", type="boolean", nullable=false)
     */
    private $presentationaccueil;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * 
     */
    private $categorie;
}

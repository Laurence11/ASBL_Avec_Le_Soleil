<?php

namespace BWF\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Description of Site
 *
 * @ORM\Entity
 */
class Sites {
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
     * @ORM\Column(name="slug", type="string", length=45, nullable=false)
     */
    private $slug;
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", nullable=true)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_en", type="string", length=255, nullable=true)
     */
    private $nomEn;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_en", type="text", nullable=true)
     */
    private $texteEn;
    
    /**
     * @ORM\ManyToMany(targetEntity="BWF\ArticlesBundle\Entity\Categories")
     */
    private $categorie;
    
}

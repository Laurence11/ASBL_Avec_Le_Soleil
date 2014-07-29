<?php

namespace BWF\FormationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Description of Formation
 *
 * @ORM\Entity
 */
class Formations {
    
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
     * @ORM\Column(name="prix", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="participantMax", type="smallint", nullable=false)
     */
    private $participantmax;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dateDebut", type="date", nullable=false)
     */
    private $dateDebut;
    
    /**
     * @var \Date
     *
     * @ORM\Column(name="dateFin", type="date", nullable=false)
     */
    private $dateFin;


    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="BWF\ArticlesBundle\Entity\Categories")
     */
    private $categorie;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Participants", inversedBy="formations")
     * @ORM\JoinTable(name="reservations",
     *   joinColumns={
     *     @ORM\JoinColumn(name="formations", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="participants", referencedColumnName="id")
     *   }
     * )
     */
    private $participants;    
}

<?php
namespace BWF\AchatsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Description of Acheteurs
 *
 * @ORM\Entity
 */
class Acheteurs {
    
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
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     * 
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100, nullable=false)
     */
    private $mail;
    
     /**
     * @var boolean
     *
     * @ORM\Column(name="paye", type="boolean", nullable=false)
     */  
    private $paye;

}

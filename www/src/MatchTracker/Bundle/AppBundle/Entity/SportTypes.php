<?php

namespace MatchTracker\Bundle\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SportTypes
 *
 * @ORM\Table(name="sport_types")
 * @ORM\Entity
 */
class SportTypes
{
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
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="players_on_field", type="integer", nullable=true)
     */
    private $playersOnField;

    /**
     * @var \Sports
     *
     * @ORM\ManyToOne(targetEntity="Sports")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sports_id", referencedColumnName="id")
     * })
     */
    private $sports;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return SportTypes
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set playersOnField
     *
     * @param integer $playersOnField
     * @return SportTypes
     */
    public function setPlayersOnField($playersOnField)
    {
        $this->playersOnField = $playersOnField;
    
        return $this;
    }

    /**
     * Get playersOnField
     *
     * @return integer 
     */
    public function getPlayersOnField()
    {
        return $this->playersOnField;
    }

    /**
     * Set sports
     *
     * @param \MatchTracker\Bundle\AppBundle\Entity\Sports $sports
     * @return SportTypes
     */
    public function setSports(\MatchTracker\Bundle\AppBundle\Entity\Sports $sports = null)
    {
        $this->sports = $sports;
    
        return $this;
    }

    /**
     * Get sports
     *
     * @return \MatchTracker\Bundle\AppBundle\Entity\Sports 
     */
    public function getSports()
    {
        return $this->sports;
    }
}
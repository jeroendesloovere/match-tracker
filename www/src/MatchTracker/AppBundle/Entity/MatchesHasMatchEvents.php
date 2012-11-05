<?php

namespace MatchTracker\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MatchTracker\AppBundle\Entity\MatchesHasMatchEvents
 *
 * @ORM\Table(name="matches_has_match_events")
 * @ORM\Entity
 */
class MatchesHasMatchEvents
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime $time
     *
     * @ORM\Column(name="time", type="datetime", nullable=true)
     */
    private $time;

    /**
     * @var Matches
     *
     * @ORM\ManyToOne(targetEntity="Matches")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matches_id", referencedColumnName="id")
     * })
     */
    private $matches;

    /**
     * @var MatchEvents
     *
     * @ORM\ManyToOne(targetEntity="MatchEvents")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="match_events_id", referencedColumnName="id")
     * })
     */
    private $matchEvents;

    /**
     * @var Players
     *
     * @ORM\ManyToOne(targetEntity="Players")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="players_id", referencedColumnName="id")
     * })
     */
    private $players;

    /**
     * @var Teams
     *
     * @ORM\ManyToOne(targetEntity="Teams")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="teams_id", referencedColumnName="id")
     * })
     */
    private $teams;



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
     * Set time
     *
     * @param \DateTime $time
     * @return MatchesHasMatchEvents
     */
    public function setTime($time)
    {
        $this->time = $time;
    
        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set matches
     *
     * @param MatchTracker\AppBundle\Entity\Matches $matches
     * @return MatchesHasMatchEvents
     */
    public function setMatches(\MatchTracker\AppBundle\Entity\Matches $matches = null)
    {
        $this->matches = $matches;
    
        return $this;
    }

    /**
     * Get matches
     *
     * @return MatchTracker\AppBundle\Entity\Matches 
     */
    public function getMatches()
    {
        return $this->matches;
    }

    /**
     * Set matchEvents
     *
     * @param MatchTracker\AppBundle\Entity\MatchEvents $matchEvents
     * @return MatchesHasMatchEvents
     */
    public function setMatchEvents(\MatchTracker\AppBundle\Entity\MatchEvents $matchEvents = null)
    {
        $this->matchEvents = $matchEvents;
    
        return $this;
    }

    /**
     * Get matchEvents
     *
     * @return MatchTracker\AppBundle\Entity\MatchEvents 
     */
    public function getMatchEvents()
    {
        return $this->matchEvents;
    }

    /**
     * Set players
     *
     * @param MatchTracker\AppBundle\Entity\Players $players
     * @return MatchesHasMatchEvents
     */
    public function setPlayers(\MatchTracker\AppBundle\Entity\Players $players = null)
    {
        $this->players = $players;
    
        return $this;
    }

    /**
     * Get players
     *
     * @return MatchTracker\AppBundle\Entity\Players 
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Set teams
     *
     * @param MatchTracker\AppBundle\Entity\Teams $teams
     * @return MatchesHasMatchEvents
     */
    public function setTeams(\MatchTracker\AppBundle\Entity\Teams $teams = null)
    {
        $this->teams = $teams;
    
        return $this;
    }

    /**
     * Get teams
     *
     * @return MatchTracker\AppBundle\Entity\Teams 
     */
    public function getTeams()
    {
        return $this->teams;
    }
}
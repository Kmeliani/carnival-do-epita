<?php

namespace Hackathon\PlayerIA;
use Hackathon\Game\Result;

/**
 * Class KmelianiPlayer
 * @package Hackathon\PlayerIA
 * @author Robin
 *
 */
class KmelianiPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    protected $lastWasWin = false;

    protected $i = 0;

    // 0 -> scissors
    // 1 -> paper
    // 2 -> rock
    public function getValFromIndex($index) {
        if ($in == 0) {
            return 'scissors';
        }
        else if ($in = 1) {
            return 'paper';
        }
        else {
            return 'rock';
        }
    }

    public function getChoice()
    {
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Choice           ?    $this->result->getLastChoiceFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Choice ?    $this->result->getLastChoiceFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get all the Choices          ?    $this->result->getChoicesFor($this->mySide)
        // How to get the opponent Last Choice ?    $this->result->getChoicesFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
       // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get the stats                ?    $this->result->getStats()
        // How to get the stats for me         ?    $this->result->getStatsFor($this->mySide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // How to get the stats for the oppo   ?    $this->result->getStatsFor($this->opponentSide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // -------------------------------------    -----------------------------------------------------
        // How to get the number of round      ?    $this->result->getNbRound()
        // -------------------------------------    -----------------------------------------------------
        // How can i display the result of each round ? $this->prettyDisplay()
        // -------------------------------------    -----------------------------------------------------
        
        if ($this->result->getLastChoiceFor($this->mySide)) {
            if (!$this->result->getLastScoreFor($this->mySide))
                $this->$i = $this->$i + 1;

            if ($this->$i == 3)
                $this->$i = 0;

            if ($this->result->getLastChoiceFor($this->mySide) == parent::rockChoice()) {
                return $this->getValFromIndex($this->$i);
            }
            else if ($this->result->getLastChoiceFor($this->mySide) == parent::paperChoice()) {
                return $this->getValFromIndex($this->$i);
            }
            else if ($this->result->getLastChoiceFor($this->mySide) == parent::scissorsChoice()) {
                return parent::paperChoice();
            }
        }

        return parent::scissorsChoice();
    }
};

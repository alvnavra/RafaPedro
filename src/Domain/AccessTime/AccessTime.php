<?php
    namespace App\Domain\AccessTime;
    class AccessTime
    {
        private $initialTime;
        private $finalTime;

        public function setInitalTime(DateTime $initTime)
        {
            $this -> initialTime = $initTime;
        }

        public function getInitialTime()
        {
            return $this -> initialTime;
        }

        public function setFinalTime(DatTime $finalTime)
        {
            $this -> finalTime = $finalTime;
        }

        public function getFinalTime()
        {
            return $this -> $finalTime;
        }
    }
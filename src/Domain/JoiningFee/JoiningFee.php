<?php
    namespace App\Domain\JoiningFee;
    use App\Domain\Club\Club;

    class JoiningFee
    {
        private $club;
        private $joningFee;

        public function setClub(Club $club)
        {
            $this -> club = $club;
        }

        public function getClub()
        {
            return $this -> club;
        }

        public function setJoiningFee(int $joiningFee)
        {
            $this -> joiningFee = $joiningFee;
        }

        public function getJoiningFee()
        {
            return $this -> joiningFee;
        }
    }
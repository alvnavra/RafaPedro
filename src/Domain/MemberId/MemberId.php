<?php
    namespace App\Domain\MemberId;
    Class MemberId
    {
        private $memberId;        

        public function setMemberId(int $memberId)
        {
            $this -> memberId = 'WEBM'.$memberId;
        }

        public function getMember()
        {
            return $this -> memberId;
        }
    }
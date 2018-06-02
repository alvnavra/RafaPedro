<?php
    namespace App\Domain\Gift;

    class Gift
    {
        private $name;
        private $description;

        public function setName(string $name)
        {
            $this -> name = $name;
        }

        public function getName()
        {
            return $this -> name;
        }

        public function setDescription(string $description)
        {
            $this -> description = $description;
        }

        public function getDescription()
        {
            return $this -> description;
        }
    }
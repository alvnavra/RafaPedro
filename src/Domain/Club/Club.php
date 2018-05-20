<?php
    namespace App\Domain\Club;
    class Club
    {
        /* Debe tener: id, nombre, una dirección, número de comercio */
        private $id;
        private $name;
        private $address;
        private $businnessNumber;

        public function setId($id)
        {
            if(!is_int($id))
            {
                return "KO";
            }
            else
            {
                $this->id = $id;
                return "OK";
            }


        }

        public function getId()
        {
            return $this->id;
        }
        
        public function setName(string $name)
        {
            $this->name = $name;
            return "OK";
        }

        public function getName()
        {
            return $this->name;
        }        

        public function setAddress(string $address)
        {
            $this->address = $address;
            return "OK";
        }

        public function getAddress()
        {
            return $this->address;
        }                

        public function setBussinessNumber(string $businnessNumber)
        {
            $this->businnessNumber = $businnessNumber;
            return "OK";
        }

        public function getBusinnessNumber()
        {
            return $this->businnessNumber;
        }                        
    }


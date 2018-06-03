<?php
    namespace App\Domain\Club;
    use Doctrine\ORM\Mapping as ORM;
    use App\Domain\TPV\TPV;

    
	/**
	 *  @ORM\Table(name="Club")
	 */	
    class Club
    {
        /* Debe tener: id, nombre, una dirección, número de comercio */

        /**
         * @ORM\Id
         * @ORM\GeneratedValue
         * @ORM\Column(type="integer")
         */        
        private $id;

        /**
         * @ORM\Column(type="string", length=50)
         */
        private $name;
        /**
         * @ORM\Column(type="string", length=200)
         */
        private $address;

        /*
         * @ORM\OneToMany(targetEntity="App\Domain\TPV", inversedBy="clubs")     
         */
        private $tpv;
        
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

        /**
         * Get the value of tpv
         */ 
        public function getTpv()
        {
                return $this->tpv;
        }

        /**
         * Set the value of tpv
         *
         * @return  self
         */ 
        public function setTpv(TPV $tpv)
        {
                $this->tpv = $tpv;

                return $this;
        }
    }


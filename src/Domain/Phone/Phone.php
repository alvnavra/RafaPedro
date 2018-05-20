<?php
    namespace App\Domain\Phone;
    class Phone
    {
        /* se controlará que cumpla una expresión regular. Sin constructor. Set y Get */
        /*https://www.codigonexo.com/blog/programacion/php/expresion-regular-para-numeros-de-telefono/*/
        private $phone;
        public function setPhone($phone)
        {
            $pattern = '/^((\+?\d{2}([ \t|\-])?)?[9|6|7]((\d{1}([ \t|\-])?[0-9]{3})|(\d{2}([ \t|\-])?[0-9]{2}))([ \t|\-])?[0-9]{2}([ \t|\-])?[0-9]{2})$/ ';

            if (preg_match($pattern,$phone))
            {
                $this->phone = $phone;
                return true;
            }
            else 
            {
                return false;
            }
        }

        public function getPhone()
        {
            return $this->phone;
        }
    }


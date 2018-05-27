<?php
    namespace App\Domain\Ip;
    class Ip
    {
        private $ip;

        public function setIp(string $ip)
        {
            if (filter_var($ip, FILTER_VALIDATE_IP))
            {
                $this->ip = $ip;
                return "OK";
            }
            else
            {
                return "KO";
            }
        }

        public function getIp()
        {
            return $ip;
        }
    }
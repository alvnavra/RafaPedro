<?php
    namespace App\Domain\BankAccount;
    use Symfony\Component\Validator\Constraints as Assert;

    class BankAccount
    {
        /**
         * @Assert\Iban(
         *     message="This is not a valid International Bank Account Number (IBAN)."
         * )
         */
        protected $bankAccountNumber;
    }
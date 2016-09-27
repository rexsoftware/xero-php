<?php


namespace XeroPHP\Remote\Exception;


use XeroPHP\Remote\Exception;

class PayrollHasNotBeenProvisioned extends Exception
{
    public function __construct($message = null, $code = null, $previous = null)
    {
        if (!$message) {
            $message = 'Payroll has not been provisioned.';
        }

        parent::__construct($message, $code, $previous);
    }
}
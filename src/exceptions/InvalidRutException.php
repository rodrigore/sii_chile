<?php namespace Rodrigore\SIIChile\Exceptions;

use Exception;

class InvalidRutException extends Exception
{
     protected $message = "The verification code didn't match with the RUT. The RUT and the code must be delimited with -";
}

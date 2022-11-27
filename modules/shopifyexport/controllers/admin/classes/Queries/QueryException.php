<?php

namespace ShopifyExport\Queries;

use Exception;
use Throwable;

class QueryException extends Exception
{
    /** @var string */
    private $details;

    public function __construct($message = "", $details = '', Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
        $this->details = $details;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

}
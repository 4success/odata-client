<?php
/**
 * OData client library
 *
 * @author  Михаил Красильников <m.krasilnikov@yandex.ru>
 * @license MIT
 */
namespace Mekras\OData\Client\Response;

use Mekras\OData\Client\EDM\NullType;

/**
 * OData Service error response.
 *
 * @since 1.0
 */
class Error extends Response
{
    /**
     * Error code
     *
     * @var string
     */
    private $code = '';

    /**
     * Error message
     *
     * @var string
     */
    private $message;

    /**
     * Response constructor.
     *
     * @param string $message Error message.
     * @param string $code    Error code.
     */
    public function __construct($message, $code = '')
    {
        parent::__construct(new NullType());
        $this->message = $message;
        $this->code = $code;
    }

    /**
     * Return error code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Return error message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}

<?php

namespace Kerox\Messenger\Model\Callback;

class Optin
{
    /**
     * @var string
     */
    protected $ref;

    /**
     * Optin constructor.
     *
     * @param string $ref
     */
    public function __construct(string $ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return string
     */
    public function getRef(): string
    {
        return $this->ref;
    }

    /**
     * @param array $callbackData
     *
     * @return \Kerox\Messenger\Model\Callback\Optin
     */
    public static function create(array $callbackData): Optin
    {
        return new static($callbackData['ref']);
    }
}

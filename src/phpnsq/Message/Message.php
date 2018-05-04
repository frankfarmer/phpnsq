<?php

namespace OkStuff\PhpNsq\Message;

class Message implements \JsonSerializable
{
    private $decoded = false;
    private $id;
    private $body;
    private $timestamp;
    private $attempts;
    private $nsqdAddr;
    private $delegate;

    public function __construct()
    {
        $this->timestamp = microtime(true);
    }

    /**
     * @return bool
     */
    public function isDecoded()
    {
        return $this->decoded;
    }

    public function setDecoded()
    {
        $this->decoded = true;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param mixed $timestamp
     */
    public function setTimestamp($timestamp = null)
    {
        if (null === $timestamp) {
            $this->timestamp = microtime(true);
        }
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * @param mixed $attempts
     */
    public function setAttempts($attempts)
    {
        $this->attempts = $attempts;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNsqdAddr()
    {
        return $this->nsqdAddr;
    }

    /**
     * @param mixed $nsqdAddr
     */
    public function setNsqdAddr($nsqdAddr)
    {
        $this->nsqdAddr = $nsqdAddr;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDelegate()
    {
        return $this->delegate;
    }

    /**
     * @param mixed $delegate
     */
    public function setDelegate($delegate)
    {
        $this->delegate = $delegate;

        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'body' => $this->body,
            'timestamp' => $this->timestamp,
        ];
    }
}

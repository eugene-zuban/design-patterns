<?php

namespace Adapter;

/**
 * Class CloudFileSystem is Adaptee provides a different interface for copying files.
 * Client code does not know how to use it without an appropriate adapter.
 */
class CloudFileSystem
{
    /**
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $to;

    public function setFrom(string $fileName)
    {
        $this->from = $fileName;
    }

    public function setTo(string $to)
    {
        $this->to = $to;
    }

    public function copyFile()
    {
        return "Copy file from {$this->from} to {$this->to} using CloudFileSystem";
    }
}

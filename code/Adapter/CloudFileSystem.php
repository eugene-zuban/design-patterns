<?php

namespace Adapter;

/**
 * Class Cloud FileSystem is Adaptee provides a non BackupService compatible interface.
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

    /**
     * @param string $fileName
     */
    public function setFrom(string $fileName)
    {
        $this->from = $fileName;
    }

    /**
     * @param string $to
     */
    public function setTo(string $to)
    {
        $this->to = $to;
    }

    /**
     * @return string
     */
    public function copyFile()
    {
        return "Copy files from {$this->from} to {$this->to} using CloudFileSystem.";
    }
}

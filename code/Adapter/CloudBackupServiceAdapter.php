<?php

namespace Adapter;

/**
 * Class CloudBackupServiceAdapter is an Object Adapter
 * adapts BackupService interface to CloudFileSystem Object.
 */
class CloudBackupServiceAdapter implements BackupService
{
    /**
     * @var \Adapter\CloudFileSystem
     */
    private $cloudFileSystem;

    /**
     * @param \Adapter\CloudFileSystem $cloudFileSystem
     */
    public function __construct(CloudFileSystem $cloudFileSystem)
    {
        // Object Adapter should maintain a connection to its Adaptee instance.
        $this->cloudFileSystem = $cloudFileSystem;
    }

    /**
     * Implementing backup() method the adapter adapts BackupService to CloudFileSystem interface.
     *
     * @param string $source
     * @param string $destination
     */
    public function backup(string $source, string $destination)
    {
        $this->cloudFileSystem->setFrom($source);
        $this->cloudFileSystem->setTo($destination);
        $this->cloudFileSystem->copyFile();
    }
}

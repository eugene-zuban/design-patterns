<?php

namespace Adapter;

/**
 * Class CloudBackupServiceAdapter is an Object Adapter
 * adapts the BackupService interface to the CloudFileSystem object interface.
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
     * Implementing backup() method the adapter adapts BackupService to the CloudFileSystem interface.
     *
     * @param string $source
     * @param string $destination
     * @return string
     */
    public function backup(string $source, string $destination): string
    {
        $this->cloudFileSystem->setFrom($source);
        $this->cloudFileSystem->setTo($destination);

        return $this->cloudFileSystem->copyFile();
    }
}

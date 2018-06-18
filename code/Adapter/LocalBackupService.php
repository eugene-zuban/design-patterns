<?php

namespace Adapter;

/**
 * Class LocalBackupService is a Target class that client knows how to use.
 * @package Adapter
 */
class LocalBackupService implements BackupService
{

    public function backup(string $source, string $destination)
    {
        return "copying files from $source to $destination using Local Backup.";
    }
}

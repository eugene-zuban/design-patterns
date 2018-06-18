<?php

namespace Adapter;

/**
 * Class LocalBackupService is a Target class that client knows how to use.
 */
class LocalBackupService implements BackupService
{

    public function backup(string $source, string $destination): string
    {
        return "Copy files from {$source} to {$destination} using LocalBackupService.";
    }
}

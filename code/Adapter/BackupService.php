<?php

namespace Adapter;

/**
 * Interface BackupService is a Target interface.
 */
interface BackupService
{
    public function backup(string $source, string $destination): string;
}


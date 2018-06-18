<?php

namespace Adapter;

/**
 * Interface BackupService is a Target interface.
 * @package Adapter
 */
interface BackupService
{
    public function backup(string $source, string $destination);
}


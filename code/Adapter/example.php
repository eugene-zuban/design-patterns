<?php

require (__DIR__ . '/../../vendor/autoload.php');

/**
 * LocalBackupService implements the BackupService which is a "standard"
 * interface for the client, and the client does know how to use it.
 */
$backup = new \Adapter\LocalBackupService();
print $backup->backup('Original destination', 'Backup destination');
print PHP_EOL;

/**
 * Now use CloudBackupServiceAdapter that is compatible with the BackupService
 * interface but uses a CloudFileSystem object that client does not know.
 *
 * That's how the Adapter (CloudBackupServiceAdapter) adapts the Adaptee (CloudFileSystem) interface.
 * Because both the CloudBackupServiceAdapter and LocalBackupService implement the BackupService
 * we can pass their instances to any client that expects an BackupService instance.
 */
$cloudBackup = new Adapter\CloudBackupServiceAdapter(new \Adapter\CloudFileSystem());
print $cloudBackup->backup('Original destination', 'Backup destination');
print PHP_EOL;

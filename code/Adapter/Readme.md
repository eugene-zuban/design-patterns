## Adapter Pattern

Adapter Pattern is a Structural Pattern that adapts the interface of the unknown to Client interface into one that
Client knows how to use. Adapter pattern allows us to integrate a new unsupported interface into an existing system 
without altering that interface. We use object adapter as an example here. Class adapter uses a multiple inheritance
PHP does not support.

### UML

![composite.png](https://github.com/jack-zuban/design-patterns/blob/master/images/adapter.png)

### Participants
* `BackupService` is our Target interface that Client knows and expects.
* `LocalBackupService` implements `BackupService`. An object of this type Client knows how to use.
* `CloudFileSystem` is Adaptee, the class that we need to adapt. Client does not know how to use this type of object.
* `CloudBackupServiceAdapter` is an adapter that adapts a `CloudFileSystem` instance to the `BackupService` interface.

Client uses a `LocalBackupService` instance to do backups. With `CloudBackupServiceAdapter` it can do backups 
using an instance of the `CloudFileSystem` type without changing its (Client's) implementation.

More information about [Adapter Pattern](https://en.wikipedia.org/wiki/Adapter_pattern) on Wikipedia.

##Singleton Design Pattern

Singleton pattern allows to be sure a class has only once instance (object)

### Short description

All clients need to access the singleton only throught the instance() method. By making singleton's constructor
private we are sure that nobody outside the class can't create an instance of this class.
The $instance property stores the instance of the Singleton class, and static instance() method creates class's
object only if $instance property is null.

### More information about the Singleton pattern

More information about the [Singleton Pattern](https://en.wikipedia.org/wiki/Singleton_pattern) on Wikipedia

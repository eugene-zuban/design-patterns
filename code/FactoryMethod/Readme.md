##Method Factory

One of the Creational Patterns which defines an interface for creating an object, 
but factories subclasses are responsible for what type of object to create.

###Participants description

* `CarCreator` an interface for creating objects. Has a method `carFactory` whic represents a Factory Method.
* `HondaCreator` and `BmwCreator` - are concrete classes that create producs with `carFactory` methods. `HondaCreator` returns an instance of `HondaCar`,
and `BmwCreator` returns a `BmwCar` instance.
* `ProductCar` an abstract Product class which acts as an interface for products `HondaCar` and `BmwCar`.
* `HondaCar` and `BmwCar` are concreate classes - products of their factories. 
They are subclasses of the `ProductCar` abstract class and implement its abstract methods and have ability to override others.

### UML

![abstractFactory.png](https://github.com/jack-zuban/design-patterns/blob/master/images/methodFactory.png)

###Short description

A client uses one of the `BmwCreator` or `HondaCreator` factories for creating `BmwCar` or `HondaCar` product instance. 

The factory and product classes use their own interfaces (`CarCreator` and `ProductCar`), 
so it gives the ability to work with different type of products and factories similarly for a client.

The php file example.php and the factory test file show the idea of using the Factory Method pattern.

### More information about the Factory Method Pattern

More information about the [Factory Method Design Pattern](https://en.wikipedia.org/wiki/Factory_method_pattern) on Wikipedia

## Method Factory

One of the Creational Patterns which defines an interface for creating objects. It lets subclasses (Factories) to choose what objects to create.

### Participants description

* `CarCreator` an interface for creating objects, declares the factory method;
* `HondaCreator` and `BmwCreator` are concrete Factories that create products with `carFactory()` Factory Methods. `HondaCreator` returns an instance of `HondaCar`, and `BmwCreator` returns a `BmwCar` instance;
* `ProductCar` an abstract `Product` class defines the interface for objects that factory methods produces;
* `HondaCar` and `BmwCar` are concrete classes implement the ProductCar "interface".

### UML

![abstractFactory.png](https://github.com/jack-zuban/design-patterns/blob/master/images/methodFactory.png)

###Short description

A client uses one of the `BmwCreator` or `HondaCreator` factories for creating `BmwCar` or `HondaCar` product instances. 

The `Factory` and `Product` classes use their interfaces (`CarCreator` and `ProductCar`) which gives ability for a client to work with different types of products and factories similarly.

`example.php` file and the factory's test file show some ideas of how to use the Factory Method pattern.

### More information about the Factory Method Pattern

More information about the [Factory Method Design Pattern](https://en.wikipedia.org/wiki/Factory_method_pattern) on Wikipedia

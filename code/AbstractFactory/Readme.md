##Abstract Factory

This is a creational pattern that provides an interface for creating families of related objects.

###Participants description

* `Factory` an abstract factory - an interface for concrete factories. Client works through this interface for working
with concrete factories. Declares `CreateSuv` and `CreateMotorcycle` methods which forms the interface which client uses.
* `HondaFactory` and `BmwFactory` - are concrete factories for creating specific products (Honda and BMW respectively).
Using a one of the concrete factories by a client gives this client availability to create a specific family of products.
* `ProductSuv` and `ProductMotorcycle` are abstract classes that provide an interface for client to work with products that
were created with selected by the client concrete factory.
* `ProductMotorcycleBmw`, `ProductMotorcycleHonda`, `ProductSuvBmw`, `ProductSuvHonda` are concrete products that can be created
by their factories and accessible for the client through `ProductSuv` and `ProductMotorcycle` interface/methods.

### UML

![abstractFactory.png](https://github.com/jack-zuban/design-patterns/blob/master/images/abstractFactory.png)

###Short description

Client A can use a one of the Factories (`BmwFactory` or `HondaFactory`) for creating a specific, related to each other
products (SUVs or Motorcycles) that will be accessible through their interface - abstract classes `ProductSuv` for SUVs
and `ProductMotorcycle` for Motorcycles.

A one of the benefits of Abstract Factory, as we can see it in the `example.php`, is to use the same interface (provided by
`Factory`) for creating and working with different families of related products created by their factories.
And selecting a concrete factory by the client can guarantee that the client would use a related family of products.

The php file example.php and the factory test file show the idea of using the Abstract Factory pattern.

### More information about the Strategy pattern

More information about the [Abstract Factory Design Pattern](https://en.wikipedia.org/wiki/Abstract_factory_pattern) on Wikipedia

## Abstract Factory

Abstract Factory is a Creational Pattern provides an interface for creating families of related objects.

### Participants

* `Factory` provides the interface for creating products. Clients use that interface for getting products. Interface declares `CreateSuv` and `CreateMotorcycle` methods.
* `HondaFactory` and `BmwFactory`  are concrete factories for producing specific types of products (Honda and BMW respectively).
* `ProductSuv` and `ProductMotorcycle` are abstract products returned from `Factory`.
* `ProductMotorcycleBmw`, `ProductMotorcycleHonda`, `ProductSuvBmw`, `ProductSuvHonda` are concrete products `HondaFactory` and `BmwFactory` return.

### UML

![abstractFactory.png](https://github.com/jack-zuban/design-patterns/blob/master/images/abstractFactory.png)

### Short description

Client can use one of the Factories (`BmwFactory` or `HondaFactory`) for creating particular, related to a family type of products (SUVs and Motorcycles) that will be accessible through their interfaces, abstract classes `ProductSuv` and `ProductMotorcycle`.

One of the benefits of Abstract Factory, as we can see it in the `example.php`, is ability to use the same interface for creating different families of related products produced by their factories.

Selecting a concrete factory by the client can guarantee that client will use only the chosen family of products.

`example.php` and the Factory's test file show some ideas of how to use Abstract Factory pattern.

### More information about Abstract Factory pattern

More information about [Abstract Factory Design Pattern](https://en.wikipedia.org/wiki/Abstract_factory_pattern) on Wikipedia

##Abstract Factory

This is a Creational Rattern that provides an interface for creating families of related objects.

###Participants description

* `Factory` provides an interface for creating products. Clients are using this intercace for getting products. It specifies the `CreateSuv` and `CreateMotorcycle` methods.
* `HondaFactory` and `BmwFactory` - are concrete factories for producing a specific type products (Honda and BMW respectively).
* `ProductSuv` and `ProductMotorcycle` are abstract products returned from `Factory`. Declares methods for working with them.
* `ProductMotorcycleBmw`, `ProductMotorcycleHonda`, `ProductSuvBmw`, `ProductSuvHonda` are concrete products that `HondaFactory` and `BmwFactory` return.

### UML

![abstractFactory.png](https://github.com/jack-zuban/design-patterns/blob/master/images/abstractFactory.png)

###Short description

A client can use one of the Factories (`BmwFactory` or `HondaFactory`) for creating a particular, related to each other type of products (SUVs and Motorcycles) which will be accessible through their interfaces, abstract classes `ProductSuv` and `ProductMotorcycle`.

One of the benefits of Abstract Factory, as we can see it in the `example.php`, is using the same interface (provided by the `Factory`) for creating and working with different families of related products produced by their factories.

Selecting a concrete factory by the client can guarantee that the client will use only the chosen family of products.

`example.php` and the factory's test file provide an idea of using Abstract Factory pattern.

### More information about Abstract Factory pattern

More information about [Abstract Factory Design Pattern](https://en.wikipedia.org/wiki/Abstract_factory_pattern) on Wikipedia

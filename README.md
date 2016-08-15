## What is this repository for? ##

This repo includes Design Patterns and their implementations in PHP. Information about patterns which are described here can be found in the book "Design Patterns - Elements of Reusable Object-Oriented Software" by GOD and in Wikipedia.

I'm still working on it and plan to add new patterns periodically.

### Examples of Design Patterns on PHP###

#### Creational Patterns
* [Abstract Factory](https://github.com/jack-zuban/design-patterns/tree/master/code/AbstractFactory)
* [Factory Method] (https://github.com/jack-zuban/design-patterns/tree/master/code/FactoryMethod)
* [Singleton](https://github.com/jack-zuban/design-patterns/tree/master/code/Singleton)

#### Structural Patterns
* [Composite](https://github.com/jack-zuban/design-patterns/tree/master/code/Composite)
* [Decorator](https://github.com/jack-zuban/design-patterns/tree/master/code/Decorator)

#### Behavioral Patterns
* [Strategy](https://github.com/jack-zuban/design-patterns/tree/master/code/Decorator)

### How to use it? ###

* clone the repo `git clone https://github.com/jack-zuban/design-patterns.git`
* run `composer install` (if you don't have composer installed, here is a link how to do that: https://getcomposer.org/doc/00-intro.md)
* for running examples: Each design pattern has its `example.php` file with a simple code shows how the pattern can be used. This is a CLI PHP file and for executing the example go to the `code/{DesignPatternName}` directory and type `php example.php`
* for doing tests: in the project's root directory type `./vendor/bin/phpunit tests`


### Directories and files Structure ###

* the `code` directory includes sub-directories with Design Patterns. 
* Each sub-directory has a name one of the Design Pattern, like `Composite`
* Each design pattern has the `example.php` file with a simple code that shows how it works
* `tests` directory includes PHPUnit tests

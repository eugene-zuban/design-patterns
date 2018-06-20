## What is this repository for? ##

This Repo includes Design Patterns and their implementations in PHP. Detailed information about the patterns can be found in the "Design Patterns - Elements of Reusable Object-Oriented Software" book by GOD or in Wikipedia.

The work is still in progress.

### Examples of Design Patterns in PHP ###

#### Creational Patterns
* [Abstract Factory](https://github.com/jack-zuban/design-patterns/tree/master/code/AbstractFactory)
* [Factory Method](https://github.com/jack-zuban/design-patterns/tree/master/code/FactoryMethod)
* [Singleton](https://github.com/jack-zuban/design-patterns/tree/master/code/Singleton)

#### Structural Patterns
* [Adapter](https://github.com/jack-zuban/design-patterns/tree/master/code/Adapter)
* [Composite](https://github.com/jack-zuban/design-patterns/tree/master/code/Composite)
* [Decorator](https://github.com/jack-zuban/design-patterns/tree/master/code/Decorator)

#### Behavioral Patterns
* [Strategy](https://github.com/jack-zuban/design-patterns/tree/master/code/Strategy)

### How to use it? ###

* Clone the repo `git clone https://github.com/jack-zuban/design-patterns.git` or fork it;
* Run `composer install` (if you don't have a composer installed, here is a link: https://getcomposer.org/doc/00-intro.md);
* To run the examples: each design pattern has its `example.php` file with a simple code that shows how each pattern works. These are CLI PHP files. To execute an example, go to the `code/{DesignPatternName}` directory and type `php example.php`;
* To run the tests: in the project root directory type `./vendor/bin/phpunit tests`;


### Directories and files Structure ###

* `code` directory includes sub-directories with design patterns;
* Each sub-directory represents a separate Design Pattern;
* Each design pattern has its own `example.php` file with a sample code that shows how the current pattern works;
* `tests` directory contains PHPUnit tests;

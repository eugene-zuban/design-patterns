## What is this repository for? ##

This Repo includes Design Patterns and their implementations in PHP. Detailed information about the patterns can be found in the "Design Patterns - Elements of Reusable Object-Oriented Software" book by GOD or in Wikipedia.

The work is still in progress.

### Examples of Design Patterns in PHP ###

#### Creational Patterns
* [Abstract Factory](https://github.com/jack-zuban/design-patterns/tree/master/code/AbstractFactory)
* [Factory Method](https://github.com/jack-zuban/design-patterns/tree/master/code/FactoryMethod)
* [Singleton](https://github.com/jack-zuban/design-patterns/tree/master/code/Singleton)

#### Structural Patterns
* [Composite](https://github.com/jack-zuban/design-patterns/tree/master/code/Composite)
* [Decorator](https://github.com/jack-zuban/design-patterns/tree/master/code/Decorator)

#### Behavioral Patterns
* [Strategy](https://github.com/jack-zuban/design-patterns/tree/master/code/Strategy)

### How to use it? ###

* Clone the repo `git clone https://github.com/jack-zuban/design-patterns.git` or fork it;
* Run `composer install` (if you don't have a composer installed, here is a link: https://getcomposer.org/doc/00-intro.md);
* For running the examples: each design pattern has an `example.php` file with a simple code that shows how the pattern works. This is a CLI PHP file, for executing an example go to the `code/{DesignPatternName}` directory and type `php example.php`;
* For doing tests: in project root directory type `./vendor/bin/phpunit tests`;


### Directories and files Structure ###

* `code` directory includes sub-directories with Design Patterns;
* Each sub-directory represents a Design Pattern, like `Composite`;
* Each design pattern has `example.php` file with a sample code that shows how the pattern works;
* `tests` directory includes PHPUnit tests;

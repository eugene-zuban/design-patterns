### What is this repository for? ###

This repo includes implementation on PHP of Design Patterns described in "Design Patterns Elements of Reusable Object-Oriented Software" book by Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides.

I'm still working on it and plan to add new Design Patterns when they will be ready.

### Examples of Design Patterns ###

* [Composite](https://github.com/jack-zuban/design-patterns/tree/master/code/Composite)
* [Strategy](https://github.com/jack-zuban/design-patterns/tree/master/code/Decorator)
* [Singleton](https://github.com/jack-zuban/design-patterns/tree/master/code/Singleton)
* [Decorator](https://github.com/jack-zuban/design-patterns/tree/master/code/Decorator)

### How to use it? ###

* clone the repo `git clone https://github.com/jack-zuban/design-patterns.git`
* run `composer install` (if you don't have a composer installed, here is a link how to do it https://getcomposer.org/doc/00-intro.md)
* for running examples: Each design pattern has `example.php` file with a simple code that shows how a specific pattern can be used. This is a CLI PHP file and for executing an example go to `code/{DesignPatternName}` directory and type `php example.php`
* for doing tests: in the project's root directory type `./vendor/bin/phpunit tests`


### Directories and files Structure ###

* the `code` directory includes sub-directories with Design Patterns. 
* Each sub-directory has a name one of a Design Pattern, like `Composite`
* Each design pattern has the `example.php` file with a simple code that shows how it works
* `tests` directory includes PHPUnit tests

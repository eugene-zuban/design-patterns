### What is this repository for? ###

This repo includes implementation on PHP of Design Patterns described in "Design Patterns Elements of Reusable Object-Oriented Software" book by Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides.

I'm still working on it and plan to add new Design Patterns when they will be ready.

### Examples of Design Patterns ###

* Composite


### How to use it? ###

* clone the repo `git clone git@bitbucket.org:jack-zuban/design-patterns.git`
* run `composer install` (if you don't have composer here is a link how to install it https://getcomposer.org/doc/00-intro.md)
* for running examples: Each design pattern has `example.php` file with a simple code that shows how it works. This is a CLI PHP file, for execute this example go to `code/{DesignPatternName}` directory and type `php example.php`
* for doing tests: in the project's root directory type `./vendor/bin/phpunit tests` from project's root directory


### Directories and files Structure ###

* the `code` directory includes sub-directories with Design Patterns. 
* Each sub-directory has a name one of the Design Pattern, like `Composite`
* Each design pattern has `example.php` file with a simple code that shows how it works
* `tests` directory includes PHPUnit tests

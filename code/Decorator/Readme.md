##Decorator Design Pattern

The main idea of this patter is to add behaviours (to decorate) for individual objects dynamically and transparently.
It's a flexible alternative to subclussing. It represents a "light" version of Strategy Pattern which changes not only
an object's look but also its main algorithm.

Using a decorator we can add to object a new functionality dynamically without affecting it. We can make a chain of
changes that will add different "views/skins".

### Usage example (based on the current Decorator realization)

Let's say that we have some HTML output system with the TextElement and ImageElement classes/instances on it. We want
to be able rendering them with different wrappers (HTML tags like: div, span, p, etc). Also, we want to be able to
add new wrappers easily without changing our Element classes, to be able to use them in any order and to nest them with one
another (make a nested chain).

We can do this easily with Decorator pattern.

### Decorator pattern UML

![decorator.png](https://github.com/jack-zuban/design-patterns/blob/master/images/decorator.png)

### Description of the current Decorator realization

* `ElementInterface` the main interface for all the classes. It declares the `renderElement()` method.
* `TextElement` Simply renders a given string using the `renderElement()` method without changit it.
* `ImageElement` class for creating an image HTML element. `renderElement()` renders html img tag with `src` and
`Alt text` from arguments.
* `Decorator` is abstract class that implements `ElementInterface`.
* `SpanDecorator` and `DivDecorator` are concrete Decorator classes which adds various "decorations" by overriding `renderElement()`
and passing the request on to `element` (calling parent's `renderElement()` method).

### More information about the Decorator pattern

More information about the [Decorator Design Pattern](https://en.wikipedia.org/wiki/Decorator_pattern) on Wikipedia

##Decorator Design Pattern

The main idea of this patter is to add behaviours (to decorate) for individual objects dynamically and transparently.
It's a flexible alternative to subclussing. It represents a "light" version of Strategy Pattern which changes not only
an object's look but also its main algorithm.

Using a decorator we can add to object a new functionality dynamically without affecting it. We can make a chain of
changes that will add different "views/skins".

### Usage example (based on the current Decorator realization)

Let's say that we have some HTML output system with the TextElement and ImageElement classes/instances on it. We want
to be able rendering them with different wrappers (HTML tags like: div, span, p, etc). Also, we want to be able to
add new wrappers easily without changing our Element classes, be able to use them in any order, and to nest with one
another (make a nested chain).

We can do this easily with Decorator pattern.

### Decorator pattern UML

![decorator.png](https://github.com/jack-zuban/design-patterns/blob/master/images/decorator.png)

### Decorator example description

* `ElementInterface` the main interface for all classes. Declares the `renderElement()` method that needs to be
implemented in all classes.
* `TextElement` Simply renders a given string using the `renderElement()` method.
* `ImageElement` class for creating the image HTML element. `renderElement()` renders image with `src` and
`Alt text` from arguments.
* `Decorator` an abstract class implements `ElementInterface`.
* `SpanDecorator` and `DivDecorator` are concrete Decorator classes that add various "decorations" overriding `renderElement()`
method and passes the request on to `element` (calling parent's `renderElement()` method.

### More information about the Decorator pattern

More information about the [Decorator Design Pattern](https://en.wikipedia.org/wiki/Decorator_pattern) on Wikipedia

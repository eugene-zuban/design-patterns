##Decorator Design Pattern

The main idea of this patter is to add (decorate) behaviours to individual objects dynamically and transparently.
It's a flexible alternative to subclussing. It represents a "light" version of Strategy Pattern which changes not only
an object's look but also its main algorithm.

Using a decorator we can add to an object a new functionality dynamically without affecting it. We can make a chain of changes that will
add different "views/skins" to it.

### Usage example (based on current Decorator realization)

Let's say that we have some HTML output system with the Text Node and Image Node objects on it. We want to be able to
render them with different wrappers (different HTML tags like div, span, p, etc). Also we want to be able to create new
wrappers easily without changing our Node classes and to be able to use them in different orders and nest with one
another (make a nested chain).

We can do this easily with Decorator pattern.

### Decorator pattern UML

![decorator.png](https://bitbucket.org/repo/y6Bge8/images/3038540350-decorator.png)

### Decorator example description

* `ElementInterface` main interface for all classes. Declares the `renderElement()` method that needs to be instantiated
in all classes
* `TextElement` represents a Text Node. Simply renders a string without changing with its `renderElement()` method
* `ImageElement` is a class for creating the Image Nodes. Its `renderElement()` method renders image with `src` and
`Alt text` from its arguments.
* `Decorator` an abstract class implements `ElementInterface` and using for extending by Decorators subclasses.
* `SpanDecorator` and `DivDecorator` are concrete classes that add various "decorations" in their `renderElement()`
methods and calls element's `renderElement()` method directly through `element` reference (with has the
ElementInterface's type and can be TextElement or ImageElement object or one of the other decorators).


### More information about the Decorator pattern

More information about the [Decorator Design Pattern](https://en.wikipedia.org/wiki/Decorator_pattern) on Wikipedia

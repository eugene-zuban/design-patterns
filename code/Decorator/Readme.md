## Decorator Design Pattern

Main idea of this pattern is to add additional behaviors (decorating) for individual objects dynamically and transparently. It's a flexible alternative to subclassing. It represents a "light" version of Strategy Pattern which changes not only an
object's look but also changes its main algorithm.

Using Decorator, we can add to object new functionality dynamically without affecting it directly. We can make a chain of changes that will add different "views/skins".

### Example of usage (based on the current Decorator realization)

Suppose we have an HTML output system with `TextElement` and `ImageElement` classes that represent a text element without any tags, and the `<img>` tag. Now we want to be able to render those elements using different wrappers (HTML tags like `<div>`, `<span>`, `<p>,` etc.). Also, we want to be able to add new wrappers quickly without changing our basic elements classes and to be able to use them in any order (chaining, nesting, etc.).

We can do that very easily with Decorator Pattern.

### Decorator pattern UML

![decorator.png](https://github.com/jack-zuban/design-patterns/blob/master/images/decorator.png)

### Description of the current Decorator realization

* `ElementInterface` main interface for all the element classes. It declares plain output, the `renderElement()` method;
* `TextElement` renders given string using `renderElement()` method without changing it;
* `ImageElement` a class for creating `<img>` HTML tag with given `src` and `alt`. `renderElement()` renders `<img>` tag with `src` and `alt` strings without changing them.
* `Decorator` is an abstract class that implements `ElementInterface` and provides no decoration at all.
* `SpanDecorator` and `DivDecorator` extend `Decorator` class, they add various "decorations" by adding additional html elements to the parent's `renderElement()` output, and as a part of decoration, they directly call parent's `renderElement()` method for getting its output.

### More information about the Decorator pattern

More information about the [Decorator Design Pattern](https://en.wikipedia.org/wiki/Decorator_pattern) on Wikipedia

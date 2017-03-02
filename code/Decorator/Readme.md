##Decorator Design Pattern

The main idea of the pattern is to add additional behaviors (decorating) for individual objects dynamically and transparently. It's a flexible alternative to subclassing. It represents a "light" version of a Strategy Pattern which changes not only
object's look but also its main algorithm.

Using Decorator, we can add to object new functionality dynamically without affecting the original object. We can make a chain of changes that will add different "views/skins".

### Example of usage (based on the current Decorator realization)

Suppose we have a simple HTML output system with `TextElement` and `ImageElement` classes that represent a simple text element without any tags, and a simple <img> tag. Now we want to be able to render these elements using different wrappers (HTML tags like <div>, <span>, <p>, etc.). Also, we want to be able to add new wrappers quickly and without changing our basic element classes and to be able to use them in any order (chaining, nesting, etc.).

We can do that very easily using the Decorator pattern.

### Decorator pattern UML

![decorator.png](https://github.com/jack-zuban/design-patterns/blob/master/images/decorator.png)

### Description of the current Decorator realization

* `ElementInterface` main interface for all the element classes. It declares a simple output, the `renderElement()` method;
* `TextElement` simply renders a given string using `renderElement()` method without changing the given string;
* `ImageElement` a class for creating a <img> HTML tag with given src and alt strings. `renderElement()` renders <img> tag these strings without changing them.
* `Decorator` is an abstract class that implements `ElementInterface` and provides a default empty decoration.
* `SpanDecorator` and `DivDecorator` extend `Decorator` class, they add various "decorations" by adding additional html elements to the parent's `renderElement()` output, and as a part of decoration, they directly call parent's `renderElement()` method for getting its output.

### More information about the Decorator pattern

More information about the [Decorator Design Pattern](https://en.wikipedia.org/wiki/Decorator_pattern) on Wikipedia

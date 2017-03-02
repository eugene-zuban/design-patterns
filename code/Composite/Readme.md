##Composite Design Pattern

Composite is a Structural Pattern that composes objects into tree structures . It lets clients to treat individual objects and their compositions uniformly.

### Participants
* `Price` an interface defines operations with prices (get and set prices);
* `Operations` an interface specifies operations of a composite part (add a part, remove a part, get all parts);
* `Equipment` an abstract class that represents a composite object and implements Operations and Price interfaces;
* `Part` a concrete class (leaf) for a simple part without children, extends the abstract Equipment class and overrides its composite's methods (removing ability to add/remove children);
* `CompositePart` a concrete class that represents a Composite. Composite is a set of simple Parts or another CompositeParts with operations for adding new or removing specific parts/composites from it. And with operations for traversing along them.

### UML

![composite.png](https://github.com/jack-zuban/design-patterns/blob/master/images/composite.png)

### More information about Composite

More information about [Composite Design Pattern](https://en.wikipedia.org/wiki/Composite_pattern) on Wikipedia

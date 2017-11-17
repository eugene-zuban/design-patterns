## Strategy Design Pattern

Strategy pattern lets client to use different algorithms through the same interface (Strategy) and gives the ability to change the algorithms based on client's needs.

### Classes description

* `Formatter` is the Strategy. An abstract class declares a common method for formatting a given message.
* `MmsFormatter`, `SmsFormatter` and `EmailFormatter` are `ConcreteStrategy`s. They implement different formatting algorithms.
* `Message` class represents a `Context (Composition)`. Stores a message and uses one of the `ConcreteStrategy` for formatting it.

### Short description

With Strategy pattern, we give the client ability to choose different strategies (algorithms) using the same interface. Client needs to choose which algorithm to use in a particular case. Different algorithms are different Concrete Strategies: `MmsFormatter`, `EmailFormatter` and `SmsFormatter`.

If we need to add a new formatter (an algorithm), we don't need to change the client's communication code or our Context class (`Message`), instead we need to add a new `ConcreteStrategy` Class implementing the new algorithm and select it in the client.

### Plain description

When we want to use a different algorithm for a particular situation, we can select the algorithm using `if` or `switch` statement. Doing that leads to a complicated code because every time when we need to add a new algorithm we will have to change the client's code. 

Using Strategy pattern we can separate the context from algorithms realization, so we can quickly choose which algorithm to use in different situations based on the current environment/context. 

In this example, we use the `Message` object as our `Context`, and one of the `Formatter`s as its message formatting algorithm. Strategy Pattern allows us to switch/use different formatter algorithms without changing the `Message` class. When creating a new `Message` object we are selecting what formatting algorithm to use.

### More information about the Strategy pattern

More information about the [Strategy Design Pattern](https://en.wikipedia.org/wiki/Strategy_pattern) on Wikipedia

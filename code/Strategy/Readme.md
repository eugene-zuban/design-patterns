##Strategy Design Pattern

Strategy pattern lets a client to use different algorithms through the same interface (Strategy) and gives ability to change the algorithms based on client's needs.

###Classes description

* `Formatter` is our Strategy. Abstract class declares a common method for doing formatting a message.
* `MmsFormatter`, `SmsFormatter` and `EmailFormatter` are ConcreteStrategy. Implement different formatting algorithms.
* `Message` class represents a Context (Composition). Stores the message and uses one of the `ConcreteStrategy` for formatting it.

### Short description

With Strategy pattern, we give the client ability to choose a different strategy (algorithm) using the same interface. Client needs to choose which algorithm to use in a particular case. Different algorithms are different Concreate Strategies: `MmsFormatter`, `EmailFormatter` and `SmsFormatter`.

If we need to add a new formatter (algorithm), we don't need to change the client's communication code or our Context class (`Message`), we just need to add a new ConcreteStrategy Class implementing the new algorithm and select it by the client.

### Plain description

When we want to use a different algorithm for a particular situation, we can select the algorithm using `if` or `switch` statement.

By doing that we will create a more complicated code and whenever we need to add new algorithms we have to change
the client's code. With Strategy pattern, we can separate the context from algorithms realization, and we can quickly choose what algorithm to use in a different situation with the current environment/context. 

In this example, we use the `Message` object as our Context and one of the Formatters as its message formatting algorithm. Strategy pattern allows us to switch/use different formatter algorithms without changing the `Message` class. When creating a new Message object we are specifying what formatting algorithm to use.

### More information about the Strategy pattern

More information about the [Strategy Design Pattern](https://en.wikipedia.org/wiki/Strategy_pattern) on Wikipedia

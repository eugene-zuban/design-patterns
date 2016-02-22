##Strategy Design Pattern

Strategy pattern lets client (Composition) to use different algorithms through the same interface (Strategy).

###Classes description

* `FormatterInterface` an interface declares the `formatMessage` method.
* `Formatter` is a Strategy (Compositor). Abstract class declares a common method for doing formatting a message.
* `MmsFormatter`, `SmsFormatter` and `EmailFormatter` are ConcreteStrategy. Implements the formatting algorithms using the Strategy interface.
* `Message` class represents a Context (Composition). Stores a message and uses one of the ConcreteStrategy for formatting it.

### Short description

With the Strategy design Pattern we can use the same interface (declared in the `Formatter` class) for doing different formatting message using one of the formatters: MmsFormatter, SmsFormatter or EmailFormatter.
If we need to add a new formatter we don't need to change a client or context class (`Message`), we just add a new ConcreteStrategy Class implementing a new Formatter.

### Plain description

When we want to use a different algorithm for a specific situation we can select the algorithm by doing `if` or `switch` statement.
By doing that we will create a more complicated code structure and every time when we need to add a new algorithms we have to change
the client's code. With Strategy pattern we can separate the context from algorithms realization, and we can easily chose what algorithm
to use in a different situation with current context.

In this example we use a Message object as a context, and one of the Formatters as its message formatter. Strategy pattern
allows to switch/use a different formatter algorithms without changing/modifying the `Message` class. While creating a Message object we specify
what a formatter algorithm to use.

### More information about the Strategy pattern

More information about the [Strategy Design Pattern](https://en.wikipedia.org/wiki/Strategy_pattern) on Wikipedia

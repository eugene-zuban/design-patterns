##Strategy Design Pattern

Strategy pattern lets client (Composition) to use different algorithms through the same interface (Strategy)

###Classes description

* `FormatterInterface` an interface declares the `formatMessage` method.
* `Formatter` is a Strategy (Compositor). Abstract class declarres a common method for doing formatting a message.
* `MmsFormatter`, `SmsFormatter` and `EmailFormatter` are ConcreteStrategy. Implements the formatting algorithms using the Strategy interface.
* `Message` class represetns a Context (Composition). Stores a message and uses one of the ConcreteStrategy for formatting it.

### Short description

With the Strategy design Pattern we can use the same interface (declared in the `Formatter` class) for doing different formatting message using one of the formatters: MmsFormatter, SmsFormatter or EmailFormatter.
If we need to add a new formatter we don't need to change a client or context class (`Message`), we just add a new ConcreteStrategy Class implementing a new Formatter.

More information about the [Strategy Design Pattern](https://en.wikipedia.org/wiki/Strategy_pattern) on Wikipedia

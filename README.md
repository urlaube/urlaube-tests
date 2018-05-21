# Urlaube Tests
The Urlaube test suite contains the tests written against [Urlaub.be](https://github.com/urlaube/urlaube).

## Installation
To run the tests you have to clone this repository alongside the [Urlaub.be](https://github.com/urlaube/urlaube) repository:
```
git clone https://github.com/urlaube/urlaube
git clone https://github.com/urlaube/urlaube-tests
```

## Usage
To run the tests you have to call the `./tests.php` file:
```
cd ./urlaube-tests
php ./tests.php
```

## Tests
The following tests have been implemented at the moment.

### Base
This test checks the functionality of the `Base` core class, namely the magic function `<NAME>()` derived from the getter function `get<Name>()` and setter function `set<Name>($value)`.

### Config
This test checks the functionality of the `Config` core class, namely the mapping of the magic function `HANDLER()` onto the configuration array of handlers.

### Content
This test checks the functionality of the `Content` core class, namely getting and setting values.

### Debug
This test checks the functionality of the `Debug` core class, namely using the debug level feature.

### Translatable
This test checks the functionality of the `Translatable` core class, namely loading and executing translations.


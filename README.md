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

### Content
This test checks the functionality of the `Content` core class, namely getting and setting values.

### Logging
This test checks the functionality of the `Logging` core class, namely using the log level feature.

### Translate
This test checks the functionality of the `Translate` core class, namely loading and executing translations.

# Foobar

A PHP library for highlighting code syntax.

## Installation

```bash
composer require ratipriya/php-highlight-example
```

## Usage

```php
<?php

require_once __DIR__.'/vendor/autoload.php';

use Ratipriya\PHPHighlight\ColorsDto;
use Ratipriya\PHPHighlight\Highlighter;

$text = '
<?php

abstract class AbstractClass
{
    /**
     * Our abstract method only needs to define the required arguments
     */
    abstract protected function prefixName(string $name): string;
}

class ConcreteClass extends AbstractClass
{
    /**
     * Our child class may define optional arguments not in the parent\'s signature
     */
    public function prefixName(string $name): string
    {
        if ($name === "Pacman") {
            $prefix = "Mr.";
        } else {
            $prefix = "Mrs.";
        }
        
        return $prefix . " " . $name;
    }
}

$class = new ConcreteClass;
echo $class->prefixName("Pacman"), "\n";
echo $class->prefixName("Pacwoman"), "\n";
';

$vs2015 = new ColorsDto(
    '#DCDCDC',
    '#1E1E1E',
    '#57A64A',
    '#fbc201',
    '#569CD6; font-weight: bold',
    '#D69D85'
);

$highlighter = new Highlighter($text, $vs2015);
echo $highlighter->highlight();
```

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)
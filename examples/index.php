<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHPHighlight example</title>
    <style>
        body {
            background-color: #1E1E1E;
        }
    </style>
</head>
<body>

<?php

// Show all errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

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

?>
</body>
</html>
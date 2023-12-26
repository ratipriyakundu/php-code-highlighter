<?php

namespace Ratipriya\PHPHighlight\Tests;

use PHPUnit\Framework\TestCase;
use Ratipriya\PHPHighlight\ColorsDto;
use Ratipriya\PHPHighlight\Highlighter;

final class HighlighterTest extends TestCase
{
    public function testHighlight(): void
    {
        $text = '
            <?php
            public function prefixName(string $name, string $separator = "."): string
                $prefix = "";
                if ($name == "Pacman") {
                    $prefix = "Mr";
                } else {
                    $prefix = "Mrs";
                }
                
                return $prefix . $separator . $name;
            }
        ';

        $vs2015 = new ColorsDto(
            '#DCDCDC',
            '#1E1E1E',
            '#57A64A',
            '#fbc201',
            '#569CD6; font-weight: bold',
            '#D69D85',
        );
        $highlighter = new Highlighter($text, $vs2015);
        $res = $highlighter->highlight();

        $this->assertGreaterThan(0, strlen($res), 'The text must exist');
        $this->assertEquals(2980, strlen($res));
    }
}

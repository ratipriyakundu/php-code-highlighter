<?php

namespace Ratipriya\PHPHighlight;

final class Highlighter
{
    public function __construct(
        private readonly string    $text,
        private readonly ColorsDto $colorsDto,
    )
    {
    }

    public function highlight(): bool|string
    {
        $this->applyColors();

        return highlight_string($this->text, true);
    }

    private function applyColors(): void
    {
        ini_set('highlight.default', $this->colorsDto->getDefault());
        ini_set('highlight.bg', $this->colorsDto->getBg());
        ini_set('highlight.comment', $this->colorsDto->getComment());
        ini_set('highlight.html', $this->colorsDto->getHtml());
        ini_set('highlight.keyword', $this->colorsDto->getKeyword());
        ini_set('highlight.string', $this->colorsDto->getString());
    }
}

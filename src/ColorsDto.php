<?php

namespace Ratipriya\PHPHighlight;

final class ColorsDto
{
    public function __construct(
        private readonly string $default,
        private readonly string $bg,
        private readonly string $comment,
        private readonly string $html,
        private readonly string $keyword,
        private readonly string $string,
    ) {
    }

    public function getDefault(): string
    {
        return $this->default;
    }

    public function getBg(): string
    {
        return $this->bg;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function getHtml(): string
    {
        return $this->html;
    }

    public function getKeyword(): string
    {
        return $this->keyword;
    }

    public function getString(): string
    {
        return $this->string;
    }
}

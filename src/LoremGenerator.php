<?php

namespace YourVendor\LoremGenerator;

class LoremGenerator
{
    protected $words = [
        'Lorem', 'ipsum', 'dolor', 'sit', 'amet', 'consectetur', 'adipiscing',
        'elit', 'sed', 'do', 'eiusmod', 'tempor', 'incididunt', 'ut', 'labore',
        'et', 'dolore', 'magna', 'aliqua'
    ];

    /**
     * Generate Lorem Ipsum text with the specified number of words.
     *
     * @param int $wordCount
     * @return string
     */
    public function generate(int $wordCount): string
    {
        $lipsum = [];

        for ($i = 0; $i < $wordCount; $i++) {
            $lipsum[] = $this->words[array_rand($this->words)];
        }

        return implode(' ', $lipsum) . '.';
    }
}

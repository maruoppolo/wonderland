<?php
/**
 * Minification Engine
 */
class Wonderland_Minify {
    protected $html = '';

    public function __construct($html) {
        $this->html = $this->minifyHTML((string)$html);
    }

    public function __toString(): string {
        return $this->html ?? '';
    }

    protected function minifyHTML($html) {
        if (empty($html)) return '';

        $search = array(
            '//' => '',
            '/\(?:\r\n|\r|\n)/' => '',
            '/\t/'              => '',
            '/\s+/'             => ' ',
        );

        $minified = preg_replace(array_keys($search), array_values($search), $html);
        
        return ($minified !== null) ? $minified : $html;
    }
}
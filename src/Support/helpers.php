<?php

/**
 * @param string $text
 * @return string
 */
function parsedownextra($text)
{
    /**
     * @var Parsedown $parser
     */
    $parser = app('parsedownextra');

    return $parser->text($text);
}

<?php

if (!function_exists('greating')) {
    function greating($name): string
    {
        return "Hello {$name}!";
    }
}

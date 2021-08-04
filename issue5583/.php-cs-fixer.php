<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
;

return (new PhpCsFixer\Config())
    ->setFinder($finder)
    ->setRules([
        'braces' => true,
    ])
    ->setLineEnding("\n")
;

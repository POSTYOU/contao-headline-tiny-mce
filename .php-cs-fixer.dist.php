<?php

declare(strict_types=1);

$header = <<<'EOF'
    This file is part of postyou/headline-tiny-mce.

    (c) POSTYOU Werbeagentur

    @license LGPL-3.0+
    EOF;

$finder = PhpCsFixer\Finder::create()
    ->exclude('templates')
    ->in([
        __DIR__.'/src',
        __DIR__.'/contao',
    ])
;

$config = new PhpCsFixer\Config();

return $config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PHP81Migration' => true,
        '@PHP80Migration:risky' => true,
        '@PhpCsFixer' => true,
        '@PhpCsFixer:risky' => true,
        'header_comment' => ['header' => $header],
    ])
    ->setFinder($finder)
;

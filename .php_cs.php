<?php

$finder = \PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude([
        'bootstrap',
        'storage',
        'vendor'
    ])
    ->name('*.php')
    ->notName('*.blade.php')
    ->notName('_ide_helper*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return \PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'ordered_imports' => ['sortAlgorithm' => 'alpha'],
        'no_unused_imports' => true,
    ])
    ->setFinder($finder);

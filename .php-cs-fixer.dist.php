<?php declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in([__DIR__])
    ->notPath(['.git/', '.github/', 'vendor/'])
;

$config = new PhpCsFixer\Config();

return $config
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'array_syntax' => ['syntax' => 'short'],
        'blank_line_after_opening_tag' => false,
        'blank_line_before_statement' => [
            'statements' => [
                'break',
                'continue',
                'return',
                'switch',
                'throw',
                'try',
            ],
        ],
        'blank_lines_before_namespace' => false,
        'declare_strict_types' => true,
        'fopen_flags' => true,
        'linebreak_after_opening_tag' => false,
        'method_chaining_indentation' => true,
        'no_useless_else' => true,
        'no_superfluous_phpdoc_tags' => ['allow_mixed' => true],
        'ordered_imports' => true,
        'php_unit_mock' => true,
        'protected_to_private' => false,
        'single_line_empty_body' => true,
    ])
    ->setFinder($finder);

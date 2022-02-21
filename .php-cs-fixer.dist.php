<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
  ->in([
    __DIR__ . '/app',
    __DIR__ . '/config',
    __DIR__ . '/database',
    __DIR__ . '/routes',
    __DIR__ . '/tests',
  ]);

$config = new PhpCsFixer\Config();

return $config
  ->setRiskyAllowed(true)
  ->setRules([
    '@PSR12' => true, //phpintelephenseと同じ
    'trim_array_spaces' => true, //func( arg ) => func(arg);
    'class_attributes_separation' => true, //use HasApiTokens, HasFactory, Notifiable; これが縦にならないように
  ])
  ->setFinder($finder)
  ->setCacheFile(__DIR__ . '/.php-cs-fixer.cache');

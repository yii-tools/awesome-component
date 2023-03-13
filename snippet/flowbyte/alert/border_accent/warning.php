<?php

declare(strict_types=1);

return [
    'bodyContainer()' => [true],
    'bodyContainerClass()' => ['ml-3 text-sm font-medium'],
    'bodyTemplate()' => ['{body}'],
    'bodyTag()' => [null],
    'buttonAttributes()' => [['data-dismiss-target' => '#alert-border-1', 'aria-label' => 'Close']],
    'buttonText()' => ['<span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i>'],
    'buttonClass()' => ['ml-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-yellow-300 dark:hover:bg-gray-700'],
    'class()' => ['flex items-center justify-center p-4 mb-4 text-yellow-800 border-t-4 border-yellow-300 bg-yellow-50 dark:text-yellow-300 dark:bg-gray-800 dark:border-yellow-800'],
    'prefix()' => ['<i class="fa-solid fa-circle-exclamation fa-lg"></i>'],
    'template()' => ['{prefix}{body}{button}{suffix}'],
];

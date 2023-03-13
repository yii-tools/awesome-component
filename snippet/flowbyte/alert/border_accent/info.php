<?php

declare(strict_types=1);

return [
    'bodyContainer()' => [true],
    'bodyContainerClass()' => ['ml-3 text-sm font-medium'],
    'bodyTemplate()' => ['{body}'],
    'bodyTag()' => [null],
    'buttonAttributes()' => [['data-dismiss-target' => '#alert-border-1', 'aria-label' => 'Close']],
    'buttonText()' => ['<span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i>'],
    'buttonClass()' => ['ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700'],
    'class()' => ['flex items-center justify-center p-4 mb-4 text-blue-800 border-t-4 border-blue-300 bg-blue-50 dark:text-blue-400 dark:bg-gray-800 dark:border-blue-800'],
    'prefix()' => ['<i class="fa-solid fa-circle-exclamation fa-lg"></i>'],
    'template()' => ['{prefix}{body}{button}{suffix}'],
];

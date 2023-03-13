<?php

declare(strict_types=1);

return [
    'bodyClass()' => ['ml-4'],
    'bodyContainer()' => [true],
    'bodyContainerClass()' => ['flex'],
    'bodyTag()' => ['div'],
    'bodyTemplate()' => ['{icon}{body}'],
    'buttonClass()' => ['float-right px-4 py-3'],
    'buttonOnClick()' => ['closeAlert()'],
    'buttonText()' => ['<span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i>'],
    'class()' => ['bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md'],
    'iconClass()' => ['fa fa-info-circle fa-lg not-italic'],
    'iconContainer()' => [],
    'iconContainerClass()' => ['py-4'],
    'template()' => ['{button}' . PHP_EOL . '{body}'],
];

<?php

declare(strict_types=1);

return [
    'body()' => ['Something not ideal might be happening.'],
    'bodyClass()' => ['align-middle inline-block mr-8 px-4 py-3'],
    'bodyContainer()' => [true],
    'bodyContainerClass()' => ['bg-green-100 border border-green-400 border-t-0 rounded-b text-green-700'],
    'bodyTemplate()' => ['{body}'],
    'buttonClass()' => ['float-right px-4 py-3'],
    'buttonOnClick()' => ['closeAlert()'],
    'buttonText()' => ['<span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i>'],
    'headerClass()' => ['font-semibold'],
    'headerContainer()' => [],
    'headerContainerClass()' => ['bg-green-500 font-bold px-4 py-2 rounded-t text-white'],
    'headerTemplate()' => ['{button}{header}'],
];

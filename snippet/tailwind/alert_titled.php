<?php

declare(strict_types=1);

return [
    'body()' => ['Something not ideal might be happening.'],
    'bodyClass()' => ['align-middle inline-block mr-8 px-4 py-3'],
    'bodyContainer()' => [true],
    'bodyContainerClass()' => ['bg-red-100 border border-red-400 border-t-0 rounded-b text-red-700'],
    'buttonClass()' => ['float-right px-4 py-3'],
    'buttonOnClick()' => ['closeAlert()'],
    'headerClass()' => ['font-semibold'],
    'headerContainer()' => [],
    'headerContainerClass()' => ['bg-red-500 font-bold px-4 py-2 rounded-t text-white'],
    'headerTemplate()' => ['{header}'],
];

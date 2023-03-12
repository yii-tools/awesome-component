<?php

declare(strict_types=1);

return [
    'bodyClass()' => ['align-middle inline-block flex-grow mr-8'],
    'bodyContainer()' => [true],
    'bodyContainerClass()' => ['flex'],
    'buttonClass()' => ['float-right px-4 py-3'],
    'buttonOnClick()' => ['closeAlert()'],
    'class()' => ['bg-green-100 border-t-4 border-green-500 px-4 py-3 rounded-b shadow-md text-green-900'],
    'iconClass()' => ['not-italic'],
    'iconContainerClass()' => ['fill-current h-6 mr-4 py-1 text-green-500 w-6'],
    'layoutBody()' => ['{icon}{body}{button}'],
];

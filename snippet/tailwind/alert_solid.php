<?php

declare(strict_types=1);

return [
    'bodyClass()' => ['align-middle flex-grow inline-block mr-8'],
    'bodyTag()' => ['p'],
    'buttonClass()' => ['float-right px-4 py-3'],
    'buttonOnClick()' => ['closeAlert()'],
    'class()' => ['bg-blue-500 flex font-bold items-center px-4 py-3 text-sm text-white'],
    'iconClass()' => ['pr-2'],
    'layoutBody()' => ['{icon}{body}{button}'],
];

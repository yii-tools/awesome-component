<?php

declare(strict_types=1);

return [
    'bodyClass()' => ['align-middle flex-grow inline-block mr-8'],
    'bodyTag()' => ['p'],
    'bodyTemplate()' => ['{icon}{body}{button}'],
    'buttonClass()' => ['float-right px-4 py-3'],
    'buttonOnClick()' => ['closeAlert()'],
    'buttonText()' => ['<span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i>'],
    'class()' => ['bg-yellow-500 flex font-bold items-center px-4 py-3 text-sm text-white'],
    'iconClass()' => ['pr-2'],
    'iconText()' => ['i'],
];

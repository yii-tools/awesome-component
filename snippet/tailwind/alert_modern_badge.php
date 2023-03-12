<?php

declare(strict_types=1);

return [
    'bodyClass()' => ['flex-auto font-semibold mr-2 text-left'],
    'bodyContainer()' => [true],
    'bodyContainerClass()' => ['bg-gray-800 p-2 flex items-center leading-none lg:inline-flex lg:rounded-full'],
    'buttonClass()' => ['bottom-0 px-4 py-3 right-0 top-0'],
    'buttonOnClick()' => ['closeAlert()'],
    'class()' => ['bg-gray-900 lg:px-4 py-4 text-center text-white'],
    'iconClass()' => ['not-italic'],
    'iconContainerClass()' => ['bg-gray-500 flex font-bold ml-2 mr-3 px-2 py-1 rounded-full text-xs uppercase'],
    'layoutBody()' => ['{icon}{body}'],
    'layoutHeader()' => ['{button}'],
];

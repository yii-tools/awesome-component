<?php

declare(strict_types=1);

return [
    'bodyClass()' => ['flex-auto font-semibold mr-2 text-left'],
    'bodyContainer()' => [true],
    'bodyContainerClass()' => ['bg-red-800 p-2 flex items-center leading-none lg:inline-flex lg:rounded-full'],
    'bodyTemplate()' => ['{icon}{body}'],
    'buttonClass()' => ['bottom-0 px-4 py-3 right-0 top-0'],
    'buttonOnClick()' => ['closeAlert()'],
    'buttonText()' => ['<span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i>'],
    'class()' => ['bg-red-900 lg:px-4 py-4 text-center text-white'],
    'iconClass()' => ['not-italic'],
    'iconContainerClass()' => ['bg-red-500 flex font-bold ml-2 mr-3 px-2 py-1 rounded-full text-xs uppercase'],
    'template()' => ['{body}{button}'],
];

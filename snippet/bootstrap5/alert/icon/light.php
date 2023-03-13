<?php

declare(strict_types=1);

return [
    'bodyContainer()' => [true],
    'bodyContainerClass()' => ['align-items-center d-flex'],
    'bodyTemplate()' => ['{icon}{body}{button}'],
    'buttonAttributes()' => [['data-bs-dismiss' => 'alert', 'aria-label' => 'Close']],
    'buttonClass()' => ['btn-close'],
    'class()' => ['alert alert-light alert-dismissible fade show'],
];

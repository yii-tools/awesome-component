<?php

declare(strict_types=1);

return [
    'bodyContainer()' => [true],
    'bodyContainerClass()' => ['align-items-center d-flex'],
    'buttonAttributes()' => [['data-bs-dismiss' => 'alert', 'aria-label' => 'Close']],
    'buttonClass()' => ['btn-close'],
    'class()' => ['alert alert-success alert-dismissible fade show'],
    'layoutBody()' => ['{icon}{body}{button}'],
];

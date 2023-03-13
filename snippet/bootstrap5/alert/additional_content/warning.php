<?php

declare(strict_types=1);

return [
    'buttonAttributes()' => [['data-bs-dismiss' => 'alert', 'aria-label' => 'Close']],
    'buttonClass()' => ['btn-close'],
    'class()' => ['alert alert-warning alert-dismissible fade show'],
    'headerClass()' => ['alert-heading'],
    'headerTag()' => ['h4'],
    'headerTemplate()' => ['{header}'],
];

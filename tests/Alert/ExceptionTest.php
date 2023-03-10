<?php

declare(strict_types=1);

namespace Yii\Component\Tests\Alert;

use PHPUnit\Framework\TestCase;
use Yii\Component\Alert;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class ExceptionTest extends TestCase
{
    public function testBodyTagWithException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Body tag must be a string and cannot be empty.');

        Alert::widget()->bodyTag('');
    }

    public function testHeaderTagWithException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Header tag must be a string and cannot be empty.');

        Alert::widget()->headerTag('');
    }
}

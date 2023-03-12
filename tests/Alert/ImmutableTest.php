<?php

declare(strict_types=1);

namespace Yii\Component\Tests\Alert;

use PHPUnit\Framework\TestCase;
use Yii\Component\Alert;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class ImmutableTest extends TestCase
{
    public function testImmutable(): void
    {
        $alert = Alert::widget();

        $this->assertNotSame($alert, $alert->attributes([]));
        $this->assertNotSame($alert, $alert->body(''));
        $this->assertNotSame($alert, $alert->bodyAttributes([]));
        $this->assertNotSame($alert, $alert->bodyClass(''));
        $this->assertNotSame($alert, $alert->bodyContainer(false));
        $this->assertNotSame($alert, $alert->bodyContainerAttributes([]));
        $this->assertNotSame($alert, $alert->bodyContainerClass(''));
        $this->assertNotSame($alert, $alert->bodyTag());
        $this->assertNotSame($alert, $alert->bodyTemplate(''));
        $this->assertNotSame($alert, $alert->buttonAttributes([]));
        $this->assertNotSame($alert, $alert->buttonClass(''));
        $this->assertNotSame($alert, $alert->buttonOnClick(''));
        $this->assertNotSame($alert, $alert->buttonText());
        $this->assertNotSame($alert, $alert->class(''));
        $this->assertNotSame($alert, $alert->header(''));
        $this->assertNotSame($alert, $alert->headerAttributes([]));
        $this->assertNotSame($alert, $alert->headerClass(''));
        $this->assertNotSame($alert, $alert->headerContainer(false));
        $this->assertNotSame($alert, $alert->headerContainerAttributes([]));
        $this->assertNotSame($alert, $alert->headerContainerClass(''));
        $this->assertNotSame($alert, $alert->headerTag('div'));
        $this->assertNotSame($alert, $alert->headerTemplate(''));
        $this->assertNotSame($alert, $alert->iconAttributes([]));
        $this->assertNotSame($alert, $alert->iconClass(''));
        $this->assertNotSame($alert, $alert->iconContainerAttributes([]));
        $this->assertNotSame($alert, $alert->iconContainerClass(''));
        $this->assertNotSame($alert, $alert->iconText(''));
        $this->assertNotSame($alert, $alert->id(''));
    }
}

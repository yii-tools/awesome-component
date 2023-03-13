<?php

declare(strict_types=1);

namespace Yii\Component\Tests\Bootstrap5\Alert;

use PHPUnit\Framework\TestCase;
use Yii\Component\Alert;
use Yii\Support\Assert;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 *
 * @link https://getbootstrap.com/docs/5.0/components/alerts/#dismissing
 */
final class DismissingTest extends TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-danger alert-dismissible fade show" id="w1-alert" role="alert">
            <span><strong>Holy guacamole!</strong> You should check in on some of those fields below.</span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/dismissing/danger.php')
                ->body('<strong>Holy guacamole!</strong> You should check in on some of those fields below.')
                ->id('w1-alert')
                ->render(),
        );
    }

    public function testDark(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-dark alert-dismissible fade show" id="w2-alert" role="alert">
            <span><strong>Holy guacamole!</strong> You should check in on some of those fields below.</span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/dismissing/dark.php')
                ->body('<strong>Holy guacamole!</strong> You should check in on some of those fields below.')
                ->id('w2-alert')
                ->render(),
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-info alert-dismissible fade show" id="w3-alert" role="alert">
            <span><strong>Holy guacamole!</strong> You should check in on some of those fields below.</span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/dismissing/info.php')
                ->body('<strong>Holy guacamole!</strong> You should check in on some of those fields below.')
                ->id('w3-alert')
                ->render(),
        );
    }

    public function testLight(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-light alert-dismissible fade show" id="w4-alert" role="alert">
            <span><strong>Holy guacamole!</strong> You should check in on some of those fields below.</span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/dismissing/light.php')
                ->body('<strong>Holy guacamole!</strong> You should check in on some of those fields below.')
                ->id('w4-alert')
                ->render(),
        );
    }

    public function testPrimary(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-primary alert-dismissible fade show" id="w5-alert" role="alert">
            <span><strong>Holy guacamole!</strong> You should check in on some of those fields below.</span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/dismissing/primary.php')
                ->body('<strong>Holy guacamole!</strong> You should check in on some of those fields below.')
                ->id('w5-alert')
                ->render(),
        );
    }

    public function testSecondary(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-secondary alert-dismissible fade show" id="w6-alert" role="alert">
            <span><strong>Holy guacamole!</strong> You should check in on some of those fields below.</span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/dismissing/secondary.php')
                ->body('<strong>Holy guacamole!</strong> You should check in on some of those fields below.')
                ->id('w6-alert')
                ->render(),
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-success alert-dismissible fade show" id="w7-alert" role="alert">
            <span><strong>Holy guacamole!</strong> You should check in on some of those fields below.</span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/dismissing/success.php')
                ->body('<strong>Holy guacamole!</strong> You should check in on some of those fields below.')
                ->id('w7-alert')
                ->render(),
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-warning alert-dismissible fade show" id="w8-alert" role="alert">
            <span><strong>Holy guacamole!</strong> You should check in on some of those fields below.</span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/dismissing/warning.php')
                ->body('<strong>Holy guacamole!</strong> You should check in on some of those fields below.')
                ->id('w8-alert')
                ->render(),
        );
    }
}

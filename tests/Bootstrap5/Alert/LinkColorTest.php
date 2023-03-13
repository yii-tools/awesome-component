<?php

declare(strict_types=1);

namespace Yii\Component\Tests\Bootstrap5\Alert;

use PHPUnit\Framework\TestCase;
use Yii\Component\Alert;
use Yii\Support\Assert;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 *
 * @link https://getbootstrap.com/docs/5.0/components/alerts/#link-color
 */
final class LinkColorTest extends TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-danger alert-dismissible fade show" id="w1-alert" role="alert">
            <span>A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</span>
            <button class="float-right btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/link_color/danger.php')
                ->body(
                    'A simple primary alert with <a href="#" class="alert-link">an example link</a>. ' .
                    'Give it a click if you like.'
                )
                ->buttonClass('btn-close')
                ->id('w1-alert')
                ->render(),
        );
    }

    public function testDark(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-dark alert-dismissible fade show" id="w2-alert" role="alert">
            <span>A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</span>
            <button class="float-right btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/link_color/dark.php')
                ->body(
                    'A simple primary alert with <a href="#" class="alert-link">an example link</a>. ' .
                    'Give it a click if you like.'
                )
                ->buttonClass('btn-close')
                ->id('w2-alert')
                ->render(),
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-info alert-dismissible fade show" id="w3-alert" role="alert">
            <span>A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</span>
            <button class="float-right btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/link_color/info.php')
                ->body(
                    'A simple primary alert with <a href="#" class="alert-link">an example link</a>. ' .
                    'Give it a click if you like.'
                )
                ->buttonClass('btn-close')
                ->id('w3-alert')
                ->render(),
        );
    }

    public function testLight(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-light alert-dismissible fade show" id="w4-alert" role="alert">
            <span>A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</span>
            <button class="float-right btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/link_color/light.php')
                ->body(
                    'A simple primary alert with <a href="#" class="alert-link">an example link</a>. ' .
                    'Give it a click if you like.'
                )
                ->buttonClass('btn-close')
                ->id('w4-alert')
                ->render(),
        );
    }

    public function testPrimary(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-primary alert-dismissible fade show" id="w5-alert" role="alert">
            <span>A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</span>
            <button class="float-right btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/link_color/primary.php')
                ->body(
                    'A simple primary alert with <a href="#" class="alert-link">an example link</a>. ' .
                    'Give it a click if you like.'
                )
                ->buttonClass('btn-close')
                ->id('w5-alert')
                ->render(),
        );
    }

    public function testSecondary(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-secondary alert-dismissible fade show" id="w6-alert" role="alert">
            <span>A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</span>
            <button class="float-right btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/link_color/secondary.php')
                ->body(
                    'A simple primary alert with <a href="#" class="alert-link">an example link</a>. ' .
                    'Give it a click if you like.'
                )
                ->buttonClass('btn-close')
                ->id('w6-alert')
                ->render(),
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-success alert-dismissible fade show" id="w7-alert" role="alert">
            <span>A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</span>
            <button class="float-right btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/link_color/success.php')
                ->body(
                    'A simple primary alert with <a href="#" class="alert-link">an example link</a>. ' .
                    'Give it a click if you like.'
                )
                ->buttonClass('btn-close')
                ->id('w7-alert')
                ->render(),
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-warning alert-dismissible fade show" id="w8-alert" role="alert">
            <span>A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</span>
            <button class="float-right btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/link_color/warning.php')
                ->body(
                    'A simple primary alert with <a href="#" class="alert-link">an example link</a>. ' .
                    'Give it a click if you like.'
                )
                ->buttonClass('btn-close')
                ->id('w8-alert')
                ->render(),
        );
    }
}

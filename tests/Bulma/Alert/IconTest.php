<?php

declare(strict_types=1);

namespace Yii\Component\Tests\Bulma\Alert;

use PHPUnit\Framework\TestCase;
use Yii\Component\Alert;
use Yii\Support\Assert;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class IconTest extends TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="notification is-danger" id="w1-alert" role="alert">
            <button class="delete" type="button"></button>
            <div class="is-flex is-align-items-center">
            <div>
            <i class="fa-2x fas fa-exclamation-circle mr-4"></i>
            </div>
            <span>An example alert with an icon.</span>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bulma/alert/icon/danger.php')
                ->body('An example alert with an icon.')
                ->id('w1-alert')
                ->render(),
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="notification is-info" id="w2-alert" role="alert">
            <button class="delete" type="button"></button>
            <div class="is-flex is-align-items-center">
            <div>
            <i class="fa-2x fas fa-exclamation-circle mr-4"></i>
            </div>
            <span>An example alert with an icon.</span>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bulma/alert/icon/info.php')
                ->body('An example alert with an icon.')
                ->id('w2-alert')
                ->render(),
        );
    }

    public function testLink(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="notification is-link" id="w3-alert" role="alert">
            <button class="delete" type="button"></button>
            <div class="is-flex is-align-items-center">
            <div>
            <i class="fa-2x fas fa-exclamation-circle mr-4"></i>
            </div>
            <span>An example alert with an icon.</span>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bulma/alert/icon/link.php')
                ->body('An example alert with an icon.')
                ->id('w3-alert')
                ->render(),
        );
    }

    public function testPrimary(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="notification is-primary" id="w4-alert" role="alert">
            <button class="delete" type="button"></button>
            <div class="is-flex is-align-items-center">
            <div>
            <i class="fa-2x fas fa-exclamation-circle mr-4"></i>
            </div>
            <span>An example alert with an icon.</span>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bulma/alert/icon/primary.php')
                ->body('An example alert with an icon.')
                ->id('w4-alert')
                ->render(),
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="notification is-success" id="w5-alert" role="alert">
            <button class="delete" type="button"></button>
            <div class="is-flex is-align-items-center">
            <div>
            <i class="fa-2x fas fa-exclamation-circle mr-4"></i>
            </div>
            <span>An example alert with an icon.</span>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bulma/alert/icon/success.php')
                ->body('An example alert with an icon.')
                ->id('w5-alert')
                ->render(),
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="notification is-warning" id="w6-alert" role="alert">
            <button class="delete" type="button"></button>
            <div class="is-flex is-align-items-center">
            <div>
            <i class="fa-2x fas fa-exclamation-circle mr-4"></i>
            </div>
            <span>An example alert with an icon.</span>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bulma/alert/icon/warning.php')
                ->body('An example alert with an icon.')
                ->id('w6-alert')
                ->render(),
        );
    }
}

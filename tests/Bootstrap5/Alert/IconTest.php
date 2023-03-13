<?php

declare(strict_types=1);

namespace Yii\Component\Tests\Bootstrap5\Alert;

use PHPUnit\Framework\TestCase;
use Yii\Component\Alert;
use Yii\Support\Assert;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 *
 * @link https://getbootstrap.com/docs/5.0/components/alerts/#icons
 */
final class IconTest extends TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-danger alert-dismissible fade show" id="w1-alert" role="alert">
            <div class="align-items-center d-flex">
            <div>
            <i class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2"></i>
            </div>
            <span>An example alert with an icon</span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/icon/danger.php')
                ->body('An example alert with an icon')
                ->iconClass('bi bi-exclamation-triangle-fill flex-shrink-0 me-2')
                ->id('w1-alert')
                ->render(),
        );
    }

    public function testDark(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-dark alert-dismissible fade show" id="w2-alert" role="alert">
            <div class="align-items-center d-flex">
            <div>
            <i class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2"></i>
            </div>
            <span>An example alert with an icon</span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/icon/dark.php')
                ->body('An example alert with an icon')
                ->iconClass('bi bi-exclamation-triangle-fill flex-shrink-0 me-2')
                ->id('w2-alert')
                ->render(),
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-info alert-dismissible fade show" id="w3-alert" role="alert">
            <div class="align-items-center d-flex">
            <div>
            <i class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2"></i>
            </div>
            <span>An example alert with an icon</span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/icon/info.php')
                ->body('An example alert with an icon')
                ->iconClass('bi bi-exclamation-triangle-fill flex-shrink-0 me-2')
                ->id('w3-alert')
                ->render(),
        );
    }

    public function testLight(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-light alert-dismissible fade show" id="w4-alert" role="alert">
            <div class="align-items-center d-flex">
            <div>
            <i class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2"></i>
            </div>
            <span>An example alert with an icon</span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/icon/light.php')
                ->body('An example alert with an icon')
                ->iconClass('bi bi-exclamation-triangle-fill flex-shrink-0 me-2')
                ->id('w4-alert')
                ->render(),
        );
    }

    public function testPrimary(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-primary alert-dismissible fade show" id="w5-alert" role="alert">
            <div class="align-items-center d-flex">
            <div>
            <i class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2"></i>
            </div>
            <span>An example alert with an icon</span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/icon/primary.php')
                ->body('An example alert with an icon')
                ->iconClass('bi bi-exclamation-triangle-fill flex-shrink-0 me-2')
                ->id('w5-alert')
                ->render(),
        );
    }

    public function testSecondary(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-secondary alert-dismissible fade show" id="w6-alert" role="alert">
            <div class="align-items-center d-flex">
            <div>
            <i class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2"></i>
            </div>
            <span>An example alert with an icon</span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/icon/secondary.php')
                ->body('An example alert with an icon')
                ->iconClass('bi bi-exclamation-triangle-fill flex-shrink-0 me-2')
                ->id('w6-alert')
                ->render(),
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-success alert-dismissible fade show" id="w7-alert" role="alert">
            <div class="align-items-center d-flex">
            <div>
            <i class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2"></i>
            </div>
            <span>An example alert with an icon</span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/icon/success.php')
                ->body('An example alert with an icon')
                ->iconClass('bi bi-exclamation-triangle-fill flex-shrink-0 me-2')
                ->id('w7-alert')
                ->render(),
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-warning alert-dismissible fade show" id="w8-alert" role="alert">
            <div class="align-items-center d-flex">
            <div>
            <i class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2"></i>
            </div>
            <span>An example alert with an icon</span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/icon/warning.php')
                ->body('An example alert with an icon')
                ->iconClass('bi bi-exclamation-triangle-fill flex-shrink-0 me-2')
                ->id('w8-alert')
                ->render(),
        );
    }
}

<?php

declare(strict_types=1);

namespace Yii\Component\Tests\Bulma;

use PHPUnit\Framework\TestCase;
use Yii\Component\Alert;
use Yii\Support\Assert;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class AlertTest extends TestCase
{
    /**
     * @link https://bulma.io/documentation/elements/notification/
     */
    public function testNotification(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="notification is-danger" id="w0-alert" role="alert">
            <span>An example alert with an icon.</span>
            <button class="delete" type="button"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 2) . '/snippet/bulma/alert_notification.php')
                ->body('An example alert with an icon.')
                ->id('w0-alert')
                ->render(),
        );
    }

    public function testNotificationWithIcon(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="notification is-danger" id="w0-alert" role="alert">
            <button class="delete" type="button"></button>
            <div class="is-flex is-align-items-center">
            <div>
            <i class="fa-2x fas fa-exclamation-circle mr-4"></i>
            </div>
            <span>An example alert with an icon.</span>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 2) . '/snippet/bulma/alert_notification_icon.php')
                ->body('An example alert with an icon.')
                ->iconClass('fa-2x fas fa-exclamation-circle mr-4')
                ->id('w0-alert')
                ->render(),
        );
    }
}

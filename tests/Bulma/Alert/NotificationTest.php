<?php

declare(strict_types=1);

namespace Yii\Component\Tests\Bulma\Alert;

use PHPUnit\Framework\TestCase;
use Yii\Component\Alert;
use Yii\Support\Assert;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 *
 * @link https://bulma.io/documentation/elements/notification/
 */
final class NotificationTest extends TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="notification is-danger" id="w1-alert" role="alert">
            <button class="delete" type="button"></button>
            Primar lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur.
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bulma/alert/notification/danger.php')
                ->body(
                    'Primar lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor. ' .
                    '<strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur.'
                )
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
            Primar lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur.
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bulma/alert/notification/info.php')
                ->body(
                    'Primar lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor. ' .
                    '<strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur.'
                )
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
            Primar lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur.
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bulma/alert/notification/link.php')
                ->body(
                    'Primar lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor. ' .
                    '<strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur.'
                )
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
            Primar lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur.
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bulma/alert/notification/primary.php')
                ->body(
                    'Primar lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor. ' .
                    '<strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur.'
                )
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
            Primar lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur.
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bulma/alert/notification/success.php')
                ->body(
                    'Primar lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor. ' .
                    '<strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur.'
                )
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
            Primar lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur.
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bulma/alert/notification/warning.php')
                ->body(
                    'Primar lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor. ' .
                    '<strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur.'
                )
                ->id('w6-alert')
                ->render(),
        );
    }
}

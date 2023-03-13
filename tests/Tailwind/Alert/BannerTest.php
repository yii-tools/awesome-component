<?php

declare(strict_types=1);

namespace Yii\Component\Tests\Tailwind;

use PHPUnit\Framework\TestCase;
use Yii\Component\Alert;
use Yii\Html\Tag;
use Yii\Support\Assert;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 *
 * @link https://v1.tailwindcss.com/components/alerts#banner
 */
final class BannerTest extends TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-red-100 border-b border-red-500 border-t px-4 py-3 text-red-700" id="w1-alert" role="alert">
            <span class="align-middle inline-block mr-8"><p class="font-bold">
            Informational message
            </p>
            <p class="text-sm">
            Some additional text to explain said message.
            </p>
            </span>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/banner/danger.php')
                ->body(
                    Tag::create('p', 'Informational message', ['class' => 'font-bold']) .
                    PHP_EOL .
                    Tag::create('p', 'Some additional text to explain said message.', ['class' => 'text-sm']) .
                    PHP_EOL,
                )
                ->id('w1-alert')
                ->render(),
        );
    }

    public function testDark(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-gray-100 border-b border-gray-500 border-t px-4 py-3 text-gray-700" id="w2-alert" role="alert">
            <span class="align-middle inline-block mr-8"><p class="font-bold">
            Informational message
            </p>
            <p class="text-sm">
            Some additional text to explain said message.
            </p>
            </span>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/banner/dark.php')
                ->body(
                    Tag::create('p', 'Informational message', ['class' => 'font-bold']) .
                    PHP_EOL .
                    Tag::create('p', 'Some additional text to explain said message.', ['class' => 'text-sm']) .
                    PHP_EOL,
                )
                ->id('w2-alert')
                ->render(),
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-blue-100 border-b border-blue-500 border-t px-4 py-3 text-blue-700" id="w3-alert" role="alert">
            <span class="align-middle inline-block mr-8"><p class="font-bold">
            Informational message
            </p>
            <p class="text-sm">
            Some additional text to explain said message.
            </p>
            </span>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/banner/info.php')
                ->body(
                    Tag::create('p', 'Informational message', ['class' => 'font-bold']) .
                    PHP_EOL .
                    Tag::create('p', 'Some additional text to explain said message.', ['class' => 'text-sm']) .
                    PHP_EOL,
                )
                ->id('w3-alert')
                ->render(),
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-green-100 border-b border-green-500 border-t px-4 py-3 text-green-700" id="w4-alert" role="alert">
            <span class="align-middle inline-block mr-8"><p class="font-bold">
            Informational message
            </p>
            <p class="text-sm">
            Some additional text to explain said message.
            </p>
            </span>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/banner/success.php')
                ->body(
                    Tag::create('p', 'Informational message', ['class' => 'font-bold']) .
                    PHP_EOL .
                    Tag::create('p', 'Some additional text to explain said message.', ['class' => 'text-sm']) .
                    PHP_EOL,
                )
                ->id('w4-alert')
                ->render(),
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-yellow-100 border-b border-yellow-500 border-t px-4 py-3 text-yellow-700" id="w5-alert" role="alert">
            <span class="align-middle inline-block mr-8"><p class="font-bold">
            Informational message
            </p>
            <p class="text-sm">
            Some additional text to explain said message.
            </p>
            </span>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/banner/warning.php')
                ->body(
                    Tag::create('p', 'Informational message', ['class' => 'font-bold']) .
                    PHP_EOL .
                    Tag::create('p', 'Some additional text to explain said message.', ['class' => 'text-sm']) .
                    PHP_EOL,
                )
                ->id('w5-alert')
                ->render(),
        );
    }
}

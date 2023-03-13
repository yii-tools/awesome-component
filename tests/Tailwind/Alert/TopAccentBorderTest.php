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
* @link https://v1.tailwindcss.com/components/alerts#top-accent-border
 */
final class TopAccentBorderTest extends TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" id="w1-alert" role="alert">
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            <div class="flex">
            <div class="py-4">
            <i class="fa fa-info-circle fa-lg not-italic"></i>
            </div>
            <div class="ml-4">
            <p class="font-bold">
            Our privacy policy has changed
            </p>
            <p class="text-sm">
            Make sure you know how these changes affect you.
            </p>
            </div>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/top_accent_border/danger.php')
                ->body(
                    Tag::create('p', 'Our privacy policy has changed', ['class' => 'font-bold']) .
                    PHP_EOL .
                    Tag::create('p', 'Make sure you know how these changes affect you.', ['class' => 'text-sm'])
                )
                ->id('w1-alert')
                ->render(),
        );
    }

    public function testDark(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-gray-100 border-t-4 border-gray-500 rounded-b text-gray-900 px-4 py-3 shadow-md" id="w2-alert" role="alert">
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            <div class="flex">
            <div class="py-4">
            <i class="fa fa-info-circle fa-lg not-italic"></i>
            </div>
            <div class="ml-4">
            <p class="font-bold">
            Our privacy policy has changed
            </p>
            <p class="text-sm">
            Make sure you know how these changes affect you.
            </p>
            </div>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/top_accent_border/dark.php')
                ->body(
                    Tag::create('p', 'Our privacy policy has changed', ['class' => 'font-bold']) .
                    PHP_EOL .
                    Tag::create('p', 'Make sure you know how these changes affect you.', ['class' => 'text-sm'])
                )
                ->id('w2-alert')
                ->render(),
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-blue-100 border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md" id="w3-alert" role="alert">
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            <div class="flex">
            <div class="py-4">
            <i class="fa fa-info-circle fa-lg not-italic"></i>
            </div>
            <div class="ml-4">
            <p class="font-bold">
            Our privacy policy has changed
            </p>
            <p class="text-sm">
            Make sure you know how these changes affect you.
            </p>
            </div>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/top_accent_border/info.php')
                ->body(
                    Tag::create('p', 'Our privacy policy has changed', ['class' => 'font-bold']) .
                    PHP_EOL .
                    Tag::create('p', 'Make sure you know how these changes affect you.', ['class' => 'text-sm'])
                )
                ->id('w3-alert')
                ->render(),
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md" id="w4-alert" role="alert">
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            <div class="flex">
            <div class="py-4">
            <i class="fa fa-info-circle fa-lg not-italic"></i>
            </div>
            <div class="ml-4">
            <p class="font-bold">
            Our privacy policy has changed
            </p>
            <p class="text-sm">
            Make sure you know how these changes affect you.
            </p>
            </div>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/top_accent_border/success.php')
                ->body(
                    Tag::create('p', 'Our privacy policy has changed', ['class' => 'font-bold']) .
                    PHP_EOL .
                    Tag::create('p', 'Make sure you know how these changes affect you.', ['class' => 'text-sm'])
                )
                ->id('w4-alert')
                ->render(),
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-yellow-100 border-t-4 border-yellow-500 rounded-b text-yellow-900 px-4 py-3 shadow-md" id="w5-alert" role="alert">
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            <div class="flex">
            <div class="py-4">
            <i class="fa fa-info-circle fa-lg not-italic"></i>
            </div>
            <div class="ml-4">
            <p class="font-bold">
            Our privacy policy has changed
            </p>
            <p class="text-sm">
            Make sure you know how these changes affect you.
            </p>
            </div>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/top_accent_border/warning.php')
                ->body(
                    Tag::create('p', 'Our privacy policy has changed', ['class' => 'font-bold']) .
                    PHP_EOL .
                    Tag::create('p', 'Make sure you know how these changes affect you.', ['class' => 'text-sm'])
                )
                ->id('w5-alert')
                ->render(),
        );
    }
}

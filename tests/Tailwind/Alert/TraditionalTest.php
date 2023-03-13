<?php

declare(strict_types=1);

namespace Yii\Component\Tests\Tailwind;

use PHPUnit\Framework\TestCase;
use Yii\Component\Alert;
use Yii\Support\Assert;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 *
 * @link https://v1.tailwindcss.com/components/alerts#traditional
 */
final class TraditionalTest extends TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" id="w1-alert" role="alert">
            <span class="align-middle inline-block mr-8"><b>Holy smokes!</b> Something seriously bad happened.</span>
            <button class="absolute bottom-0 px-4 py-3 right-0 top-0" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/traditional/danger.php')
                ->body('<b>Holy smokes!</b> Something seriously bad happened.')
                ->id('w1-alert')
                ->render(),
        );
    }

    public function testDark(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-gray-100 border border-gray-400 text-gray-700 px-4 py-3 rounded relative" id="w2-alert" role="alert">
            <span class="align-middle inline-block mr-8"><b>Holy smokes!</b> Something seriously bad happened.</span>
            <button class="absolute bottom-0 px-4 py-3 right-0 top-0" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/traditional/dark.php')
                ->body('<b>Holy smokes!</b> Something seriously bad happened.')
                ->id('w2-alert')
                ->render(),
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative" id="w3-alert" role="alert">
            <span class="align-middle inline-block mr-8"><b>Holy smokes!</b> Something seriously bad happened.</span>
            <button class="absolute bottom-0 px-4 py-3 right-0 top-0" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/traditional/info.php')
                ->body('<b>Holy smokes!</b> Something seriously bad happened.')
                ->id('w3-alert')
                ->render(),
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" id="w4-alert" role="alert">
            <span class="align-middle inline-block mr-8"><b>Holy smokes!</b> Something seriously bad happened.</span>
            <button class="absolute bottom-0 px-4 py-3 right-0 top-0" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/traditional/success.php')
                ->body('<b>Holy smokes!</b> Something seriously bad happened.')
                ->id('w4-alert')
                ->render(),
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative" id="w5-alert" role="alert">
            <span class="align-middle inline-block mr-8"><b>Holy smokes!</b> Something seriously bad happened.</span>
            <button class="absolute bottom-0 px-4 py-3 right-0 top-0" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/traditional/warning.php')
                ->body('<b>Holy smokes!</b> Something seriously bad happened.')
                ->id('w5-alert')
                ->render(),
        );
    }
}

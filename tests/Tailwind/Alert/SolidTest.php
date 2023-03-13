<?php

declare(strict_types=1);

namespace Yii\Component\Tests\Tailwind;

use PHPUnit\Framework\TestCase;
use Yii\Component\Alert;
use Yii\Support\Assert;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 *
 * @link https://v1.tailwindcss.com/components/alerts#solid
 */
final class SolidTest extends TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-red-500 flex font-bold items-center px-4 py-3 text-sm text-white" id="w1-alert" role="alert">
            <div>
            <i class="pr-2">i</i>
            </div>
            <p class="align-middle flex-grow inline-block mr-8">
            Something happened that you should know about.
            </p>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/solid/danger.php')
                ->body('Something happened that you should know about.')
                ->id('w1-alert')
                ->render(),
        );
    }

    public function testDark(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-gray-500 flex font-bold items-center px-4 py-3 text-sm text-white" id="w2-alert" role="alert">
            <div>
            <i class="pr-2">i</i>
            </div>
            <p class="align-middle flex-grow inline-block mr-8">
            Something happened that you should know about.
            </p>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/solid/dark.php')
                ->body('Something happened that you should know about.')
                ->id('w2-alert')
                ->render(),
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-blue-500 flex font-bold items-center px-4 py-3 text-sm text-white" id="w3-alert" role="alert">
            <div>
            <i class="pr-2">i</i>
            </div>
            <p class="align-middle flex-grow inline-block mr-8">
            Something happened that you should know about.
            </p>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/solid/info.php')
                ->body('Something happened that you should know about.')
                ->id('w3-alert')
                ->render(),
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-green-500 flex font-bold items-center px-4 py-3 text-sm text-white" id="w4-alert" role="alert">
            <div>
            <i class="pr-2">i</i>
            </div>
            <p class="align-middle flex-grow inline-block mr-8">
            Something happened that you should know about.
            </p>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/solid/success.php')
                ->body('Something happened that you should know about.')
                ->id('w4-alert')
                ->render(),
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-yellow-500 flex font-bold items-center px-4 py-3 text-sm text-white" id="w5-alert" role="alert">
            <div>
            <i class="pr-2">i</i>
            </div>
            <p class="align-middle flex-grow inline-block mr-8">
            Something happened that you should know about.
            </p>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/solid/warning.php')
                ->body('Something happened that you should know about.')
                ->id('w5-alert')
                ->render(),
        );
    }
}

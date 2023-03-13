<?php

declare(strict_types=1);

namespace Yii\Component\Tests\Tailwind;

use PHPUnit\Framework\TestCase;
use Yii\Component\Alert;
use Yii\Support\Assert;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 *
 * @link https://v1.tailwindcss.com/components/alerts#left-accent-border
 */
final class LeftAccentBorderTest extends TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-red-100 border-l-2 border-red-500 p-4 text-red-700" id="w1-alert" role="alert">
            <span class="align-middle inline-block mr-8"><p><b>Be Warned</b></p> <p>Something not ideal might be happening.</p></span>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/left_accent_border/danger.php')
                ->body('<p><b>Be Warned</b></p> <p>Something not ideal might be happening.</p>')
                ->id('w1-alert')
                ->render(),
        );
    }

    public function testDark(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-gray-100 border-l-2 border-gray-500 p-4 text-gray-700" id="w2-alert" role="alert">
            <span class="align-middle inline-block mr-8"><p><b>Be Warned</b></p> <p>Something not ideal might be happening.</p></span>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/left_accent_border/dark.php')
                ->body('<p><b>Be Warned</b></p> <p>Something not ideal might be happening.</p>')
                ->id('w2-alert')
                ->render(),
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-blue-100 border-l-2 border-blue-500 p-4 text-blue-700" id="w3-alert" role="alert">
            <span class="align-middle inline-block mr-8"><p><b>Be Warned</b></p> <p>Something not ideal might be happening.</p></span>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/left_accent_border/info.php')
                ->body('<p><b>Be Warned</b></p> <p>Something not ideal might be happening.</p>')
                ->id('w3-alert')
                ->render(),
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-green-100 border-l-2 border-green-500 p-4 text-green-700" id="w4-alert" role="alert">
            <span class="align-middle inline-block mr-8"><p><b>Be Warned</b></p> <p>Something not ideal might be happening.</p></span>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/left_accent_border/success.php')
                ->body('<p><b>Be Warned</b></p> <p>Something not ideal might be happening.</p>')
                ->id('w4-alert')
                ->render(),
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-yellow-100 border-l-2 border-yellow-500 p-4 text-yellow-700" id="w5-alert" role="alert">
            <span class="align-middle inline-block mr-8"><p><b>Be Warned</b></p> <p>Something not ideal might be happening.</p></span>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/left_accent_border/warning.php')
                ->body('<p><b>Be Warned</b></p> <p>Something not ideal might be happening.</p>')
                ->id('w5-alert')
                ->render(),
        );
    }
}

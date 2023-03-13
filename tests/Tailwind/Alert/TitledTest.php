<?php

declare(strict_types=1);

namespace Yii\Component\Tests\Tailwind;

use PHPUnit\Framework\TestCase;
use Yii\Component\Alert;
use Yii\Support\Assert;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 *
 * @link https://v1.tailwindcss.com/components/alerts#titled
 */
final class TitledTest extends TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w1-alert" role="alert">
            <div class="bg-red-500 font-bold px-4 py-2 rounded-t text-white">
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button><span class="font-semibold">Danger</span>
            </div>
            <div class="bg-red-100 border border-red-400 border-t-0 rounded-b text-red-700">
            <span class="align-middle inline-block mr-8 px-4 py-3">Something not ideal might be happening.</span>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/titled/danger.php')
                ->header('Danger')
                ->id('w1-alert')
                ->render(),
        );
    }

    public function testDark(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w2-alert" role="alert">
            <div class="bg-gray-500 font-bold px-4 py-2 rounded-t text-white">
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button><span class="font-semibold">Dark</span>
            </div>
            <div class="bg-gray-100 border border-gray-400 border-t-0 rounded-b text-gray-700">
            <span class="align-middle inline-block mr-8 px-4 py-3">Something not ideal might be happening.</span>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/titled/dark.php')
                ->header('Dark')
                ->id('w2-alert')
                ->render(),
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w3-alert" role="alert">
            <div class="bg-blue-500 font-bold px-4 py-2 rounded-t text-white">
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button><span class="font-semibold">Info</span>
            </div>
            <div class="bg-blue-100 border border-blue-400 border-t-0 rounded-b text-blue-700">
            <span class="align-middle inline-block mr-8 px-4 py-3">Something not ideal might be happening.</span>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/titled/info.php')
                ->header('Info')
                ->id('w3-alert')
                ->render(),
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w4-alert" role="alert">
            <div class="bg-green-500 font-bold px-4 py-2 rounded-t text-white">
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button><span class="font-semibold">Success</span>
            </div>
            <div class="bg-green-100 border border-green-400 border-t-0 rounded-b text-green-700">
            <span class="align-middle inline-block mr-8 px-4 py-3">Something not ideal might be happening.</span>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/titled/success.php')
                ->header('Success')
                ->id('w4-alert')
                ->render(),
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w5-alert" role="alert">
            <div class="bg-yellow-500 font-bold px-4 py-2 rounded-t text-white">
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button><span class="font-semibold">Success</span>
            </div>
            <div class="bg-yellow-100 border border-yellow-400 border-t-0 rounded-b text-yellow-700">
            <span class="align-middle inline-block mr-8 px-4 py-3">Something not ideal might be happening.</span>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/titled/warning.php')
                ->header('Success')
                ->id('w5-alert')
                ->render(),
        );
    }
}

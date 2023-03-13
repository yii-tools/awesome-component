<?php

declare(strict_types=1);

namespace Yii\Component\Tests\Tailwind;

use PHPUnit\Framework\TestCase;
use Yii\Component\Alert;
use Yii\Support\Assert;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 *
 * @link https://v1.tailwindcss.com/components/alerts#modern-with-badge
 */
final class ModernWithBadgeTest extends TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-red-900 lg:px-4 py-4 text-center text-white" id="w1-alert" role="alert">
            <div class="bg-red-800 p-2 flex items-center leading-none lg:inline-flex lg:rounded-full">
            <div class="bg-red-500 flex font-bold ml-2 mr-3 px-2 py-1 rounded-full text-xs uppercase">
            <i class="not-italic">🔔 New </i>
            </div>
            <span class="flex-auto font-semibold mr-2 text-left">Get the coolest t-shirts from our brand new store</span>
            </div>
            <button class="bottom-0 px-4 py-3 right-0 top-0" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/modern_badge/danger.php')
                ->body('Get the coolest t-shirts from our brand new store')
                ->iconText('🔔 New ')
                ->id('w1-alert')
                ->render(),
        );
    }

    public function testDark(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-gray-900 lg:px-4 py-4 text-center text-white" id="w2-alert" role="alert">
            <div class="bg-gray-800 p-2 flex items-center leading-none lg:inline-flex lg:rounded-full">
            <div class="bg-gray-500 flex font-bold ml-2 mr-3 px-2 py-1 rounded-full text-xs uppercase">
            <i class="not-italic">🔔 New </i>
            </div>
            <span class="flex-auto font-semibold mr-2 text-left">Get the coolest t-shirts from our brand new store</span>
            </div>
            <button class="bottom-0 px-4 py-3 right-0 top-0" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/modern_badge/dark.php')
                ->body('Get the coolest t-shirts from our brand new store')
                ->iconText('🔔 New ')
                ->id('w2-alert')
                ->render(),
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-blue-900 lg:px-4 py-4 text-center text-white" id="w3-alert" role="alert">
            <div class="bg-blue-800 p-2 flex items-center leading-none lg:inline-flex lg:rounded-full">
            <div class="bg-blue-500 flex font-bold ml-2 mr-3 px-2 py-1 rounded-full text-xs uppercase">
            <i class="not-italic">🔔 New </i>
            </div>
            <span class="flex-auto font-semibold mr-2 text-left">Get the coolest t-shirts from our brand new store</span>
            </div>
            <button class="bottom-0 px-4 py-3 right-0 top-0" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/modern_badge/info.php')
                ->body('Get the coolest t-shirts from our brand new store')
                ->iconText('🔔 New ')
                ->id('w3-alert')
                ->render(),
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-green-900 lg:px-4 py-4 text-center text-white" id="w4-alert" role="alert">
            <div class="bg-green-800 p-2 flex items-center leading-none lg:inline-flex lg:rounded-full">
            <div class="bg-green-500 flex font-bold ml-2 mr-3 px-2 py-1 rounded-full text-xs uppercase">
            <i class="not-italic">🔔 New </i>
            </div>
            <span class="flex-auto font-semibold mr-2 text-left">Get the coolest t-shirts from our brand new store</span>
            </div>
            <button class="bottom-0 px-4 py-3 right-0 top-0" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/modern_badge/success.php')
                ->body('Get the coolest t-shirts from our brand new store')
                ->iconText('🔔 New ')
                ->id('w4-alert')
                ->render(),
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-yellow-900 lg:px-4 py-4 text-center text-white" id="w5-alert" role="alert">
            <div class="bg-yellow-800 p-2 flex items-center leading-none lg:inline-flex lg:rounded-full">
            <div class="bg-yellow-500 flex font-bold ml-2 mr-3 px-2 py-1 rounded-full text-xs uppercase">
            <i class="not-italic">🔔 New </i>
            </div>
            <span class="flex-auto font-semibold mr-2 text-left">Get the coolest t-shirts from our brand new store</span>
            </div>
            <button class="bottom-0 px-4 py-3 right-0 top-0" type="button" onclick="closeAlert()"><span class="sr-only">Dismiss</span><i class="fa fa-times fa-lg"></i></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/tailwind/alert/modern_badge/warning.php')
                ->body('Get the coolest t-shirts from our brand new store')
                ->iconText('🔔 New ')
                ->id('w5-alert')
                ->render(),
        );
    }
}

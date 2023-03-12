<?php

declare(strict_types=1);

namespace Yii\Component\Tests\Tailwind;

use PHPUnit\Framework\TestCase;
use Yii\Component\Alert;
use Yii\Support\Assert;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class AlertTest extends TestCase
{
    /**
     * @link https://v1.tailwindcss.com/components/alerts#banner
     */
    public function testBanner(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-blue-100 border-b border-blue-500 border-t px-4 py-3 text-blue-700" id="w0-alert" role="alert">
            <span class="align-middle inline-block mr-8"><p class="font-bold">Informational message</p><p class="text-sm">Some additional text to explain said message.</p></span>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 2) . '/snippet/tailwind/alert_banner.php')
                ->body(
                    '<p class="font-bold">Informational message</p>' .
                    '<p class="text-sm">Some additional text to explain said message.</p>'
                )
                ->id('w0-alert')
                ->render(),
        );
    }

    /**
     * @link https://v1.tailwindcss.com/components/alerts#left-accent-border
     */
    public function testLeftAccentBorder(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-yellow-100 border-l-2 border-yellow-500 p-4 text-yellow-700" id="w0-alert" role="alert">
            <span class="align-middle inline-block mr-8"><p><b>Be Warned</b></p> <p>Something not ideal might be happening.</p></span>
            <button class="absolute bottom-0 px-4 py-3 right-0 top-0" type="button" onclick="closeAlert()"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 2) . '/snippet/tailwind/alert_left_accent_border.php')
                ->body('<p><b>Be Warned</b></p> <p>Something not ideal might be happening.</p>')
                ->id('w0-alert')
                ->render(),
        );
    }

    /**
     * @link https://v1.tailwindcss.com/components/alerts#modern-with-badge
     */
    public function testModernWithBadge(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-gray-900 lg:px-4 py-4 text-center text-white" id="w0-alert" role="alert">
            <button class="bottom-0 px-4 py-3 right-0 top-0" type="button" onclick="closeAlert()"></button>
            <div class="bg-gray-800 p-2 flex items-center leading-none lg:inline-flex lg:rounded-full">
            <div class="bg-gray-500 flex font-bold ml-2 mr-3 px-2 py-1 rounded-full text-xs uppercase">
            <i class="not-italic">🔔 New </i>
            </div>
            <span class="flex-auto font-semibold mr-2 text-left">Get the coolest t-shirts from our brand new store</span>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 2) . '/snippet/tailwind/alert_modern_badge.php')
                ->body('Get the coolest t-shirts from our brand new store')
                ->iconText('🔔 New ')
                ->id('w0-alert')
                ->render(),
        );
    }

    /**
     * @link https://v1.tailwindcss.com/components/alerts#solid
     */
    public function testSolid(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-blue-500 flex font-bold items-center px-4 py-3 text-sm text-white" id="w0-alert" role="alert">
            <div>
            <i class="pr-2">i</i>
            </div>
            <p class="align-middle flex-grow inline-block mr-8">
            Something happened that you should know about.
            </p>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 2) . '/snippet/tailwind/alert_solid.php')
                ->body('Something happened that you should know about.')
                ->iconText('i')
                ->id('w0-alert')
                ->render(),
        );
    }

    /**
     * @link https://v1.tailwindcss.com/components/alerts#traditional
     */
    public function testTraditional(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" id="w0-alert" role="alert">
            <span class="align-middle inline-block mr-8"><b>Holy smokes!</b> Something seriously bad happened.</span>
            <button class="absolute bottom-0 px-4 py-3 right-0 top-0" type="button" onclick="closeAlert()"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 2) . '/snippet/tailwind/alert_traditional.php')
                ->body('<b>Holy smokes!</b> Something seriously bad happened.')
                ->id('w0-alert')
                ->render(),
        );
    }

    /**
     * @link https://v1.tailwindcss.com/components/alerts#titled
     */
    public function testTitled(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <div class="bg-red-500 font-bold px-4 py-2 rounded-t text-white">
            <span class="font-semibold">Danger</span>
            </div>
            <div class="bg-red-100 border border-red-400 border-t-0 rounded-b text-red-700">
            <span class="align-middle inline-block mr-8 px-4 py-3">Something not ideal might be happening.</span>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"></button>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 2) . '/snippet/tailwind/alert_titled.php')
                ->header('Danger')
                ->id('w0-alert')
                ->render(),
        );
    }

    /**
     * @link https://v1.tailwindcss.com/components/alerts#top-accent-border
     */
    public function testTopAccentBorder(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="bg-green-100 border-t-4 border-green-500 px-4 py-3 rounded-b shadow-md text-green-900" id="w0-alert" role="alert">
            <div class="flex">
            <div class="fill-current h-6 mr-4 py-1 text-green-500 w-6">
            <i class="not-italic">🛈</i>
            </div>
            <span class="align-middle inline-block flex-grow mr-8"><p class="font-bold">Our privacy policy has changed</p><p class="text-sm">Make sure you know how these changes affect you.</p></span>
            <button class="float-right px-4 py-3" type="button" onclick="closeAlert()"></button>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 2) . '/snippet/tailwind/alert_top_accent_border.php')
                ->body(
                    '<p class="font-bold">Our privacy policy has changed</p>' .
                    '<p class="text-sm">Make sure you know how these changes affect you.</p>'
                )
                ->iconText('🛈')
                ->id('w0-alert')
                ->render(),
        );
    }
}

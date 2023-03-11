<?php

declare(strict_types=1);

namespace Yiisoft\Yii\Widgets\Tests\Alert;

use PHPUnit\Framework\TestCase;
use Yii\Component\Alert;
use Yii\Support\Assert;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class RenderTest extends TestCase
{
    public function testAttributes(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="test-class" id="w0-alert" role="alert">
            <span>This is a test.</span>
            <button>&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->attributes(['class' => 'test-class'])
                ->body('This is a test.')
                ->id('w0-alert')
                ->render(),
        );
    }

    public function testBodyAttributes(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <span class="test-class">This is a test.</span>
            <button>&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->bodyAttributes(['class' => 'test-class'])
                ->id('w0-alert')
                ->render(),
        );
    }

    public function testBodyClass(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <span class="test-class">This is a test.</span>
            <button>&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->bodyClass('test-class')
                ->id('w0-alert')
                ->render(),
        );
    }

    public function testBodyContainerAttributes(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <div class="test-class">
            <span>This is a test.</span>
            <button>&times;</button>
            </div>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->bodyContainer(true)
                ->bodyContainerAttributes(['class' => 'test-class'])
                ->id('w0-alert')
                ->render(),
        );
    }

    public function testBodyContainerClass(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <div class="test-class">
            <span>This is a test.</span>
            <button>&times;</button>
            </div>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->bodyContainer(true)
                ->bodyContainerClass('test-class')
                ->id('w0-alert')
                ->render(),
        );
    }

    public function testBodyWithoutTag(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            This is a test.
            <button>&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->bodyTag()
                ->id('w0-alert')
                ->render(),
        );
    }

    public function testButtonAttributes(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <span>This is a test.</span>
            <button class="test-class" onclick="alert(&apos;test&apos;);">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->buttonAttributes(['class' => 'test-class', 'onclick' => 'alert(\'test\');'])
                ->id('w0-alert')
                ->render(),
        );
    }

    public function testButtonClass(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <span>This is a test.</span>
            <button class="test-class">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->buttonClass('test-class')
                ->id('w0-alert')
                ->render(),
        );
    }

    public function testButtonText(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <span>This is a test.</span>
            <button>test</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->buttonText('test')
                ->id('w0-alert')
                ->render(),
        );
    }

    public function testButtonOnCLick(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <span>This is a test.</span>
            <button onclick="alert(&apos;test&apos;);">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->buttonOnClick('alert(\'test\');')
                ->id('w0-alert')
                ->render(),
        );
    }

    public function testClass(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="test-class" id="w0-alert" role="alert">
            <span>This is a test.</span>
            <button>&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->class('test-class')
                ->id('w0-alert')
                ->render(),
        );
    }

    public function testHeaderAttributes(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <span class="tests-class">Header title</span><span>This is a test.</span>
            <button>&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->header('Header title')
                ->headerAttributes(['class' => 'tests-class'])
                ->id('w0-alert')
                ->layoutHeader('{header}')
                ->render(),
        );
    }

    public function testHeaderClass(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <span class="tests-class">Header title</span><span>This is a test.</span>
            <button>&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->header('Header title')
                ->headerClass('tests-class')
                ->id('w0-alert')
                ->layoutHeader('{header}')
                ->render(),
        );
    }

    public function testHeaderContainerAttributes(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <div class="test-class">
            <span>Header title</span>
            </div><span>This is a test.</span>
            <button>&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->header('Header title')
                ->headerContainer()
                ->headerContainerAttributes(['class' => 'test-class'])
                ->id('w0-alert')
                ->layoutHeader('{header}')
                ->render(),
        );
    }

    public function testHeaderContainerClass(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <div class="test-class">
            <span>Header title</span>
            </div><span>This is a test.</span>
            <button>&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->header('Header title')
                ->headerContainer()
                ->headerContainerClass('test-class')
                ->id('w0-alert')
                ->layoutHeader('{header}')
                ->render(),
        );
    }

    public function testHeaderTag(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <h1>
            Header title
            </h1><span>This is a test.</span>
            <button>&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->header('Header title')
                ->headerTag('h1')
                ->id('w0-alert')
                ->layoutHeader('{header}')
                ->render(),
        );
    }

    public function testIconAttributes(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <div>
            <i class="tests-class"></i>
            </div>
            <span>This is a test.</span>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->iconAttributes(['class' => 'tests-class'])
                ->id('w0-alert')
                ->layoutBody('{icon}{body}')
                ->render()
        );
    }

    public function testIconClass(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <div>
            <i class="tests-class"></i>
            </div>
            <span>This is a test.</span>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->iconClass('tests-class')
                ->id('w0-alert')
                ->layoutBody('{icon}{body}')
                ->render(),
        );
    }

    public function testIconContainerAttributes(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <div class="test-container-class">
            <i class="tests-class"></i>
            </div>
            <span>This is a test.</span>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->iconAttributes(['class' => 'tests-class'])
                ->iconContainerAttributes(['class' => 'test-container-class'])
                ->id('w0-alert')
                ->layoutBody('{icon}{body}')
                ->render(),
        );
    }

    public function testIconContainerClass(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <div class="test-container-class">
            <i class="tests-class"></i>
            </div>
            <span>This is a test.</span>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->iconAttributes(['class' => 'tests-class'])
                ->iconContainerClass('test-container-class')
                ->id('w0-alert')
                ->layoutBody('{icon}{body}')
                ->render(),
        );
    }

    public function testIconText(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <div>
            <i class="tests-class">test</i>
            </div>
            <span>This is a test.</span>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->iconAttributes(['class' => 'tests-class'])
                ->iconText('test')
                ->id('w0-alert')
                ->layoutBody('{icon}{body}')
                ->render(),
        );
    }
}

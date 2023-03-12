<?php

declare(strict_types=1);

namespace Yii\Component\Tests\Alert;

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
            <button type="button">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->attributes(['class' => 'test-class'])
                ->body('This is a test.')
                ->buttonText('&times;')
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
            <button type="button">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->bodyAttributes(['class' => 'test-class'])
                ->buttonText('&times;')
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
            <button type="button">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->bodyClass('test-class')
                ->buttonText('&times;')
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
            <button type="button">&times;</button>
            </div>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->bodyContainer(true)
                ->bodyContainerAttributes(['class' => 'test-class'])
                ->buttonText('&times;')
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
            <button type="button">&times;</button>
            </div>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->bodyContainer(true)
                ->bodyContainerClass('test-class')
                ->buttonText('&times;')
                ->id('w0-alert')
                ->render(),
        );
    }

    public function testBodyPrefix(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <span>Body prefix</span>
            <span>This is a test.</span>
            <button type="button">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->bodyPrefix('<span>Body prefix</span>')
                ->buttonText('&times;')
                ->id('w0-alert')
                ->render(),
        );
    }

    public function testBodySuffix(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <span>This is a test.</span>
            <span>Body suffix</span>
            <button type="button">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->bodySuffix('<span>Body suffix</span>')
                ->buttonText('&times;')
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
            <button type="button">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->bodyTag()
                ->buttonText('&times;')
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
            <button class="test-class" type="button" onclick="alert(&apos;test&apos;);">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->buttonAttributes(['class' => 'test-class', 'onclick' => 'alert(\'test\');'])
                ->buttonText('&times;')
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
            <button class="test-class" type="button">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->buttonClass('test-class')
                ->buttonText('&times;')
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
            <button type="button">test</button>
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
            <button type="button" onclick="alert(&apos;test&apos;);">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->buttonOnClick('alert(\'test\');')
                ->buttonText('&times;')
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
            <button type="button">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->buttonText('&times;')
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
            <span class="tests-class">Header title</span>
            <span>This is a test.</span>
            <button type="button">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->buttonText('&times;')
                ->header('Header title')
                ->headerAttributes(['class' => 'tests-class'])
                ->headerTemplate('{header}')
                ->id('w0-alert')
                ->render(),
        );
    }

    public function testHeaderClass(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <span class="tests-class">Header title</span>
            <span>This is a test.</span>
            <button type="button">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->buttonText('&times;')
                ->header('Header title')
                ->headerClass('tests-class')
                ->headerTemplate('{header}')
                ->id('w0-alert')
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
            </div>
            <span>This is a test.</span>
            <button type="button">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->buttonText('&times;')
                ->header('Header title')
                ->headerContainer()
                ->headerContainerAttributes(['class' => 'test-class'])
                ->headerTemplate('{header}')
                ->id('w0-alert')
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
            </div>
            <span>This is a test.</span>
            <button type="button">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->buttonText('&times;')
                ->header('Header title')
                ->headerContainer()
                ->headerContainerClass('test-class')
                ->headerTemplate('{header}')
                ->id('w0-alert')
                ->render(),
        );
    }

    public function testHeaderPrefix(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <span>Header prefix</span>
            <h1>
            Header title
            </h1>
            <span>This is a test.</span>
            <button type="button">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->buttonText('&times;')
                ->header('Header title')
                ->headerPrefix('<span>Header prefix</span>')
                ->headerTag('h1')
                ->headerTemplate('{prefix}{header}{suffix}')
                ->id('w0-alert')
                ->render(),
        );
    }

    public function testHeaderSuffix(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <h1>
            Header title
            </h1>
            <span>Header suffix</span>
            <span>This is a test.</span>
            <button type="button">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->buttonText('&times;')
                ->header('Header title')
                ->headerSuffix('<span>Header suffix</span>')
                ->headerTag('h1')
                ->headerTemplate('{prefix}{header}{suffix}')
                ->id('w0-alert')
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
            </h1>
            <span>This is a test.</span>
            <button type="button">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->buttonText('&times;')
                ->header('Header title')
                ->headerTag('h1')
                ->headerTemplate('{header}')
                ->id('w0-alert')
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
                ->bodyTemplate('{icon}{body}')
                ->buttonText('&times;')
                ->iconAttributes(['class' => 'tests-class'])
                ->id('w0-alert')
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
                ->bodyTemplate('{icon}{body}')
                ->buttonText('&times;')
                ->iconClass('tests-class')
                ->id('w0-alert')
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
                ->bodyTemplate('{icon}{body}')
                ->buttonText('&times;')
                ->iconAttributes(['class' => 'tests-class'])
                ->iconContainerAttributes(['class' => 'test-container-class'])
                ->id('w0-alert')
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
                ->bodyTemplate('{icon}{body}')
                ->buttonText('&times;')
                ->iconAttributes(['class' => 'tests-class'])
                ->iconContainerClass('test-container-class')
                ->id('w0-alert')
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
                ->bodyTemplate('{icon}{body}')
                ->buttonText('&times;')
                ->iconAttributes(['class' => 'tests-class'])
                ->iconText('test')
                ->id('w0-alert')
                ->render(),
        );
    }

    public function testPrefix(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <span>Prefix</span>
            <span>This is a test.</span>
            <button type="button">&times;</button>
            <button type="button">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->buttonText('&times;')
                ->prefix('<span>Prefix</span>')
                ->id('w0-alert')
                ->template('{prefix}{body}{button}{suffix}')
                ->render(),
        );
    }

    public function testSuffix(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div id="w0-alert" role="alert">
            <span>This is a test.</span>
            <button type="button">&times;</button>
            <span>Suffix</span>
            </div>
            HTML,
            Alert::widget()
                ->body('This is a test.')
                ->buttonText('&times;')
                ->id('w0-alert')
                ->suffix('<span>Suffix</span>')
                ->template('{prefix}{body}{suffix}')
                ->render(),
        );
    }
}

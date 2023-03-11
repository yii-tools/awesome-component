<?php

declare(strict_types=1);

namespace Yiisoft\Yii\Widgets\Tests\Alert\Bootstrap5;

use PHPUnit\Framework\TestCase;
use Yii\Component\Alert;
use Yii\Support\Assert;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class RenderTest extends TestCase
{
    /**
     * @link https://getbootstrap.com/docs/5.0/components/alerts/#additional-content
     */
    public function testAdditionalContent(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-success alert-dismissible fade show" id="w0-alert" role="alert">
            <h4 class="alert-heading">
            Well done!
            </h4>
            <span><p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy</p></span>
            <button class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/recipes/alert/bootstrap5.php')
                ->body(
                    '<p>Aww yeah, you successfully read this important alert message. This example text is going to run ' .
                    'a bit longer so that you can see how spacing within an alert works with this kind of content.</p>' .
                    PHP_EOL . '<hr>' . PHP_EOL .
                    '<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy</p>'
                )
                ->id('w0-alert')
                ->header('Well done!')
                ->headerClass('alert-heading')
                ->headerTag('h4')
                ->layoutHeader('{header}')
                ->render(),
        );
    }

    /**
     * @link https://getbootstrap.com/docs/5.0/components/alerts/#dismissing
     */
    public function testDismissing(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-success alert-dismissible fade show" id="w0-alert" role="alert">
            <span><strong>Holy guacamole!</strong> You should check in on some of those fields below.</span>
            <button class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/recipes/alert/bootstrap5.php')
                ->body('<strong>Holy guacamole!</strong> You should check in on some of those fields below.')
                ->id('w0-alert')
                ->render(),
        );
    }

    /**
     * @link https://getbootstrap.com/docs/5.0/components/alerts/#icons
     */
    public function testIcon(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-success alert-dismissible fade show" id="w0-alert" role="alert">
            <div class="align-items-center d-flex">
            <div>
            <i class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2"></i>
            </div>
            <span>An example alert with an icon</span>
            <button class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
            </div>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/recipes/alert/bootstrap5.php')
                ->body('An example alert with an icon')
                ->bodyContainerClass('align-items-center d-flex')
                ->bodyContainer(true)
                ->iconClass('bi bi-exclamation-triangle-fill flex-shrink-0 me-2')
                ->id('w0-alert')
                ->layoutBody('{icon}{body}{button}')
                ->render(),
        );
    }

    /**
     * @link https://getbootstrap.com/docs/5.0/components/alerts/#link-color
     */
    public function testLinkColor(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-primary" id="w0-alert" role="alert">
            <span>A simple primary alert with <a href="#" class="alert-link">an example link</a>.Give it a click if you like.</span>
            <button class="float-right" data-bs-dismiss="alert" aria-label="Close">&times;</button>
            </div>
            HTML,
            Alert::widget()
                ->body(
                    'A simple primary alert with <a href="#" class="alert-link">an example link</a>.' .
                    'Give it a click if you like.'
                )
                ->buttonAttributes(['data-bs-dismiss' => 'alert', 'aria-label' => 'Close'])
                ->buttonClass('float-right')
                ->class('alert alert-primary')
                ->id('w0-alert')
                ->render(),
        );
    }
}

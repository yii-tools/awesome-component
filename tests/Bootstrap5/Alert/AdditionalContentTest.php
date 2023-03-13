<?php

declare(strict_types=1);

namespace Yii\Component\Tests\Bootstrap5\Alert;

use PHPUnit\Framework\TestCase;
use Yii\Component\Alert;
use Yii\Html\Tag;
use Yii\Support\Assert;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 *
 * @link https://getbootstrap.com/docs/5.0/components/alerts/#additional-content
 */
final class AdditionalContentTest extends TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-danger alert-dismissible fade show" id="w1-alert" role="alert">
            <h4 class="alert-heading">
            Well done!
            </h4>
            <span>
            <p>
            Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
            </p>
            <hr>
            <p class="mb-0">
            Whenever you need to, be sure to use margin utilities to keep things nice and tidy
            </p>
            </span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/additional_content/danger.php')
                ->body(
                    PHP_EOL . Tag::create(
                        'p',
                        'Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.',
                    ) .
                    PHP_EOL . Tag::create('hr') . PHP_EOL .
                    Tag::create(
                        'p',
                        'Whenever you need to, be sure to use margin utilities to keep things nice and tidy',
                        ['class' => 'mb-0'],
                    ) . PHP_EOL,
                )
                ->id('w1-alert')
                ->header('Well done!')
                ->render(),
        );
    }

    public function testDark(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-dark alert-dismissible fade show" id="w2-alert" role="alert">
            <h4 class="alert-heading">
            Well done!
            </h4>
            <span>
            <p>
            Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
            </p>
            <hr>
            <p class="mb-0">
            Whenever you need to, be sure to use margin utilities to keep things nice and tidy
            </p>
            </span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/additional_content/dark.php')
                ->body(
                    PHP_EOL . Tag::create(
                        'p',
                        'Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.',
                    ) .
                    PHP_EOL . Tag::create('hr') . PHP_EOL .
                    Tag::create(
                        'p',
                        'Whenever you need to, be sure to use margin utilities to keep things nice and tidy',
                        ['class' => 'mb-0'],
                    ) . PHP_EOL,
                )
                ->id('w2-alert')
                ->header('Well done!')
                ->render(),
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-info alert-dismissible fade show" id="w3-alert" role="alert">
            <h4 class="alert-heading">
            Well done!
            </h4>
            <span>
            <p>
            Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
            </p>
            <hr>
            <p class="mb-0">
            Whenever you need to, be sure to use margin utilities to keep things nice and tidy
            </p>
            </span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/additional_content/info.php')
                ->body(
                    PHP_EOL . Tag::create(
                        'p',
                        'Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.',
                    ) .
                    PHP_EOL . Tag::create('hr') . PHP_EOL .
                    Tag::create(
                        'p',
                        'Whenever you need to, be sure to use margin utilities to keep things nice and tidy',
                        ['class' => 'mb-0'],
                    ) . PHP_EOL,
                )
                ->id('w3-alert')
                ->header('Well done!')
                ->render(),
        );
    }

    public function testLight(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-light alert-dismissible fade show" id="w4-alert" role="alert">
            <h4 class="alert-heading">
            Well done!
            </h4>
            <span>
            <p>
            Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
            </p>
            <hr>
            <p class="mb-0">
            Whenever you need to, be sure to use margin utilities to keep things nice and tidy
            </p>
            </span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/additional_content/light.php')
                ->body(
                    PHP_EOL . Tag::create(
                        'p',
                        'Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.',
                    ) .
                    PHP_EOL . Tag::create('hr') . PHP_EOL .
                    Tag::create(
                        'p',
                        'Whenever you need to, be sure to use margin utilities to keep things nice and tidy',
                        ['class' => 'mb-0'],
                    ) . PHP_EOL,
                )
                ->id('w4-alert')
                ->header('Well done!')
                ->render(),
        );
    }

    public function testPrimary(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-primary alert-dismissible fade show" id="w5-alert" role="alert">
            <h4 class="alert-heading">
            Well done!
            </h4>
            <span>
            <p>
            Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
            </p>
            <hr>
            <p class="mb-0">
            Whenever you need to, be sure to use margin utilities to keep things nice and tidy
            </p>
            </span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/additional_content/primary.php')
                ->body(
                    PHP_EOL . Tag::create(
                        'p',
                        'Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.',
                    ) .
                    PHP_EOL . Tag::create('hr') . PHP_EOL .
                    Tag::create(
                        'p',
                        'Whenever you need to, be sure to use margin utilities to keep things nice and tidy',
                        ['class' => 'mb-0'],
                    ) . PHP_EOL,
                )
                ->id('w5-alert')
                ->header('Well done!')
                ->render(),
        );
    }

    public function testSecondary(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-secondary alert-dismissible fade show" id="w6-alert" role="alert">
            <h4 class="alert-heading">
            Well done!
            </h4>
            <span>
            <p>
            Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
            </p>
            <hr>
            <p class="mb-0">
            Whenever you need to, be sure to use margin utilities to keep things nice and tidy
            </p>
            </span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/additional_content/secondary.php')
                ->body(
                    PHP_EOL . Tag::create(
                        'p',
                        'Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.',
                    ) .
                    PHP_EOL . Tag::create('hr') . PHP_EOL .
                    Tag::create(
                        'p',
                        'Whenever you need to, be sure to use margin utilities to keep things nice and tidy',
                        ['class' => 'mb-0'],
                    ) . PHP_EOL,
                )
                ->id('w6-alert')
                ->header('Well done!')
                ->render(),
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-success alert-dismissible fade show" id="w7-alert" role="alert">
            <h4 class="alert-heading">
            Well done!
            </h4>
            <span>
            <p>
            Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
            </p>
            <hr>
            <p class="mb-0">
            Whenever you need to, be sure to use margin utilities to keep things nice and tidy
            </p>
            </span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/additional_content/success.php')
                ->body(
                    PHP_EOL . Tag::create(
                        'p',
                        'Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.',
                    ) .
                    PHP_EOL . Tag::create('hr') . PHP_EOL .
                    Tag::create(
                        'p',
                        'Whenever you need to, be sure to use margin utilities to keep things nice and tidy',
                        ['class' => 'mb-0'],
                    ) . PHP_EOL,
                )
                ->id('w7-alert')
                ->header('Well done!')
                ->render(),
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-warning alert-dismissible fade show" id="w8-alert" role="alert">
            <h4 class="alert-heading">
            Well done!
            </h4>
            <span>
            <p>
            Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
            </p>
            <hr>
            <p class="mb-0">
            Whenever you need to, be sure to use margin utilities to keep things nice and tidy
            </p>
            </span>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML,
            Alert::widget(file: dirname(__DIR__, 3) . '/snippet/bootstrap5/alert/additional_content/warning.php')
                ->body(
                    PHP_EOL . Tag::create(
                        'p',
                        'Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.',
                    ) .
                    PHP_EOL . Tag::create('hr') . PHP_EOL .
                    Tag::create(
                        'p',
                        'Whenever you need to, be sure to use margin utilities to keep things nice and tidy',
                        ['class' => 'mb-0'],
                    ) . PHP_EOL,
                )
                ->id('w8-alert')
                ->header('Well done!')
                ->render(),
        );
    }
}

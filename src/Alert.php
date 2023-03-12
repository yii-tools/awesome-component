<?php

declare(strict_types=1);

namespace Yii\Component;

use Yii\Html\Tag;

/**
 * Represents an alert part.
 *
 * @link https://getbootstrap.com/docs/5.0/components/alerts/
 * @link https://bulma.io/documentation/elements/notification/
 * @link https://tailwindui.com/components/application-ui/feedback/alerts
 */
final class Alert extends Base\AbstractAlert
{
    protected function run(): string
    {
        $attributes = $this->attributes;
        $parts = [];
        $renderIcon = $this->renderIcon();

        $parts['{button}'] = $this->renderButton();
        $parts['{icon}'] = $renderIcon !== '' ? $renderIcon . PHP_EOL : '';
        $parts['{body}'] = $this->renderBody();
        $parts['{header}'] = $this->renderHeader();
        $attributes['role'] = 'alert';

        $contentAlert = strtr(
            $this->template,
            [
                '{prefix}' => $this->prefix . PHP_EOL,
                '{header}' => $this->renderHeaderContainer($parts) . PHP_EOL,
                '{body}' => $this->renderBodyContainer($parts),
                '{suffix}' => PHP_EOL . $this->suffix,
                '{button}' => $this->renderButton(),
            ],
        );

        return $this->body !== '' ? Tag::create('div', trim($contentAlert), $attributes) : '';
    }
}

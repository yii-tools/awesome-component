<?php

declare(strict_types=1);

namespace Yii\Component;

use InvalidArgumentException;
use Yii\Html\Tag;
use Yii\Html\Helper\CssClass;
use Yii\Widget\AbstractWidget;

use function strtr;

/**
 * Represents an alert part.
 *
 * @link https://getbootstrap.com/docs/5.0/components/alerts/
 * @link https://bulma.io/documentation/elements/notification/
 * @link https://tailwindui.com/components/application-ui/feedback/alerts
 */
final class Alert extends AbstractWidget
{
    private array $attributes = [];
    private array $buttonAttributes = [];
    private string $buttonText = '&times;';
    private string $body = '';
    private array $bodyAttributes = [];
    /** @psalm-var non-empty-string */
    private string|null $bodyTag = 'span';
    private bool $bodyContainer = false;
    private array $bodyContainerAttributes = [];
    private string $header = '';
    private array $headerAttributes = [];
    private bool $headerContainer = false;
    private array $headerContainerAttributes = [];
    /** @psalm-var non-empty-string */
    private string $headerTag = 'span';
    private array $iconAttributes = [];
    private array $iconContainerAttributes = [];
    private string $iconText = '';
    private string $layoutHeader = '';
    private string $layoutBody = '{body}{button}';

    /**
     * Returns a new instance with the HTML attributes.
     *
     * @param array $valuesMap Attribute values indexed by attribute names.
     */
    public function attributes(array $valuesMap): self
    {
        $new = clone $this;
        $new->attributes = $valuesMap;

        return $new;
    }

    /**
     * Returns a new instance with changed message body.
     *
     * @param string $value The message body.
     */
    public function body(string $value): self
    {
        $new = clone $this;
        $new->body = $value;

        return $new;
    }

    /**
     * Returns a new instance with the HTML attributes for the message body tag.
     *
     * @param array $valuesMap Attribute values indexed by attribute names.
     *
     * {@see Html::renderTagAttributes()} For details on how attributes are being rendered.
     */
    public function bodyAttributes(array $valuesMap): self
    {
        $new = clone $this;
        $new->bodyAttributes = $valuesMap;

        return $new;
    }

    /**
     * Returns a new instance with CSS class for the message body tag.
     *
     * @param string $value The CSS class name.
     */
    public function bodyClass(string $value): self
    {
        $new = clone $this;
        CssClass::add($new->bodyAttributes, $value);

        return $new;
    }

    /**
     * Returns a new instance specifying when allows you to add an extra wrapper for the panel body.
     *
     * @param bool $value Whether to add an extra wrapper for the panel body.
     */
    public function bodyContainer(bool $value): self
    {
        $new = clone $this;
        $new->bodyContainer = $value;

        return $new;
    }

    /**
     * Returns a new instance with the HTML attributes for rendering extra message wrapper.
     *
     * @param array $valuesMap Attribute values indexed by attribute names.
     *
     * {@see Html::renderTagAttributes()} For details on how attributes are being rendered.
     */
    public function bodyContainerAttributes(array $valuesMap): self
    {
        $new = clone $this;
        $new->bodyContainerAttributes = $valuesMap;

        return $new;
    }

    /**
     * Returns a new instance with the CSS class for extra message wrapper.
     *
     * @param string $value The CSS class name.
     */
    public function bodyContainerClass(string $value): self
    {
        $new = clone $this;
        CssClass::add($new->bodyContainerAttributes, $value);

        return $new;
    }

    /**
     * Returns a new instance specifying when allows you to add an extra wrapper for the message body.
     *
     * @param string|null $tag The tag name.
     */
    public function bodyTag(string $tag = null): self
    {
        if ($tag === '') {
            throw new InvalidArgumentException('Body tag must be a string and cannot be empty.');
        }

        $new = clone $this;
        $new->bodyTag = $tag;

        return $new;
    }

    /**
     * Returns a new instance with the HTML the attributes for rendering the button tag.
     *
     * The button is displayed in the header of the modal window. Clicking on the button will hide the modal.
     *
     * If {@see buttonEnabled} is `false`, no button will be rendered.
     *
     * The rest of the options will be rendered as the HTML attributes of the button tag.
     *
     * @param array $valuesMap Attribute values indexed by attribute names.
     *
     * {@see Html::renderTagAttributes()} For details on how attributes are being rendered.
     */
    public function buttonAttributes(array $valuesMap): self
    {
        $new = clone $this;
        $new->buttonAttributes = $valuesMap;

        return $new;
    }

    /**
     * Returns a new instance with the CSS class for the button.
     *
     * @param string $value The CSS class name.
     */
    public function buttonClass(string $value): self
    {
        $new = clone $this;
        CssClass::add($new->buttonAttributes, $value);

        return $new;
    }

    /**
     * Returns a new instance with the label for the button.
     *
     * @param string $value The label for the button.
     */
    public function buttonText(string $value = ''): self
    {
        $new = clone $this;
        $new->buttonText = $value;

        return $new;
    }

    /**
     * Returns a new instance with the `onclick` JavaScript for the button.
     *
     * @param string $value The `onclick` JavaScript for the button.
     */
    public function buttonOnClick(string $value): self
    {
        $new = clone $this;
        $new->buttonAttributes['onclick'] = $value;

        return $new;
    }

    /**
     * Returns a new instance with the CSS class for the widget.
     *
     * @param string $value The CSS class name.
     */
    public function class(string $value): self
    {
        $new = clone $this;
        CssClass::add($new->attributes, $value);

        return $new;
    }

    /**
     * Returns a new instance with the header content.
     *
     * @param string $value The header content in the message.
     */
    public function header(string $value): self
    {
        $new = clone $this;
        $new->header = $value;

        return $new;
    }

    /**
     * Returns a new instance with the HTML attributes for rendering the header content.
     *
     * @param array $valuesMap Attribute values indexed by attribute names.
     *
     * {@see Html::renderTagAttributes()} For details on how attributes are being rendered.
     */
    public function headerAttributes(array $valuesMap): self
    {
        $new = clone $this;
        $new->headerAttributes = $valuesMap;

        return $new;
    }

    /**
     * Returns a new instance with the CSS class for the header.
     *
     * @param string $value The CSS class name.
     */
    public function headerClass(string $value): self
    {
        $new = clone $this;
        CssClass::add($new->headerAttributes, $value);

        return $new;
    }

    /**
     * Returns a new instance specifying when allows you to add a div tag to the header extra wrapper.
     *
     * @param bool $value The value indicating whether to add a div tag to the header extra wrapper.
     */
    public function headerContainer(bool $value = true): self
    {
        $new = clone $this;
        $new->headerContainer = $value;

        return $new;
    }

    /**
     * Returns a new instance with the HTML attributes for rendering the header.
     *
     * @param array $valuesMap Attribute values indexed by attribute names.
     *
     * {@see Html::renderTagAttributes()} For details on how attributes are being rendered.
     */
    public function headerContainerAttributes(array $valuesMap): self
    {
        $new = clone $this;
        $new->headerContainerAttributes = $valuesMap;

        return $new;
    }

    /**
     * Returns a new instance with the CSS class for the header extra wrapper.
     *
     * @param string $value The CSS class name.
     */
    public function headerContainerClass(string $value): self
    {
        $new = clone $this;
        CssClass::add($new->headerContainerAttributes, $value);

        return $new;
    }

    /**
     * Returns a new instance with the tag name for the header.
     *
     * @param string $value The tag name for the header.
     *
     * @throws InvalidArgumentException
     */
    public function headerTag(string $value): self
    {
        if (empty($value)) {
            throw new InvalidArgumentException('Header tag must be a string and cannot be empty.');
        }

        $new = clone $this;
        $new->headerTag = $value;

        return $new;
    }

    /**
     * Returns a new instance with the HTML attributes for rendering the `<i>` tag for the icon.
     *
     * @param array $valuesMap Attribute values indexed by attribute names.
     *
     * {@see Html::renderTagAttributes()} For details on how attributes are being rendered.
     */
    public function iconAttributes(array $valuesMap): self
    {
        $new = clone $this;
        $new->iconAttributes = $valuesMap;

        return $new;
    }

    /**
     * Returns a new instance with the icon CSS class.
     *
     * @param string $value The icon CSS class.
     */
    public function iconClass(string $value): self
    {
        $new = clone $this;
        CssClass::add($new->iconAttributes, $value);

        return $new;
    }

    /**
     * Returns a new instance with the HTML attributes for rendering icon container.
     *
     * The rest of the options will be rendered as the HTML attributes of the icon container.
     *
     * @param array $valuesMap Attribute values indexed by attribute names.
     *
     * {@see Html::renderTagAttributes()} For details on how attributes are being rendered.
     */
    public function iconContainerAttributes(array $valuesMap): self
    {
        $new = clone $this;
        $new->iconContainerAttributes = $valuesMap;

        return $new;
    }

    /**
     * Returns a new instance with the CSS class for the icon container.
     *
     * @param string $value The CSS class name.
     */
    public function iconContainerClass(string $value): self
    {
        $new = clone $this;
        CssClass::add($new->iconContainerAttributes, $value);

        return $new;
    }

    /**
     * Returns a new instance with the icon text.
     *
     * @param string $value The icon text.
     */
    public function iconText(string $value): self
    {
        $new = clone $this;
        $new->iconText = $value;

        return $new;
    }

    /**
     * Returns a new instance with the specified Widget ID.
     *
     * @param string $value The id of the widget.
     */
    public function id(string $value): self
    {
        $new = clone $this;
        $new->attributes['id'] = $value;

        return $new;
    }

    /**
     * Returns a new instance with the config layout body.
     *
     * @param string $value The config layout body.
     */
    public function layoutBody(string $value): self
    {
        $new = clone $this;
        $new->layoutBody = $value;

        return $new;
    }

    /**
     * Returns a new instance with the config layout header.
     *
     * @param string $value The config layout header.
     */
    public function layoutHeader(string $value): self
    {
        $new = clone $this;
        $new->layoutHeader = $value;

        return $new;
    }

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
        $contentAlert = $this->renderHeaderContainer($parts) . $this->renderBodyContainer($parts);

        return $this->body !== '' ? Tag::create('div', $contentAlert, $attributes) : '';
    }

    /**
     * Renders close button.
     */
    private function renderButton(): string
    {
        return PHP_EOL . Tag::create('button', $this->buttonText, $this->buttonAttributes);
    }

    /**
     * Render icon.
     */
    private function renderIcon(): string
    {
        return Tag::create(
            'div',
            Tag::create('i', $this->iconText, $this->iconAttributes),
            $this->iconContainerAttributes
        );
    }

    /**
     * Render the alert message body.
     */
    private function renderBody(): string
    {
        return $this->bodyTag !== null && $this->body !== ''
            ? Tag::create($this->bodyTag, $this->body, $this->bodyAttributes) : $this->body;
    }

    /**
     * Render the header.
     */
    private function renderHeader(): string
    {
        return $this->headerTag !== null && $this->header !== ''
            ? Tag::create($this->headerTag, $this->header, $this->headerAttributes) : '';
    }

    /**
     * Render the header container.
     */
    private function renderHeaderContainer(array $parts): string
    {
        $headerHtml = strtr($this->layoutHeader, $parts);

        return $this->headerContainer && $headerHtml !== ''
            ? Tag::create('div', $headerHtml, $this->headerContainerAttributes)
            : $headerHtml;
    }

    /**
     * Render the panel body.
     */
    private function renderBodyContainer(array $parts): string
    {
        $bodyHtml = strtr($this->layoutBody, $parts);

        if ($this->header !== '' && $this->body !== '') {
            $bodyHtml = PHP_EOL . $bodyHtml;
        }

        return $this->bodyContainer ? Tag::create('div', $bodyHtml, $this->bodyContainerAttributes) : $bodyHtml;
    }
}

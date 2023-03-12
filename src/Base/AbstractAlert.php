<?php

declare(strict_types=1);

namespace Yii\Component\Base;

use InvalidArgumentException;
use Yii\Component\Concern;
use Yii\Html\Helper\CssClass;
use Yii\Html\Tag;
use Yii\Widget\AbstractWidget;
use Yii\Widget\Attribute;

abstract class AbstractAlert extends AbstractWidget
{
    use Attribute\HasAttributes;
    use Attribute\HasClass;
    use Attribute\HasId;
    use Attribute\HasPrefixAndSuffix;
    use Concern\HasButton;
    use Concern\HasIcon;
    use Concern\HasTemplate;

    protected array $attributes = [];
    protected string $body = '';
    private array $bodyAttributes = [];
    private bool $bodyContainer = false;
    private array $bodyContainerAttributes = [];
    private string $bodyPrefix = '';
    private string $bodySuffix = '';
    /** @psalm-var non-empty-string */
    private string|null $bodyTag = 'span';
    private string $bodyTemplate = '{prefix}{body}{suffix}{button}';
    private string $header = '';
    private array $headerAttributes = [];
    private bool $headerContainer = false;
    private array $headerContainerAttributes = [];
    private string $headerPrefix = '';
    private string $headerSuffix = '';
    /** @psalm-var non-empty-string */
    private string $headerTag = 'span';
    private string $headerTemplate = '';
    protected string $template = '{prefix}{header}{body}{suffix}';

    /**
     * Returns a new instance with changed message body.
     *
     * @param string $value The message body.
     */
    public function body(string $value): static
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
    public function bodyAttributes(array $valuesMap): static
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
    public function bodyClass(string $value): static
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
    public function bodyContainer(bool $value): static
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
    public function bodyContainerAttributes(array $valuesMap): static
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
    public function bodyContainerClass(string $value): static
    {
        $new = clone $this;
        CssClass::add($new->bodyContainerAttributes, $value);

        return $new;
    }

    /**
     * Returns a new instance with body prefix.
     *
     * @param string $value The body prefix.
     */
    public function bodyPrefix(string $value): static
    {
        $new = clone $this;
        $new->bodyPrefix = $value;

        return $new;
    }

    /**
     * Returns a new instance with body suffix.
     *
     * @param string $value The body suffix.
     */
    public function bodySuffix(string $value): static
    {
        $new = clone $this;
        $new->bodySuffix = $value;

        return $new;
    }

    /**
     * Returns a new instance specifying when allows you to add an extra wrapper for the message body.
     *
     * @param string|null $tag The tag name.
     */
    public function bodyTag(string $tag = null): static
    {
        if ($tag === '') {
            throw new InvalidArgumentException('Body tag must be a string and cannot be empty.');
        }

        $new = clone $this;
        $new->bodyTag = $tag;

        return $new;
    }

    /**
     * Returns a new instance with the body template.
     *
     * @param string $value The body template.
     */
    public function bodyTemplate(string $value): static
    {
        $new = clone $this;
        $new->bodyTemplate = $value;

        return $new;
    }

    /**
     * Returns a new instance with the header content.
     *
     * @param string $value The header content in the message.
     */
    public function header(string $value): static
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
    public function headerAttributes(array $valuesMap): static
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
    public function headerClass(string $value): static
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
    public function headerContainer(bool $value = true): static
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
    public function headerContainerAttributes(array $valuesMap): static
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
    public function headerContainerClass(string $value): static
    {
        $new = clone $this;
        CssClass::add($new->headerContainerAttributes, $value);

        return $new;
    }

    /**
     * Returns a new instance with header prefix.
     *
     * @param string $value The header prefix.
     */
    public function headerPrefix(string $value): static
    {
        $new = clone $this;
        $new->headerPrefix = $value;

        return $new;
    }

    /**
     * Returns a new instance with header suffix.
     *
     * @param string $value The header suffix.
     */
    public function headerSuffix(string $value): static
    {
        $new = clone $this;
        $new->headerSuffix = $value;

        return $new;
    }

    /**
     * Returns a new instance with the tag name for the header.
     *
     * @param string $value The tag name for the header.
     *
     * @throws InvalidArgumentException
     */
    public function headerTag(string $value): static
    {
        if (empty($value)) {
            throw new InvalidArgumentException('Header tag must be a string and cannot be empty.');
        }

        $new = clone $this;
        $new->headerTag = $value;

        return $new;
    }

    /**
     * Returns a new instance with the header template.
     *
     * @param string $value The header template.
     */
    public function headerTemplate(string $value): static
    {
        $new = clone $this;
        $new->headerTemplate = $value;

        return $new;
    }

    /**
     * Renders close button.
     */
    protected function renderButton(): string
    {
        $buttonAttributes = $this->buttonAttributes;
        $buttonAttributes['type'] = 'button';

        return PHP_EOL . Tag::create('button', $this->buttonText, $buttonAttributes);
    }

    /**
     * Render icon.
     */
    protected function renderIcon(): string
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
    protected function renderBody(): string
    {
        return $this->bodyTag !== null && $this->body !== ''
            ? Tag::create($this->bodyTag, $this->body, $this->bodyAttributes) : $this->body;
    }

    /**
     * Render the header.
     */
    protected function renderHeader(): string
    {
        return $this->header !== ''
            ? Tag::create($this->headerTag, $this->header, $this->headerAttributes) : '';
    }

    /**
     * Render the header container.
     */
    protected function renderHeaderContainer(array $parts): string
    {
        $parts['{prefix}'] = '';
        $parts['{suffix}'] = '';

        if ($this->headerPrefix !== '') {
            $parts['{prefix}'] = $this->headerPrefix . PHP_EOL;
        }

        if ($this->headerSuffix !== '') {
            $parts['{suffix}'] = PHP_EOL . $this->headerSuffix;
        }

        $headerHtml = strtr($this->headerTemplate, $parts);

        return $this->headerContainer && $headerHtml !== ''
            ? Tag::create('div', $headerHtml, $this->headerContainerAttributes)
            : $headerHtml;
    }

    /**
     * Render the panel body.
     */
    protected function renderBodyContainer(array $parts): string
    {
        $parts['{prefix}'] = '';
        $parts['{suffix}'] = '';

        if ($this->bodyPrefix !== '') {
            $parts['{prefix}'] = $this->bodyPrefix . PHP_EOL;
        }

        if ($this->bodySuffix !== '') {
            $parts['{suffix}'] = PHP_EOL . $this->bodySuffix;
        }


        $bodyHtml = strtr($this->bodyTemplate, $parts);

        return $this->bodyContainer ? Tag::create('div', $bodyHtml, $this->bodyContainerAttributes) : $bodyHtml;
    }
}

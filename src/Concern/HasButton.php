<?php

declare(strict_types=1);

namespace Yii\Component\Concern;

use Yii\Html\Helper\CssClass;

/**
 * Is used by components that can have a button tag.
 */
trait HasButton
{
    protected array $buttonAttributes = [];
    protected string $buttonText = '';

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
}

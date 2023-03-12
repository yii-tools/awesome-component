<?php

declare(strict_types=1);

namespace Yii\Component\Concern;

/**
 * Is used by components that can have a template.
 */
trait HasTemplate
{
    /**
     * Returns a new instance with the template.
     *
     * @param string $value The template.
     */
    public function template(string $value): self
    {
        $new = clone $this;
        $new->template = $value;

        return $new;
    }
}

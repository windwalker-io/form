<?php

declare(strict_types=1);

namespace Windwalker\Form\Field;

/**
 * The HiddenField class.
 *
 * @since  2.0
 */
class HiddenField extends TextField implements HiddenFieldInterface
{
    /**
     * Property type.
     *
     * @var  string
     */
    protected string $inputType = 'hidden';
}

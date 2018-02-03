<?php

/**
 *
 * Function code for the complex inverse() function
 *
 * @copyright  Copyright (c) 2013-2018 Mark Baker (https://github.com/MarkBaker/PHPComplex)
 * @license    https://www.gnu.org/licenses/lgpl-3.0.html    LGPL 3.0
 */
namespace Complex;

/**
 * Returns the inverse of a complex number.
 *
 * @param     Complex|mixed    $complex    Complex number or a numeric value.
 * @return    Complex          The inverse of the complex argument.
 * @throws    Exception        If argument isn't a valid real or complex number.
 * @throws    \InvalidArgumentException    If function would result in a division by zero
 */
function inverse($complex)
{
    $complex = clone Complex::validateComplexArgument($complex);

    if ($complex->getReal() == 0.0 && $complex->getImaginary() == 0.0) {
        throw new \InvalidArgumentException('Division by zero');
    }

    return $complex->divideInto();
}

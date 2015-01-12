<?php

/**
 *
 * Function code for the complex acsc() function
 *
 * @package Complex
 * @copyright  Copyright (c) 2013-2015 Mark Baker (https://github.com/MarkBaker/PHPComplex)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 */
namespace Complex;

/**
 * Returns the inverse cosecant of a complex number.
 *
 * @param     Complex|mixed    $complex    Complex number or a numeric value.
 * @return    Complex          The inverse cosecant of the complex argument.
 * @throws    \Exception       If argument isn't a valid real or complex number.
 */
function acsc($complex)
{
    $complex = Complex::validateComplexArgument($complex);

    return asin(inverse($complex));
}

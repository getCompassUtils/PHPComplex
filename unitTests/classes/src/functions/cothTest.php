<?php

namespace Complex;
include_once __DIR__ . '/baseFunctionTest.php';

class cothTest extends baseFunctionTest
{
    protected static $functionName = 'coth';

    /**
     * @dataProvider providerCoth
     */
	public function testCoth()
	{
		$args = func_get_args();
        if (strpos($args[1], 'Exception') !== false) {
            $this->setExpectedException($args[1]);
        }
		$complex = new Complex($args[0]);
		$result = coth($complex);

        $this->complexNumberAssertions($args[1], $result);
        // Verify that the original complex value remains unchanged
        $this->assertEquals(new Complex($args[0]), $complex);
	}

    /*
     * Results derived from Wolfram Alpha using
     *  N[Coth[<VALUE> Radians], 18]
     */
    public function providerCoth()
    {
		$expectedResults = array(
			1.00000000007550269,
			1.00000000003787034,
            8.14155377696011725,
			'1.000000000020089467-3.2102588E-11i',
            '1.000000000020089467+3.2102588E-11i',
			'0.49867794288608618-1.69487006980777610i',
			'0.49867794288608618+1.69487006980777610i',
            '0.304446159249399012-1.193051308222032128i',
            '0.304446159249399012+1.193051308222032128i',
            -1.00000000527729165,
            -1.32212437344093577,
            '-0.999999996258627-3.721818315566377E-9i',
            '-0.999999996258627+3.721818315566377E-9i',
            '-1.168797734949383-0.251471514080718i',
            '-1.168797734949383+0.251471514080718i',
            '-6.50467164953053602E17i',
            'Exception',
			'-0.642092615934330703i',
			'0.6420926159343307i',
            '-8.08903988853953767i',
            '8.08903988853954i',
		);

		return $this->formatOneArgumentTestResultArray($expectedResults);
	}

}
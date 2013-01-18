<?php

namespace spec;

use PHPSpec2\ObjectBehavior;

require_once __DIR__.'/../vendor/autoload.php';

class Calculator extends ObjectBehavior
{
	/**
	 * @param Foo/Bar $bar
	 */
    function it_should_calculate_an_addition($bar)
    {
    	$bar->foo()->willReturn('bar');
    	$bar->foo()->willReturn('baz');

        $this->calculate("1+1")->shouldReturn(2);
        $this->calculate("4/2")->shouldReturn(2);
    }
}

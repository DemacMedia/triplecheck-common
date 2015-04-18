<?php

namespace spec\Triplecheck\Common;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AbstractPluginSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Triplecheck\Common\AbstractPlugin');
    }
}

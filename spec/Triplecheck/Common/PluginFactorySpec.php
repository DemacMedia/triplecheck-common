<?php

namespace spec\Triplecheck\Common;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PluginFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Triplecheck\Common\PluginFactory');
    }

    function it_should_return_array_with_available_plugins()
    {
        $this->all()->shouldBeArray();
    }

}

<?php

namespace spec\Triplecheck;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TriplecheckSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Triplecheck\Triplecheck');
    }

    function it_should_return_an_empty_plugin_factory()
    {
        $this::getFactory()->shouldReturnAnInstanceOf('Triplecheck\Common\PluginFactory');
    }
}

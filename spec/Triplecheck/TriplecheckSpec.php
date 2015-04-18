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
}

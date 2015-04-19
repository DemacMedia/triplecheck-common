<?php

namespace spec\Triplecheck\Common;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ScoreSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Triplecheck\Common\Score');
    }

    function it_should_have_a_file_count()
    {
        $this->getFileCount()->shouldReturn(0);
    }

    function it_should_have_a_score()
    {
        $this->getScore()->shouldReturn(0);
    }

    function it_should_be_able_to_add_a_file_result_to_the_score()
    {
        $score =  1;
        $this->addResult($score)->getScore()->shouldReturn(1);

    }

}

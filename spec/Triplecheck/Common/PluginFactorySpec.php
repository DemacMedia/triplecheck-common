<?php

namespace spec\Triplecheck\Common;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Mockery;

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

    function it_should_create_an_instance_of_dummy_plugin()
    {
        $mock = \Mockery::mock('alias:Triplecheck\\Phpcs\\Runner');
        $this->create('\\Triplecheck\\Phpcs\\Runner')->shouldReturnAnInstanceOf('\\Triplecheck\\Phpcs\\Runner');
    }

    function it_should_be_able_to_run_phpcs()
    {
        $configurationArray = [ 
            "argument" => "report=json",
            "param"    => "tests/SimpleTest.php"
        ];

        $instance = $this->create('\\Triplecheck\\Phpcs\\Plugin');
        $instance->shouldReturnAnInstanceOf('\\Triplecheck\\Phpcs\\Plugin');
        $instance->configure($configurationArray)->run();
    }
}

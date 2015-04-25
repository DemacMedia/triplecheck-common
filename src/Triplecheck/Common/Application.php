<?php

namespace Triplecheck\Common;

use Triplecheck\Common;
use Symfony\Component\Console\Output\ConsoleOutput;

class Application
{
    private $results;

    public function run($params)
    {
        $plugin = \Triplecheck\Triplecheck::create('Triplecheck\Phpcs\Plugin');
        $options = [
            "argument" => "report=json --standard=vendor/magento-ecg/coding-standard/Ecg/",
            "param" => $params
        ];

        $results = $plugin->configure($options)->run();

        $this->results = json_decode($results[0]);

        return $this;
    }

    public function getScore()
    {
        $output = new ConsoleOutput();

        $scorer = new \Triplecheck\Phpcs\Scoring($this->results);
        $score = $scorer->calculate();

        $output->writeln("Your code score is: $score");
    }
}

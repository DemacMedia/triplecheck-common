<?php

namespace Triplecheck\Common;

class Score
{
    private $fileCount = 0;
    private $score = 0;

    public function getFileCount()
    {
        return $this->fileCount;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function addResult($result)
    {
        $this->score += $result['score'];
        $this->fileCount++;
        return $this;
    }
}

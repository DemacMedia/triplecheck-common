<?php

namespace Triplecheck\Common;

use AdamBrett\ShellWrapper\Runners\Exec as Exec;
use AdamBrett\ShellWrapper\Command\Builder as CommandBuilder;

abstract class AbstractPlugin
{

    public $_command;
    public $_shell;

    public $_pluginCode;

    public function __construct()
    {
        $this->_shell   = new Exec();
        $this->_command = new CommandBuilder($this->_pluginCode);
    }
}

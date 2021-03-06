<?php

namespace TDM\SchedulerBundle\Interfaces;

use TDM\SchedulerBundle\Interfaces\TaskExecutionInterface;
use \DateTime;

/**
 *
 * @author wpigott
 */
interface ScheduledTaskInterface {

    public function checkShouldExecute(DateTime $lastTimeRun);

    public function execute(TaskExecutionInterface $taskExecution);
}

?>

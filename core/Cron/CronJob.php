<?php

namespace Cron;

class CronJob
{
    private $jobs = [];
    function __construct(array $jobs)
    {
        $this->jobs=$jobs;
    }
    public function addJob($callback, $interval) {
        // TODO Ajouter une tâche cron
    }

    public function run() {
        // TODO Exécuter les tâches cron
    }
}
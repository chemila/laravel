<?php
$xhprofData = xhprof_disable();
include_once "xhprof_lib/utils/xhprof_lib.php";
include_once "xhprof_lib/utils/xhprof_runs.php";
$xhprofRuns = new XHProfRuns_Default();
$xhprofRuns->save_run($xhprofData, "laravel");

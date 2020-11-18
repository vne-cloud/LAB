<?php


require "core/EquationInterface.php";
require "core/LogAbstract.php";
require "core/LogInterface.php";
require "Step/MyLog.php";
require "Step/line.php";
require "Step/Sqr.php";


ini_set("display_errors", 1);
error_reporting (-1);


\Step\MyLog::log("Hooo");
\Step\MyLog::write();

?>

<?php
file_put_contents("version", trim(shell_exec('git symbolic-ref --short -q HEAD')));
$tmp = exec('composer install');
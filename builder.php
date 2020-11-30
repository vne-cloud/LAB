<?php
file_put_contents("version", trim(shell_exec('git symbolic-ref --short -q HEAD')));
if(!(is_dir("core"))){
    $tmp = exec('git clone https://github.com/rok9ru/trpo-core "core"');
}
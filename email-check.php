<?php

$pattern = '/[\w]{3,64}[@]{1}[\w]{3,255}[.]{1}[a-z]{2,3}/m';

$input = $argv[1];

if (preg_match($pattern, $input)) {
    echo("$input is een geldig email address");
} else {
    echo("$input is niet een geldig email address");
}

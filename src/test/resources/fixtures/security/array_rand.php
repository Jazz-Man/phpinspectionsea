<?php

function cases_holder() {
    $value = $values[<error descr="Insufficient entropy, mt_rand/random_int based solution would be more secure.">array_rand</error>($values)];

    $values = $values[array_rand($values, 5)];
    $key    = array_rand($values);
}
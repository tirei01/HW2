<?php

namespace Tirei01\Hw2;

class Bar
{
    public function __construct()
    {
        echo "<pre style='color:red; clear: both;'>";
        print_r(__METHOD__);
        echo "</pre>";
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function __construct(
        public string $name,
        public string $email,
    ) {}
}

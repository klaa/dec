<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\PostController;

class RegulationController extends PostController
{
    public $_type = 'regulations';
    public $_post_type = 'regulation';
}

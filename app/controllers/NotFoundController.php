<?php

declare(strict_types = 1);

namespace App\Controllers;

use App\Core\Controller;

class NotFoundController extends Controller
{
    public function index()
    {
        $this->view('404', compact('url'));
    }
}

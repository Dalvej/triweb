<?php

namespace Triweb\Http\Controllers;

use Illuminate\Http\Request;

use Triweb\Http\Requests;
use Triweb\Http\Controllers\Controller;

// Get theme facade
use Theme;

class ThemeViews extends Controller {
    public function __construct() {
        $this->middleware('404', ['only' => 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return Theme::view('index');
    }

    public function show($slug) {
        return ;
    }
}

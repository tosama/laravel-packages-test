<?php
/**
 * Created by PhpStorm.
 * User: tarekosama
 * Date: 9/20/16
 * Time: 2:39 PM
 */

namespace Wuzzuf\Testpackage\App\Controllers;

use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('wuzzuf/testpackage::index');
    }
}
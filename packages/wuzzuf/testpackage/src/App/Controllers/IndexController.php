<?php
/**
 * @apiDefine testPackages
 * @apiError UserNotFound The <code>id</code> of the User was not found.
 */
namespace Wuzzuf\Testpackage\App\Controllers;

use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    /**
     * @api {get} /testpackage test new packages
     * @apiName TestPackage
     * @apiGroup Wuzzuf
     * @apiDescription testing new page system in laravel created
     * by tark.
     * @apiHeader {String} access-key Users unique access-key.
     * @apiExample {curl} Example usage:
     * curl -i http://localhost/laravel-packages-test/public/testpackage
     *
     * @apiSuccess {string} welcome page.
     *
     */
    public function index()
    {
        return view('wuzzuf/testpackage::index');
    }
}

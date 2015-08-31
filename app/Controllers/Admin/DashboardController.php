<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Services\AuthService;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Class DashboardController
 * @package App\Controllers\Admin
 */
class DashboardController extends BaseController {

    /**
     * @var AuthService
     */
    protected $auth;

    public function __construct()
    {
        parent::__construct();
        $this->auth = new AuthService();
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        if(!$this->auth->loggedIn()) {
            $redirect = new RedirectResponse('/admin/login');

            return $redirect->send();
        }

        return $this->view('admin/dashboard');
    }

}
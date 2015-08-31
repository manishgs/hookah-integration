<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Services\AuthService;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Class AdminController
 * @package App\Controllers\Admin
 */
class AuthController extends BaseController {

    /**
     * @var AuthService
     */
    protected $auth;

    /**
     * @param AuthService $auth
     */
    public function __construct(AuthService $auth)
    {
        parent::__construct();
        $this->auth = $auth;
    }

    /**
     * Login Page
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function login()
    {
        if($this->auth->loggedIn()) {
            $redirect = new RedirectResponse('/admin/dashboard');

            return $redirect->send();
        }

        return $this->view('admin/login');
    }

    /**
     * Process Login
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginPost()
    {
        $email = $this->request->request->get('email');
        $password = $this->request->get('password');

        if($this->auth->login($email, $password)) {
            $redirect = new RedirectResponse('/admin/dashboard');
        } else {
            $redirect = new RedirectResponse('/admin/login?error');
        }

        return $redirect->send();
    }

    /**
     * Logout
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function logout()
    {
        $this->auth->logout();
        $redirect = new RedirectResponse('/admin/login');

        return $redirect->send();
    }
}

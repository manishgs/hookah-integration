<?php namespace App\Services;

/**
 * Class AuthService
 * @package App\Services
 */
class AuthService extends Services {

    /**
     * Login user
     *
     * @param $username
     * @param $password
     * @return bool
     */
    public function login($username, $password)
    {
        if($username == env('TEST_USER_EMAIL') && $password == env('TEST_USER_PASS')) {
            $_SESSION['user'] = $username;

            return true;
        }

        return false;
    }

    /**
     * Check user is loggedIn of not
     * @return bool
     */
    public function loggedIn()
    {
        if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            return true;
        }

        return false;
    }

    /**
     * Logout user
     */
    public function logout()
    {
        unset($_SESSION['user']);
    }

    /**
     * get User
     * @return mixed
     */
    public function user()
    {
        return $_SERVER['user'];
    }
}

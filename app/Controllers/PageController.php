<?php namespace App\Controllers;

/**
 * Class PageController
 * @package App\Controllers
 */
class PageController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Home Page
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function home()
    {
        return $this->view('page/home');
    }

    /**
     * About page
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function about()
    {
        return $this->view('page/about');
    }

    /**
     * Contact Page
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contact()
    {
        return $this->view('page/contact');
    }

}

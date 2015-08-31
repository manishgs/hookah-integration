<?php namespace App\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class BaseController
 * @package App\Controllers
 */
class BaseController
{
    /**
     * @var Response
     */
    public $request;

    function __construct()
    {
        $this->request = Request::createFromGlobals();
    }

    /**
     * Display content
     * @param $page
     * @return Response
     */
    protected function view($page)
    {
        $content = view($page);

        return Response::create($content, 200, ['Content-Type: text/html']);
    }
}

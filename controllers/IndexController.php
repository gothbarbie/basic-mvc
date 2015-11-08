<?php
/*
 * Default index controller
 */
class IndexController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo '<pre>' . print_r(__METHOD__, 1) . '</pre>';
        $this->load->model('posts');

        echo '<pre>' . print_r($this->_registry->posts->getEntries(), 1) . '</pre>';
    }
}

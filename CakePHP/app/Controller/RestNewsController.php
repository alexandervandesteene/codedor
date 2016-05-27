<?php

class RestNewsController extends AppController
{
    public $uses = array('News');
    public $helpers = array('Html', 'Form');
    public $components = array('RequestHandler');

    public function index()
    {
        $news = $this->News->find('all');
        $this->set(array(
            'news' => $news,
            '_serialize' => array('news')
        ));
    }

    public function view($id)
    {
        $news = $this->News->findById($id);
        $this->set(array(
            'news' => $news,
            '_serialize' => array('news')
        ));
    }

}
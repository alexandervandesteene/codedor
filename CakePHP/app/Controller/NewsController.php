<?php

/**
 * Created by PhpStorm.
 * User: alexandervandesteene
 * Date: 27/05/16
 * Time: 13:28
 */
class NewsController extends AppController
{
    public $helpers = array('Html', 'Form');

    public function index()
    {
        $this->set('news', $this->News->find('all'));
    }

    public function view($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $news = $this->News->findById($id);
        if (!$news) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('news', $news);
    }

    public function edit($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $news = $this->News->findById($id);
        if (!$news) {
            throw new NotFoundException(__('Invalid post'));
        }

        if ($this->request->is(array('news', 'put'))) {
            $this->News->id = $id;
            if ($this->News->save($this->request->data)) {
                $this->Flash->success(__('Your post has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your post.'));
        }

        if (!$this->request->data) {
            $this->request->data = $news;
        }
    }


    public function delete($id)
    {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->News->delete($id)) {
            $this->Flash->success(
                __('The News with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Flash->error(
                __('The News with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }


    public function add()
    {
        if ($this->request->is('post')) {
            $this->News->create();
            if ($this->News->save($this->request->data)) {
                $this->Flash->success(__('Your news has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your news.'));
        }
    }


}
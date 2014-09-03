<?php
App::uses('AppController', 'Controller');

class ArticlesController extends AppController {

    public $components = array('Paginator');
    public $helpers = array('Js', 'InPlaceEditing.InPlaceEditing');

    public function show_articles() {
        $this->Article->recursive = 0;
        $this->set('articles', $this->paginate());
    }

    public function view($id = null) {
        if (!$this->Article->exists($id)) {
            throw new NotFoundException(__('Invalid article'));
        }
        $options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
        $this->set('article', $this->Article->find('first', $options));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Article->create();
            if ($this->Article->save($this->request->data)) {
                $this->Session->setFlash(__('The article has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The article could not be saved. Please, try again.'), 'flash/error');
            }
        }
        $chapters = $this->Article->Chapter->find('list');
        $measureUnits = $this->Article->MeasureUnit->find('list');
        $this->set(compact('chapters', 'measureUnits'));
    }

    public function edit($id = null) {
        $this->Article->id = $id;
        if (!$this->Article->exists($id)) {
            throw new NotFoundException(__('Invalid article'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Article->save($this->request->data)) {
                $this->Session->setFlash(__('The article has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The article could not be saved. Please, try again.'), 'flash/error');
            }
        } else {
            $options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
            $this->request->data = $this->Article->find('first', $options);
        }
        $chapters = $this->Article->Chapter->find('list');
        $measureUnits = $this->Article->MeasureUnit->find('list');
        $this->set(compact('chapters', 'measureUnits'));
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Article->id = $id;
        if (!$this->Article->exists()) {
            throw new NotFoundException(__('Invalid article'));
        }
        if ($this->Article->delete()) {
            $this->Session->setFlash(__('Article deleted'), 'flash/success');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Article was not deleted'), 'flash/error');
        $this->redirect(array('action' => 'index'));
    }

    public function find_articles() {
        $chapters = $this->Article->Chapter->find('list');
        $chapters['0'] = '-Seleccione un Capítulo-';
        asort($chapters);
        $this->set(compact('chapters'));
        if (!empty($this->request->data)) {
            $nameArticle = $this->request->data['Article']['name'];
            $idChapter = $this->request->data['Article']['chapter_id'];
            if ($idChapter == '0') {
                $condition = array();
            } else {
                $condition = array('Article.chapter_id' => $idChapter);
            }
            $entries = $this->Article->find('all', array('conditions' => array(
                    "OR" => array('Article.name LIKE' => '%' . $nameArticle . '%', 'Article.description LIKE' => '%' . $nameArticle . '%', 'Article.string_search LIKE' => '%' . $nameArticle . '%'),
                    "AND" => $condition
            )));

            $this->set('entries', $entries);
            if ($this->RequestHandler->isAjax()) {
                $this->render('entries', 'ajax');
            }
        }
    }

    public function download_gazette() {
        $this->download('gaceta-oficial-30-20140711', 'pdf');
    }

    public function in_place_editing($id = null) {
        if (!$id) {
            return;
        }
        if ($this->request->data) {
            $enabledFields = array('zip', 'name', 'amount', 'description', 'string_search');
            foreach ($this->data['Article'] as $field => $value) {
                if (!in_array($field, $enabledFields)) {
                    $this->set('updated_value', '');
                        return;
                }
                $this->Article->id = $id;
                $this->Article->saveField($field, $value);
                $this->set('updated_value', $value);
                $this->beforeRender();
                $this->layout = 'ajax';
            }
        }
    }
    
    /*public function in_place_editing($id = null) {
        if (!$id) 
            return;
        if ($this->request->data) {
            foreach ($this->data['Article'] as $field => $value) {
               switch ($field) {
                    case 'zip':
                    case 'name':
                        break;
                    case 'amount':
                        break;    
                    case 'description':
                        break;    
                    case 'string_search':
                        break;    
                    default:
                        $this->set('updated_value', '');
                        return;
                }

                $this->Article->id = $id;
                $this->Article->saveField($field, $value);
                $this->set('updated_value', $value);
                $this->beforeRender();
                $this->layout = 'ajax';
            }
        }
    }*/

}

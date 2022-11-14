<?php 
class account_controller{
    private $model;
    public function __construct()
    {
        require_once 'model/account-model.php';
        $this->model = new account_model();
    }
    public function save($entity, $email, $name, $desc, $pass) {
        $id = $this->model->insert($entity, $email, $name, $desc, $pass);
        return ($id!=false) ? header('Location: http://localhost/account-book/save-account/saved') : header('Location: http://localhost/account-book/home/not-saved');
    }
    public function show($id) {
        return ($this->model->show($id) != false) ? $this->model->show($id) : header('Location: http://localhost/account-book/show-account/not-found');
    }
    public function index() {
        return ($this->model->index()) ? $this->model->index() : false;
    }
    public function update($id, $email, $pass) {
        return ($this->model->update($id, $email, $pass) != false) ? header('Location: http://localhost/account-book/edit-account/saved') : header('Location: http://localhost/account-book/edit-account/not-saved');
    }
    public function delete($id) {
        return ($this->model->delete($id)) ? header('Location: http://localhost/account-book/show-all/deleted') : header('Location: http://localhost/account-book/show-all/not-deleted'.$id);
    }
}
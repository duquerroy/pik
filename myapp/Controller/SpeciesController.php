<?php 

App::uses('AppController', 'Controller');

class SpeciesController extends AppController{
  
  public function admin_index(){
    $species = $this->Species->find('all');
    $this->set(compact('species'));
  }

  public function admin_edit($id = null){
    if (!empty($this->request->data)) {
      $this->Species->save($this->request->data);
      $this->Session->setFlash("L'espèce à bien été sauvegardé", "flash", array('class' => 'success'));
      return $this->redirect(array('action' => 'index'));
    }else if ($id){
      $this->request->data = $this->Species->findById($id);
    }
  }

  public function admin_delete($id){
    $this->Species->delete($id);
    $this->Session->setFlash("L'espèce à bien été supprimé", "flash", array('class' => 'success'));
    return $this->redirect(array('action' => 'index'));
  }
}


?>
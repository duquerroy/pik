<?php 

App::uses('AppController', 'Controller');

class PetsController extends AppController{
  
  public function my(){
    $pets = $this->Pet->find('all', array(
      'conditions' => array('Pet.user_id' => $this->Auth->user("id")),
      'contain'    => array('Species.name')
      )) ;
    $this->set(compact('pets'));
  }

  public function edit($id = null){

    if (!empty($this->request->data)) {
      // $this->request->data['Pet']['id'] = null;
      $this->request->data['Pet']['user_id'] = $this->Auth->user('id');
      if ($this->Pet->save($this->request->data)){
        $this->Session->setFlash("L'animal à bien été sauvegardé", "flash", array('class' => 'success'));
        return $this->redirect(array('action' => 'my'));
      }
    }else if ($id){
      $this->request->data = $this->Pet->find('first', array(
        'conditions' => array('Pet.user_id' => $this->Auth->user('id'),
        'Pet.id' => $id)
        ));
      if(empty($this->request->data)){
        $this->Session->setFlash("Vous ne pouvez pas éditer cet animal","flash", array('class' => 'warning'));
        $this->redirect(array('action'=>'my'));
        
      }
    }
    
    $species = $this->Pet->Species->find('list');
    $this->set(compact('species'));

  }


}

?>
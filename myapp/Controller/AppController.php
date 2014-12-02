<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $components = array('DebugKit.Toolbar', 'Session', 'Cookie', 'Auth');

	public $helpers = array('Form' =>array('className' => 'Foundation.FoundationForm'));	

  public function beforeFilter(){
    parent::beforeFilter();
    if(isset($this->request->params['prefix']) && $this->request->params['prefix'] == 'admin') {
      if($this->Auth->user('role')!='admin'){
        throw new NotFoundException();
      }
    }
  }
}
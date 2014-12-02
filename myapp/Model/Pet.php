<?php
class Pet extends AppModel{

    public $belongsTo = array('Species');

    public $validate = array(
      'name' => 'notEmpty',
      'gender' => '/^(M|F)$'
      );

} 
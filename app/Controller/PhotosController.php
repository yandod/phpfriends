<?php
App::uses('AppController', 'Controller');
/**
 * Photos Controller
 *
 */
class PhotosController extends AppController {

    public $paginate = array(
        'order' => array('Photo.created' => 'DESC')
    );

/**
 * Scaffold
 *
 * @var mixed
 */

    public function index()
    {
        $this->set('data',$this->paginate());
    }
}

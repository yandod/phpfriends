<?php
App::uses('AppController', 'Controller');
/**
 * Photos Controller
 *
 */
class PhotosController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

    public function index()
    {
        $this->set('data',$this->paginate());
    }
}

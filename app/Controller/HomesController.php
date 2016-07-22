<?php
App::uses('AppController', 'Controller');
/**
 * Homes Controller
 */
class HomesController extends AppController {

public function index()
{
    $this->layout = false;
    $this->autoRender = false;
    $this->loadModel('Twitter.Twitter');
    $twitter = $this->Twitter->get('statuses/user_timeline', array('screen_name' => 'radiomanoOk', 'count' => 3));
    die(json_encode($twitter,true));
}

}

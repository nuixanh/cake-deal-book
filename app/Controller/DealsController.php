<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sonnt4
 * Date: 3/24/14
 * Time: 4:15 PM
 * To change this template use File | Settings | File Templates.
 */

App::uses('Deal', 'Model');
class DealsController extends AppController{
    public $components = array('RequestHandler');
    public $uses = array('Deal');

    public function listDeal() {
        $user_id = $this->request->query('user_id');
        $session_id = $this->request->query('session_id');
        $page = $this->request->query('page');
        $length = 10;
        $start = $page * $length;
        $deal_list = $this->Deal->find('all', array(
            'conditions' => array(),
            'offset' => $start,
            'limit' => $length,
        ));
//        CakeLog::write('info', print_r($deal_list, true));
        $this->set(array(
            'data' => $deal_list,
            '_serialize' => array('error_code', 'data')
        ));
    }
    public function add() {
    }
    public function save() {
        $data=$this->request->data;
        $this->Deal->create();
        $this->Deal->set($data);
        $this->Deal->save();
        $this->set(array(
            'data' => $this->Deal->id,
            '_serialize' => array('error_code', 'data')
        ));
    }
}
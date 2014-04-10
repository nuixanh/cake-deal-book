<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sonnt4
 * Date: 3/24/14
 * Time: 4:14 PM
 * To change this template use File | Settings | File Templates.
 */
App::uses('AppModel', 'Model');
class Deal extends AppModel{
    public $name = 'Deal';
    public $actsAs = array(
        'Upload.Upload' => array(
            'image'
        )
    );
}
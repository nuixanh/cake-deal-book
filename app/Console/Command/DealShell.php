<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sonnt4
 * Date: 3/24/14
 * Time: 4:24 PM
 * To change this template use File | Settings | File Templates.
 */

App::uses('CommonUtil', 'Common');
App::uses('Constants', 'Common');

class DealShell extends AppShell{
    public $uses = array('Deal');

    public function insert_100deals()
    {

        $create = CommonUtil::getMysqlCurrentTime();
        $end_date = CommonUtil::getMysqlCurrentTimeWithInterval(1000000);
        for ($i = 1; $i <= 100; $i++) {
            $this->Deal->create();
            $this->Deal->set(array(
                'title' => "Khuyến mãi " . $i,
                'desc' => "Giảm giá " . $i . "% cho khách hàng thân thiết",
                'small_image' => "http://clas.mobi/public/html/banners/Co3VT.png",
                'user_id' => String::uuid(),
                'start_date' => $create,
                'end_date' => $end_date,
                'created' => $create,
                'status' => 1
            ));
            $this->Deal->save();
        }

    }
}
<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
    ///手动定义数据表字段
   /// protected $fields=array('id','user','_pk'=>'id','typ'=>array('id'=>'smallint','user'=>'varchar'));
    public function __construct(){
        parent::__construct();
        echo "love";
    }
}

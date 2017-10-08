<?php
class Post extends AppModel {
	public $validate = array( //$validate 数组告诉 CakePHP，当 save() 方法被调用时如何去验证你的数据。这 里，我定义了 body 和 title 字段都不能为空。
        'title' => array(
            'rule' => 'notBlank'
        ),
        'body' => array(
            'rule' => 'notBlank'
        )
    );
}
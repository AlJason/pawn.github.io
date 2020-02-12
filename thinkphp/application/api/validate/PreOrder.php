<?php
/**
 * Created by PhpStorm.
 * User: AlJason
 * Date: 2020/2/10
 * Time: 23:15
 */

namespace app\api\validate;


class PreOrder extends BaseValidate
{
    protected $rule = [
        'order_no' => 'require|length:16'
    ];
}
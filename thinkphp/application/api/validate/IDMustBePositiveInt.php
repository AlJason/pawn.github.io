<?php
/**
 * Created by PhpStorm.
 * User: AlJason
 * Date: 2020/2/10
 * Time: 23:14
 */

namespace app\api\validate;


class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger',
    ];
}
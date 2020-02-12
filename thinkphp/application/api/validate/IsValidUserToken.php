<?php
/**
 * Created by PhpStorm.
 * User: AlJason
 * Date: 2020/2/10
 * Time: 23:14
 */

namespace app\api\validate;


class IsValidUserToken extends BaseValidate
{
    protected $rule = [
        'token' => 'isValidUserToken'
    ];
}
<?php
/**
 * Created by PhpStorm.
 * User: AlJason
 * Date: 2020/2/10
 * Time: 23:15
 */

namespace app\api\validate;


class ThemeProduct extends BaseValidate
{
    protected $rule = [
        't_id' => 'number',
        'p_id' => 'number'
    ];
}
<?php
/**
 * Created by PhpStorm.
 * User: AlJason
 * Date: 2020/2/10
 * Time: 23:02
 */

namespace app\api\model;


class Banner extends BaseModel
{
    public function items()
    {
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }
    //

    /**
     * @param $id int banner所在位置
     * @return Banner
     */
    public static function getBannerById($id)
    {
        $banner = self::with(['items','items.img'])
            ->find($id);

//         $banner = BannerModel::relation('items,items.img')
//             ->find($id);
        return $banner;
    }
}
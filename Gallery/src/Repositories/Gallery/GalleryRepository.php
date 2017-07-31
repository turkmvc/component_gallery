<?php
/**
 * Created by PhpStorm.
 * User: Furkan
 * Date: 10.8.2015
 * Time: 23:42
 */

namespace Components\Gallery\Repositories\Gallery;
use Whole\Core\Repositories\Repository;
use Components\Gallery\Models\Gallery;


class GalleryRepository extends Repository
{

    public function __construct(Gallery $gallery)
    {
        $this->model = $gallery;
    }

    public function lastGet($limit)
    {
      return $this->model->limit($limit)->orderBy('id','DESC')->get();
    }

}

<?php
/**
 * Created by PhpStorm.
 * User: Furkan
 * Date: 9.9.2015
 * Time: 03:18
 */

namespace Components\Gallery\Injections;
use Components\Gallery\Repositories\Gallery\GalleryRepository;

class GalleryInjection
{

    protected $gallery;

    public function __construct(GalleryRepository $gallery)
    {

        $this->gallery = $gallery;
    }

    public function get()
    {
	     return $this->gallery->all();
    }

    public function lastGet($limit=12){
      return $this->gallery->lastGet($limit);
    }
}

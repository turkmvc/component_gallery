<?php

return [
  'composer' => ['"Components\\\Gallery\\\": "components/Gallery/src/"'],
  'providers'=>['Components\Gallery\GalleryServiceProvider::class'],
  // 'aliases'=>["'Zipper'   => Chumper\Zipper\Facades\Zipper::class,"],
  'vendor'=>true,
  'migrate'=>true,
  'settings'=> [
    'name'=>'Galeri',
    'description'=>'Galeri',
    'folder'=>'components::gallery',
    'files'=>[
        [
            'name'=>'Galeri',
            'file'=>'index'
        ],
        [
            'name'=>'Bazı Resimler',
            'file'=>'some'
        ],
    ],
  ],
  'sidebar'=>[
    'title'=>'Galeri',
    'route'=>'admin.gallery.index',
    'path'=>'admin/gallery,admin/gallery/*',
  ],
  'sidebar_lang'=>[
    ['title'=>'Galeri',"lang"=>'tr'],
    ['title'=>'Gallery',"lang"=>'en'],
  ],
  'pages'=>[
  'admin/gallery',
  'admin/gallery/*',
  ],
];

@inject('galeries', 'Components\Gallery\Injections\GalleryInjection')
        @foreach($galeries->get() as $k=>$slider)
        <a class="thumbnail fancybox-thumb" rel="fancybox-thumb" href="{{$slider->image}}" title="{{$slider->title}}">
          <img src="{{$slider->image}}" alt="{{$slider->title}}" />
        </a>
        @endforeach

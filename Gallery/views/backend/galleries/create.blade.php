@extends('backend::_layouts.application')

@section('title'){{ "Resim Ekle" }}@endsection

@section('page_title')
    <h1>Yeni Resim Ekle</h1>
@endsection


@section('page_breadcrumb')
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="{{ route('admin.index') }}">Yönetim Paneli</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{ route('admin.gallery.index') }}">Resimler</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Yeni Resim Ekle</a>
        </li>
    </ul>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption font-green-haze">
                        <i class="fa fa-icon fa-pencil font-green-haze"></i>
                        <span class="caption-subject bold uppercase"> Yeni Resim Ekle</span>
                    </div>
                </div>

                <div class="portlet-body form">
                    @include('backend::_errors.error')
                    {!! Form::open(['method' => 'post','route'=>['admin.gallery.store'],'class'=>'form-horizontal','role'=>'form']) !!}
                        <div class="form-body">
                            @include('backend::galleries._form')
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-10">
                                    {!! Form::submit("Kaydet",['class'=>'btn blue']) !!}
                                    <a href="{{ URL::route('admin.gallery.index') }}" class="btn default">İptal Et</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('include_js')
    {!! Html::script('assets/backend/global/plugins/ckeditor/ckeditor.js') !!}
@endsection


@section('footer')
    <script>
        $(function(){
            $(".slider_remove_btn").click(function(){
                $(this).hide();
                $("input[name='image']").val("");
                $(".slider_img").attr('src',"https://placeholdit.imgix.net/~text?txtsize=17&bg=efefef&txtclr=aaaaaa%26amp%3Btext%3Dresim%2Byok&txt=Resim+Yok&w=128&h=128");
            });
        });

        function openKCFinder(field,input_name,img_class,btn_class) {
            window.KCFinder = {
                callBack: function(url) {
                    $("input[name='"+input_name+"']").val(url);
                    $("."+img_class).attr('src',url);
                    $("."+btn_class).show();
                    window.KCFinder = null;
                }
            };
            window.open('{!! URL::to("/elfinder") !!}', 'kcfinder_textbox',
                    'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
                    'resizable=1, scrollbars=0, width=800, height=600'
            );
        }




    </script>
@endsection

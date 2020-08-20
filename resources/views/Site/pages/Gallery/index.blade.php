@extends('Site.index')

@section('content')

    @include('Site.partials.bread')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="demo-gallery">
                        <ul id="aniimated-thumbnials" class="list-unstyled row row-sm">
                            @foreach($galleries as $gallery)
                                <li class="col-sm-6 col-lg-2"
                                    data-responsive="/storage/uploads/gallery/{{$gallery->name}}"
                                    data-src="/storage/uploads/thumbnail/gallery/large  /{{$gallery->name}}"
                                    data-sub-html="<h4>Gallery Image 1</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                             src="/storage/uploads/thumbnail/gallery/small/{{$gallery->name}}"
                                             alt="Thumb-1">
                                    </a>
                                </li>
                            @endforeach



                        </ul>
                        <!-- /Gallery -->
                    </div>
                </div>
            </div>

            @foreach($galleries as $gallery)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm" id="aniimated-thumbnials" >
                        <img width="100%" height="225"
                             src="/storage/uploads/thumbnail/gallery/medium/{{$gallery->name}}">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@section('css')


    <link rel="stylesheet" href="/admin/plugins/sumoselect/sumoselect.css"/>

    <link href="/admin/plugins/gallery/gallery.css" rel="stylesheet"/>
@endsection

@section('js')

    <!-- Internal Gallery js -->
    <script src="/admin/plugins/gallery/lightgallery-all.min.js"></script>
    <script src="/admin/plugins/gallery/jquery.mousewheel.min.js"></script>

    <script>
        $('#aniimated-thumbnials').lightGallery({
            thumbnail: true,
            animateThumb: false,
            showThumbByDefault: false
        });
    </script>

@endsection

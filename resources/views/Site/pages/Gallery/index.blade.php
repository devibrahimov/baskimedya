@extends('Site.index')

@section('content')

    @include('Site.partials.bread')
 <div class="section">
     <div class="container">
         <div class="row">
             <div class="card">
                 <div class="card-body">
                     <div class="demo-gallery">
                         <ul id="aniimated-thumbnials" class="list-unstyled row row-sm">
                             @foreach($galleries as $gallery)

                                 <li class="col-sm-4 col-lg-3 mt-3"
                                     data-responsive="/storage/uploads/thumbnail/gallery/large/{{$gallery->name}}"
                                     data-src="/storage/uploads/thumbnail/gallery/large/{{$gallery->name}}"
                                     data-sub-html="<h4>Gallery Image 1</h4>">

                                     {{--                                        <div style="height:200px;  background: url('/storage/uploads/thumbnail/gallery/small/{{$gallery->name}}') no-repeat;--}}
                                     {{--                                            background-size: cover;background-position: center center !important;"></div>--}}
                                     <img class="img-responsive"  height="300px"  width="300px"
                                          src="/storage/uploads/thumbnail/gallery/medium/{{$gallery->name}}"
                                          alt="Thumb-1">

                                 </li>
                             @endforeach



                         </ul>
                         <!-- /Gallery -->
                     </div>
                 </div>
             </div>


         </div>
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

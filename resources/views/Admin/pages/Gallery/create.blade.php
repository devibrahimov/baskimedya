@extends('Admin.index')


@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12">


            <div class="card">
                <div class="card-body">

                <form action="{{route('gallery.store')}}" class="dropzone rounded-5" id="dropzoneForm"  method="post" enctype="multipart/form-data">
                        @csrf
                    </form>
                    <div align="center" class="mt-1 mb-2">
                        <button type="button" class="btn btn-info-gradient  btn-block" id="submit-all">Upload</button>
                    </div>
                    <hr>
                    <h3 class="panel-title">Yüklenen Resimler</h3>
                    <div class="panel-body" id="uploaded_image">

                    </div>
                </div>

            </div>

        </div>

        </div>
    </div>

@endsection

@section('css')

<link rel="stylesheet" href="/admin/dropzone/dist/basic.css">

<link rel="stylesheet" href="/admin/dropzone/dist/dropzone.css">
@endsection


@section('js')

    <!--Internal Fileuploads js-->
    <script src="/admin/dropzone/index.js"></script>
    <script src="/admin/dropzone/dist/dropzone.js"></script>
    <script src="/admin/dropzone/dist/dropzone-and-module.js"></script>
    <script src="/admin/dropzone/jquery.fileupload.js"></script>




    <script type="text/javascript">
    Dropzone.options.dropzoneForm = {
        autoProcessQueue : false,
        acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",
        parallelUploads: 4,
        maxFiles: 5,

        init:function(){
            var submitButton = document.querySelector("#submit-all");
            myDropzone = this;
            submitButton.addEventListener('click', function(){
                myDropzone.processQueue();
            });

            this.on("complete", function(){
                if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
                {
                    var _this = this;
                    _this.removeAllFiles();
                }
                load_images();
            });

        }

    };

    load_images();
 // load images
    function load_images()
    {
        $.ajax({
            url:"{{ route('gallery.fetch') }}",
            success:function(data)
            {
               $('#uploaded_image').html(data);
            }
        })
    }

        // remove
    $(document).on('click', '.remove_image', function(){
        var id = $(this).data('id');
        var name = $(this).data('name');
        $.ajax({
            url:"{{ route('gallery.delete') }}",
            data:{name : name,
                  id : id
            },
            success:function(data){
                load_images();
            }
        })
    });
    </script>
@endsection

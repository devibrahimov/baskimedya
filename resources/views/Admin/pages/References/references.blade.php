@extends('Admin.index')

@section('content')

    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    REFERANSLAR
                </div>
                <p class="mg-b-20">Bir Referans Ekleyin</p>
                <form method="post" action="{{route('references.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row row-sm">
                        <div class="col-lg-6">
                            <div class="form-group has-success mg-b-0">
                                <input class="form-control" placeholder="Referans Adı" required="" type="text"
                                       name="name">
                            </div>
                        </div>
                        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                            <div class="form-group mg-b-0">
                                <div class="row row-sm">
                                    <input class="custom-file-input" id="customFile" type="file" name="image"> <label
                                        class="custom-file-label" for="customFile">Resim Yükle</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="py-4 float-right">
                        <button type="submit" class="btn btn-success">Gönder</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="row row-sm">
        @foreach($references as $reference)
            <div class="col-xl-4 col-lg-2 col-md-12">

                    <div class="card text-center">
                        <img src="{{asset('/storage/uploads/thumbnail/references/small/' . $reference->image)}}"
                             class="img-thumbnail" alt="Responsive image">
                        <div class="card-body">
                            <form action="{{route('references.update',$reference->id)}}" method="post" enctype="multipart/form-data">
                                @method('PATCH')
                                @csrf
                            <h4 class="card-title mb-3">{{$reference->name}}</h4>
                            <div class="p-4">
                                <input class="form-control" placeholder="Referans Yeni Adı" required="" value="{{$reference->name}}" type="text"
                                       name="name">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="image">
                                    <label class="custom-file-label float-left" for="inputGroupFile01">Yeni Resim
                                        Ekle</label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around">


                                <button class="btn btn-success" href="#">Kaydet</button>

                            </form>

                            <form action="{{route('references.destroy',$reference->id)}}" method="post">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-danger btn-icon">Sil @method('DELETE')</button> </form>
                        </div>
                        </div>
                    </div>
            </div>

            @endforeach

    </div>



@endsection

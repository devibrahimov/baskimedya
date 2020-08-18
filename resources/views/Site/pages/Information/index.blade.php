@extends('Site.index')

@section('css')
@endsection


@section('content')

    <div class="section">
        <div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
       @foreach($cats as $cat)
        <li class="nav-item "  role="presentation">
            <a class="nav-link @if($loop->first) active @endif" id="{{$cat->id}}-tab" data-toggle="tab" href="#{{$cat->id}}" role="tab" aria-controls="{{$cat->id}}" aria-selected="{{$loop->first? true : false}}">{{$cat->name}}</a>
        </li>
        @endforeach
    </ul>


    <div class="tab-content" id="myTabContent">
        @foreach($infos as $info)
        <div class="tab-pane fade  {{$loop->first?" show active ": ''}} " id="{{$info->InformationCats_id}}" role="tabpanel" aria-labelledby="{{$info->InformationCats_id}}-tab">{!! $info->content !!}</div>
         @endforeach
    </div>

            </div>
    </div>



@endsection


@section('js')
@endsection

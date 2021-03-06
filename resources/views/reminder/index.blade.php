@extends('layouts.common')

@section('title', 'リマインダー　一覧')


@section('content')
<div class="container">
  <div class="row justify-content-center">
   
  <h2 class="col-md-7">リマインダー</h2>
  
<!--リマインダー新規作成ボタン-->
  <div class="col-md-2">
    <a href="{{ action('RemindController@add',['id' => $category->id ,'name' => $category->name]) }}" class="btn-border">+リマインダー</a>
  </div>
  
<!--リマインダー中身一覧-->
   <div class="col-md-6">
     
<!--category_id(hidden)新規作成画面へのカテゴリー名継承用(R@add)-->
    <input type="hidden" name="id" value="{{$category->id}}">
    
    <div class="card">
<!--カテゴリータイトル-->
      <div class="card-header">
        <h4 class="mb-0">{{$category->name}}</h4>
      </div>

<!--リマインダー中身-->

  {{--@if (empty ($posts))--}}
  <!--リマインダーが登録されていません-->
  {{--@elese--}}
  
@foreach($posts as $reminder)
   
<!--id:新規作成より継承したデータ表示用(R@creat → C@remind)-->
    <input type="hidden" name="id" value="{{$reminder -> id}}">
<!--category_id-->
    <input type="hidden" name="category_id" value="{{$reminder -> category_id}}">
    
    <div class="card-body pb-0">
<!--Question-->
     <h5>
      <span style="border-bottom: solid 5px powderblue;">Question</span>
     </h5>
     <p>{{\Str::limit($reminder -> question), 100}}</p>

<!--Answer-->
     <h5>
      <span style="border-bottom: solid 5px powderblue;">Answer</span>
     </h5>
     <p class="mb-0">{{\Str::limit($reminder -> answer), 100}}</p>
    </div>
    
<!--詳細画面移動ボタン-->
     <div class="text-right mr-3 mb-2" style="font-size: 80%;">
      詳細&ensp;<a href=""><i class="fas fa-angle-double-right text-muted"></i></a>
     </div>

<!--点線-->
    <div class="col-md text-center">
     <hr class="dotline m-0">
    </div>
    
    <div class="row justify-content-center m-2">
     <div class="col-md-4 text-center">
      移動&ensp;<i class="fas fa-file-export"></i>
     </div>
     <div class="col-md-4 text-center">
       消去&ensp;<i class="far fa-trash-alt"></i>
     </div>
    </div>

<!--線-->
    <hr class="mt-0 mb-0">
   @endforeach 

{{--@endif--}}

   </div>
  </div>
    
  </div>
</div>


@endsection
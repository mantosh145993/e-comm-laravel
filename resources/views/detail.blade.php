@extends('Login.master')
@section('content')
<div class="container">
<div class="row">
    <div class="col-sm-6">
       <img class="detail-img" src="{{$product->gallery}}">
    </div>  
    <div class="col-sm-6">
        <a href="/product">Go Back</a>
        <h3> Name: {{$product->name}} </h3>
        <h4> Category: {{$product->category}} </h4>
        <h4> Price: {{$product->price}} </h4>
        <h4> Details: {{$product->description}} </h4>
        <br><br>
        <button class="btn btn-primary" > Add to catrt </button>
        <br><br>
        <button class="btn btn-success"> Add to catrt </button>
        <br><br>
    </div>
</div>
  


</div>
@endsection



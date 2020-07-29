@extends('layouts.template')
@section('content')
    <form action="{{url('product/'.$product->id)}}" method="POST">
        @csrf
        {{method_field('PUT')}}
        <label>Nama</label>
        <input type="text" name="name" value="{{$product->name}}"/>
        {{$errors->first('name')}}
        <label>Harga</label>
        <input type="text" name="price" value="{{$product->price}}"/>
        {{$errors->first('price')}}
        <button type="submit">Save</button>
    </form>
@endsection
@extends('layouts.template')
@section('content')
    <form action="{{url('product')}}" method="POST">
        @csrf
        <label>Nama</label>
        <input type="text" name="name"/>
        {{$errors->first('name')}}
        <label>Harga</label>
        <input type="text" name="price"/>
        {{$errors->first('price')}}
        <label>Warehouse</label>
        <select name="warehouse_id">
            @foreach($warehouses as $warehouse)
                <option value="{{$warehouse->id}}">{{$warehouse->warehouse_name}}</option>
            @endforeach
        </select>
        <button type="submit">Save</button>
        
    </form>
@endsection
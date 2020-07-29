
    @extends('layouts.template')
    @section('content')
    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Warehouse Name</th>
              
            <th>Actions</th> 
        </thead>
    </table>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->warehouse->warehouse_name}}</td>
            <td>
            <a href="{{url('product/'.$product->id.'/edit')}}">Edit</a>
                <form action="{{url('product/'.$product->id)}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    @endsection
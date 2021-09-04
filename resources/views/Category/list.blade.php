@extends('layout')
@section('content')

<p class="fs-5 fw-bold text-start">Listado marcas</p>

@if(Session::has('message'))
<p class="alert alert-success">
    {{Session::get('message')}}
</p>
@endif

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>            
            
        </tr>
    </thead>
   <tbody>
       @foreach($categories as $categoria)
       <tr>
           <td>{{$categoria->name}}</td>
           <td>{{$categoria->description}}</td>           
           
       </tr>
       @endforeach
   </tbody> 
</table>
@endsection
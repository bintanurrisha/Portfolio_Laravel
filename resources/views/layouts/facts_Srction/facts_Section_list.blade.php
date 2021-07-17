@extends('layouts.admin_layouts')
@section('content')
    <main>
        <div class="container-fluid">
            <a class="btn btn-success"style="float:right;" href="{{route('admin.facts.create')}}">Create New</a>
            <h1 class="mt-4">List of Facts</h1>
           

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">Page section</li>
                 <li class="breadcrumb-item">Facts section</li>
                <li class="breadcrumb-item active">List of facts</li>
            </ol>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Counter</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if (count($facts) > 0)
                        @foreach ($facts as $fact)
                            <tr>
                                <th scope="row">{{$fact->id}}</th>
                                <td>{{$fact->icon}}</td>
                                <td>{{$fact->Counter}}</td>
                                <td>{{$fact->description}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <a href="{{route('admin.facts.edit', $fact->id)}}" class="btn btn-primary ">Edit</a>
                                        </div>
                                        <div class="col-sm-2 ">
                                            <form action="{{route('admin.facts.destroy', $fact->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" name="submit" id="delete" value="delete" class="btn btn-danger mx-2">
                                            </form>
                                            
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        
                    @endif
                  
                </tbody>
              </table>
    </main>
@endsection
                
                
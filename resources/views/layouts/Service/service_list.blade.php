
@extends('layouts.admin_layouts')<!---->
@section('content')
    <main>
        <div class="container-fluid">
            <a class="btn btn-success"style="float:right;" href="{{route('admin.service.create')}}">Create New</a>
            <h1 class="mt-4">List of Service</h1>
           

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">Page section</li>
                 <li class="breadcrumb-item">Service section</li>
                <li class="breadcrumb-item active">List of Service</li>
            </ol>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">long_description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if (count($service_section) > 0)
                        @foreach ($service_section as $service)
                            <tr>
                                <th scope="row">{{$service->id}}</th>
                                <td>{{$service->icon}}</td>
                                <td>{{$service->Title}}</td>
                                <td>{{$service->description}}</td>
                                <td>long_description here......</td>
                                
                                <td>
                                   <div class="row">
                                        <div class="col-sm-2">
                                            <a href="{{route('admin.service.edit', $service->id)}}" class="btn btn-primary ">Edit</a>
                                        </div>
                                        <div class="col-sm-2 ">
                                            <form action="{{route('admin.service.destroy', $service->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" name="submit" id="delete" value="delete" class="btn btn-danger  mx-3">
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
                
                
@extends('layouts.admin_layouts')
@section('content')
    
       
             <!--skill list section start-->
        <div class="container-fluid">
           
            <h1 class="mt-4">List of Social Link</h1>
            <a class="btn btn-success"style="float:right;" href="{{route('admin.Social_link.create')}}">Add New</a>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">Page section</li>
                 <li class="breadcrumb-item">Facts section</li>
                <li class="breadcrumb-item active">List of facts</li>
            </ol>

            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Social icon</th>
                    <th scope="col">Link</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if (count($Social_link_section) > 0)
                        @foreach ($Social_link_section as $Social_link)
                            <tr>
                                <th scope="row">{{$Social_link->id}}</th>
                                <td>{{$Social_link->icon}}</td>
                                <td>{{$Social_link->Link}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <a href="{{route('admin.Social_link.edit', $Social_link->id)}}" class="btn btn-primary ">Edit</a>
                                        </div>
                                        <div class="col-sm-2 mx-2 ">
                                            <form action="{{route('admin.Social_link.destroy', $Social_link->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" name="submit" value="Delete" id="Delete" class="btn btn-danger">
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        
                    @endif
                  
                </tbody>
              </table>
    </div>
@endsection
                
                
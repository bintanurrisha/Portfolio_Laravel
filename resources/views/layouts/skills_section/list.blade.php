@extends('layouts.admin_layouts')
@section('content')
    <main>
       
             <!--skill list section start-->
        <div class="container-fluid">
           
            <h1 class="mt-4">List of Skills</h1>
            <a class="btn btn-success"style="float:right;" href="{{route('admin.skill.create')}}">Create New</a>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">Page section</li>
                 <li class="breadcrumb-item">Skills section</li>
                <li class="breadcrumb-item active">List of Skills</li>
            </ol>

            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Skill</th>
                    <th scope="col">score</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if (count($skill_section) > 0)
                        @foreach ($skill_section as $skills)
                            <tr>
                                <th scope="row">{{$skills->id}}</th>
                                <td>{{$skills->skill}}</td>
                                <td>{{$skills->score}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <a href="{{route('admin.skill.edit', $skills->id)}}" class="btn btn-primary ">Edit</a>
                                        </div>
                                        <div class="col-sm-2 ">
                                            <form action="{{route('admin.skill.destroy', $skills->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" name="submit" value="Delete" class="btn btn-danger">

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
                
                
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible">
            
            <strong>Error!</strong>{{$error}}
        </div>
    @endforeach
@endif


@if (session('error'))
    
   <strong>Error!</strong>{{session('error')}}
  
</div>
@endif

@if (session('success'))
    <div class="alert alert-success alert-dismissible">
        <strong>Success!</strong>{{session('success')}}
    </div>
@endif

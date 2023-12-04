@extends('admin')


@section('admin-content')



<h2 class="text-center mt-4">Create New Social Media Link</h2>
<hr class="my-4">

<div class="container">
    <div class="row">
        <div class="col-sm">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(Session::has('success'))
                <h4 class="text-success">{{ session()->get('success') }}</h4>
            @else
                <h4 class="text-danger">{{ session()->get('faild') }}</h4>
            @endif

            @if(Session::has('success-removed'))
                <h4 class="text-success">{{ session()->get('success-removed') }}</h4>
            @endif
            
            @if(Session::has('faild-removed'))
                <h4 class="text-danger">{{ session()->get('faild-removed') }}</h4>
            @endif

        
        </div>
    </div>
    <div class="row">
        <div class="col-sm">

            <form class="mt-4" method="POST" 
                action="{{ route('admin-social-media-link-store') }}" 
                enctype="multipart/form-data">

                @csrf

                

                <div class="form-group">
                    <label>Social Media Name :</label>
                    <input type="text"
                     name="name"
                     value="{{ old('name') }}"
                     class="form-control"
                     placeholder="Enter Social Media Name"
                     required>
                </div>

                <div class="form-group">
                    <label>Social Media Link :</label>
                    <input type="text"
                     name="link"
                     value="{{ old('link') }}"
                     class="form-control"
                     placeholder="Enter Social Media Link"
                     required>
                </div>

                <div class="form-group">
                    <label>Choose a Social Media Icon (256x256): </label>
                    <input type="file" name="icon" class="form-control-file" accept="image/*">
                </div>

                <div class="form-group">
                    <span>State: </span>
                    <label class="switch">
                        <input type="hidden" name='active' value='0'/>
                        <input type="checkbox" name='active' value='1'/>
                        <span class="sliderswitch roundswitch"></span>
                    </label>
                </div>

                <div class="d-flex justify-content-start align-items-baseline">
                    <button type="submit" class="btn btn-primary mb-2">Add</button>
                    <a href="{{route('admin-social-media-links')}}" class="btn btn-danger m-2">Back</a>
                </div>
            </form>

            
        </div>
    </div>
</div>

@endsection



  
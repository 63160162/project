@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!--<div class="card-header">{{ __('Create Post') }}</div>-->
                    <div class="container">
                        <h3>Create Post</h3><hr>
                       
                        @foreach($data as $data1)
                        @endforeach
                            <form method='POST' action="{{route('profile.update',Auth::user()->id)}}">
                                @csrf
                                @method("PUT")
                                @error('name')
                                <div class="form-floating mb-3 ">
                                    <input type="text" class="form-control w-50 " id="floatingInput"  name="name" placeholder="" value="{{$data1->name}}">
                                    <label for="floatingInput">name</label>
                                </div>
                                @enderror
                                <br>
                                
                                @error('image_profile')
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">&nbsp;Input Profile Pic.</label>
                                    <input class="form-control" type="file" id="formFile" name="image_profile">
                                    
                                </div>
                                @enderror
                                <!-- <button class="btn btn-danger" type='reset'>ยกเลิก</button>&nbsp;&nbsp;<button class="btn btn-success" type='บันทึก'>ยกเลิก</button>-->
                                <input class="btn btn-danger btn-lg " type='reset' value="ยกเลิก">&nbsp;&nbsp;
                                <input class="btn btn-success btn-lg " type='submit' value="บันทึก">
                            </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

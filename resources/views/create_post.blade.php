@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!--<div class="card-header">{{ __('Create Post') }}</div>-->
                    <div class="card-header" style="background-color:AQUA;" align="center" ><b>{{ __('Create Post') }}</b></div>
                        <div class="container" align="center">
                            <form method='POST' action="{{ route('home.store') }}"><br>
                                @csrf
                                <div class="form-floating mb-3 ">
                                    <input type="text" class="form-control w-100 " id="floatingInput"  name="title" placeholder="">
                                    <label for="floatingInput">title</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="" id="floatingTextarea2" name="content" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Content</label>
                                </div>
                                <!-- <button class="btn btn-danger" type='reset'>ยกเลิก</button>&nbsp;&nbsp;<button class="btn btn-success" type='บันทึก'>ยกเลิก</button>-->
                                <input class="btn btn-danger btn-ls " type='reset' value="ยกเลิก">&nbsp;&nbsp;
                                <input class="btn btn-success btn-ls " type='submit' value="บันทึก">
                            </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

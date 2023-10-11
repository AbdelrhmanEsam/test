@extends('layouts.app')
@section('title', 'Update Test')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 d-flex flex-column">
                <div class="row flex-grow" style="justify-content: center;">
                    <div class="col-6 grid-margin stretch-card">
                        <div class="card card-rounded">

                            <div class="card-body">
                                <h4 class="card-title">Default form</h4>

                                <form class="forms-sample" action="{{ route('test.update', $test->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name">Username</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $test->name }} ">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ $test->email }} ">
                                    </div>

                                    <div class="form-group">
                                        <label for="photo">Upload Photo</label>

                                        <img src=" {{ Storage::url($test->photo) }}" style="width: 100% ; height: 300px;">
                                        <input type="file" class="form-control" name="photo" placeholder="photo">
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
@section('scripts')
    <script></script>
@endsection

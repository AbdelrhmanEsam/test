@extends('layouts.app')
@section('title', 'Create Test')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 d-flex flex-column">
                <div class="row flex-grow" style="justify-content: center;">
                    <div class="col-6 grid-margin stretch-card">
                        <div class="card card-rounded">

                            <div class="card-body">
                                <h4 class="card-title">Default form</h4>

                                <form class="forms-sample" action="{{ route('test.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Username</label>
                                        <input type="text" class="form-control" name="name" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <label for="photo">Photo </label>
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

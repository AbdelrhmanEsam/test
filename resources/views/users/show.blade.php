@extends('layouts.app')
@section('title', 'Show Test')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 d-flex flex-column">
                <div class="row flex-grow" style="justify-content: center;">
                    <div class="col-6 grid-margin stretch-card">
                        <div class="card card-rounded">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input type="text" class="form-control" value="{{ $test->name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" value="{{ $test->email }}" readonly>
                                </div>

                            </div>
                            <a href="{{ route('test.index') }}" class="btn btn-success ">Return Back</a>
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

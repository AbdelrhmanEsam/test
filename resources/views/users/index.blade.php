@extends('layouts.main')
@section('title')
    Users
@endsection
@section('content')
    <!-- main-panel -->
    <div class="main-panel" style="width: 100% !important;">
        <div class="content-wrapper">

            <div class="row">

                <div class="col-sm-12">
                    <div class="home-tab">

                        <div class="tab-content tab-content-basic">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">

                                <div class="row">
                                    <div class="col-lg-4 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>150</h3>

                                                <p>New users</p>
                                            </div>
                                            <div class="icon">
                                                <i class="mdi mdi-new-box"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">More info <i
                                                    class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-4 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-success">
                                            <div class="inner">
                                                <h3>53</h3>

                                                <p>New Update</p>
                                            </div>
                                            <div class="icon">
                                                <i class="mdi mdi-chart-bar"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">More info <i
                                                    class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-4 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-warning">
                                            <div class="inner">
                                                <h3>44</h3>

                                                <p>Revamping</p>
                                            </div>
                                            <div class="icon">
                                                <i class="mdi mdi-account"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">More info <i
                                                    class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-12 d-flex flex-column">


                                        <div class="row flex-grow">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex justify-content-between align-items-start">
                                                            <div>
                                                                <h4 class="card-title card-title-dash">users</h4>
                                                            </div>

                                                        </div>
                                                        <div class="table-responsive  mt-1">
                                                            <table class="table select-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>user Name</th>


                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($users as $user)
                                                                        <tr>

                                                                            <td>
                                                                                <div class="d-flex ">
                                                                                    <div>
                                                                                        <h6>{{ $user->name }}</h6>
                                                                                        <!-- <p>{{ $user->type }}</p> -->

                                                                                    </div>
                                                                                </div>
                                                                            </td>
<!--
                                                                            @if ($user->stutas === 'completed')
                                                                                <td>
                                                                                    <label
                                                                                        class="badge badge-success">Completed</label>
                                                                                </td>
                                                                            @elseif($user->stutas === 'in_progress')
                                                                                <td>
                                                                                    <label class="badge badge-warning">In
                                                                                        progress</label>
                                                                                </td>
                                                                            @else
                                                                                <td><label
                                                                                        class="badge badge-danger">Pending</label>
                                                                                </td>
                                                                            @endif -->
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- js -->
@endsection
@section('scripts')
    <script></script>
@endsection

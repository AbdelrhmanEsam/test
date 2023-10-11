@extends('layouts.app')
@section('title', 'My Profile')
@include('layouts.header')
@section('style')
    <style>
        .color-white {
            color: white
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            padding: 15px 60px;
        }

        img {
            width: 70px;
            height: 70px;
            border-radius: 50%
        }

        #edit-modal input {
            border-radius: 0%;
            border-bottom: 1px solid #666;
            color: #666 !important;

        }

        #edit-modal input::placeholder {
            color: #666 !important;
        }
    </style>
@endsection
@section('content')
    @include('inc.messages')
    <div class="row m-0">


        <div class="col-lg-12 stretch-card">
            <div class="card bg-dark">
                <div class="card-header">
                    <h4 class="card-title color-white">My Profile</h4>
                </div>


                <div class="card-body">
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered color-white">
                            <thead>
                                <tr>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        E-mail
                                    </th>
                                    <th>
                                        Action
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
<!--
                                    <td style="width: 100px">
                                        {!! Auth::user()->image ? '<img src="' . asset(Auth::user()->image) . '">' : ' ' !!}
                                    </td> -->

                                    <td>
                                        {{ Auth::user()->name }}
                                    </td>
                                    <td>
                                        {{ Auth::user()->email }}

                                    </td>

                                    <!-- <td>
                                        <a type="button" class="btn btn-success edit-btn" data-id="{{ Auth::user()->id }}"
                                            data-email="{{ Auth::user()->email }}" data-name="{{ Auth::user()->name }}"
                                            href="{{ url('profile/update/{Auth::user()->id}') }}" data-bs-toggle="modal"
                                            data-bs-target="#edit-modal" data-toggle="modal" data-target="#edit-modal">
                                            Edit & ADd Image
                                        </a>
                                    </td> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>



        <!-- Edit & Add Image -->


    </div>


    <!-- js -->
@section('scripts')
    <script>
        $('.edit-btn').click(function() {
            let id = $(this).attr('data-id');
            let email = $(this).attr('data-email');
            let name = $(this).attr('data-name');


            $("#edit-form input[name|='id']").val(id)
            $("#edit-form input[name|='email']").val(email)
            $("#edit-form input[name|='name']").val(name)
        })
    </script>
@endsection

@endsection

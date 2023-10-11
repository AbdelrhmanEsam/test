@extends('layouts.app')
@section('title', 'user')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 d-flex flex-column">
                <div class="row flex-grow">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded">

                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                        <h4 class="card-title card-title-dash">Pending Requests</h4>
                                    </div>
                                    <div class="template-demo">
                                        <button type="button" class="btn btn-success btn-icon-text" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="ti-upload btn-icon-prepend"></i>
                                            Add User
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive mt-1">
                                    <table class="table select-table table-data" id="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>E-mail </th>
                                                <th>Role </th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->role }}</td>
                                                    @if ($user->role === 'SuperAdmin')
                                                        <td>
                                                            Can Not Access
                                                        </td>
                                                    @else
                                                        <td>
                                                            <a href="" class="btn btn-info btn-sm">
                                                                Show
                                                            </a>
                                                            <a href="" class="btn btn-success btn-sm">
                                                                Edit
                                                            </a>
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{-- {{ $users->links('inc.paginator') }} --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- add account -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="post" action="{{ route('users.store') }}" id="add-form">
                        @csrf
                        <div class="form-group">
                            <label for="user">User Name</label>
                            <input type="text" class="form-control" id="user" name="name"
                                placeholder="user...   " required />
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="E-mail...   " required />
                        </div>
                        <div class="form-group">
                            <label for="Password"> Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password...   " required />
                        </div>



                        <div class="form-group">
                            <label for="Role"> Role </label>
                            <select name="role" class="form-control">
                                <option value="SuperAdmin">
                                    SUPER ADMIN
                                </option>
                                <option value="SubAdmin">
                                    SUB ADMIN
                                </option>
                            </select>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="add-form">Add</button>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('scripts')
    <script>
        function removeItem(url, e) {
            Swal.fire({
                title: 'Do you want to Trashed this Item?',
                showCancelButton: true,
                confirmButtonText: 'Confirm',
                confirmButtonColor: '#dc3545'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $('#deleteItem').attr("action", url);
                    $('#deleteItem').submit();
                    Swal.fire('Trashed!', '', 'success')
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            })
        };
    </script>
@endsection

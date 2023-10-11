@extends('layouts.app')
@section('title', 'Archived')
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
                                        <h4 class="card-title card-title-dash">Archive</h4>
                                    </div>
                                    <div>
                                        {{-- <a class="btn btn-primary text-white mb-0 me-0" href="{{ route('test.create') }}">
                                            Add new </a> --}}
                                    </div>
                                </div>
                                <div class="table-responsive mt-1">
                                    <table class="table select-table table-data" id="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>E-mail </th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($test as $test)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $test->name }}</td>
                                                    <td>{{ $test->email }}</td>

                                                    <td>
                                                        <a href="{{ route('test.restore', $test->id) }}"
                                                            class="btn btn-dark btn-sm">Restore</a>


                                                        <button class="btn btn-danger  btn-sm" type="submit"
                                                            onclick="removeItem('{{ route('test.forceDelete', $test->id) }}')">
                                                            Delete
                                                        </button>
                                                        <form id="deleteItem" action="" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>

                                                    </td>
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




@endsection
@section('scripts')
    <script>
        function removeItem(url, e) {
            Swal.fire({
                title: 'Do you want to Delete this Item?',
                showCancelButton: true,
                confirmButtonText: 'Confirm',
                confirmButtonColor: '#dc3545'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $('#deleteItem').attr("action", url);
                    $('#deleteItem').submit();
                    Swal.fire('Deleted!', '', 'success')
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            })
        };
    </script>
@endsection

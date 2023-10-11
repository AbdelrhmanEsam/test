<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> @yield('title') </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('front/vendors/mdi/css/materialdesignicons.min.css ') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/ti-icons/css/themify-icons.css ') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/simple-line-icons/css/simple-line-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap-4.min.css') }}">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
    <!-- inject:css -->
    <!-- {{-- <link rel="stylesheet" href="{{ asset('front/css/datatable.css ') }}" /> --}} -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css ') }}" />
    <!-- endInject -->

    <!-- {{-- <link rel="shortcut icon" href="{{ asset('front/images/favicon.png ') }}" /> --}} -->
    @yield('style')
</head>

<body>
    @include('layouts.header')
    <section class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            @include('layouts.aside')


            @yield('content')

          </div>
    </section>
    @include('layouts.footer')

    <script src="{{ asset('front/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('front/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('front/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('front/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('front/js/off-canvas.js') }}"></script>
    <script src="{{ asset('front/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('front/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('front/js/jquery.dataTables.min.js') }}"></script>

    @yield('scripts')

    <script>
        $('#filter-btn').click(function(e) {
            e.preventDefault();
            $('#filter-form').submit()
        })
    </script>



    <script>
        $('#delete-btn').click(function(e) {
            e.preventDefault();
            $('#delete-form').submit()
        })
    </script>

    <script>
        $('#logout-btn').click(function(e) {
            e.preventDefault();
            $('#logout-form').submit()
        })
    </script>

    <script>
        $('.edit-profile-btn').click(function() {
            let id = $(this).attr('data-id');
            let name = $(this).attr('data-name');
            let email = $(this).attr('data-email');
            let password = $(this).attr('data-password');
            let phone = $(this).attr('data-phone');
            let department_id = $(this).attr('data-department_id');
            let role_id = $(this).attr('data-role_id');


            $("#edit-form-profile input[name|='id']").val(id)
            $("#edit-form-profile input[name|='name']").val(name)
            $("#edit-form-profile input[name|='email']").val(email)
            $("#edit-form-profile input[name|='password']").val(password)
            $("#edit-form-profile input[name|='phone']").val(phone)
            $("#edit-form-profile select[name|='department_id']").val(department_id)
            $("#edit-form-profile select[name|='role_id']").val(role_id)

        })
    </script>

</body>

</html>

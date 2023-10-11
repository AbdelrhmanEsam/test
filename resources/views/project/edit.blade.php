@extends('layouts.main')
@section('title')
    Stages
@endsection
@section('style')
    <style>
        .accordion {
            border-radius: 10%;
            width: 100%;
            height: fit-content;
        }

        .accordion-item {
            margin-bottom: 10px
        }

        .accordion-item:nth-child(odd) {
            background-color: #51b1e133;
        }

        .accordion-item:nth-child(even) {
            background-color: #f9ecce;
        }



        .accordion-button:not(.collapsed) {
            color: #000;
        }

        .form-check-success .form-check-label input[type="radio"]+.input-helper:before {
            border: 2px solid #4da761
        }

        .form-check-warning .form-check-label input[type="radio"]+.input-helper:before {
            border: 2px solid #e29e09
        }

        .form-check-danger .form-check-label input[type="radio"]+.input-helper:before {
            border: 2px solid #f95f53
        }
    </style>
@endsection
@section('content')
    <!-- main-panel -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        @include('inc.errors')
                        <form method="POST" action=" " class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12 d-flex flex-column">
                                <div class="row flex-grow">
                                    <div class="col-md-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title  card-inverse-success">Add Project</h4>

                                                <div class="form-group">
                                                    <label for="exampleInputUsername1"> Project Name</label>
                                                    <input type="text" class="form-control" id="exampleInputUsername1"
                                                        placeholder="Name" name="name">
                                                </div>



                                                <div class="form-group">
                                                    <label for="exampleInputUsername1">Description</label>
                                                    <textarea type="text" name="desc" class="form-control" id="exampleInputUsername1" placeholder="Description"></textarea>
                                                </div>


                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect2">Type</label>
                                                    <select class="form-control" id="exampleFormControlSelect2"
                                                        name="type">
                                                        <option value="newProject">New Projects </option>
                                                        <option value="newUpdate">New Update</option>
                                                        <option value="revamping">Revamping</option>

                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>File upload</label>
                                                    <input type="file" name="img[]" class="file-upload-default">
                                                    <div class="input-group col-xs-12">
                                                        <input type="text" class="form-control file-upload-info"
                                                            disabled="" placeholder="Upload Documents">
                                                        <span class="input-group-append">
                                                            <button class="file-upload-browse btn btn-success"
                                                                type="button">Upload</button>
                                                        </span>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 grid-margin stretch-card">
                                        <div class="accordion" id="accordionPanelsStayOpenExample">
                                            <div class="accordion-item  ">
                                                <h2 class="accordion-header" style="color: black"
                                                    id="panelsStayOpen-headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                                        aria-controls="panelsStayOpen-collapseOne">
                                                        Analysis
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseOne"
                                                    class="accordion-collapse collapse show"
                                                    aria-labelledby="panelsStayOpen-headingOne">
                                                    <div class="accordion-body">
                                                        <div class="form-group row">
                                                            <div class="col">
                                                                <label>Start Date </label>
                                                                <input class="form-control" type="date">
                                                            </div>
                                                            <div class="col">
                                                                <label>End Date</label>
                                                                <input class="form-control" type="date">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                                <label class="col-sm-12 col-form-label mb-0">Status</label>

                                                                <div class="col-sm-4">
                                                                    <div class="form-check form-check-success  mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input"
                                                                                name="ExampleRadio4" id="ExampleRadio4"
                                                                                checked="">
                                                                            completed
                                                                            <i class="input-helper completed"></i></label>
                                                                    </div>
                                                                </div>


                                                                <div class="col-sm-4">
                                                                    <div class="form-check form-check-warning mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input"
                                                                                name="ExampleRadio4" id="ExampleRadio4"
                                                                                checked="">
                                                                            In progress

                                                                            <i class="input-helper"></i></label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <div class="form-check form-check-danger  mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input"
                                                                                name="ExampleRadio4" id="ExampleRadio4"
                                                                                checked="">
                                                                            Pending
                                                                            <i class="input-helper"></i></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                                        aria-controls="panelsStayOpen-collapseTwo">
                                                        Accordion Item #2
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="panelsStayOpen-headingTwo">
                                                    <div class="accordion-body">
                                                        <div class="form-group row">
                                                            <div class="col">
                                                                <label>Start Date </label>
                                                                <input class="form-control" type="date">
                                                            </div>
                                                            <div class="col">
                                                                <label>End Date</label>
                                                                <input class="form-control" type="date">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                                <label class="col-sm-12 col-form-label mb-0">Status</label>

                                                                <div class="col-sm-4">
                                                                    <div class="form-check form-check-success  mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input"
                                                                                name="ExampleRadio4" id="ExampleRadio4"
                                                                                checked="">
                                                                            completed
                                                                            <i class="input-helper completed"></i></label>
                                                                    </div>
                                                                </div>


                                                                <div class="col-sm-4">
                                                                    <div class="form-check form-check-warning mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input"
                                                                                name="ExampleRadio4" id="ExampleRadio4"
                                                                                checked="">
                                                                            In progress

                                                                            <i class="input-helper"></i></label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <div class="form-check form-check-danger  mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input"
                                                                                name="ExampleRadio4" id="ExampleRadio4"
                                                                                checked="">
                                                                            Pending
                                                                            <i class="input-helper"></i></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsStayOpen-collapseThree"
                                                        aria-expanded="false"
                                                        aria-controls="panelsStayOpen-collapseThree">
                                                        Accordion Item #3
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="panelsStayOpen-headingThree">
                                                    <div class="accordion-body">
                                                        <div class="form-group row">
                                                            <div class="col">
                                                                <label>Start Date </label>
                                                                <input class="form-control" type="date">
                                                            </div>
                                                            <div class="col">
                                                                <label>End Date</label>
                                                                <input class="form-control" type="date">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                                <label class="col-sm-12 col-form-label mb-0">Status</label>

                                                                <div class="col-sm-4">
                                                                    <div class="form-check form-check-success  mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input"
                                                                                name="ExampleRadio4" id="ExampleRadio4"
                                                                                checked="">
                                                                            completed
                                                                            <i class="input-helper completed"></i></label>
                                                                    </div>
                                                                </div>


                                                                <div class="col-sm-4">
                                                                    <div class="form-check form-check-warning mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input"
                                                                                name="ExampleRadio4" id="ExampleRadio4"
                                                                                checked="">
                                                                            In progress

                                                                            <i class="input-helper"></i></label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <div class="form-check form-check-danger  mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input"
                                                                                name="ExampleRadio4" id="ExampleRadio4"
                                                                                checked="">
                                                                            Pending
                                                                            <i class="input-helper"></i></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                        </form>

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

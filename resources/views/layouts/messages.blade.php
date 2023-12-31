@if($errors->any())
    <div class="alert alert-danger m-4">
        @foreach($errors->all() as $error)
            <li> {{ $error }}</li>
        @endforeach
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success m-4">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show w-25" role="alert">
            <strong>{{__("agenda.error")}}:</strong> {{$error}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show w-25" role="alert">
        <strong>{{__("agenda.success")}}:</strong> {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

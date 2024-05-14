@if(\Session::get('success'))

<div class="alert alert-success">
<p>{{\Session::get('success')}}</p>
</div>

@endif


@if(\Session::has('stock_updated'))
<div class="alert alert-success">
    <p>{{ \Session::get('stock_updated') }}</p>
</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
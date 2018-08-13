@if(Session::has('success'))

    <div class="alert alert-success" role="alert" style="text-align: center;padding: 20px;font-size: 16px;">
        {{ Session::get('success') }}
    </div>

@endif
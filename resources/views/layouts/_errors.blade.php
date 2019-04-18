@if (count($errors) > 0)
    <div class="alert alert-danger">
        <div class="mt-2 ml-4">
            <b>发送了错误：</b>
        </div>
        <ul class="mt-2 mb-2">
            @foreach($errors->all() as $key => $error)
                <li class="list-group"><i class="fab fa-remove"></i>{{ $key+1 }}. {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
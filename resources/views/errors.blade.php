@if ($errors->any())
    <div class="notification is-danger" style="color:red;margin:15px">
        @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
        @endforeach
    </div>
@endif
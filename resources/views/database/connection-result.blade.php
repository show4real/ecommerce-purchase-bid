@if($success)
    <p>Connection successful!</p>

    <form action="/migrate-table" method="post">
        @csrf
        <button type="submit">Run Table Migration</button>
    </form>

    @isset($message)
        <div>{{$message}}</div>
    @endisset

@else
    <p>Connection failed. Please check your credentials.</p>
@endif

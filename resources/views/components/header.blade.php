<div>
    <h1>This is header</h1>
    <span>{{ $slot }}</span>
    <h3>Hi {{ $name }}</h3>
    @foreach($letters as $letter)
        <p>{{ $letter }}</p>
    @endforeach
    <h6>{{ $title }}</h6>
</div>

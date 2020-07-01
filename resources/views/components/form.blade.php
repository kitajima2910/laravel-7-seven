<form action="{{ $action }}" method="{{ $method }}" class="mt-3" enctype={{ $enctype }}>
    @csrf
    {{ $slot }}
</form>
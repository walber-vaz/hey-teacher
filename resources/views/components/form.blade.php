@props([ 'action', 'post' => null, 'put' => null, 'delete' => null ])

<form class="w-full flex flex-col gap-4" action="{{ $action }}" method="POST">
    @csrf

    @if($put)
        @method('PUT')
    @elseif($delete)
        @method('DELETE')
    @endif

    {{ $slot }}
</form>

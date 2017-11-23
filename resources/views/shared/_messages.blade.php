@foreach(['danger', 'warning', 'success', 'info'] as $msg)
  @if(session()->has($msg))
    <p class="flash-message">
      <p class="alert alert-{{ $msg }}">
        {{ session()->get($msg) }}
      </p>
    </p>
  @endif
@endforeach

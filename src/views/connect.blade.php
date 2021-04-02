<form method="post" action="{{ route(config('laravel-exact-online.exact_authorize', 'exact.authorize')) }}">
    {{ csrf_field() }}
    <button class="button small orange" type="submit">Verbinden met Nationale Interim Bank Exact App</button>
</form>

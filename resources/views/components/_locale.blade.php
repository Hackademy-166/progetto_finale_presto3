<form action="{{route('setLocale', $lang)}}" method="POST" class="d-inline">
@csrf
<button type="submit" class="btn btn-link">
<img src="{{asset('vendor/blade-flags/language-'. $lang . '.svg')}}" width="32" height="32" alt="">
</button>
</form>
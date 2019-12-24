<p class="text-center font-weight-bold">or {{ $action }} with</p>

<div class="form-group text-center">
	<a href="{{ route('social.auth.redirect', 'google') }}" class="btn btn-light w-25 mr-3"><i class="fa fa-google"></i> Google</a>
	<button class="btn btn-light w-25 mr-3"><i class="fa fa-facebook-official"></i> Facebook</button>
	<button class="btn btn-light w-25"><i class="fa fa-twitter"></i> Twitter</button>
</div>
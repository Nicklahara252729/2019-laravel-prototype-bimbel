@extends('landing-page')
@section('main')
<div id="login">
		<aside>
			<figure>
				<a href="{{url('/')}}"><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
			</figure>
			  <form>
				<div class="access_social">
					<a href="#0" class="social_bt facebook">Masuk dengan Facebook</a>
					<a href="#0" class="social_bt google">Masuk dengan Google</a>
				</div>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<span class="input">
					<input class="input_field" type="email" autocomplete="off" name="email">
						<label class="input_label">
						<span class="input__label-content">Email</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" autocomplete="new-password" name="password">
						<label class="input_label">
						<span class="input__label-content">Katasandi</span>
					</label>
					</span>
					<small><a href="#0">Lupa katasandi ?</a></small>
				</div>
				<a href="#0" class="btn_1 rounded full-width add_top_60">Login</a>
				<div class="text-center add_top_10">Belum punya akun ? <strong><a href="{{url('register')}}">Daftar !</a></strong></div>
			</form>
			<div class="copy">© 2017 </div>
		</aside>
	</div>
@endsection

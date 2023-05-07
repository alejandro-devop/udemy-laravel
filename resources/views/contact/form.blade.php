<form action="" method="post" action="{{ route('contact') }}">
	@csrf
	{{-- @if($errors->any())
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
	@endif --}}
	{{ __('some_some') }}
	<input name="name" placeholder="Nombre" value="{{ old('name') }}" /><br>
	{!! $errors->first('name', '<small>:message</small><br/>') !!}
	<input name="email" placeholder="Email" value="{{ old('email') }}"/><br>
	{!! $errors->first('email', '<small>:message</small><br/>') !!}
	<input name="subject" placeholder="Asunto" value="{{ old('subject') }}"/><br>
	{!! $errors->first('subject', '<small>:message</small><br/>') !!}
	<textarea name="content" placeholder="Mensaje">{{ old('content') }}</textarea><br>
	{!! $errors->first('content', '<small>:message</small><br/>') !!}
	<button>Enviar</button>
</form>
@section('main_content')
	<h2>Listado de películas</h2>
	<br>
  <br
	<br>
	<ul>
	@foreach ($movies as $oneMovie)
		<li>
			<b>Título:</b> {{ $oneMovie->title }} |
			<b>Duración</b>:{{ $oneMovie->length ?? 'Sin duración' }}
		</li>
	@endforeach
	</ul>
@endsection

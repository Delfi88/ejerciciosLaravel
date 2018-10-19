@section ('content')
<h2>Listado de actores</h2>
<br>
<br>
<br>
  @foreach ($actors as $oneActor)

		<li>
			<b>Nombre:</b> {{ $oneActor->first_name }}
			<b>Apellido:</b>:{{ $oneActor->last_name }}

		</li>
  @endforeach
@endsection

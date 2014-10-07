<div class="calendar">
	<h3>Kalender</h3>
	<a href="/calendar/{{ $monthNum-1 }}"><</a> {{ $month }} <a href="/calendar/{{ $monthNum+1 }}">></a>
	<a href="/calendar/{{ $monthNum-12 }}"><</a> {{ $year }} <a href="/calendar/{{ $monthNum+12 }}">></a>
	<table>
		<tr>	
			<td>Ma</td><td>Di</td><td>Wo</td><td>Do</td><td>Vr</td><td>Za</td><td>Zo</td>
		</tr>
			@foreach($days as $key => $day)
				@if(($key % 7) == 0)
					<tr>
				@endif
				<td>
					@if(isset($links[$key-$firstDay+1]))
						<a href="/calendar/{{ $monthNum }}/{{ $day }} ">{{ $day }}</a>
					@else 
						{{ $day }}
					@endif

				</td>
				@if(($key % 7) == 6)
					</tr>
				@endif
			@endforeach
	</table>
</div>
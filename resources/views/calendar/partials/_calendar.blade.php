
	<div class="cal-nav">

	<div id="month">{!! link_to('calendar/' . ($monthNum-1), '<') !!} {{ $month }} {!! link_to('calendar/' . ($monthNum+1), '>') !!}</div>
	<div id="year">{!! link_to('calendar/' . ($monthNum-12), '<') !!} {{ $year }} {!! link_to('calendar/' . ($monthNum+12), '>') !!}</div>
	</div>
	<div class="cal">
	<table>
		<tr class="title">	
			<td>Ma</td><td>Di</td><td>Wo</td><td>Do</td><td>Vr</td><td>Za</td><td>Zo</td>
		</tr>
			
	
			@foreach($days as $key => $day)
				@if(($key % 7) == 0)
					<tr>
				@endif
				@if($day["grey"] == false)
				<td class="day">
				@else
				<td class="gray">
				@endif
					@if(isset($links[$key-$firstDay+1]))
						{!! link_to('calendar/' . $monthNum .'/' . $day["day"], $day["day"]) !!}
					@else 
						{{ $day["day"] }}
					@endif

				</td>
				@if(($key % 7) == 6)
					</tr>
				@endif
			@endforeach

			<!--
			@for($i = 0; $i<35; $i++)
				@if(($i % 7) == 0)
					<tr>
				@endif
				<td>28</td><27
				<td class="day">
					{{ $i }}
				</td>
				@if(($i % 7) == 6)
					</tr>
				@endif
			@endfor
			-->
	</table>
	</div>

<div class="ui horizontal divider teacher-view-divider" id="post-history">Posting History</div>
<table class="ui celled blue table post-history-table">
	<thead>
		<tr>
			<th rowspan="2">Date</th>
			<th rowspan="2">School</th>
			<th rowspan="2">Place of Work</th>
			<th rowspan="2">Designation</th>
			<th colspan="2" class="center aligned">Appointment</th>
		</tr>
		<tr>
			<th>Nature</th>
			<th>Subject</th>
		</tr>
	</thead>
	<tbody>
		@foreach($teacher->postings as $posting)
		<tr>
			<td>{!! formatDate($posting->date)!!}</td>
			<td><a href="{{route('schools.show', ['id'=>$posting->school_id])}}">{{$posting->school_name}}</a></td>
			<td>{{$posting->place_of_post ? : 'Same as school'}}</td>
			<td>{{$posting->type_of_teacher}}</td>
			<td>{{$posting->nature_of_appointment}}</td>
			<td>{{$posting->subject?:'N/A'}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
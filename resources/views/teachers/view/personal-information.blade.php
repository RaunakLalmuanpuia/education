<div class="eight wide column">
	<div class="ui header">Personal information <a class="popup-toggle" data-title="Detail" data-content="View personal information details" href="#personal-details"><i class="list icon"></i></a></div>
	<div class="ui two column  grid">
		<div class="column">
			<div class="ui vertical segment">
				<div class="ui list">
					<div class="item">
						<div class="header">Name</div>
						<div class="description">{{$teacher->name}}</div>
					</div>
					<div class="item">
						<div class="header">Father's Name</div>
						<div class="description">{{$teacher->father_name}}</div>
					</div>
					<div class="item">
						<div class="header">Address</div>
						<div class="description">
						{{$teacher->present_address}}
						</div>
					</div>
					@if($teacher->phone_number || $teacher->mobile_number || $teacher->email)
					<div class="item">
						<div class="header">Contact</div>
						<div class="description">
							@if($teacher->phone_number)
							<a href="tel:{{$teacher->phone_number}}"><i class="phone square icon"></i>{{$teacher->phone_number}}</a>
							<br />
							@endif
							@if($teacher->mobile_number)
							<a href="tel:{{$teacher->mobile_number}}"><i class="phone icon"></i>{{$teacher->mobile_number}}</a>
							<br />
							@endif
							@if($teacher->email)
							<a href="mailto:{{$teacher->email}}"><i class="mail square icon"></i>{{$teacher->email}}</a>
							@endif
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
		<div class="column teacher-image">
			@if($teacher->phone_number || $teacher->mobile_number || $teacher->email)
				<div class="ui move reveal">
					<div class="visible content">
						<img src="{{$teacher->photo ? '/uploads/teachers/' . chunk_split(md5($teacher->id), 2, '/') . '/' . $teacher->photo : '/images/no-image.png'}}" alt="" class="ui centered middle-aligned small image">
					</div>
					<div class="hidden content">
						{!! qrImage($teacher->name, $teacher->present_address,($teacher->mobile_number ? : $teacher->phone_number), ($teacher->email ? : '-'), 'small') !!}
					</div>
				</div>
			@else
				<img src="{{$teacher->photo ? '/uploads/teachers/' . chunk_split(md5($teacher->id), 2, '/') . '/' . $teacher->photo : '/images/no-image.png'}}" alt="" class="ui centered middle-aligned small image">
			@endif
		</div>
	</div>
	<div class="ui grid teacher-personal-extra">
		<div class="four wide blue column">
			<strong >Gender</strong>
			<p>{{$teacher->gender}}</p>
		</div>
		<div class="four wide blue column">
			<strong >Marital status</strong>
			<p>{{$teacher->marital_status}}</p>
		</div>
		<div class="four wide blue column">
			<strong >Blood Group</strong>
			<p>{{$teacher->blood_group}}</p>
		</div>
		<div class="four wide blue column">
			<strong >EPIC No</strong>
			<p>{{$teacher->epic_number}}</p>
		</div>
	</div>
</div>
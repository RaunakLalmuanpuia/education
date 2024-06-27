<div class="ui segment">
	<div class="ui header">{{ucwords(str_replace('_',' ',$type))}}</div>
@if($type == 'enrollment')	
	<div class="fields">
		<div class="sixteen wide field">
			<input type="text" class="yearpicker" name="year" id="year" placeholder="Select year">
		</div>
	</div>
@endif
	<div class="fields">
		<div class="eight wide field">
			<div>
				<label for="{{$type}}_file" class="ui basic small fluid icon blue button">
					<i class="file icon"></i>
					Open File
				</label>
				{!! Form::file($type.'_file', ['style'=>'display:none','id'=>$type.'_file']) !!}
			</div>
		</div>
		<div class="eight wide field">
			<button type="submit" class="ui basic small fluid orange icon button">
				<i class="upload icon"></i>
				Upload
			</button>
		</div>		
	</div>
	
</div>
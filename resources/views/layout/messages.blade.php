<div id="message-wrapper" class="pb-20">
@if(Session::has('messages'))
	@foreach(Session::get('messages') as $type=>$message)
	<div class="ui icon message">
		@if(isset($message->icon) && $message->icon)
		<i class="{{$message->icon}} icon"></i>
		@endif
		<div class="content">
			@if(isset($message->header) && $message->header)
			<div class="header">
				{{$message->header}}
			</div>
			@endif
			<p>{{$message->content}}</p>
		</div>
	</div>
	@endforeach
@endif
</div>
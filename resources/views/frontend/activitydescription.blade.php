@extends('layouts.app')




@section('content')

<section class="maincontent">

	<div class="actualcontent">
		<div class="container">
<h3>
    {!! html_entity_decode($activity_details->activity_name) !!}

</h3><h4>
        {!! html_entity_decode($activity_details->description) !!}

</h4>
	</div>
</div>
</section>

@endsection

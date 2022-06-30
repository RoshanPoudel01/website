@extends('layouts.app')



@section('content')
<div class="mainheading">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Standard, Interoperability and Regulation</h1>
			</div>
		</div>
	</div>
	<hr>
</div>
<section class="maincontent">



	<div class="actualcontent">
		<div class="container">
            @foreach ($stan['rows'] as $row)
            {!! html_entity_decode($row->data) !!}
            @endforeach
	</div>
</div>
</section>

@endsection

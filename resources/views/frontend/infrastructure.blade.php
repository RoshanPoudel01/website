@extends('layouts.app')



@section('content')
<div class="mainheading">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Infrastructure</h1>
			</div>
		</div>
	</div>
	<hr>
</div>
<section class="maincontent">


	<div class="maincontent">

	</div>
	<div class="actualcontent">
		<div class="container">
	@foreach ($infra['rows'] as $row )
    {!! html_entity_decode($row->data) !!}

    @endforeach
	</div>
</div>
</section>

@endsection

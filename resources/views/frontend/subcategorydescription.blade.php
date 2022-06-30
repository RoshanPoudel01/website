@extends('layouts.app')



@section('content')
<div class="mainheading">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>{{$data['row'] ->menu_sub_category}}</h1>
			</div>
		</div>
	</div>
	{{-- <hr> --}}
</div>
<section class="maincontent">

	<div class="actualcontent">
		<div class="container">

            {!! html_entity_decode($data['row'] ->description) !!}

	</div>
</div>
</section>

@endsection

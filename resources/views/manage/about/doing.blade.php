@extends('manage.layouts.default')
@section('title', 'About What I\'m Doing Editor')

@push('css')

@endpush

@section('content')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
</div>

@endsection

@push('js')
<script>
	$('#menu-about').addClass('active');
    $('#menu-about a').attr('data-active','true');
</script>
@endpush
@extends('main.layouts.default')
@section('title', 'Portfolio')
@section('content')

{{-- Content --}}
<div class="content">
	<div class="section mt-0">
		<h1 class="title title--h1 title__separate">Portfolio</h1>
	</div>
	{{-- Filter --}}
	<div class="select section">
		<span class="placeholder">Select category</span>
		<ul class="filter">
			<li class="filter__item">Category</li>
			<li class="filter__item active" data-filter="*"><a class="filter__link active" href="#filter">All</a></li>
			<li class="filter__item" data-filter=".category-concept"><a class="filter__link" href="#filter">Concept</a></li>
			<li class="filter__item" data-filter=".category-design"><a class="filter__link" href="#filter">Design</a></li>
			<li class="filter__item" data-filter=".category-life"><a class="filter__link" href="#filter">Life</a></li>
		</ul>
		<input type="hidden" name="changemetoo" />
	</div>

	{{-- Content --}}
	<div class="gallery-grid js-grid js-filter-container">
		<div class="gutter-sizer"></div>
		{{-- Item 1 --}}
		<figure class="gallery-grid__item category-concept">
			<div class="gallery-grid__image-wrap">
				<img class="gallery-grid__image cover lazyload" src="{{ asset('assets/main/img/image_01.jpg') }}" data-zoom alt="" />
			</div>
			<figcaption class="gallery-grid__caption">
				<h4 class="title title--h4 gallery-grid__title">Half Avocado</h4>
				<span class="gallery-grid__category">Concept</span>
			</figcaption>
		</figure>

		{{-- Item 2 --}}
		<figure class="gallery-grid__item category-concept">
			<div class="gallery-grid__image-wrap">
				<img class="gallery-grid__image cover lazyload" src="{{ asset('assets/main/img/image_02.jpg') }}" data-zoom alt="" />
			</div>
			<figcaption class="gallery-grid__caption">
				<h4 class="title title--h4 gallery-grid__title">Pink Flamingo</h4>
				<span class="gallery-grid__category">Concept</span>
			</figcaption>
		</figure>

		{{-- Item 3 --}}
		<figure class="gallery-grid__item category-design">
			<div class="gallery-grid__image-wrap">
				<img class="gallery-grid__image cover lazyload" src="{{ asset('assets/main/img/image_03.jpg') }}" data-zoom alt="" />
			</div>
			<figcaption class="gallery-grid__caption">
				<h4 class="title title--h4 gallery-grid__title">Abstract</h4>
				<span class="gallery-grid__category">Design</span>
			</figcaption>
		</figure>

		{{-- Item 4 --}}
		<figure class="gallery-grid__item category-design">
			<div class="gallery-grid__image-wrap">
				<img class="gallery-grid__image cover lazyload" src="{{ asset('assets/main/img/image_04.jpg') }}" data-zoom alt="" />
			</div>
			<figcaption class="gallery-grid__caption">
				<h4 class="title title--h4 gallery-grid__title">Abstract #2</h4>
				<span class="gallery-grid__category">Design</span>
			</figcaption>
		</figure>

		{{-- Item 5 --}}
		<figure class="gallery-grid__item category-design">
			<div class="gallery-grid__image-wrap">
				<img class="gallery-grid__image cover lazyload" src="{{ asset('assets/main/img/image_05.jpg') }}" data-zoom alt="" />
			</div>
			<figcaption class="gallery-grid__caption">
				<h4 class="title title--h4 gallery-grid__title">Abstract #3</h4>
				<span class="gallery-grid__category">Design</span>
			</figcaption>
		</figure>

		{{-- Item 6 --}}
		<figure class="gallery-grid__item category-life">
			<div class="gallery-grid__image-wrap">
				<img class="gallery-grid__image cover lazyload" src="{{ asset('assets/main/img/image_06.jpg') }}" data-zoom alt="" />
			</div>
			<figcaption class="gallery-grid__caption">
				<h4 class="title title--h4 gallery-grid__title">Golden Gate</h4>
				<span class="gallery-grid__category">Life</span>
			</figcaption>
		</figure>

		{{-- Item 7 --}}
		<figure class="gallery-grid__item category-concept">
			<div class="gallery-grid__image-wrap">
				<img class="gallery-grid__image cover lazyload" src="{{ asset('assets/main/img/image_07.jpg') }}" data-zoom alt="" />
			</div>
			<figcaption class="gallery-grid__caption">
				<h4 class="title title--h4 gallery-grid__title">Peach</h4>
				<span class="gallery-grid__category">Concept</span>
			</figcaption>
		</figure>

		{{-- Item 8 --}}
		<figure class="gallery-grid__item category-design">
			<div class="gallery-grid__image-wrap">
				<img class="gallery-grid__image cover lazyload" src="{{ asset('assets/main/img/image_08.jpg') }}" data-zoom alt="" />
			</div>
			<figcaption class="gallery-grid__caption">
				<h4 class="title title--h4 gallery-grid__title">Abstract #4</h4>
				<span class="gallery-grid__category">Design</span>
			</figcaption>
		</figure>

		{{-- Item 9 --}}
		<figure class="gallery-grid__item category-life">
			<div class="gallery-grid__image-wrap">
				<img class="gallery-grid__image cover lazyload" src="{{ asset('assets/main/img/image_09.jpg') }}" data-zoom alt="" />
			</div>
			<figcaption class="gallery-grid__caption">
				<h4 class="title title--h4 gallery-grid__title">Hedgehog</h4>
				<span class="gallery-grid__category">Life</span>
			</figcaption>
		</figure>
	</div>
</div>{{-- Content End --}}
@endsection
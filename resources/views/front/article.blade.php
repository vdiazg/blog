@extends('front.template.main')

@section('content')
  <h3>{{ $article->title }}</h3>
  <div class="row">
    <div class="col-md-9">
      {!! $article->content !!}
    </div>
    <div class="col-md-3">
      @include('front.template.partials.aside')
    </div>
  </div>
@endsection

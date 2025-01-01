@extends('front.inc.app')
@section('content')
@section('title', $page_name)

  <div class="pt-90"></div>
  <section class="common-terms-of-use-section">
    <div class="container">
      <h2 class="main-title">{{$privacy_policy->title}}</h2>
      {!!$privacy_policy->description!!}
    </div>
  </section>

@endsection
@extends('front.inc.app')
@section('content')
@section('title', $page_name)
<div class="pt-90"></div>

<section class="contact-us-main-section review-section p-top-bottom">
    <div class="container">

        <!--  <div class="common-title-box">
                <h2 class="common-title">Contact Us</h2>
            </div> -->

        <div class="row contact-us-main-inner m-0">
            <div class="col-md-7 col-sm-11 contact-us-right-box-outer">
                <div class="contact-us-right-box-inner">
                    @foreach ($reviews as $item)
                        <div class="contact-us-review-box-item">
                            <div class="top-box">
                                <h2 class="title">{{ $item->fname . ' ' . $item->lname }}</h2>
                                <h2 class="rating-star">
                                    @php
                                        $fullStars = floor($item->rating); // Number of full stars
                                        $halfStar = $item->rating - $fullStars >= 0.5; // Check if there's a half star
                                        $emptyStars = 5 - ceil($item->rating); // Remaining empty stars
                                    @endphp

                                    {{-- Full Stars --}}
                                    @for ($i = 0; $i < $fullStars; $i++)
                                        <span><i class="fas fa-star"></i></span>
                                    @endfor

                                    {{-- Half Star --}}
                                    @if ($halfStar)
                                        <span><i class="fas fa-star-half-alt"></i></span>
                                    @endif

                                    {{-- Empty Stars --}}
                                    @for ($i = 0; $i < $emptyStars; $i++)
                                        <span><i class="far fa-star"></i></span>
                                    @endfor
                                </h2>
                            </div>
                            <div class="content">
                                <p>{{ $item->comment }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    {!! $reviews->links("pagination::bootstrap-4") !!}
                </div>
                
            </div>

            <div class="col-md-5 col-sm-11 contact-us-left-box-outer review-customize">
                <div class="contact-us-left-box-inner">
                    <div class="heading">
                        <h2 class="title">Post Your Reviews</h2>
                    </div>
                    <form action="{{ route('review.save') }}" method="POST">
                        @csrf
                        <div class="form-row mx-0">
                            <div class="form-group col-md-6">
                                <input type="text" name="fname" placeholder="First Name*" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="lname" placeholder="Last Name*" required="">
                            </div>
                        </div>
                        <div class="form-row mx-0">
                            <div class="form-group col-md-12">
                                <input type="email" name="email" placeholder="Email*" required="">
                            </div>

                            <div class="form-group col-md-12 mb-0 pb-0">
                                <textarea name="comment" rows="3" placeholder="Comment*" required=""></textarea>
                            </div>
                            <div class="form-group pb-0 mb-2">
                                <h2 class="user-rating-star-input">
                                    <fieldset id="demo1" class="rating">
                                        <input class="stars" required type="radio" id="1star_a-5" name="rating"
                                            value="5">
                                        <label class="full" for="1star_a-5" title="Awesome - 5 stars"></label>
                                        <input class="stars" required type="radio" id="1star_a_5-half" name="rating"
                                            value="4.5">
                                        <label class="half" for="1star_a_5-half"
                                            title="Pretty good - 4.5 stars"></label>
                                        <input class="stars" required type="radio" id="1star_a-4" name="rating"
                                            value="4">
                                        <label class="full" for="1star_a-4" title="Pretty good - 4 stars"></label>
                                        <input class="stars" required type="radio" id="1star_a_4-half" name="rating"
                                            value="3.5">
                                        <label class="half" for="1star_a_4-half" title="Meh - 3.5 stars"></label>
                                        <input class="stars" required type="radio" id="1star_a-3" name="rating"
                                            value="3">
                                        <label class="full" for="1star_a-3" title="Meh - 3 stars"></label>
                                        <input class="stars" required type="radio" id="1star_a-3-half" name="rating"
                                            value="2.5">
                                        <label class="half" for="1star_a-3-half"
                                            title="Kinda bad - 2.5 stars"></label>
                                        <input class="stars" required type="radio" id="1star2" name="rating"
                                            value="2">
                                        <label class="full" for="1star2" title="Kinda bad - 2 stars"></label>
                                        <input class="stars" required type="radio" id="1star2half" name="rating"
                                            value="1.5">
                                        <label class="half" for="1star2half" title="Meh - 1.5 stars"></label>
                                        <input class="stars" required type="radio" id="1star1" name="rating"
                                            value="1">
                                        <label class="full" for="1star1" title="Sucks big time - 1 star"></label>
                                        <input class="stars" required type="radio" id="1starhalf" name="rating"
                                            value="0.5">
                                        <label class="half" for="1starhalf"
                                            title="Sucks big time - 0.5 stars"></label>
                                    </fieldset>
                                </h2>
                            </div>

                            <div class="form-group col-md-12 mb-0">
                                <div class="btn-box">
                                    <button name="submit">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <span class="success-or-error">
                        <?php
                        if (session()->has('success')) {
                            echo '<script type="text/javascript">swal("Your Review Waiting For Approval.");</script>';
                        }
                        ?>

                    </span>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- Contact closed -->
<!-- Contact closed -->

@endsection

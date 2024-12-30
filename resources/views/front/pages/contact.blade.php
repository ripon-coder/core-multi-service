@extends('front.inc.app')
@section('content')
@section('title', $page_name)
<div class="pt-90"></div>
<section class="contact-us-main-section p-top-bottom">
    <div class="container">

        <!--   <div class="common-title-box">
                <h2 class="common-title">Contact Us</h2>
            </div> -->

        <div class="row contact-us-main-inner m-0">
            <div class="col-md-6 col-sm-11">
                <div class="contact-us-left-box-inner">
                    <div class="row">
                        <div class="heading">
                            <h2 class="title">Contact Us</h2>
                        </div>
                    </div>
                    <form action="{{ route('contact.save') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="first_name" placeholder="First Name*" required="" value="{{old('first_name')}}">
                                    @error('first_name')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="text" name="last_name" placeholder="Last Name*" required="" value="{{old('first_name')}}">
                                    @error('last_name')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input type="number" name="phone" placeholder="Phone*" required="" value="{{old('first_name')}}">
                                    @error('phone')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" name="email" placeholder="Email*" required="" value="{{old('first_name')}}">
                                    @error('email')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="subject" placeholder="Subject*" required="" value="{{old('first_name')}}">
                                    @error('subject')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 mb-0">
                                    <textarea name="body" rows="4" placeholder="Message*" required="">{{old('body')}}</textarea>
                                    @error('body')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="btn-box">
                                        <button name="submit">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                    <span class="success-or-error">
                        <?php
                        if (!empty(session()->has('success'))) {
                            $success = session()->get('success');
                            echo '<script type="text/javascript">swal("Thank You!","' . $success . '", "success");</script>';
                        }
                        ?>
                    </span>
                </div>
            </div>
            <div class="col-md-5 col-sm-11 contact-us-right-box-outer">
                <div class="contact-us-right-box-inner">
                    <div class="contact-us-right-box-item">
                        <div class="top-box">
                            <h2 class="title">Address</h2>
                        </div>
                        <div class="content">
                            <div class="item">
                                <h2 class="text">
                                    {{ @$g_settings->address_one_address }}
                                </h2>
                            </div>
                            <div class="item">
                                <h2 class="text tel">
                                    Mobile:
                                </h2>
                                <h2 class="text">
                                    <a
                                        href="tel:{{ @$g_settings->address_one_mobile_1 }}">{{ @$g_settings->address_one_mobile_1 }}</a>
                                </h2>
                            </div>
                            <div class="item">
                                <h2 class="text tel">
                                    Telephone:
                                </h2>
                                <h2 class="text">
                                    <a
                                        href="tel:{{ @$g_settings->address_one_mobile_2 }}">{{ @$g_settings->address_one_mobile_2 }}</a>
                                </h2>
                            </div>
                            <div class="item">
                                <h2 class="text tel">Email:</h2>
                                <h2 class="text">
                                    <a href="mailto:{{ @$g_settings->email }}">{{ @$g_settings->email }}</a>
                                </h2>
                            </div>
                            <div class="item">
                                <h2 class="text">
                                    <span>Mon - Sat: 11 am to 7 pm </span>
                                    <span>Sunday : Closed </span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Contact closed -->
<!-- Contact closed -->


<section class="google-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.660776028816!2d-73.89618678497236!3d40.747489279328036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25f014d2b1f77%3A0x36da6f58c6172613!2s37-42%2072nd%20St%2C%20Queens%2C%20NY%2011372%2C%20USA!5e0!3m2!1sen!2sbd!4v1607166752318!5m2!1sen!2sbd"
        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
</section>

@endsection

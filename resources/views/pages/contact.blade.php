@extends('master')

@section('title', "Contact Us")
@section('description', 'Contact Us')

@section('style')

@endsection

@section('content')
<div class="page contact-page pb-0">
	<div class="container">
		<div class="row">
            @if(session()->has('success'))
            <div class="col-sm-12 mb-3 mb-md-0">
                <div class="alert alert-info mb-4">{{ session()->get('success') }}</div>
            </div>
            @endif


			<div class="col-md-6">
				<div class="grop-cgettouch_txt">
					<h3>GET IN TOUCH</h3>
					<p>{{ $c_setting->get_in_touch }}</p>
				</div>
				<div class="row">
					<div class="col-sm-6 mb-4 mb-sm-0">
						<div class="grop-cgettouch_info ">
							<h4>{{ $c_setting->address_one_title }}</h4>
							<address class="grop-cgettouch_locn">
								<p>{{ $c_setting->address_one_address }}</p>
                                @php
                                    $num1 = $c_setting->address_one_mobile;
                                    $num2 = '';
                                    if (strpos($c_setting->address_one_mobile, ',') !== false) {
                                        $numbersArray = explode(',', $c_setting->address_one_mobile);
                                        $num1 = $numbersArray[0];
                                        $num2  = $numbersArray[1];
                                    }
                                @endphp
								<span>Tell:<a href="tel: {{ $num1 }}">{{ $num1 }}</a></span>
                                <span>Tell:<a href="tel: {{ $num2 }}">{{ $num2 }}</a></span>
								<span>Email:<a href="mailto: {{ $c_setting->address_one_email }}">{{ $c_setting->address_one_email }}</a></span>
							</address>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="grop-cgettouch_info ">
							<h4>{{ $c_setting->address_two_title }}</h4>
							<address class="grop-cgettouch_locn">
								<p>{{ $c_setting->address_two_address }}</p>
                                @php
                                    $num1 = $c_setting->address_two_mobile;
                                    $num2 = '';
                                    if (strpos($c_setting->address_two_mobile, ',') !== false) {
                                        $numbersArray = explode(',', $c_setting->address_two_mobile);
                                        $num1 = $numbersArray[0];
                                        $num2  = $numbersArray[1];
                                    }
                                @endphp
								<span>Tell:<a href="tel: {{ $num1 }}">{{ $num1 }}</a></span>
                                <span>Tell:<a href="tel: {{ $num2 }}">{{ $num2 }}</a></span>
								<span>Email:<a href="mailto: {{ $c_setting->address_two_email }}">{{ $c_setting->address_two_email }}</a></span>
							</address>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 mt-5 mt-md-0">
				<form class="contact-form" action="{{ route('contact.save') }}" method="post">
                    @csrf


					<div class="row mb-3">
						<div class="col-sm-6 mb-3 mb-md-0">
							<input required class="form-control" type="text" name="name" value="" placeholder="Name">
						</div>

						<div class="col-sm-6">
							<input required class="form-control" type="email" name="email" value="" placeholder="Email">
						</div>
					</div>
					<div class="mb-3">
						<input required class="form-control" type="text" name="subject" value="" placeholder="Subject">
					</div>
					<div class="mb-3">
						<textarea required class="form-control" name="body" placeholder="Enter your message...."></textarea>
					</div>
					<div class="mb-3">
						<button class="btn btn_overly btn-dark" type="submit"><span>Send Message</span></button>
					</div>
					<!-- <div class="response-output" aria-hidden="true">One or more fields have an error. Please check and try again.</div> -->
				</form>
			</div>
		</div>
	</div>

	<!-- map -->
	<div class="row mx-0 map-row">
		<div class="col-md-6 px-0 pe-md-2">
			<div class="img-content">
				<div class="img-content-in">
					<iframe class="cover" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29213.693529833246!2d90.3724206986505!3d23.75765843772808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c79d9ac6f5f7%3A0x90c13dbae4b9720!2s39%20Rd%2008!5e0!3m2!1sen!2sbd!4v1618643677399!5m2!1sen!2sbd" width="600" height="530" style="border: 0px; pointer-events: none;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
		<div class="col-md-6 px-0 ps-md-2 mt-5 mt-md-0">
			<div class="img-content">
				<div class="img-content-in">
					<iframe class="cover" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.6205378406353!2d-73.8941386499549!3d40.748374543226674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25f06e0721d1b%3A0x18c57a8291bdb069!2s37-18%2074th%20Street%2C%20Flushing%2C%20NY%2011372%2C%20USA!5e0!3m2!1sen!2sbd!4v1618643532562!5m2!1sen!2sbd" width="600" height="530" style="border: 0px; pointer-events: none;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- map -->
	<div class="grop-contact_social_area">
		<div class="container">
			<div class="text-center grop-contact_social">
				<h3>JOIN US</h3><p>Stay up-to-date on the latest news and updates and help us by spreading the word.</p>
				<ul class="list-inline  grop-csol_list">
					<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
					<li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection



@section('script')

@endsection

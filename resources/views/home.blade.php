@php($title = "")  
@section('meta_desc') @endsection
@extends('layouts.default')    
@section('content')

<!-- start slider here -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <!-- <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol> -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('/resources/assets/images/slider-1.jpg')}}" class="d-block w-100" alt="slider-1">
    </div>
    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end slider -->   

<section class="sec-service">
  <div class="container-fluid">
    <div class="row no-gutters d-flex justify-content-center">
      <div class="col-md-2">
        <a href="{{route('robotic-knee-replacement-surgery-kharghar-navi-mumbai')}}" class="SkewedTile__2xHww">
          <div class="animate-skew service-6"></div>
          <h4>Robotic Knee Replacement</h4>
        </a>
      </div>
      <div class="col-md-2">
        <a href="{{route('hip-replacement')}}" class="SkewedTile__2xHww">
          <div class="animate-skew service-1"></div>
          <h4>Hip Replacement</h4>
        </a>
      </div>
      <div class="col-md-2">
        <a href="{{route('knee-replacement')}}" class="SkewedTile__2xHww">
          <div class="animate-skew service-2"></div>
          <h4>Knee Joint Replacement</h4>
        </a>
      </div>
    </div>
    <div class="row no-gutters d-flex justify-content-center">
      <div class="col-md-2">
        <a href="{{route('sport-injury-treatment')}}" class="SkewedTile__2xHww">
          <div class="animate-skew service-3"></div>
          <h4>Sports Injuries</h4>
        </a>
      </div>
      <div class="col-md-2">
        <a href="{{route('arthritis-treatment')}}" class="SkewedTile__2xHww">
          <div class="animate-skew service-4"></div>
          <h4>Arthritis Treatment</h4>
        </a>
      </div>
      <div class="col-md-2">
        <a href="{{route('fracture-treatment')}}" class="SkewedTile__2xHww">
          <div class="animate-skew service-5"></div>
          <h4>Fracture Treatment</h4>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="abt-sec pt-60">
	<div class="container">
		<div class="row align-items-center">

			<div class="col-md-5">

				<div class="doc-img">

					<img src="{{ asset('/resources/assets/images/DrBharatKumar-about.jpeg')}}">

				</div>

			</div>
			<div class="col-md-7">
				<h2 class="blue">Meet, Dr. Bharat Kumar!</h2>
				<p class="f600 blue mb-1">MBBS, D.Ortho, DNB, Fellowship in Arthroplasty</p>
				<p class="f600 blue mb-1">Consultant Orthopedic & Joint Replacement Surgeon</p>
				<p class="f600 blue mb-4">Robotic Knee Replacement Surgeon</p>
				<p class="mb-4 font-set">Dr. G Bharat Kumar is an orthopaedic and joint replacement surgeon, practicing in Navi Mumbai with an experience of 10 years. He is one of the directors at MITR hospital, Kharghar heading orthopaedic department and working as a full time consultant at MGM Hospital, Vashi.</p>

			</div>
		</div>
	</div>



	</div>
</section>

<!--video section-->
<section class="testimonials">
  <div class="container">
    <div class="abt_heading_wrapper" style="background-color: transparent; padding: 70px 0;">
      <h2 class="f700 blue text-center pb-0" style="color: #00626f;margin-bottom:-44px"> Amazing Recoveries & Success Stories</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/fDlYodkSbeM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="col-md-4">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/WVn6Uoghob4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="col-md-4">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/C5Mmv9dCps8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="col-md-4 text-center m-0 book-online-btn">
        <a href="{{route('video-testimonials')}}" class="btn-l">View More</a>
      </div>
    </div>
  </div>
</section>
<!--video section end--->

<section class="testimonials">
    <div class="abt_heading_wrapper text-center">
      <h2 class="f600">Your trusted Orthopedic advisor for life.</h2>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="owl-carousel testimonial-wrapper" id="sec-testimonial">
                <div class="item">
                    <div class="col-md-12">
                        <div class="slide-item">
                          <img src="{{ asset('/resources/assets/images/google-icon.png')}}" class="google-icon">
                          <h5>Shubhangi Pawar</h5> 
                          <img src="{{ asset('/resources/assets/images/star.png')}}" class="mb-4 star-icon">
                          <p>Dr. G Bharat is a best orthopedic Dr. He done my both knee replacement surgery with reasonable chargés. He gave special attention to their patient. We are so happy that we met such doctor. He  is best human being. Now i can walk without any pain. Thank you Doctor.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-md-12">
                        <div class="slide-item">
                          <img src="{{ asset('/resources/assets/images/google-icon.png')}}" class="google-icon">
                          <h5>Suraj Gedam</h5> 
                          <img src="{{ asset('/resources/assets/images/star.png')}}" class="mb-4 star-icon">
                          <p class="pb-2">The Best orthopedic Dr. in navi Mumbai...  He performed knee replacement of my mother and she is recovered very well with in 2months ... She performs her work perfectly now...  I'm thankful towards Dr. Bharat Kumar and MITR hospital Kharghar for taking good care of my mother.</p>
                        </div>
                    </div>
                </div>
                
                <div class="item">
                  <div class="col-md-12">
                    <div class="slide-item">
                      <img src="{{ asset('/resources/assets/images/google-icon.png')}}" class="google-icon">
                      <h5>Shivshankar Mudhole</h5> 
                      <img src="{{ asset('/resources/assets/images/star.png')}}" class="mb-4 star-icon">
                      <p class="pb-2">The services that we received from Dr. Bharat Kumar is excellent. Dr. alongwith the staff of MITR hospital are friendly and ensure that we are properly informed about our patients health and care.</p>
                      <p class="pb-2">He treated my mom, Mrs. Priyanka Naik for knee replacement surgery and the entire process went very smoothly. This is just because of hospital staff and Dr. Bharatkumar sir's personal envolvement in patients speedy recovery.</p>
                      <p>Also would like to mention that the physiothrepist, Dr. Muthu is very kind and treats his patients at his patients pace. Kudos to the entire staff of MITR hospital!! I would have no qualms in recommending them to family and friends. Thank you.</p>
                    </div>
                  </div>
                </div>
                
                <div class="item">
                    <div class="col-md-12">
                    <div class="slide-item">
                      <img src="{{ asset('/resources/assets/images/google-icon.png')}}" class="google-icon">
                      <h5>Amit Kandalgaonkar</h5> 
                      <img src="{{ asset('/resources/assets/images/star.png')}}" class="mb-4 star-icon">
                      <p>Recently 3 weeks back I had undergone HIP replacement surgery thru the magical hands of Dr.Bharatkumar.I was unable to walk due to severe pain in my hip joint. After consultation and regular follow up with Dr.Bharatkumar I was diagnosed with avascular necrosis and was advised surgery . It was a complicated procedure , But Dr.Bharatkumar performed Total HIP Replacement surgery skillfully. Recovery after 3 weeks is magical as I can walk pain free now.Dr.Bharatkumar makes u understand each and every aspect of HIP replacement surgery before and after surgery. Me and my family are thankful towards Dr.Bharatkumar and his MITR hospital team to make me walk pain free again.</p>
                    </div>
                </div>
                </div>
                
            </div>
            <div class="text-center m-0 book-online-btn">
              <a href="https://www.google.com/maps/place/Dr+Bharat+Kumar/@19.0371562,72.9881116,13z/data=!4m11!1m2!2m1!1sdr+bharat+kumar!3m7!1s0x3be7c23ecbea307f:0xc51ce74eb4a7c67!8m2!3d19.0371562!4d73.0581494!9m1!1b1!15sCg9kciBiaGFyYXQga3VtYXKSARJvcnRob3BlZGljX3N1cmdlb27gAQA" class="btn-l" target="_blank">Read More</a>
            </div>
        </div>
    </div>
</section>

@stop
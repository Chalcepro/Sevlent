@extends('frontend.layouts.app')
@section('title', $setting->bname . ' ' . '-' . '' . $setting->site_title)
@section('keywords', $setting->site_keywords)
@section('description', $setting->site_description)
@section('content')
<style>
    
.offers-container {
    position: static;
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 3rem 2rem;
    overflow-x: auto;
    z-index: 1111;
}

.offer-card {
  position: relative;
  width: 300px;
  height: 380px;
  margin: 20px 10px;
  border-radius: 12px;
  overflow: hidden;
  flex-shrink: 0;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
  transform-style: preserve-3d;
  transition: transform 0.3s ease;
  z-index: 1111;
}

/* Offset the 1st and last cards to create a curved effect */
.offer-card:nth-child(1),
.offer-card:nth-child(4) {
  transform: translateY(-60px);
}

/* Optional hover to bring card forward */
.offer-card:hover {
  transform: translateY(0) translateZ(80px);
}

.offer-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.text-overlay {
  position: absolute;
  bottom: 0;
  width: 100%;
  padding: 1rem;
  background: linear-gradient(transparent, rgba(0,0,0,0.7));
  color: #fff;
}

.text-overlay h3 {
  margin: 0;
  font-size: 1.1rem;
  font-weight: bold;
}

.text-overlay p {
  margin: 0.3rem 0 0;
  font-size: 0.9rem;
}

@media (max-width: 1000px) {
    .offers-container {
        flex-direction: column;
        align-items: center;
        padding: 0 1rem;
    }
  .offer-card {
    margin: 1rem 0 !important;
    transform: none !important;
    width: 80%
  }
}

@media (max-width: 700px) {
  .offers-container {
    flex-direction: column;
    align-items: center;
    padding: 0 1rem;
  }
  .offer-card {
    margin: 1rem 0 !important;
    transform: none !important;
    width: 90%
  }
}

</style>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background: black">
                    <div style="height: 100vh; overflow: hidden; opacity: 0.2;">
                        <img class="w-100" src="{{ asset('assets/img/mainwallpaper.jpg') }}" style="object-fit: fill" alt="Image" />
                    </div>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center mx-auto col-lg-8">
                                    <h1 class="display-3 text-dark mb-4 animated slideInDown text-white"
                                        style="text-shadow: 2px 2px 4px black;">
                                        Start Your Coding Journey Today!
                                    </h1>
                                    <p class="fs-5 mb-5 text-white" style="text-shadow: 1px 1px 3px black;">
                                        Join thousands of learners and unlock your potential with S3's free coding courses.
                                        No hidden fees, just pure knowledge – begin your journey now!
                                    </p>
                                    <a href="{{ route('course') }}" class="btn py-3 px-5" style="background-color: #414141; color: white;">View Courses</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/img/slider2.webp') }}" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h1 class="display-3 text-dark mb-4 animated slideInDown text-white">
                                        Enhance Your Spaces with Our Expertise
                                    </h1>
                                    <p class="fs-5 text-white mb-5">
                                        From burners to refrigerators, our range is designed to meet all your commercial
                                        kitchen needs.
                                    </p>
                                    <a href="{{ route('course') }}" class="btn btn-primary py-3 px-5">View Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/img/slider3.webp') }}" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h1 class="display-3 text-dark mb-4 animated slideInDown text-white">
                                        Reliable Equipment, Seamless Performance
                                    </h1>
                                    <p class="fs-5 text-white mb-5">
                                        Engineered for durability and efficiency, our products deliver unmatched value and
                                        functionality.
                                    </p>
                                    <a href="{{ route('course') }}" class="btn btn-primary py-3 px-5">View Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/img/slider4.webp') }}" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h1 class="display-3 text-dark mb-4 animated slideInDown text-white">
                                        Your Trusted Partner in Stainless Steel
                                    </h1>
                                    <p class="fs-5 text-white mb-5">
                                        Choose quality, innovation, and affordability with Balaji Enterprises – where
                                        excellence meets trust.
                                    </p>
                                    <a href="{{ route('course') }}" class="btn btn-primary py-3 px-5">View Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> --}}
        </div>
    </div>
    <!-- Carousel End -->
    
    {{-- <div class="gallery">
        <div class="card">
          <img src="https://via.placeholder.com/400×225" alt="">
        </div>
        <div class="card">
          <img src="https://via.placeholder.com/400×225" alt="">
        </div>
        <div class="card">
          <img src="https://via.placeholder.com/400×225" alt="">
        </div>
        <div class="card">
          <img src="https://via.placeholder.com/400×225" alt="">
        </div>
        <div class="card">
          <img src="https://via.placeholder.com/400×225" alt="">
        </div>
      </div> --}}

        <div class="offers-container">
  <div class="offer-card">
    <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?q=80&w=1469&auto=format&fit=crop" alt="Web Development">
    <div class="text-overlay">
      <h3>Web Development</h3>
      <p>Build responsive websites &amp; apps</p>
    </div>
  </div>
  <div class="offer-card">
    <img src="https://images.unsplash.com/photo-1565229284535-2cbbe3049123?q=80&w=1530&auto=format&fit=crop&ixlib=rb-4.1.0" alt="Counseling & Guidance">
    <div class="text-overlay">
      <h3>Counseling &amp; Guidance</h3>
      <p>Personal growth and career advice</p>
    </div>
  </div>
  <div class="offer-card">
    <img src="https://images.unsplash.com/photo-1565687981296-535f09db714e?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0" alt="Tutorials">
    <div class="text-overlay">
      <h3>Tutorials</h3>
      <p>Step-by-step video lessons</p>
    </div>
  </div>
  <div class="offer-card">
    <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0" alt="UI/UX Design">
    <div class="text-overlay">
      <h3>UI/UX Design</h3>
      <p>Design beautiful interfaces</p>
    </div>
  </div>
</div>

    <!-- course Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px">
                <h1 class="display-6 mb-5">
                    Latest Course
                </h1>
            </div>
            <div class="row g-4">
                @forelse ($courses as $course)
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded px-3 pt-3 pb-2"
                            style="background-image: url({{ asset('uploads/images/scategory' . $course->image) }});class="blog-item background-color: var(--dark-secondary);">
                            <div class="project-img">
                                <a
                                    href="{{ route('course.detail', ['category_slug' => $course->slug, 'service_slug' => optional($course->services->first())->slug]) }}">
                                    <img src="{{ asset('uploads/images/scategory/' . $course->image) }}"
                                        class="img-fluid w-100 rounded" alt="Image">
                                </a>
                            </div>
                            <div class="pt-2 ">
                                <a href="{{ route('course.detail', ['category_slug' => $course->slug, 'service_slug' => optional($course->services->first())->slug]) }}"
                                    class="h4">{{ $course->title }}</a>
                                <p>{{ Str::limit($course->excerpt, 140) }}</p>
                            </div>

                            </a>


                        </div>
                    </div>
                @empty
                    <p class="text-center">No courses</p>
                @endforelse
            </div>
            <div class="row mt-5">
                <a href="{{ route('course') }}" class="btn btn-lg w-100 text-light" style="background-color: #444444;">View All Courses</a>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- About Start -->
    @include('frontend.components.about')
    <!-- About End -->

    <!-- Appointment Start -->
    <div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: var(--dark-accent);">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-2">
                        {{ $setting->bname }}
                    </h1>
                    <p class="text-white mb-5">
                        Join our community today and start your journey towards becoming a skilled developer. Let's build a
                        brighter future together – one line of code at a time.
                    </p>
                    <div class="bg-white rounded p-3">
                        <div class="d-flex align-items-center rounded p-3" style="background-color: #414141;">
                            <h5 class="mb-0">
                                <span class="d-none d-md-block text-white">Call Now: </span><a class="text-white" href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="rounded p-4" style="background: white">

                        <div class="row mb-3">
                            <h2>Have a Question? contact us now!</h2>
                        </div>
                        @include('frontend.components.contact')

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

    <!-- Testimonial Start -->
    @if ($testimonials->count())
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto" style="max-width: 500px">
                    <h1 class="display-6 mb-5">Student Reviews!</h1>
                </div>
                <div class="row g-5 justify-content-center">

                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="owl-carousel testimonial-carousel">
                            @foreach ($testimonials as $testimonial)
                                <div class="testimonial-item text-center" style="background-color: var(--dark-secondary);">
                                    <img class="img-fluid rounded mx-auto mb-4"
                                        src="{{ asset('uploads/images/testimonial/' . $testimonial->image) }}"
                                        alt="" />
                                    <p class="fs-5">
                                        {{ $testimonial->body }}
                                    </p>
                                    <h5>{{ $testimonial->title }}</h5>
                                    <span>{{ $testimonial->star }}</span>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endif
    <!-- Testimonial End -->
@endsection

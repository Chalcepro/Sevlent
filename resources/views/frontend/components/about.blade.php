<body>
<div class="container-sm py-5">
    <div class="row g-5">
        <!-- Full width image section -->
        <div class="col-12 wow fadeInUp position-relative" data-wow-delay="0.1s" style="height: 400px;">
            <img class="w-100 h-100 rounded-3" src="{{ asset('assets/img/generated1.png') }}"
                alt="" style="object-fit: cover; margin-top: 20px" />
            <!-- Experience counter box -->
            <div class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3 mb-4"
                style="width: 200px; height: 200px; z-index: 2;">
                <div class="d-flex flex-column justify-content-center text-center bg-dark rounded h-100 p-3">
                    <h1 class="text-white mb-0">25</h1>
                    <h2 class="text-white">Years</h2>
                    <h5 class="text-white mb-0">Experience</h5>
                </div>
            </div>
        </div>

        <!-- Text content section -->
        <div class="col-12 wow fadeInUp" data-wow-delay="0.5s">
            <div class="container-fluid">
                <div class="h-100">
                    <h1 class="display-6 mb-2 text-dark">
                        Welcome to {{ $setting->bname }} – your ultimate destination to learn coding for free!
                    </h1>
                    <p class="mb-4">
                        we believe that knowledge should be accessible to everyone, regardless of their background or financial situation. Our mission is to empower aspiring developers, students, and tech enthusiasts by providing high-quality coding courses at absolutely no cost.
                    </p>
                    <p class="mb-4">
                        Join our community today and start your journey towards becoming a skilled developer. Let's build a brighter future together – one line of code at a time.
                    </p>

                    <div class="border-top mt-4 pt-4">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-dark">
                                Call Now: <i class="fa fa-mobile"></i> <a href="tel:{{ $setting->phone }}">
                                    {{ $setting->phone }}</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
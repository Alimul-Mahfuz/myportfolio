<x-user-layout>
    @push('css')
        <style>
            .intro {
                background-image: url("{{ asset('assets/frontend/images/bannerbg.jpg') }}");
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>
    @endpush
    <section class="intro">
        <div class="container">
            <div class="card bg-none border border-0">
                <div class="card-body py-md-0 ">
                    <div class="row">
                        <div
                            class="col-12 px-0 ps-md-0 col-md-6 order-1 order-md-0 d-flex justify-content-center align-items-center">
                            <p class="px-md-3 my-3 p-3 short-intro" style="color:whitesmoke">
                                <span class="fs-2">Hi, I am Alimul Mahfuz Tushar.</span>
                                A computer science graduate from Dhaka. I am a self motivated person. Passionate to
                                learn new
                                technology. Intereseted in the
                                field of ML and AI.
                            </p>
                        </div>
                        <div class="col-12 px-0 pe-md-0 col-md-6 order-0 order-md-1">
                            <div id="carouselExampleIndicators" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('assets/frontend/images/carousel-items/cimg1.jpg') }}"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/frontend/images/carousel-items/cimg2.jpg') }}"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/frontend/images/carousel-items/cimg3.jpg') }}"
                                            class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About me-->
    <section class="about-me my-5">
        <div class="container">
            <div class="card w-100 shadow p-3 mb-5 bg-body-tertiary">
                <h5 class="card-header px-3 my-2"><img class="section-icon pe-1"
                        src="{{ asset('assets/frontend/images/section-icons/about-me.png') }}" alt="">About Me
                </h5>
                <div class="card-body py-0">
                    <div class="row py-3">
                        <div class="col-12 col-md-6">
                            <img src="{{ asset('assets/frontend/images/about-me/about-me.jpg') }}" class="img-fluid"
                                style="width: 100%" alt="">
                        </div>
                        <div class="col-12 col-md-6">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis consectetur eum modi sit non
                            enim, error unde est et ut repudiandae rerum, deleniti maiores sint sapiente, dolores
                            eligendi placeat laboriosam!Molestias quod repudiandae tempore velit aspernatur labore
                            doloremque assumenda quisquam nostrum necessitatibus voluptatum similique atque aperiam
                            beatae, veniam nisi ipsa facilis natus quo sapiente? Id impedit tempore praesentium
                            dignissimos a.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of About me-->
    <!--Education-->
    <section class="education my-5">
        <div class="container">
            <div class="card w-100 shadow py-3 px-md-3 mb-5 bg-body-tertiary">
                <h5 class="card-header px-3 my-2"><img class="section-icon pe-1"
                        src="{{ asset('assets/frontend/images/section-icons/education.png') }}" alt="">Education
                </h5>
                <div class="card-body py-0" id="education_load">

                </div>
            </div>
        </div>
    </section>
    <!--End of Education-->
    <!--Publications-->
    <section class="publications my-5">
        <div class="container">
            <div class="card w-100 shadow p-3 mb-5 bg-body-tertiary">
                <h5 class="card-header px-3 my-2"><img class="section-icon pe-1"
                        src="{{ asset('assets/frontend/images/section-icons/publication.png') }}" alt="">Publication
                </h5>
                <div class="card-body py-0">
                    <div class="inner-education my-2 d-flex flex-column flex-md-row">
                        <p class="">January 2023</p>
                        <div class="education-item">
                            <div class="edu-details">
                                <p class="fspx-24">Bachelor of Computer Science and Engieering</p>
                                <p class="fspx-18 fw-600">American International University-Bangladesh</p>
                                <p class="">Major: Software Engieering</p>
                                <p class="">CGPA: 3.82 in scale of 4.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="inner-education my-2 d-flex flex-column flex-md-row">
                        <p class="">January 2023</p>
                        <div class="education-item">
                            <div class="edu-details">
                                <p class="fspx-24">Bachelor of Computer Science and Engieering</p>
                                <p class="fspx-18 fw-600">American International University-Bangladesh</p>
                                <p class="">Major: Software Engieering</p>
                                <p class="">CGPA: 3.82 in scale of 4.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('js')
        <script src="{{asset('assets/frontend/scripts/home.js')}}"></script>
    @endpush
    <!--End of projects and portfolio-->
</x-user-layout>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Clínica do Povo</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="keywords" />
        <meta content="" name="description" />

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"
            rel="stylesheet"
        />

        <!-- Icon Font Stylesheet -->
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
            rel="stylesheet"
        />

        <!-- Libraries Stylesheet -->
        <link href="resources/lib/animate/animate.min.css" rel="stylesheet" />
        <link
            href="/lib/owlcarousel/assets/owl.carousel.min.css"
            rel="stylesheet"
        />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="/css/style.css" rel="stylesheet" />
    </head>

    <body>
        <!-- Spinner Start -->
        <div
            id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
        >
            <div
                class="spinner-border text-primary"
                style="width: 3rem; height: 3rem"
                role="status"
            >
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav
                class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0"
            >
                <a href="index.html" class="navbar-brand p-0">
                    <h1 class="text-primary m-0">
                        <i class="fas fa-star-of-life me-3"></i>Clínica do Povo
                    </h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse"
                >
                    <span class="fa fa-bars"></span>
                </button>
            </nav>

            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel">
                <div class="header-carousel-item">
                    <img
                        src="img/carousel-1.jpg"
                        class="img-fluid w-100"
                        alt="Image"
                    />
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5
                                class="text-white text-uppercase fw-bold mb-4"
                                style="letter-spacing: 3px"
                            >
                                Physiotherapy Center
                            </h5>
                            <h1
                                class="display-1 text-capitalize text-white mb-4"
                            >
                                Best Solution For Painful Life
                            </h1>
                            <p class="mb-5 fs-5">
                                Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since
                                the 1500s,
                            </p>
                            <a
                                class="btn btn-primary rounded-pill text-white py-3 px-5"
                                href="{{ route('agendamento.index') }}"
                                >Agende-se</a
                            >
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img
                        src="img/carousel-2.jpg"
                        class="img-fluid w-100"
                        alt="Image"
                    />
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5
                                class="text-white text-uppercase fw-bold mb-4"
                                style="letter-spacing: 3px"
                            >
                                Physiotherapy Center
                            </h5>
                            <h1
                                class="display-1 text-capitalize text-white mb-4"
                            >
                                Best Solution For Painful Life
                            </h1>
                            <p class="mb-5 fs-5 animated slideInDown">
                                Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since
                                the 1500s,
                            </p>
                            <a
                                class="btn btn-primary rounded-pill text-white py-3 px-5"
                                href="#"
                                >Agende-se</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- Services Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div
                    class="section-title mb-5 wow fadeInUp"
                    data-wow-delay="0.2s"
                >
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">What We Do</h4>
                    </div>
                    <h1 class="display-3 mb-4">
                        Our Service Given Physio Therapy By Expert.
                    </h1>
                    <p class="mb-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat deleniti amet at atque sequi quibusdam cumque
                        itaque repudiandae temporibus, eius nam mollitia
                        voluptas maxime veniam necessitatibus saepe in ab?
                        Repellat!
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div
                        class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp"
                        data-wow-delay="0.1s"
                    >
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img
                                    src="img/service-1.jpg"
                                    class="img-fluid rounded-top w-100"
                                    alt=""
                                />
                            </div>
                            <div
                                class="service-content rounded-bottom bg-light p-4"
                            >
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Message Therapy</h5>
                                    <p class="mb-4">
                                        Dolor, sit amet consectetur adipisicing
                                        elit. Soluta inventore cum accusamus,
                                        dolor qui ullam
                                    </p>
                                    <a
                                        href="#"
                                        class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2"
                                        >Read More</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp"
                        data-wow-delay="0.3s"
                    >
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img
                                    src="img/service-2.jpg"
                                    class="img-fluid rounded-top w-100"
                                    alt=""
                                />
                            </div>
                            <div
                                class="service-content rounded-bottom bg-light p-4"
                            >
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Physiotherapy</h5>
                                    <p class="mb-4">
                                        Dolor, sit amet consectetur adipisicing
                                        elit. Soluta inventore cum accusamus,
                                        dolor qui ullam
                                    </p>
                                    <a
                                        href="#"
                                        class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2"
                                        >Read More</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp"
                        data-wow-delay="0.5s"
                    >
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img
                                    src="img/service-3.jpg"
                                    class="img-fluid rounded-top w-100"
                                    alt=""
                                />
                            </div>
                            <div
                                class="service-content rounded-bottom bg-light p-4"
                            >
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Heat & Cold Therapy</h5>
                                    <p class="mb-4">
                                        Dolor, sit amet consectetur adipisicing
                                        elit. Soluta inventore cum accusamus,
                                        dolor qui ullam
                                    </p>
                                    <a
                                        href="#"
                                        class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2"
                                        >Read More</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp"
                        data-wow-delay="0.7s"
                    >
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img
                                    src="img/service-4.jpg"
                                    class="img-fluid rounded-top w-100"
                                    alt=""
                                />
                            </div>
                            <div
                                class="service-content rounded-bottom bg-light p-4"
                            >
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Chiropatic Therapy</h5>
                                    <p class="mb-4">
                                        Dolor, sit amet consectetur adipisicing
                                        elit. Soluta inventore cum accusamus,
                                        dolor qui ullam
                                    </p>
                                    <a
                                        href="#"
                                        class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2"
                                        >Read More</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp"
                        data-wow-delay="0.1s"
                    >
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img
                                    src="img/service-5.jpg"
                                    class="img-fluid rounded-top w-100"
                                    alt=""
                                />
                            </div>
                            <div
                                class="service-content rounded-bottom bg-light p-4"
                            >
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Work Injuries</h5>
                                    <p class="mb-4">
                                        Dolor, sit amet consectetur adipisicing
                                        elit. Soluta inventore cum accusamus,
                                        dolor qui ullam
                                    </p>
                                    <a
                                        href="#"
                                        class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2"
                                        >Read More</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp"
                        data-wow-delay="0.3s"
                    >
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img
                                    src="img/service-6.jpg"
                                    class="img-fluid rounded-top w-100"
                                    alt=""
                                />
                            </div>
                            <div
                                class="service-content rounded-bottom bg-light p-4"
                            >
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Spot Injuries</h5>
                                    <p class="mb-4">
                                        Dolor, sit amet consectetur adipisicing
                                        elit. Soluta inventore cum accusamus,
                                        dolor qui ullam
                                    </p>
                                    <a
                                        href="#"
                                        class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2"
                                        >Read More</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp"
                        data-wow-delay="0.5s"
                    >
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img
                                    src="img/service-7.jpg"
                                    class="img-fluid rounded-top w-100"
                                    alt=""
                                />
                            </div>
                            <div
                                class="service-content rounded-bottom bg-light p-4"
                            >
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Regular Therapy</h5>
                                    <p class="mb-4">
                                        Dolor, sit amet consectetur adipisicing
                                        elit. Soluta inventore cum accusamus,
                                        dolor qui ullam
                                    </p>
                                    <a
                                        href="#"
                                        class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2"
                                        >Read More</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp"
                        data-wow-delay="0.7s"
                    >
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img
                                    src="img/service-8.jpg"
                                    class="img-fluid rounded-top w-100"
                                    alt=""
                                />
                            </div>
                            <div
                                class="service-content rounded-bottom bg-light p-4"
                            >
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Back Pain</h5>
                                    <p class="mb-4">
                                        Dolor, sit amet consectetur adipisicing
                                        elit. Soluta inventore cum accusamus,
                                        dolor qui ullam
                                    </p>
                                    <a
                                        href="#"
                                        class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2"
                                        >Read More</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-12 text-center wow fadeInUp"
                        data-wow-delay="0.2s"
                    >
                        <a
                            class="btn btn-primary rounded-pill text-white py-3 px-5"
                            href="#"
                            >Services More</a
                        >
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

    
        <!-- Modal Video -->
        <div
            class="modal fade"
            id="videoModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Youtube Video
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe
                                class="embed-responsive-item"
                                src=""
                                id="video"
                                allowfullscreen
                                allowscriptaccess="always"
                                allow="autoplay"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Agende-se End -->

        <!-- Team Start -->
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div
                    class="section-title mb-5 wow fadeInUp"
                    data-wow-delay="0.1s"
                >
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Meet our team</h4>
                    </div>
                    <h1 class="display-3 mb-4">
                        Physiotherapy Services from Professional Therapist
                    </h1>
                    <p class="mb-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat deleniti amet at atque sequi quibusdam cumque
                        itaque repudiandae temporibus, eius nam mollitia
                        voluptas maxime veniam necessitatibus saepe in ab?
                        Repellat!
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div
                        class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                        data-wow-delay="0.1s"
                    >
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img
                                    src="img/team-1.jpg"
                                    class="img-fluid rounded-top w-100"
                                    alt=""
                                />
                                <div
                                    class="team-icon d-flex justify-content-center"
                                >
                                    <a
                                        class="btn btn-square btn-primary text-white rounded-circle mx-1"
                                        href=""
                                        ><i class="fab fa-facebook-f"></i
                                    ></a>
                                    <a
                                        class="btn btn-square btn-primary text-white rounded-circle mx-1"
                                        href=""
                                        ><i class="fab fa-twitter"></i
                                    ></a>
                                    <a
                                        class="btn btn-square btn-primary text-white rounded-circle mx-1"
                                        href=""
                                        ><i class="fab fa-instagram"></i
                                    ></a>
                                    <a
                                        class="btn btn-square btn-primary text-white rounded-circle mx-1"
                                        href=""
                                        ><i class="fab fa-linkedin-in"></i
                                    ></a>
                                </div>
                            </div>
                            <div
                                class="team-content text-center border border-primary border-top-0 rounded-bottom p-4"
                            >
                                <h5>Full Name</h5>
                                <p class="mb-0">Message Physio Therapist</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                        data-wow-delay="0.3s"
                    >
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img
                                    src="img/team-2.jpg"
                                    class="img-fluid rounded-top w-100"
                                    alt=""
                                />
                                <div
                                    class="team-icon d-flex justify-content-center"
                                >
                                    <a
                                        class="btn btn-square btn-primary text-white rounded-circle mx-1"
                                        href=""
                                        ><i class="fab fa-facebook-f"></i
                                    ></a>
                                    <a
                                        class="btn btn-square btn-primary text-white rounded-circle mx-1"
                                        href=""
                                        ><i class="fab fa-twitter"></i
                                    ></a>
                                    <a
                                        class="btn btn-square btn-primary text-white rounded-circle mx-1"
                                        href=""
                                        ><i class="fab fa-instagram"></i
                                    ></a>
                                    <a
                                        class="btn btn-square btn-primary text-white rounded-circle mx-1"
                                        href=""
                                        ><i class="fab fa-linkedin-in"></i
                                    ></a>
                                </div>
                            </div>
                            <div
                                class="team-content text-center border border-primary border-top-0 rounded-bottom p-4"
                            >
                                <h5>Full Name</h5>
                                <p class="mb-0">Rehabilitation Therapist</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                        data-wow-delay="0.5s"
                    >
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img
                                    src="img/team-3.jpg"
                                    class="img-fluid rounded-top w-100"
                                    alt=""
                                />
                                <div
                                    class="team-icon d-flex justify-content-center"
                                >
                                    <a
                                        class="btn btn-square btn-primary text-white rounded-circle mx-1"
                                        href=""
                                        ><i class="fab fa-facebook-f"></i
                                    ></a>
                                    <a
                                        class="btn btn-square btn-primary text-white rounded-circle mx-1"
                                        href=""
                                        ><i class="fab fa-twitter"></i
                                    ></a>
                                    <a
                                        class="btn btn-square btn-primary text-white rounded-circle mx-1"
                                        href=""
                                        ><i class="fab fa-instagram"></i
                                    ></a>
                                    <a
                                        class="btn btn-square btn-primary text-white rounded-circle mx-1"
                                        href=""
                                        ><i class="fab fa-linkedin-in"></i
                                    ></a>
                                </div>
                            </div>
                            <div
                                class="team-content text-center border border-primary border-top-0 rounded-bottom p-4"
                            >
                                <h5>Full Name</h5>
                                <p class="mb-0">Doctor of Physical therapy</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                        data-wow-delay="0.7s"
                    >
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img
                                    src="img/team-4.jpg"
                                    class="img-fluid rounded-top w-100"
                                    alt=""
                                />
                                <div
                                    class="team-icon d-flex justify-content-center"
                                >
                                    <a
                                        class="btn btn-square btn-primary text-white rounded-circle mx-1"
                                        href=""
                                        ><i class="fab fa-facebook-f"></i
                                    ></a>
                                    <a
                                        class="btn btn-square btn-primary text-white rounded-circle mx-1"
                                        href=""
                                        ><i class="fab fa-twitter"></i
                                    ></a>
                                    <a
                                        class="btn btn-square btn-primary text-white rounded-circle mx-1"
                                        href=""
                                        ><i class="fab fa-instagram"></i
                                    ></a>
                                    <a
                                        class="btn btn-square btn-primary text-white rounded-circle mx-1"
                                        href=""
                                        ><i class="fab fa-linkedin-in"></i
                                    ></a>
                                </div>
                            </div>
                            <div
                                class="team-content text-center border border-primary border-top-0 rounded-bottom p-4"
                            >
                                <h5>Full Name</h5>
                                <p class="mb-0">Doctor of Physical therapy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Footer Start -->
        <div
            class="container-fluid footer py-5 wow fadeIn"
            data-wow-delay="0.2s"
        >
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">
                                <i class="fas fa-star-of-life me-3"></i>Terapia
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Delectus dolorem impedit eos
                                autem dolores laudantium quia, qui similique
                            </p>
                            <div class="d-flex align-items-center">
                                <i
                                    class="fas fa-share fa-2x text-white me-2"
                                ></i>
                                <a
                                    class="btn-square btn btn-primary text-white rounded-circle mx-1"
                                    href=""
                                    ><i class="fab fa-facebook-f"></i
                                ></a>
                                <a
                                    class="btn-square btn btn-primary text-white rounded-circle mx-1"
                                    href=""
                                    ><i class="fab fa-twitter"></i
                                ></a>
                                <a
                                    class="btn-square btn btn-primary text-white rounded-circle mx-1"
                                    href=""
                                    ><i class="fab fa-instagram"></i
                                ></a>
                                <a
                                    class="btn-square btn btn-primary text-white rounded-circle mx-1"
                                    href=""
                                    ><i class="fab fa-linkedin-in"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Quick Links</h4>
                            <a href=""
                                ><i class="fas fa-angle-right me-2"></i> About
                                Us</a
                            >
                            <a href=""
                                ><i class="fas fa-angle-right me-2"></i> Contact
                                Us</a
                            >
                            <a href=""
                                ><i class="fas fa-angle-right me-2"></i> Privacy
                                Policy</a
                            >
                            <a href=""
                                ><i class="fas fa-angle-right me-2"></i> Terms &
                                Conditions</a
                            >
                            <a href=""
                                ><i class="fas fa-angle-right me-2"></i> Our
                                Blog & News</a
                            >
                            <a href=""
                                ><i class="fas fa-angle-right me-2"></i> Our
                                Team</a
                            >
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Terapia Services</h4>
                            <a href=""
                                ><i class="fas fa-angle-right me-2"></i> All
                                Services</a
                            >
                            <a href=""
                                ><i class="fas fa-angle-right me-2"></i>
                                Physiotherapy</a
                            >
                            <a href=""
                                ><i class="fas fa-angle-right me-2"></i>
                                Diagnostics</a
                            >
                            <a href=""
                                ><i class="fas fa-angle-right me-2"></i> Manual
                                Therapy</a
                            >
                            <a href=""
                                ><i class="fas fa-angle-right me-2"></i> Massage
                                Therapy</a
                            >
                            <a href=""
                                ><i class="fas fa-angle-right me-2"></i>
                                Rehabilitation</a
                            >
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Contact Info</h4>
                            <a href=""
                                ><i class="fa fa-map-marker-alt me-2"></i> 123
                                Street, New York, USA</a
                            >
                            <a href=""
                                ><i class="fas fa-envelope me-2"></i>
                                info@example.com</a
                            >
                            <a href=""
                                ><i class="fas fa-envelope me-2"></i>
                                info@example.com</a
                            >
                            <a href=""
                                ><i class="fas fa-phone me-2"></i> +012 345
                                67890</a
                            >
                            <a href="" class="mb-3"
                                ><i class="fas fa-print me-2"></i> +012 345
                                67890</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"
                            ><a href="#"
                                ><i class="fas fa-copyright text-light me-2"></i
                                >Your Site Name</a
                            >, All right reserved.</span
                        >
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By
                        <a class="border-bottom" href="https://htmlcodex.com"
                            >HTML Codex</a
                        >
                        Distributed By
                        <a class="border-bottom" href="https://themewagon.com"
                            >ThemeWagon</a
                        >
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"
            ><i class="fa fa-arrow-up"></i
        ></a>

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/lib/wow/wow.min.js"></script>
        <script src="/lib/easing/easing.min.js"></script>
        <script src="/lib/waypoints/waypoints.min.js"></script>
        <script src="/lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>

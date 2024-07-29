<x-frontend-app-layout :title="'All Stores || DiscountZShop'">
    <!-- Hero Section -->
    <section>
        <div class="regular-banner">
            <img class="img-fluid w-100" src="https://www.sheerid.com/wp-content/uploads/2022/07/hero_1200x628-2.jpg"
                alt="" />
        </div>

    </section>
    <!-- Top Stores -->
    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h3>Top Stores</h3>
                            <span class="store-devider"></span>
                        </div>
                        <div class="d-flex align-items-center">
                            <!-- Filter Store -->
                            <div class="btn-group pe-2">
                                <button class="btn btn-common-three btn-sm dropdown-toggle px-2" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="true">
                                    City
                                </button>
                                <ul class="dropdown-menu rounded-0" data-popper-placement="bottom-start"
                                    style="
                    position: absolute;
                    inset: 0px auto auto 0px;
                    margin: 0px;
                    transform: translate(0px, 33px);
                  ">
                                    <li>
                                        <a class="dropdown-item" href="#">Dhaka</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Syhlet</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Rongpur</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Khulna</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Barishal</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Filter Store -->
                            <div class="btn-group pe-2">
                                <button class="btn btn-common-three btn-sm dropdown-toggle px-2" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="true">
                                    Area
                                </button>
                                <ul class="dropdown-menu rounded-0" data-popper-placement="bottom-start"
                                    style="
                    position: absolute;
                    inset: 0px auto auto 0px;
                    margin: 0px;
                    transform: translate(0px, 33px);
                  ">
                                    <li>
                                        <a class="dropdown-item" href="#">Gulshan</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Mirpur</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Savar</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Filter Store -->
                            <div class="btn-group pe-2">
                                <button class="btn btn-common-three btn-sm dropdown-toggle px-2" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="true">
                                    <i class="fa-solid fa-filter fs-6"></i>
                                </button>
                                <ul class="dropdown-menu rounded-0" data-popper-placement="bottom-start"
                                    style="
                    position: absolute;
                    inset: 0px auto auto 0px;
                    margin: 0px;
                    transform: translate(0px, 33px);
                  ">
                                    <li>
                                        <a class="dropdown-item" href="#">Top Stores</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Today Flash Discounts</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Big Discount</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Search Store -->
                            <div class="wrapper-store">
                                <div class="search-input-store">
                                    <a href="#" target="_blank" hidden></a>
                                    <input type="text" placeholder="Type to search..." />
                                    <div class="autocom-box">
                                        <!-- here list are inserted from javascript -->
                                    </div>
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-1">
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-0 rounded-2">
                            <!-- Store Banner -->
                            <div class="main-store-banner">
                                <img class="img-fluid rounded-2"
                                    src="{{ asset('frontend') }}/assets/img/store/arong-banner.jpg"
                                    alt="arong-banner.jpg" />
                            </div>
                            <!-- Store Logo And Rating -->
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="store-logo">
                                        <img class="img-fluid"
                                            src="{{ asset('frontend') }}/assets/img/store/arong-logo.png"
                                            alt="arong-logo.png" />
                                    </div>
                                    <div class="store-rating">
                                        <a href="store-single.html"
                                            class="btn btn-common-one rounded-circle store-btn"><i
                                                class="fa-solid fa-store" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <!-- Store Info -->
                                <div class="pt-4 d-flex justify-content-between">
                                    <div>
                                        <h5>AARONG</h5>
                                        <p>Clothing Store</p>
                                    </div>
                                    <div>
                                        <button class="btn border-0 p-0 m-0 pe-2">
                                            <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                title="Store Location" data-bs-toggle="modal"
                                                data-bs-target="#store-Location" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                    <span class="bg-danger badge fw-normal">
                                        <i class="fa-solid fa-percent pe-2"></i>OFFER
                                    </span>
                                    <small class="text-sm">
                                        Get UpTo <span class="main-color">50%</span> Off
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-0 rounded-2">
                            <!-- Store Banner -->
                            <div class="main-store-banner">
                                <img class="img-fluid rounded-2"
                                    src="{{ asset('frontend') }}/assets/img/store/foodpanda-banner.jpg"
                                    alt="arong-banner.jpg" />
                            </div>
                            <!-- Store Logo And Rating -->
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="store-logo">
                                        <img class="img-fluid"
                                            src="{{ asset('frontend') }}/assets/img/store/foodpanda-logo.png"
                                            alt="arong-logo.png" />
                                    </div>
                                    <div class="store-rating">
                                        <a href="store-single.html"
                                            class="btn btn-common-one rounded-circle store-btn"><i
                                                class="fa-solid fa-store" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <!-- Store Info -->
                                <div class="pt-4 d-flex justify-content-between">
                                    <div>
                                        <h5>FOODPANDA</h5>
                                        <p>Food & Delivery</p>
                                    </div>
                                    <div>
                                        <button class="btn border-0 p-0 m-0 pe-2">
                                            <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                title="Store Location" data-bs-toggle="modal"
                                                data-bs-target="#store-Location" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                    <span class="bg-danger badge fw-normal">
                                        <i class="fa-solid fa-percent pe-2"></i>OFFER
                                    </span>
                                    <small class="text-sm">
                                        Get UpTo <span class="main-color">50%</span> Off
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-0 rounded-2">
                            <!-- Store Banner -->
                            <div class="main-store-banner">
                                <img class="img-fluid rounded-2"
                                    src="{{ asset('frontend') }}/assets/img/store/pathao-banner.jpg"
                                    alt="arong-banner.jpg" />
                            </div>
                            <!-- Store Logo And Rating -->
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="store-logo">
                                        <img class="img-fluid"
                                            src="{{ asset('frontend') }}/assets/img/store/pathao-logo.png"
                                            alt="arong-logo.png" />
                                    </div>
                                    <div class="store-rating">
                                        <a href="store-single.html"
                                            class="btn btn-common-one rounded-circle store-btn"><i
                                                class="fa-solid fa-store" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <!-- Store Info -->
                                <div class="pt-4 d-flex justify-content-between">
                                    <div>
                                        <h5>PATHAO</h5>
                                        <p>Food & Delivery</p>
                                    </div>
                                    <div>
                                        <button class="btn border-0 p-0 m-0 pe-2">
                                            <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                title="Store Location" data-bs-toggle="modal"
                                                data-bs-target="#store-Location" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                    <span class="bg-danger badge fw-normal">
                                        <i class="fa-solid fa-percent pe-2"></i>OFFER
                                    </span>
                                    <small class="text-sm">
                                        Get UpTo <span class="main-color">50%</span> Off
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-0 rounded-2">
                            <!-- Store Banner -->
                            <div class="main-store-banner">
                                <img class="img-fluid rounded-2"
                                    src="{{ asset('frontend') }}/assets/img/store/bata-banner.png"
                                    alt="arong-banner.jpg" />
                            </div>
                            <!-- Store Logo And Rating -->
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="store-logo">
                                        <img class="img-fluid"
                                            src="{{ asset('frontend') }}/assets/img/store/bata-logo.jpg"
                                            alt="arong-logo.png" />
                                    </div>
                                    <div class="store-rating">
                                        <a href="store-single.html"
                                            class="btn btn-common-one rounded-circle store-btn"><i
                                                class="fa-solid fa-store" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <!-- Store Info -->
                                <div class="pt-4 d-flex justify-content-between">
                                    <div>
                                        <h5>BATA</h5>
                                        <p>Food & Delivery</p>
                                    </div>
                                    <div>
                                        <button class="btn border-0 p-0 m-0 pe-2">
                                            <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                title="Store Location" data-bs-toggle="modal"
                                                data-bs-target="#store-Location" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                    <span class="bg-danger badge fw-normal">
                                        <i class="fa-solid fa-percent pe-2"></i>OFFER
                                    </span>
                                    <small class="text-sm">
                                        Get UpTo <span class="main-color">50%</span> Off
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- All Stores -->
    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center">
                        <h3>All Stores</h3>
                        <span class="store-devider"></span>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-3">
                    <a href="">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-0 rounded-2">
                                <!-- Store Banner -->
                                <div class="main-store-banner">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('frontend') }}/assets/img/store/bata-banner.png"
                                        alt="arong-banner.jpg" />
                                </div>
                                <!-- Store Logo And Rating -->
                                <div class="px-3 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="store-logo">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend') }}/assets/img/store/bata-logo.jpg"
                                                alt="arong-logo.png" />
                                        </div>
                                        <div class="store-rating">
                                            <a href="store-single.html"
                                                class="btn btn-common-one rounded-circle store-btn"><i
                                                    class="fa-solid fa-store"></i></a>
                                        </div>
                                    </div>
                                    <!-- Store Info -->
                                    <div class="pt-4 d-flex justify-content-between">
                                        <div>
                                            <h5>BATA</h5>
                                            <p>Food & Delivery</p>
                                        </div>
                                        <div>
                                            <button class="btn border-0 p-0 m-0 pe-2">
                                                <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                    title="Store Location" data-bs-toggle="modal"
                                                    data-bs-target="#store-Location" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                        <span class="bg-danger badge fw-normal">
                                            <i class="fa-solid fa-percent pe-2"></i>OFFER
                                        </span>
                                        <small class="text-sm">
                                            Get UpTo <span class="main-color">50%</span> Off
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-0 rounded-2">
                                <!-- Store Banner -->
                                <div class="main-store-banner">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('frontend') }}/assets/img/store/bata-banner.png"
                                        alt="arong-banner.jpg" />
                                </div>
                                <!-- Store Logo And Rating -->
                                <div class="px-3 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="store-logo">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend') }}/assets/img/store/bata-logo.jpg"
                                                alt="arong-logo.png" />
                                        </div>
                                        <div class="store-rating">
                                            <a href="store-single.html"
                                                class="btn btn-common-one rounded-circle store-btn"><i
                                                    class="fa-solid fa-store"></i></a>
                                        </div>
                                    </div>
                                    <!-- Store Info -->
                                    <div class="pt-4 d-flex justify-content-between">
                                        <div>
                                            <h5>BATA</h5>
                                            <p>Food & Delivery</p>
                                        </div>
                                        <div>
                                            <button class="btn border-0 p-0 m-0 pe-2">
                                                <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                    title="Store Location" data-bs-toggle="modal"
                                                    data-bs-target="#store-Location" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                        <span class="bg-danger badge fw-normal">
                                            <i class="fa-solid fa-percent pe-2"></i>OFFER
                                        </span>
                                        <small class="text-sm">
                                            Get UpTo <span class="main-color">50%</span> Off
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-0 rounded-2">
                                <!-- Store Banner -->
                                <div class="main-store-banner">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('frontend') }}/assets/img/store/bata-banner.png"
                                        alt="arong-banner.jpg" />
                                </div>
                                <!-- Store Logo And Rating -->
                                <div class="px-3 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="store-logo">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend') }}/assets/img/store/bata-logo.jpg"
                                                alt="arong-logo.png" />
                                        </div>
                                        <div class="store-rating">
                                            <a href="store-single.html"
                                                class="btn btn-common-one rounded-circle store-btn"><i
                                                    class="fa-solid fa-store"></i></a>
                                        </div>
                                    </div>
                                    <!-- Store Info -->
                                    <div class="pt-4 d-flex justify-content-between">
                                        <div>
                                            <h5>BATA</h5>
                                            <p>Food & Delivery</p>
                                        </div>
                                        <div>
                                            <button class="btn border-0 p-0 m-0 pe-2">
                                                <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                    title="Store Location" data-bs-toggle="modal"
                                                    data-bs-target="#store-Location" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                        <span class="bg-danger badge fw-normal">
                                            <i class="fa-solid fa-percent pe-2"></i>OFFER
                                        </span>
                                        <small class="text-sm">
                                            Get UpTo <span class="main-color">50%</span> Off
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-0 rounded-2">
                                <!-- Store Banner -->
                                <div class="main-store-banner">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('frontend') }}/assets/img/store/bata-banner.png"
                                        alt="arong-banner.jpg" />
                                </div>
                                <!-- Store Logo And Rating -->
                                <div class="px-3 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="store-logo">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend') }}/assets/img/store/bata-logo.jpg"
                                                alt="arong-logo.png" />
                                        </div>
                                        <div class="store-rating">
                                            <a href="store-single.html"
                                                class="btn btn-common-one rounded-circle store-btn"><i
                                                    class="fa-solid fa-store"></i></a>
                                        </div>
                                    </div>
                                    <!-- Store Info -->
                                    <div class="pt-4 d-flex justify-content-between">
                                        <div>
                                            <h5>BATA</h5>
                                            <p>Food & Delivery</p>
                                        </div>
                                        <div>
                                            <button class="btn border-0 p-0 m-0 pe-2">
                                                <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                    title="Store Location" data-bs-toggle="modal"
                                                    data-bs-target="#store-Location" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                        <span class="bg-danger badge fw-normal">
                                            <i class="fa-solid fa-percent pe-2"></i>OFFER
                                        </span>
                                        <small class="text-sm">
                                            Get UpTo <span class="main-color">50%</span> Off
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-0 rounded-2">
                            <!-- Store Banner -->
                            <div class="main-store-banner">
                                <img class="img-fluid rounded-2"
                                    src="{{ asset('frontend') }}/assets/img/store/bata-banner.png"
                                    alt="arong-banner.jpg" />
                            </div>
                            <!-- Store Logo And Rating -->
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="store-logo">
                                        <img class="img-fluid"
                                            src="{{ asset('frontend') }}/assets/img/store/bata-logo.jpg"
                                            alt="arong-logo.png" />
                                    </div>
                                    <div class="store-rating">
                                        <a href="store-single.html"
                                            class="btn btn-common-one rounded-circle store-btn"><i
                                                class="fa-solid fa-store" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <!-- Store Info -->
                                <div class="pt-4 d-flex justify-content-between">
                                    <div>
                                        <h5>BATA</h5>
                                        <p>Food & Delivery</p>
                                    </div>
                                    <div>
                                        <button class="btn border-0 p-0 m-0 pe-2">
                                            <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                title="Store Location" data-bs-toggle="modal"
                                                data-bs-target="#store-Location" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                    <span class="bg-danger badge fw-normal">
                                        <i class="fa-solid fa-percent pe-2"></i>OFFER
                                    </span>
                                    <small class="text-sm">
                                        Get UpTo <span class="main-color">50%</span> Off
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <a href="">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-0 rounded-2">
                                <!-- Store Banner -->
                                <div class="main-store-banner">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('frontend') }}/assets/img/store/bata-banner.png"
                                        alt="arong-banner.jpg" />
                                </div>
                                <!-- Store Logo And Rating -->
                                <div class="px-3 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="store-logo">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend') }}/assets/img/store/bata-logo.jpg"
                                                alt="arong-logo.png" />
                                        </div>
                                        <div class="store-rating">
                                            <a href="store-single.html"
                                                class="btn btn-common-one rounded-circle store-btn"><i
                                                    class="fa-solid fa-store"></i></a>
                                        </div>
                                    </div>
                                    <!-- Store Info -->
                                    <div class="pt-4 d-flex justify-content-between">
                                        <div>
                                            <h5>BATA</h5>
                                            <p>Food & Delivery</p>
                                        </div>
                                        <div>
                                            <button class="btn border-0 p-0 m-0 pe-2">
                                                <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                    title="Store Location" data-bs-toggle="modal"
                                                    data-bs-target="#store-Location" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                        <span class="bg-danger badge fw-normal">
                                            <i class="fa-solid fa-percent pe-2"></i>OFFER
                                        </span>
                                        <small class="text-sm">
                                            Get UpTo <span class="main-color">50%</span> Off
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-0 rounded-2">
                                <!-- Store Banner -->
                                <div class="main-store-banner">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('frontend') }}/assets/img/store/bata-banner.png"
                                        alt="arong-banner.jpg" />
                                </div>
                                <!-- Store Logo And Rating -->
                                <div class="px-3 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="store-logo">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend') }}/assets/img/store/bata-logo.jpg"
                                                alt="arong-logo.png" />
                                        </div>
                                        <div class="store-rating">
                                            <a href="store-single.html"
                                                class="btn btn-common-one rounded-circle store-btn"><i
                                                    class="fa-solid fa-store"></i></a>
                                        </div>
                                    </div>
                                    <!-- Store Info -->
                                    <div class="pt-4 d-flex justify-content-between">
                                        <div>
                                            <h5>BATA</h5>
                                            <p>Food & Delivery</p>
                                        </div>
                                        <div>
                                            <button class="btn border-0 p-0 m-0 pe-2">
                                                <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                    title="Store Location" data-bs-toggle="modal"
                                                    data-bs-target="#store-Location" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                        <span class="bg-danger badge fw-normal">
                                            <i class="fa-solid fa-percent pe-2"></i>OFFER
                                        </span>
                                        <small class="text-sm">
                                            Get UpTo <span class="main-color">50%</span> Off
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-0 rounded-2">
                                <!-- Store Banner -->
                                <div class="main-store-banner">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('frontend') }}/assets/img/store/bata-banner.png"
                                        alt="arong-banner.jpg" />
                                </div>
                                <!-- Store Logo And Rating -->
                                <div class="px-3 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="store-logo">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend') }}/assets/img/store/bata-logo.jpg"
                                                alt="arong-logo.png" />
                                        </div>
                                        <div class="store-rating">
                                            <a href="store-single.html"
                                                class="btn btn-common-one rounded-circle store-btn"><i
                                                    class="fa-solid fa-store"></i></a>
                                        </div>
                                    </div>
                                    <!-- Store Info -->
                                    <div class="pt-4 d-flex justify-content-between">
                                        <div>
                                            <h5>BATA</h5>
                                            <p>Food & Delivery</p>
                                        </div>
                                        <div>
                                            <button class="btn border-0 p-0 m-0 pe-2">
                                                <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                    title="Store Location" data-bs-toggle="modal"
                                                    data-bs-target="#store-Location" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                        <span class="bg-danger badge fw-normal">
                                            <i class="fa-solid fa-percent pe-2"></i>OFFER
                                        </span>
                                        <small class="text-sm">
                                            Get UpTo <span class="main-color">50%</span> Off
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-3">
                    <a href="">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-0 rounded-2">
                                <!-- Store Banner -->
                                <div class="main-store-banner">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('frontend') }}/assets/img/store/bata-banner.png"
                                        alt="arong-banner.jpg" />
                                </div>
                                <!-- Store Logo And Rating -->
                                <div class="px-3 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="store-logo">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend') }}/assets/img/store/bata-logo.jpg"
                                                alt="arong-logo.png" />
                                        </div>
                                        <div class="store-rating">
                                            <a href="store-single.html"
                                                class="btn btn-common-one rounded-circle store-btn"><i
                                                    class="fa-solid fa-store"></i></a>
                                        </div>
                                    </div>
                                    <!-- Store Info -->
                                    <div class="pt-4 d-flex justify-content-between">
                                        <div>
                                            <h5>BATA</h5>
                                            <p>Food & Delivery</p>
                                        </div>
                                        <div>
                                            <button class="btn border-0 p-0 m-0 pe-2">
                                                <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                    title="Store Location" data-bs-toggle="modal"
                                                    data-bs-target="#store-Location" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                        <span class="bg-danger badge fw-normal">
                                            <i class="fa-solid fa-percent pe-2"></i>OFFER
                                        </span>
                                        <small class="text-sm">
                                            Get UpTo <span class="main-color">50%</span> Off
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-0 rounded-2">
                                <!-- Store Banner -->
                                <div class="main-store-banner">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('frontend') }}/assets/img/store/bata-banner.png"
                                        alt="arong-banner.jpg" />
                                </div>
                                <!-- Store Logo And Rating -->
                                <div class="px-3 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="store-logo">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend') }}/assets/img/store/bata-logo.jpg"
                                                alt="arong-logo.png" />
                                        </div>
                                        <div class="store-rating">
                                            <a href="store-single.html"
                                                class="btn btn-common-one rounded-circle store-btn"><i
                                                    class="fa-solid fa-store"></i></a>
                                        </div>
                                    </div>
                                    <!-- Store Info -->
                                    <div class="pt-4 d-flex justify-content-between">
                                        <div>
                                            <h5>BATA</h5>
                                            <p>Food & Delivery</p>
                                        </div>
                                        <div>
                                            <button class="btn border-0 p-0 m-0 pe-2">
                                                <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                    title="Store Location" data-bs-toggle="modal"
                                                    data-bs-target="#store-Location" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                        <span class="bg-danger badge fw-normal">
                                            <i class="fa-solid fa-percent pe-2"></i>OFFER
                                        </span>
                                        <small class="text-sm">
                                            Get UpTo <span class="main-color">50%</span> Off
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-0 rounded-2">
                                <!-- Store Banner -->
                                <div class="main-store-banner">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('frontend') }}/assets/img/store/bata-banner.png"
                                        alt="arong-banner.jpg" />
                                </div>
                                <!-- Store Logo And Rating -->
                                <div class="px-3 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="store-logo">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend') }}/assets/img/store/bata-logo.jpg"
                                                alt="arong-logo.png" />
                                        </div>
                                        <div class="store-rating">
                                            <a href="store-single.html"
                                                class="btn btn-common-one rounded-circle store-btn"><i
                                                    class="fa-solid fa-store"></i></a>
                                        </div>
                                    </div>
                                    <!-- Store Info -->
                                    <div class="pt-4 d-flex justify-content-between">
                                        <div>
                                            <h5>BATA</h5>
                                            <p>Food & Delivery</p>
                                        </div>
                                        <div>
                                            <button class="btn border-0 p-0 m-0 pe-2">
                                                <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                    title="Store Location" data-bs-toggle="modal"
                                                    data-bs-target="#store-Location" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                        <span class="bg-danger badge fw-normal">
                                            <i class="fa-solid fa-percent pe-2"></i>OFFER
                                        </span>
                                        <small class="text-sm">
                                            Get UpTo <span class="main-color">50%</span> Off
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-0 rounded-2">
                                <!-- Store Banner -->
                                <div class="main-store-banner">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('frontend') }}/assets/img/store/bata-banner.png"
                                        alt="arong-banner.jpg" />
                                </div>
                                <!-- Store Logo And Rating -->
                                <div class="px-3 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="store-logo">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend') }}/assets/img/store/bata-logo.jpg"
                                                alt="arong-logo.png" />
                                        </div>
                                        <div class="store-rating">
                                            <a href="store-single.html"
                                                class="btn btn-common-one rounded-circle store-btn"><i
                                                    class="fa-solid fa-store"></i></a>
                                        </div>
                                    </div>
                                    <!-- Store Info -->
                                    <div class="pt-4 d-flex justify-content-between">
                                        <div>
                                            <h5>BATA</h5>
                                            <p>Food & Delivery</p>
                                        </div>
                                        <div>
                                            <button class="btn border-0 p-0 m-0 pe-2">
                                                <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                    title="Store Location" data-bs-toggle="modal"
                                                    data-bs-target="#store-Location" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                        <span class="bg-danger badge fw-normal">
                                            <i class="fa-solid fa-percent pe-2"></i>OFFER
                                        </span>
                                        <small class="text-sm">
                                            Get UpTo <span class="main-color">50%</span> Off
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                        <a href="" class="btn btn-common-one">View More Store <i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Slider End -->
</x-frontend-app-layout>

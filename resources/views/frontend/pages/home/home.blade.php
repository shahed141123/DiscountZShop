<x-frontend-app-layout :title="'DiscountZShop'">

    <!-- Hero Section -->
    <section>
        <div class="container-fluid px-0" style="overflow: hidden">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row gx-3">
                        <div class="col-lg-7 col-sm-12">
                            <div class="slick-slider" style="height: 100%">
                                <div class="hero-slider">
                                    @foreach ($sliders as $slider)
                                        <div class="items">
                                            <a href="{{ $slider->url }}">
                                                <img class="img-fluid w-100 responsive-img mb-lg-0 mb-2"
                                                    src="{{ !empty($slider->image) ? url('storage/' . $slider->image) : asset('images/no-banner(1920-330).png') }}"
                                                    onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="row gx-3">
                                {{-- @dd($banner); --}}
                                <div class="col-lg-12">
                                    <a href="{{ $banner->image_one_url }}">
                                        <img class="img-fluid w-100 responsive-img mb-lg-0 mb-2"
                                            src="{{ !empty($banner->image_one) ? url('storage/' . $banner->image_one) : asset('images/banner-demo.png') }}"
                                            alt=""
                                            onerror="this.onerror=null;this.src='{{ asset('images/banner-demo.png') }}" />
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-lg-3 mt-2 gx-3">
                                <div class="col-lg-6">
                                    <div>
                                        <a href="{{ $banner->image_two_url }}">
                                            <img class="img-fluid w-100 responsive-img mb-lg-0 mb-2"
                                                src="{{ !empty($banner->image_two) ? url('storage/' . $banner->image_two) : asset('images/banner-demo.png') }}"
                                                alt=""
                                                onerror="this.onerror=null;this.src='{{ asset('images/banner-demo.png') }}" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <a href="{{ $banner->image_three_url }}">
                                            <img class="img-fluid w-100 responsive-img mb-lg-0 mb-2"
                                                src="{{ !empty($banner->image_three) ? url('storage/' . $banner->image_three) : asset('images/banner-demo.png') }}"
                                                alt=""
                                                onerror="this.onerror=null;this.src='{{ asset('images/banner-demo.png') }}" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Available Coupon Start -->
    <section>
        <div class="container pt-70 pb-70 px-0 biggest-deals">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card rounded-0 border-0 shadow-sm">
                        <div class="card-header py-3 px-5" style="border-bottom: 1px solid #eee">
                            <div class="row align-items-center">

                                <div class="col-lg-4 col-12">
                                    <div class="d-flex align-items-center">
                                        <h4 class="coupon-title mb-0 pe-3">
                                            Available Coupon
                                        </h4>

                                        <div class="available-cp">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="23"
                                                viewBox="0 0 36 23" fill="none">
                                                <path
                                                    d="M28.6172 14.5408C28.0353 14.5408 27.5625 15.0064 27.5625 15.5794C27.5625 16.1525 28.0353 16.618 28.6172 16.618C29.1991 16.618 29.6719 16.1525 29.6719 15.5794C29.6719 15.0064 29.1991 14.5408 28.6172 14.5408Z"
                                                    fill="#F15A2D" />
                                                <path
                                                    d="M34.9453 0H10.6344V3.11591C10.6344 3.69 10.1627 4.15455 9.57973 4.15455C8.99677 4.15455 8.52504 3.69 8.52504 3.11591V0H1.05469C0.471727 0 0 0.464547 0 1.03864V7.27045C0 7.84454 0.471727 8.30909 1.05469 8.30909C2.79942 8.30909 4.21875 9.70682 4.21875 11.425C4.21875 13.1432 2.79942 14.5409 1.05469 14.5409C0.471727 14.5409 0 15.0055 0 15.5795V21.8114C0 22.3855 0.471727 22.85 1.05469 22.85H8.4375V19.7341C8.4375 19.16 8.90923 18.6955 9.49219 18.6955C10.0751 18.6955 10.5469 19.16 10.5469 19.7341V22.85H34.9453C35.5283 22.85 36 22.3855 36 21.8114V1.03864C36 0.464547 35.5283 0 34.9453 0ZM10.5469 15.5795C10.5469 16.1536 10.0751 16.6182 9.49219 16.6182C8.90923 16.6182 8.4375 16.1536 8.4375 15.5795V13.5023C8.4375 12.9282 8.90923 12.4636 9.49219 12.4636C10.0751 12.4636 10.5469 12.9282 10.5469 13.5023V15.5795ZM10.5469 9.34773C10.5469 9.92182 10.0751 10.3864 9.49219 10.3864C8.90923 10.3864 8.4375 9.92182 8.4375 9.34773V7.27045C8.4375 6.69637 8.90923 6.23182 9.49219 6.23182C10.0751 6.23182 10.5469 6.69637 10.5469 7.27045V9.34773ZM17.0156 7.27045C17.0156 5.55227 18.435 4.15455 20.1797 4.15455C21.9244 4.15455 23.3438 5.55227 23.3438 7.27045C23.3438 8.98864 21.9244 10.3864 20.1797 10.3864C18.435 10.3864 17.0156 8.98864 17.0156 7.27045ZM19.5947 18.521C19.1096 18.2024 18.9787 17.5584 19.3022 17.0807L27.7397 4.61702C28.0621 4.13931 28.7161 4.01149 29.2023 4.32897C29.6873 4.64748 29.8182 5.29151 29.4948 5.76928L21.0573 18.2329C20.7391 18.7036 20.0875 18.8427 19.5947 18.521ZM28.6172 18.6955C26.8725 18.6955 25.4531 17.2977 25.4531 15.5795C25.4531 13.8614 26.8725 12.4636 28.6172 12.4636C30.3619 12.4636 31.7812 13.8614 31.7812 15.5795C31.7812 17.2977 30.3619 18.6955 28.6172 18.6955Z"
                                                    fill="#F15A2D" />
                                                <path
                                                    d="M20.1797 6.23193C19.5978 6.23193 19.125 6.69752 19.125 7.27057C19.125 7.84362 19.5978 8.30921 20.1797 8.30921C20.7616 8.30921 21.2344 7.84362 21.2344 7.27057C21.2344 6.69752 20.7616 6.23193 20.1797 6.23193Z"
                                                    fill="#F15A2D" />
                                            </svg>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-8 col-sm-8">
                                    <div class="d-flex justify-content-space-between align-items-center mobile-none-sm">

                                        {{-- <form action="" class="d-flex w-75 "
                                            role="search" method="post">
                                            @csrf
                                            <div class="d-flex w-100">
                                                <input class="form-control rounded-pill form-control-sm" name="search"
                                                    type="search" placeholder="Search Coupon..."
                                                    aria-label="Search Coupon..." />
                                            </div>
                                            <button class="btn position-relative border-0 bg-transparent coupon-action"
                                                type="submit">
                                                <i class="fa-solid fa-search" aria-hidden="true"></i>
                                            </button>
                                        </form> --}}

                                        {{-- <form action="" class="d-flex w-75" role="search" method="post"
                                            id="search-form">
                                            @csrf --}}
                                        <div class="d-flex w-100">
                                            <input class="form-control rounded-pill form-control-sm" name="search"
                                                type="search" placeholder="Search Coupon..."
                                                aria-label="Search Coupon..." id="coupon-search" />
                                        </div>
                                        <button class="btn position-relative border-0 bg-transparent coupon-action"
                                            type="submit">
                                            <i class="fa-solid fa-search" aria-hidden="true"></i>
                                        </button>
                                        {{-- </form> --}}

                                        <div
                                            class="d-flex justify-content-end align-items-center w-25 navigation-slide">
                                            <button type="button" class="custom-prev rounded-circle">
                                                <i class="fas fa-arrow-left-long"></i>
                                            </button>
                                            <button type="button" class="custom-next rounded-circle ms-3">
                                                <i class="fas fa-arrow-right-long"></i>
                                            </button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card-body py-5" style="background-color: #f8f8f8">
                            <div class="slick-slider">
                                <div class="available-coupon-slider" id="coupon-list">
                                    @foreach ($coupons as $coupon)
                                        <div class="items couponCode"
                                            data-coupon-code="{{ strtolower($coupon->coupon_code) }}">
                                            <div class="d-flex coupons-box align-items-center">
                                                <div class="logo">
                                                    <div class="coupon-logo">
                                                        <img src="{{ !empty($coupon->logo) ? url('storage/' . $coupon->logo) : 'https://ui-avatars.com/api/?name=Default' }}"
                                                            class="img-fluid" alt=""
                                                            onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                                                    </div>
                                                </div>
                                                <div class="content-area"
                                                    style="background-image: url('{{ asset('frontend') }}/assets/img/coupon/coupon-bg.png');background-repeat: no-repeat;">
                                                    <div class="p-1 ">
                                                        <h5 class="discount-percentage text-center fw-bold pt-2">
                                                            {{ $coupon->badge }}</h5>
                                                        <p class="text-white text-center ps-1 pt-1 pb-1 coupon-text">OFF
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <p class="text-white text-center coupon-text coupon-code pt-2">
                                                            Code:
                                                            ”<span class="couponCode"
                                                                id="coupon-code">{{ $coupon->coupon_code }}</span>”
                                                            <a href="javascript:void(0);" class="copy-btn"
                                                                data-coupon_id="{{ $coupon->coupon_code }}">
                                                                <i class="fas fa-copy ps-2"></i>
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Available Coupon End -->

    <!-- App Discount Start -->
    <section class="app-discount-box">
        <div class="container px-0">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="text-white get-discounts-text">Get 20% on App</h1>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center justify-content-end get-discounts">
                        <div>
                            <img src="{{ asset('frontend') }}/assets/img/panda.png" alt="" />
                        </div>
                        <div class="bg-white px-3 py-2 rounded-2">
                            <h4>ramadan20</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- App Discount End -->

    <!-- Grab Your Offer -->
    <section style="background: #f9f9f9">
        <div class="container pt-70 pb-70 px-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card rounded-0 shadow-sm p-3 grab-card">
                        <div class="card-header border-0 py-3 pb-4 bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <div class="d-flex align-items-center">
                                        <h4 class="coupon-title mb-0 pe-3">
                                            Grab Your Offer
                                        </h4>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="36"
                                                viewBox="0 0 17 36" fill="none">
                                                <path
                                                    d="M0.700195 0V19.7492H5.44065V35.9075L16.5017 14.363H10.1811L16.5017 0H0.700195Z"
                                                    fill="#F15A2D" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">

                                    <div class="d-flex justify-content-space-between align-items-center">

                                        <!-- Grab Tags -->
                                        {{-- <div class="">
                                            @foreach ($offer_types as $offer_type)
                                                <a href="javascript:void(0)"><span
                                                        class="badge mt-2 ct-badge">{{ $offer_type->name }}</span></a>
                                            @endforeach
                                        </div> --}}
                                        <!-- Grab End -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pe-0">

                            <div class="row">

                                <div class="col-lg-3 grab-offer-tabs-box">
                                    <ul class="nav nav-tabs flex-column border-0" id="myTab" role="tablist">
                                        <li class="nav-item mb-2" role="presentation">
                                            <button class="nav-link grab-tabs w-100 rounded-0 active" id="home-tab"
                                                data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
                                                role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                                All Offers
                                            </button>
                                        </li>
                                        @if ($categories->count() > 0)
                                            @foreach ($categories as $index => $offercategory)
                                                <li class="nav-item mb-2 {{ $index >= 7 ? 'd-none more-tabs' : '' }}"
                                                    role="presentation">
                                                    <button class="nav-link grab-tabs w-100 rounded-0"
                                                        id="home-{{ $offercategory->id }}-tab" data-bs-toggle="tab"
                                                        data-bs-target="#home-{{ $offercategory->id }}-pane"
                                                        type="button" role="tab"
                                                        aria-controls="home-{{ $offercategory->id }}-pane"
                                                        aria-selected="true">
                                                        {{ $offercategory->name }}
                                                    </button>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                    <div class="d-flex justify-content-center">
                                        <button id="show-more-btn" class="arrow-btn">
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </button>
                                        <button id="show-less-btn" class="arrow-btn d-none">
                                            <i class="fa-solid fa-chevron-up"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-lg-9 grab-offer-tabs-box">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                            aria-labelledby="home-tab" tabindex="0">

                                            <div class="row">
                                                @foreach ($alloffers as $alloffer)
                                                    <!-- Removed the limit -->
                                                    <div class="col-lg-4 mb-4">
                                                        <div class="coupon-box">
                                                            <div class="coupon-box-content">
                                                                <div class="row align-items-center">
                                                                    <div class="col-4">
                                                                        <a
                                                                            href="{{ route('offer.details', $alloffer->slug) }}">
                                                                            <img class="img-fluid"
                                                                                src="{{ !empty($alloffer->logo) ? url('storage/' . $alloffer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($alloffer->name) }}"
                                                                                alt="Logo"
                                                                                onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                                                                        </a>
                                                                    </div>

                                                                    <div class="col-8 text-center">
                                                                        <a
                                                                            href="{{ route('offer.details', $alloffer->slug) }}">
                                                                            <div
                                                                                class="d-flex justify-content-center align-items-center">

                                                                                @if (!empty($alloffer->badge))
                                                                                    <h2>
                                                                                        {{ $alloffer->badge }}
                                                                                        {{-- {{ substr($alloffer->badge, 0, -4) }} --}}
                                                                                    </h2>
                                                                                @endif

                                                                            </div>


                                                                            @if (!empty($alloffer->coupon_code))
                                                                                <p class="para-font coupon-extra">
                                                                                    Code: {{ $alloffer->coupon_code }}
                                                                                    <a href="javascript:void(0);"
                                                                                        class="copy-btn"><i
                                                                                            class="fa-regular fa-copy"></i></a>
                                                                                </p>
                                                                            @endif
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>

                                        @foreach ($categories as $offercategory)
                                            <div class="tab-pane fade" id="home-{{ $offercategory->id }}-pane"
                                                role="tabpanel" aria-labelledby="home-{{ $offercategory->id }}-tab"
                                                tabindex="0">
                                                <div class="">
                                                    <div class="row">
                                                        {{-- <div class="grab-slider">
                                                    <div class="row grab-items"> --}}
                                                        @if ($offercategory->offers->count() > 0)
                                                            @foreach ($offercategory->offers as $category_offer)
                                                                <div class="col-lg-4 mb-4">
                                                                    <div class="coupon-box">
                                                                        <div class="coupon-box-content">
                                                                            <div class="row align-items-center">
                                                                                <div class="col-4">
                                                                                    <img class="img-fluid"
                                                                                        src="{{ !empty($category_offer->logo) ? url('storage/' . $category_offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($category_offer->name) }}"
                                                                                        alt="Logo"
                                                                                        onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                                                                                </div>
                                                                                <div class="col-8 text-center">
                                                                                    <div
                                                                                        class="d-flex justify-content-center align-items-center">
                                                                                        {{-- <p class="">
                                                                                            <span
                                                                                                class="para-font">Get</span><br>
                                                                                            <span
                                                                                                class="ps-2 para-font">Upto</span>
                                                                                        </p> --}}
                                                                                        @if (!empty($category_offer->badge))
                                                                                            <h1>{{ substr($category_offer->badge, 0, -4) }}
                                                                                            </h1>
                                                                                        @endif
                                                                                        {{-- <p class="coupon-off">OFF</p> --}}
                                                                                    </div>

                                                                                    @if (!empty($category_offer->coupon_code))
                                                                                        <p
                                                                                            class="para-font coupon-extra">
                                                                                            Code:
                                                                                            {{ $category_offer->coupon_code }}
                                                                                            <a href="javascript:void(0);"
                                                                                                class="copy-btn"><i
                                                                                                    class="fa-regular fa-copy"></i></a>
                                                                                        </p>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <img class="img-fluid"
                                                                src="{{ asset('images/NoOffers.png') }}"
                                                                alt="">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Grab Your Offer End -->
    <!-- Promotion Product -->
    @if (optional($homepage)->brand)
        <section>
            <div class="container px-0 pb-70 biggest-deals">
                <div class="row gx-4 promotion-container align-items-center">
                    <div class="col-lg-12 py-5">
                        <h1 class="promotion-title">Biggest Deals From {{ optional($homepage->brand)->name }}</h1>
                    </div>
                    <div class="col-lg-4">
                        <div class="row align-items-center bg-light py-4 product-showcase brand-home-img">
                            @foreach ($brand_offers_left as $brand_offer_left)
                                <div class="col-lg-6">
                                    <div>
                                        <a href="{{ route('offer.details', $brand_offer_left->slug) }}">
                                            <img src="{{ !empty($brand_offer_left->image) ? url('storage/' . $brand_offer_left->image) : asset('images/brandPage-prod-no-img(376-282).png') }}"
                                                class="img-fluid w-100" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="pt-4 pe-2">

                                        <h5>{{ $brand_offer_left->name }}</h5>
                                        <p class="py-4 mb-0 main-color fs-6 fw-bold">{!! Str::words($brand_offer_left->short_description, 8) !!}</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <h6>{{ $brand_offer_left->badge }}</h6>
                                                {{-- @if (!empty($brand_offer_left->price))
                                                    <del class="pt-2">BDT {{ $brand_offer_left->price }}</del>
                                                @endif
                                                @if (!empty($brand_offer_left->offer_price))
                                                    <h6 class="main-color">BDT {{ $brand_offer_left->offer_price }}</h6>
                                                @endif --}}
                                            </div>
                                            <div class="pe-4">
                                                <a href="{{ route('offer.details', $brand_offer_left->slug) }}" class="btn-{{ $loop->iteration }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                        height="30" viewBox="0 0 30 30" fill="none">
                                                        <circle cx="15" cy="15" r="15" fill="#F15A2D">
                                                        </circle>
                                                        <path
                                                            d="M16.4218 9.10538L15.2796 10.2475L19.043 14.0109L5.80547 14.0109V15.6214H19.043L15.2796 19.3848L16.4218 20.5269L22.1326 14.8161L16.4218 9.10538Z"
                                                            fill="white"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Repeat the product showcase for other products -->
                    </div>
                    <div class="col-lg-4 px-0">
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid w-100 middle-banner"
                                src="{{ asset('storage/' . optional($homepage)->deal_brand_image) }}" alt=""
                                onerror="this.onerror=null;this.src='{{ asset('images/no-image(random).png') }}';" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row align-items-center bg-light py-4 product-showcase brand-home-img">
                            @foreach ($brand_offers_right as $brand_offer_right)
                                <div class="col-lg-6">
                                    <div>
                                        <a href="{{ route('offer.details', $brand_offer_right->slug) }}">
                                            <img src="{{ !empty($brand_offer_right->image) ? url('storage/' . $brand_offer_right->image) : asset('images/brandPage-prod-no-img(376-282).png') }}"
                                                class="img-fluid w-100" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="pt-4 pe-2">
                                        {{-- <h5>{{ $brand_offer_right->badge }}</h5> --}}
                                        <h5>{{ $brand_offer_right->name }}</h5>
                                        <p class="py-4 mb-0 main-color fs-6 fw-bold">{!! Str::words($brand_offer_right->short_description, 8) !!}</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <h6>{{ $brand_offer_right->badge }}</h6>
                                                {{-- @if (!empty($brand_offer_right->price))
                                                    <del class="pt-2">BDT {{ $brand_offer_right->price }}</del>
                                                @endif
                                                @if (!empty($brand_offer_right->offer_price))
                                                    <h6 class="main-color">BDT {{ $brand_offer_right->offer_price }}</h6>
                                                @endif --}}
                                            </div>
                                            <div class="pe-4">
                                                <a href="{{ route('offer.details', $brand_offer_right->slug) }}" class="btn-{{ $loop->iteration }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                        height="30" viewBox="0 0 30 30" fill="none">
                                                        <circle cx="15" cy="15" r="15" fill="#F15A2D">
                                                        </circle>
                                                        <path
                                                            d="M16.4218 9.10538L15.2796 10.2475L19.043 14.0109L5.80547 14.0109V15.6214H19.043L15.2796 19.3848L16.4218 20.5269L22.1326 14.8161L16.4218 9.10538Z"
                                                            fill="white">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Repeat the product showcase for other products -->
                    </div>
                </div>
            </div>
        </section>
    @else
        <!-- Fallback section for no data -->
        <section>
            <div class="container text-center py-5 deal-hbox">
                <img src="{{ asset('images/NoOffers.png') }}" alt="No Data Available" class="img-fluid w-100">
            </div>
        </section>
    @endif
    <!-- Promotion Product End -->
    <!-- Grab By Location -->
    <section style="background-color: #f5f6f8">
        <div class="container pt-70 pb-70 px-0">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="card rounded-0 shadow-sm p-3"
                        style="background-color: #f5f6f8; border: 1px solid #EBEBEB;">
                        <div class="card-header border-0 py-3 bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="d-flex align-items-center">
                                        <h4 class="coupon-title mb-0 pe-3">
                                            Grab By Location
                                        </h4>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="31"
                                                viewBox="0 0 22 31" fill="none">
                                                <path
                                                    d="M10.263 30.2372C9.84392 29.7675 0 18.6461 0 11.0705C5.93225e-05 4.96621 4.93463 0 11.0001 0C17.0655 0 22 4.96621 22 11.0705C22 18.6461 12.1561 29.7675 11.737 30.2372C11.3432 30.6786 10.6559 30.6777 10.263 30.2372Z"
                                                    fill="#F15A2D" />
                                                <path
                                                    d="M21.9999 11.0705C21.9999 4.96621 17.0653 0 11 0V30.5679C11.27 30.5679 11.5402 30.4579 11.737 30.2372C12.156 29.7675 21.9999 18.6461 21.9999 11.0705Z"
                                                    fill="#F15A2D" />
                                                <path
                                                    d="M10.9986 16.6402C7.94694 16.6402 5.46436 14.1416 5.46436 11.0704C5.46436 7.99912 7.94706 5.50049 10.9986 5.50049C14.0502 5.50049 16.5329 7.99912 16.5329 11.0704C16.5329 14.1416 14.0502 16.6402 10.9986 16.6402Z"
                                                    fill="#F9F9F9" />
                                                <path
                                                    d="M11 5.50049V16.6402C14.0517 16.6402 16.5343 14.1415 16.5343 11.0703C16.5343 7.99906 14.0515 5.50049 11 5.50049Z"
                                                    fill="#C5D8DF" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="d-flex justify-content-space-between align-items-center">
                                        <form class="d-flex w-100" role="search">
                                            <div class="d-flex w-100">
                                                <input class="form-control rounded-pill form-control-sm"
                                                    type="search" placeholder="Search" aria-label="Search" />
                                            </div>
                                            <button class="btn position-relative border-0 bg-transparent coupon-action"
                                                type="submit">
                                                <i class="fa-solid fa-search" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-2 py-0">
                            <div class="row">
                                <div class="col-lg-3" id="mapsidebar">
                                    <div id="mapdetails">
                                        <!-- <p id="seriesName"></p> -->
                                        <div class="selected-point">
                                            <small class="text-white">All Of <span id="pointName"></span></small>

                                        </div>
                                        <!-- Selected Area All Zone Name  -->
                                        <div>
                                            <ul class="zone-name ps-0" style="list-style-type: none">
                                                <li class="area-names">No Area Available</li>
                                            </ul>
                                        </div>
                                        <!-- <p id="pointValue"></p> -->
                                    </div>
                                </div>
                                <div class="col-lg-9 position-relative"
                                    style="background-image: url({{ asset('frontend') }}/assets/img/product/map.png);background-size: contain;background-position: center;display: flex;align-items: center;">
                                    <!-- <div class="mapoverlay"></div> -->
                                    <div id="mapcontainer" class="text-white"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Grab By Location End -->

    <!-- Product Slider -->
    <section>
        <div class="container pb-70 pt-70 px-0 latest-offers">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Slick Slider -->
                    <div class="slick-slider-product">
                        @forelse ($offerLatests as $offerLatest)
                            <div class="items me-2" style="background-color: #f5f6f8">
                                <div class="row p-4 align-items-center product-discount-box">
                                    <div class="col-lg-7 col-sm-12">
                                        <div class="product_discount_box">
                                            <h4>{{ $offerLatest->name }}</h4>
                                            <p class="py-3">
                                                {{ \Illuminate\Support\Str::words($offerLatest->short_description, 7, '...') }}
                                            </p>
                                            <a class="btn btn-dark rounded-pill px-5"
                                                href="{{ route('offer.details', $offerLatest->slug) }}">See
                                                Details</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div>
                                            <h5 class="main-color text-center pb-3 pt-4 pt-lg-0 fw-bold">
                                                {{ $offerLatest->badge }}
                                            </h5>
                                            <div class="d-flex justify-content-center text-center">
                                                <img class="img-fluid flat-offer-img rounded-circle"
                                                    src="{{ !empty($offerLatest->image) ? url('storage/' . $offerLatest->image) : 'https://ui-avatars.com/api/?name=' . urlencode($offerLatest->name) }}"
                                                    alt=""
                                                    onerror="this.onerror=null; this.src='{{ asset('images/brandPage-prod-no-img(376-282).png') }}';" />

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>No Offer Avaiable</p>
                        @endforelse

                    </div>
                    <!-- End Slick Slider -->
                </div>
            </div>
        </div>
    </section>
    <!-- Product Slider End -->

    <!-- Deal Of The Day -->
    <section>
        <div class="container px-0 pb-70">
            <div class="row gx-0">
                <div class="col-lg-3">
                    <div class="card deal-of-the-day rounded-0">
                        <!-- Card Header -->
                        <div class="card-header border-0 text-white rounded-0 deal-of-the-day-header"
                            style="background-color: var(--primary-color)">
                            <div class="w-100">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="mb-0">Deals Of The Day</h4>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center">
                                        <button type="button" class="deal-custom-prev rounded-circle">
                                            <i class="fas fa-arrow-left-long"></i>
                                        </button>
                                        <button type="button" class="deal-custom-next rounded-circle ms-3">
                                            <i class="fas fa-arrow-right-long"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Header End -->
                        <div class="card-body">
                            <!-- Slider Items -->
                            <div class="deal-slider">

                                @forelse ($offerDealLefts as $offerDealLeft)
                                    <div class="items">
                                        <div class="py-2 d-flex justify-content-center">
                                            <img class="img-fluid rounded-2"
                                                src="{{ !empty($offerDealLeft->image) ? url('storage/' . $offerDealLeft->image) : asset('images/brandPage-prod-no-img(376-282).png') }}"
                                                alt=""
                                                onerror="this.onerror=null; this.src='{{ asset('images/brandPage-prod-no-img(376-282).png') }}';" />
                                        </div>
                                        <div class="py-3">

                                            <h5 class="text-center">
                                                <span class="fw-bold main-color">{{ $offerDealLeft->badge }}
                                                </span>
                                                <br>
                                                {{ $offerDealLeft->name }}
                                            </h5>

                                        </div>

                                        <div class="py-2 d-flex justify-content-center align-items-center">
                                            <a href="{{ route('offer.details', $offerDealLeft->slug) }}"
                                                class="btn btn-common-one rounded-pill px-4">See
                                                Details</a>
                                        </div>

                                        <div class="text-center pb-5 pt-4">
                                            <div>
                                                <h5>
                                                    <span class="main-color">Hurry Up!</span> Offers
                                                    end in:
                                                </h5>
                                            </div>
                                            <div class="countdown-with-days mt-4">
                                                <p class="pt-2 text-center countdown"
                                                    data-expire-date="{{ $offerDealLeft->expiry_date }}">
                                                    <span class="main-color">Expire In:</span>
                                                    <span class="countdown-timer"> Days</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p>No Offer Avaiable</p>
                                @endforelse

                            </div>
                            <!-- Slider Items -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 bg-light product-scroll-show">
                    <!-- Search Box -->
                    <div class="d-flex justify-content-center align-items-center p-3 pb-0">
                        {{-- <form method="get" action="{{ route('courses.search') }}" class="d-flex w-100" role="search"> --}}
                        <div class="input-group mb-3">
                            <input type="text" id="serviceSearch" class="form-control rounded-pill p-2"
                                placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon2" />
                            <div class="input-group-append search-btn">
                                <button class="btn border-0" type="button">
                                    <i class="fa-solid fa-search"></i>
                                </button>
                            </div>
                        </div>
                        {{-- </form> --}}
                    </div>

                    <!-- Search Box -->
                    <div class="row p-3 gx-3 pt-0" id="servicesContainer">
                        @forelse ($offerDeals as $offerDeal)
                            <div class="col-lg-4 mb-3">
                                <div class="card deal-card border-0">
                                    <div class="card-body border-0 p-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- Counter -->
                                            <div>
                                                <div class="countdown-hms">
                                                    <p class="text-center countdown"
                                                        data-expire-date="{{ $offerDeal->expiry_date }}">
                                                        <span class="main-color">Expire In:</span>
                                                        <span class="countdown-timer"> Days</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- Wishlist -->
                                            <div>
                                                <a type="submit" class="add_to_wishlist" style="cursor: pointer;"
                                                    data-product_id="{{ $offerDeal->id }}" data-tip="Wishlist">
                                                    <i class="fa-regular fa-heart fs-5"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <!-- Product Image -->
                                        <div class="d-flex justify-content-center align-items-center py-3">
                                            <img class="img-fluid deal-img"
                                                src="{{ !empty($offerDeal->image) ? url('storage/' . $offerDeal->image) : 'https://ui-avatars.com/api/?name=' . urlencode($offerDeal->name) }}"
                                                alt=""
                                                onerror="this.onerror=null; this.src='{{ asset('images/brandPage-prod-no-img(376-282).png') }}';" />
                                        </div>
                                        <div>
                                            <div>
                                                <a href="{{ route('offer.details', $offerDeal->slug) }}">
                                                    <h6 class="mb-3 product-title">
                                                        {{ $offerDeal->name }}
                                                    </h6>
                                                </a>
                                                @if (!empty($offerDeal->price))
                                                    <del class="pt-2">BDT {{ $offerDeal->price }}</del>
                                                @endif
                                                @if (!empty($offerDeal->offer_price))
                                                    <h6 class="main-color">BDT {{ $offerDeal->offer_price }}</h6>
                                                @endif
                                            </div>
                                            <div class="mt-4">
                                                <a href="{{ route('offer.details', $offerDeal->slug) }}"
                                                    class="btn btn-common-one rounded-pill px-4">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="text-center py-3">
                                <img class="img-fluid" width="210px"
                                    src="https://i.ibb.co/Vg8gqx5/hand-drawn-no-data-illustration-23-2150696455.jpg"
                                    alt="No Content">
                            </div>
                            <h5 class="text-center text-warning">No Offer available right now.</h5>
                        @endforelse

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Deal Of The Day End -->

    <!-- Normal Slider Product Show -->
    <section>
        <div class="container py-lg-5 py-0 px-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slick-slider-normal">

                        <div class="items">
                            <a href="{{ $homepage->offer_slider_image_one_link }}">
                                <div>
                                    <img src="{{ !empty($homepage->offer_slider_image_one) ? url('storage/' . $homepage->offer_slider_image_one) : asset('images/banner-demo.png') }}"
                                        class="img-fluid custom-img w-100 rounded-lg-2 rounded-2 pe-2"
                                        alt="" />
                                </div>
                            </a>
                        </div>

                        <div class="items">
                            <a href="{{ $homepage->offer_slider_image_two_link }}">
                                <div>
                                    <img src="{{ !empty($homepage->offer_slider_image_two) ? url('storage/' . $homepage->offer_slider_image_two) : asset('images/banner-demo.png') }}"
                                        class="img-fluid custom-img w-100 rounded-lg-2 rounded-2 pe-2"
                                        alt="" />
                                </div>
                            </a>
                        </div>

                        <div class="items">
                            <a href="{{ $homepage->offer_slider_image_three_link }}">
                                <div>
                                    <img src="{{ !empty($homepage->offer_slider_image_three) ? url('storage/' . $homepage->offer_slider_image_three) : asset('images/banner-demo.png') }}"
                                        class="img-fluid custom-img w-100 rounded-lg-2 rounded-2 pe-2"
                                        alt="" />
                                </div>
                            </a>
                        </div>

                        <div class="items">
                            <a href="{{ $homepage->offer_slider_image_four_link }}">
                                <div>
                                    <img src="{{ !empty($homepage->offer_slider_image_four) ? url('storage/' . $homepage->offer_slider_image_four) : asset('images/banner-demo.png') }}"
                                        class="img-fluid custom-img w-100 rounded-lg-2 rounded-2 pe-2"
                                        alt="" />
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Slider Product Show ENd -->

    @if ($brands->count() > 0)
        <section>
            <div class="container py-5 pb-4 px-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1>Big Brands Are Here</h1>
                            {{-- <p class="w-lg-50 w-100 pt-3">
                                Problems trying to resolve the conflict between <br />
                                the two major realms of Classical physics: Newtonian
                                mechanics
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid partners">
                <div class="container px-0">
                    <div class="slick-slider-partners">
                        @foreach ($brands as $brand)
                            <div class="items d-flex justify-content-center align-items-center partners-logos">
                                <a href="{{ route('brand.details', $brand->slug) }}">
                                    <img class="img-fluid partners-logos-single"
                                        src="{{ !empty($brand->logo) ? url('storage/' . $brand->logo) : 'https://ui-avatars.com/api/?name=Default' }}"
                                        alt=""
                                        onerror="this.onerror=null;this.src='https://png.pngtree.com/png-vector/20190917/ourmid/pngtree-not-found-circle-icon-vectors-png-image_1737851.jpg';" />
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- Footer Slider -->

    @if (
        !empty($homepage->bottom_banner_slider_one) ||
            !empty($homepage->bottom_banner_slider_two) ||
            !empty($homepage->bottom_banner_slider_three) ||
            !empty($homepage->bottom_banner_slider_four))
        <section>
            <div class="container px-0 pt-70 pb-70 latest-offers">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slick-slider-footer-slider">
                            @php
                                $bottom_banners = [
                                    [
                                        'link' => $homepage->bottom_banner_slider_one_link,
                                        'image' => $homepage->bottom_banner_slider_one,
                                    ],
                                    [
                                        'link' => $homepage->bottom_banner_slider_two_link,
                                        'image' => $homepage->bottom_banner_slider_two,
                                    ],
                                    [
                                        'link' => $homepage->bottom_banner_slider_three_link,
                                        'image' => $homepage->bottom_banner_slider_three,
                                    ],
                                    [
                                        'link' => $homepage->bottom_banner_slider_four_link,
                                        'image' => $homepage->bottom_banner_slider_four,
                                    ],
                                ];
                                $defaultImage = asset('images/banner-demo.png');
                            @endphp

                            @foreach ($bottom_banners as $bottom_banner)
                                <a href="{{ $bottom_banner['link'] }}">
                                    <div class="items d-flex justify-content-center align-items-center">
                                        <img class="img-fluid w-100 rounded-lg-3 rounded-2"
                                            src="{{ !empty($bottom_banner['image']) ? url('storage/' . $bottom_banner['image']) : $defaultImage }}"
                                            alt="Banner image"
                                            onerror="this.onerror=null;this.src='https://img.freepik.com/free-vector/no-data-concept-illustration_114360-2506.jpg';" />
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#serviceSearch').on('keyup', function() {
                    var query = $(this).val();
                    $.ajax({
                        url: "{{ route('deal.search') }}",
                        method: 'GET',
                        data: {
                            query: query
                        },
                        success: function(data) {
                            $('#servicesContainer').html(data);
                        }
                    });
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const showMoreBtn = document.getElementById('show-more-btn');
                const showLessBtn = document.getElementById('show-less-btn');
                const moreTabs = document.querySelectorAll('.more-tabs');

                showMoreBtn.addEventListener('click', function() {
                    moreTabs.forEach(tab => {
                        tab.classList.remove('d-none');
                    });
                    showMoreBtn.classList.add('d-none');
                    showLessBtn.classList.remove('d-none');
                });

                showLessBtn.addEventListener('click', function() {
                    moreTabs.forEach(tab => {
                        tab.classList.add('d-none');
                    });
                    showLessBtn.classList.add('d-none');
                    showMoreBtn.classList.remove('d-none');
                });
            });
        </script>

        <script>
            // JavaScript for live search functionality
            document.addEventListener("DOMContentLoaded", function() {
                const searchInput = document.getElementById('coupon-search');
                const couponList = document.getElementById('coupon-list');

                // Add input event listener for the search field
                searchInput.addEventListener('input', function() {
                    const searchQuery = searchInput.value.toLowerCase()
                        .trim(); // Convert search input to lowercase and trim whitespace

                    // Get all coupon items
                    const coupons = couponList.querySelectorAll('.items');

                    // Loop through each coupon and check if it matches the search query
                    coupons.forEach(function(coupon) {
                        const couponCode = coupon.getAttribute('data-coupon-code')
                            .trim(); // Get coupon code and trim whitespace

                        console.log('Coupon Code:', couponCode); // Debugging
                        console.log('Search Query:', searchQuery); // Debugging

                        // Check if the coupon code includes the search query
                        if (couponCode.includes(searchQuery)) {
                            coupon.style.display = ''; // Show coupon
                        } else {
                            coupon.style.display = 'none'; // Hide coupon
                        }
                    });
                });
            });
        </script>

        <script>
            // Define your data for the map
            var data = [
                ["bd-da", 0],
                ["bd-sy", 1],
                ["bd-bk", 2],
                ["bd-kh", 3],
                ["bd-ba", 4],
                ["bd-cg", 5],
                ["bd-rp", 6],
                ["bd-rj", 7],
                ["bd-js", 8],
                ["bd-lg", 9],
                ["bd-br", 10],
                ["bd-co", 11],
                ["bd-hb", 12],
                ["bd-sh", 13],
                ["bd-dh", 14],
                ["bd-nj", 15],
                ["bd-pl", 16],
                ["bd-na", 17],
                ["bd-gb", 18],
                ["bd-md", 19],
                ["bd-mw", 20],
                ["bd-ct", 21],
                ["bd-kn", 22],
                ["bd-sw", 23],
                ["bd-rg", 24],
                ["bd-nk", 25],
                ["bd-lk", 26],
                ["bd-pb", 27],
                ["bd-fr", 28],
                ["bd-gz", 29],
                ["bd-sd", 30],
                ["bd-ss", 31],
                ["bd-ku", 32],
                ["bd-ra", 33],
                ["bd-mr", 34],
            ];

            // Create the chart
            var chart = Highcharts.mapChart("mapcontainer", {
                chart: {
                    type: "map",
                    map: "countries/bd/bd-all",
                    backgroundColor: "rgba(0, 0, 0, 0)", // Transparent background color
                },

                title: {
                    text: "",
                    style: {
                        color: "#fff",
                    },
                },

                subtitle: {
                    text: "",
                    style: {
                        color: "#fff",
                    },
                },

                legend: {
                    enabled: false,
                },

                tooltip: {
                    enabled: false,
                },

                navigation: {
                    buttonOptions: {
                        enabled: false,
                    },
                },

                credits: {
                    enabled: false,
                },

                plotOptions: {
                    series: {
                        point: {
                            events: {
                                click: function() {
                                    updateDetails(this.series.name, this.name, this.value);
                                },
                            },
                        },
                    },
                },

                series: [{
                    data: data,
                    name: "Random data",
                    allowPointSelect: true,
                    cursor: "pointer",
                    color: "#fff",
                    states: {
                        select: {
                            color: "#f15a2d",
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        format: "{point.name}",
                    },
                }, ],
            });

            // Function to update details
            function updateDetails(seriesName, pointName, pointValue) {
                var pointNameElem = document.getElementById("pointName");
                if (pointNameElem) {
                    pointNameElem.textContent = pointName;
                }

                if (pointName) {
                    $.ajax({
                        url: "{{ route('map.division') }}",
                        method: 'GET',
                        data: {
                            division: pointName
                        },
                        success: function(data) {
                            $('.zone-name').html(data.html);
                        },
                        error: function() {
                            $('.zone-name').html(
                                '<p>An error occurred while fetching offers.</p>');
                        }
                    });
                } else {
                    $('.zone-name').html('<p>Please select a division to see offers.</p>');
                }
            }

            function cityAreas(pointName) {

                if (pointName) {
                    $.ajax({
                        url: "{{ route('map.city') }}",
                        method: 'GET',
                        data: {
                            city: pointName
                        },
                        success: function(data) {
                            $('.zone-name').html(data.html);
                        },
                        error: function() {
                            $('.zone-name').html(
                                '<p>An error occurred while fetching offers.</p>');
                        }
                    });
                } else {
                    $('.zone-name').html('<p>Please select a division to see offers.</p>');
                }
            }
        </script>
    @endpush
    <!-- Footer Slider End -->
</x-frontend-app-layout>

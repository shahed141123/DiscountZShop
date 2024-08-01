<div class="container-fluid py-3">
    <div class="container px-0">
        <div class="row">
            <div class="col-lg-6">
                <span class="logo-text">discount<span class="main-color extrafont"
                        style="font-size: 30px">Z</span>shop</span>
            </div>
            <div class="col-lg-6">
                <div class="d-flex justify-content-end align-items-center">
                    @auth
                    <div class="pe-3 user-name">{{ Auth::user()->name }}</div>
                    <div class="btn-group">
                        <a href="javascript:void(0)" class="border-0 bg-transparent dropdown-toggle custom-toggle"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="pe-3">
                                <img class="profile-logo-account" src="{{ asset('frontend') }}/assets/img/profile/profile-one.png"
                                    alt="" />
                            </div>
                        </a>
                        <ul class="dropdown-menu toggler-menu py-3">
                            <li class="dropdown-item pb-2">
                                <a href=""><i class="fa-solid fa-house-user main-color pe-2"></i>
                                    Dashboard</a>
                            </li>
                            <li class="dropdown-item pb-2">
                                <a href=""><i class="fa-solid fa-wallet main-color pe-2"></i>
                                    Points</a>
                            </li>
                            <li class="dropdown-item pb-2">
                                <a href=""><i class="fa-solid fa-percent main-color pe-3"></i>My
                                    Discounts</a>
                            </li>
                            <div class="d-flex justify-content-center align-items-center pt-3">
                                <button class="btn btn-common-one rounded-pill px-4 pt-2">
                                    <i class="fa-solid fa-right-from-bracket"></i> Log Out
                                </button>
                            </div>
                        </ul>
                    </div>
                        @else
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="border-0 bg-transparent dropdown-toggle custom-toggle"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="pe-3">
                                    <img class="profile-logo-account" src="{{ asset('admin/assets/media/svg/avatars/blank-dark.svg') }}"
                                        alt="" />
                                </div>
                            </a>
                            <ul class="dropdown-menu toggler-menu py-3">
                                <li class="dropdown-item pb-2">
                                    <a href="{{ route('login') }}"><i class="fa-solid fa-house-user main-color pe-2"></i>
                                        Sign In</a>
                                </li>
                                <li class="dropdown-item pb-2">
                                    <a href="{{ route('register') }}"><i class="fa-solid fa-wallet main-color pe-2"></i>
                                        Register</a>
                                </li>
                            </ul>
                        </div>
                    @endauth
                    {{-- <div>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="29" viewBox="0 0 30 29"
                                fill="none">
                                <path
                                    d="M28.6364 12.5311V9.19017C28.6369 8.82112 28.5646 8.4556 28.4236 8.11454C28.2827 7.77348 28.0758 7.46359 27.8148 7.20264C27.5538 6.94168 27.244 6.73479 26.9029 6.59381C26.5618 6.45283 26.1963 6.38054 25.8273 6.38108H24L9.06818 0.162897C8.81429 0.0556622 8.54152 0.000277985 8.26592 1.04377e-06C7.99031 -0.000275898 7.71743 0.0545601 7.46333 0.161284C7.20922 0.268008 6.97902 0.424465 6.78627 0.621455C6.59351 0.818444 6.44209 1.05199 6.34091 1.30835L4.30909 6.38108H2.80909C2.44005 6.38054 2.07452 6.45283 1.73346 6.59381C1.39241 6.73479 1.08252 6.94168 0.821566 7.20264C0.56061 7.46359 0.353715 7.77348 0.212735 8.11454C0.0717561 8.4556 -0.000535636 8.82112 2.98779e-06 9.19017V25.3902C-0.000535636 25.7592 0.0717561 26.1247 0.212735 26.4658C0.353715 26.8069 0.56061 27.1167 0.821566 27.3777C1.08252 27.6386 1.39241 27.8455 1.73346 27.9865C2.07452 28.1275 2.44005 28.1998 2.80909 28.1993H25.8273C26.1963 28.1998 26.5618 28.1275 26.9029 27.9865C27.244 27.8455 27.5538 27.6386 27.8148 27.3777C28.0758 27.1167 28.2827 26.8069 28.4236 26.4658C28.5646 26.1247 28.6369 25.7592 28.6364 25.3902V22.0493C29.0011 22.0366 29.3467 21.8833 29.6009 21.6215C29.8551 21.3596 29.9981 21.0096 30 20.6447V13.9356C29.9981 13.5707 29.8551 13.2207 29.6009 12.9589C29.3467 12.6971 29.0011 12.5438 28.6364 12.5311ZM7.60909 1.8129C7.64181 1.72409 7.69265 1.64307 7.75838 1.57499C7.82412 1.5069 7.90331 1.45325 7.99091 1.41744C8.16636 1.34938 8.36092 1.34938 8.53637 1.41744L20.4545 6.38108H17.1545L9.08182 3.69471C8.91528 3.63674 8.73275 3.64554 8.57257 3.71928C8.41238 3.79302 8.28699 3.92595 8.22273 4.09017L7.33637 6.38108H5.78182L7.60909 1.8129ZM12.8455 6.38108H8.80909L9.25909 5.19471L12.8455 6.38108ZM27.2727 25.3902C27.2724 25.7734 27.12 26.1409 26.849 26.4119C26.578 26.6829 26.2105 26.8353 25.8273 26.8356H2.80909C2.42585 26.8353 2.0584 26.6829 1.7874 26.4119C1.5164 26.1409 1.364 25.7734 1.36364 25.3902V9.19017C1.36614 8.80758 1.51923 8.44138 1.78977 8.17084C2.0603 7.90031 2.42651 7.74722 2.80909 7.74471H25.8273C26.2099 7.74722 26.5761 7.90031 26.8466 8.17084C27.1171 8.44138 27.2702 8.80758 27.2727 9.19017V12.5174H21.1364C19.8706 12.5174 18.6566 13.0203 17.7615 13.9153C16.8665 14.8104 16.3636 16.0244 16.3636 17.2902C16.3636 18.556 16.8665 19.7699 17.7615 20.665C18.6566 21.5601 19.8706 22.0629 21.1364 22.0629H27.2727V25.3902ZM28.6364 20.6447C28.6354 20.6589 28.6294 20.6722 28.6193 20.6822C28.6093 20.6922 28.596 20.6983 28.5818 20.6993H21.1364C20.2322 20.6993 19.3651 20.3401 18.7258 19.7008C18.0864 19.0614 17.7273 18.1943 17.7273 17.2902C17.7273 16.386 18.0864 15.5189 18.7258 14.8796C19.3651 14.2402 20.2322 13.8811 21.1364 13.8811L28.6364 13.9356V20.6447Z"
                                    fill="#252525" />
                                <path
                                    d="M21.1363 15.2446C20.7317 15.2446 20.3363 15.3646 19.9999 15.5894C19.6635 15.8141 19.4013 16.1336 19.2465 16.5073C19.0917 16.8811 19.0512 17.2924 19.1301 17.6892C19.209 18.0859 19.4039 18.4504 19.6899 18.7365C19.976 19.0225 20.3404 19.2173 20.7372 19.2963C21.134 19.3752 21.5453 19.3347 21.919 19.1799C22.2928 19.025 22.6122 18.7629 22.837 18.4265C23.0618 18.0901 23.1817 17.6947 23.1817 17.2901C23.1817 16.7476 22.9662 16.2273 22.5826 15.8437C22.199 15.4602 21.6788 15.2446 21.1363 15.2446ZM21.1363 17.9719C21.0014 17.9719 20.8696 17.9319 20.7575 17.857C20.6454 17.7821 20.558 17.6756 20.5064 17.551C20.4548 17.4264 20.4412 17.2893 20.4676 17.1571C20.4939 17.0248 20.5588 16.9033 20.6542 16.808C20.7495 16.7126 20.871 16.6477 21.0033 16.6214C21.1355 16.5951 21.2726 16.6086 21.3972 16.6602C21.5218 16.7118 21.6283 16.7992 21.7032 16.9113C21.7781 17.0234 21.8181 17.1553 21.8181 17.2901C21.8181 17.4709 21.7463 17.6444 21.6184 17.7722C21.4905 17.9001 21.3171 17.9719 21.1363 17.9719ZM8.18173 11.1537C8.18173 11.3346 8.10989 11.508 7.98203 11.6359C7.85416 11.7637 7.68074 11.8356 7.49991 11.8356H4.77264C4.59181 11.8356 4.41839 11.7637 4.29052 11.6359C4.16265 11.508 4.09082 11.3346 4.09082 11.1537C4.09082 10.9729 4.16265 10.7995 4.29052 10.6716C4.41839 10.5438 4.59181 10.4719 4.77264 10.4719H7.49991C7.68074 10.4719 7.85416 10.5438 7.98203 10.6716C8.10989 10.7995 8.18173 10.9729 8.18173 11.1537ZM10.909 13.881C10.909 14.0618 10.8372 14.2353 10.7093 14.3631C10.5814 14.491 10.408 14.5628 10.2272 14.5628H4.77264C4.59181 14.5628 4.41839 14.491 4.29052 14.3631C4.16265 14.2353 4.09082 14.0618 4.09082 13.881C4.09082 13.7002 4.16265 13.5268 4.29052 13.3989C4.41839 13.271 4.59181 13.1992 4.77264 13.1992H10.2272C10.408 13.1992 10.5814 13.271 10.7093 13.3989C10.8372 13.5268 10.909 13.7002 10.909 13.881Z"
                                    fill="#252525" />
                            </svg>
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

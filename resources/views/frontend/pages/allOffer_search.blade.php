@forelse ($offers as $offer)
<div class="col-lg-4 mb-4">
    <div class="card border-0 shadow-sm bg-light">
        <div class="row p-4 align-items-center">
            <div class="col-lg-6">
                <div>
                    <img src="{{ !empty($offer->logo) ? url('storage/' . $offer->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($offer->name) }}"
                        width="80px" height="80px" class="rounded-2"
                        style="object-fit: cover;" alt=""
                        onerror="this.onerror=null; this.src='{{ asset('images/no-brand-img.png') }}';" />
                </div>
            </div>
            <div class="col-lg-6">
                <span>Upto</span>
                <h1 class="main-color special-font-box">{{ $offer->badge }}
                </h1>
            </div>
            <div class="col-lg-12 pt-4">
                <p class="pb-4 text-black">{{ $offer->name }}</p>
                {{-- <a href="{{ route('offer.details', $offer->slug) }}"
                    class="main-color">
                    <small>See All In Store</small>
                </a> --}}
            </div>
            <div class="col-lg-12 pt-4">
                <div class="d-flex">
                    <a href="{{ route('offer.details', $offer->slug) }}"
                        class="w-100 btn-common-one rounded-3">
                        <small>View</small>
                    </a>
                    @if (!empty($offer->coupon_code))
                        <a href="javascript:void(0);"
                            class="w-100 btn-common-three rounded-3 ms-2"
                            onclick="copyCouponCode('{{ $offer->coupon_code }}')">
                            Coupon <i class="fa-solid fa-copy"></i>
                        </a>
                    @endif
                </div>
                <p class="pt-2 text-center countdown"
                    data-expire-date="{{ $offer->expiry_date }}">
                    <span class="main-color">Expire In:</span>
                    <span class="countdown-timer"> Days</span>
                </p>
            </div>
        </div>
    </div>
</div>


@empty
    <div class="text-center py-3">
        <img class="img-fluid" width="210px"
            src="https://i.ibb.co/Vg8gqx5/hand-drawn-no-data-illustration-23-2150696455.jpg" alt="No Content">
    </div>
    <h5 class="text-center text-warning">No Offer available right now.</h5>
@endforelse

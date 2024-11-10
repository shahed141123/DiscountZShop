<!--begin::Repeater-->
<div class="row table-responsive">
    <table id="brand_stores" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
        <thead class="bg-dark text-light">
            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                <th>Sl</th>
                <th>Store Name</th>
                <th>Address</th>
                <th>Added By</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody class="fw-bold text-gray-600">
            @foreach ($brand->stores as $store)
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $store->title }}</td>
                    <td>{{ $store->address_line_one }} <br>{{ $store->address_line_one }}</td>

                    <td>{{ optional($store->added)->name }}</td>

                    <td> <span class="badge {{ $store->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                            {{ $store->status == 'active' ? 'Active' : 'InActive' }}</span>
                    </td>

                    <td>
                        <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#store_edit{{ $store->id }}"
                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        <a href="{{ route('admin.store.destroy', $store->id) }}"
                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete">
                            <i class="fa-solid fa-trash-can-arrow-up"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<form id="storeForm" method="POST" action="{{ route('admin.brand.stores.store') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="brand_id" value="{{ $brand->id }}">
    <div class="row">
        <div class="mb-7" id="stores">
            <!--begin::Form group-->
            <div class="form-group">
                <div data-repeater-list="stores">
                    <div data-repeater-item>
                        <div class="row align-items-center">
                            <div class="col-lg-11 mb-5" style="border: 1px solid #eee;">
                                <div class="form-group row mb-5">
                                    <div class="col-lg-3 mb-5">
                                        <x-metronic.label for="country_id"
                                            class="col-form-label fw-bold fs-6">{{ __('Select Country') }}</x-metronic.label>
                                        <select class="form-select" data-kt-repeater="select2" name="country_id"
                                            data-hide-search="false" data-placeholder="Select an option">
                                            <option></option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}" @selected(old('country_id') == $country->id)>
                                                    {{ $country->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3 mb-5">
                                        <x-metronic.label for="division_id"
                                            class="col-form-label fw-bold fs-6">{{ __('Select Division') }}</x-metronic.label>
                                        <select class="form-select" data-kt-repeater="select2" name="division_id"
                                            data-hide-search="false" data-placeholder="Select an option">
                                            <option></option>
                                            @foreach ($divisions as $division)
                                                <option value="{{ $division->id }}" @selected(old('division_id') == $division->id)>
                                                    {{ $division->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-3 mb-5">
                                        <x-metronic.label for="city_id"
                                            class="col-form-label fw-bold fs-6">{{ __('Select City') }}</x-metronic.label>
                                        <select class="form-select" data-kt-repeater="select2" name="city_id"
                                            data-hide-search="false" data-placeholder="Select an option">
                                            <option></option>
                                            @foreach ($citys as $city)
                                                <option value="{{ $city->id }}" @selected(old('city_id') == $city->id)>
                                                    {{ $city->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-3 mb-5">
                                        <x-metronic.label for="area_id"
                                            class="col-form-label fw-bold fs-6">{{ __('Select Area') }}</x-metronic.label>
                                        <select class="form-select" data-kt-repeater="select2" name="area_id"
                                            data-hide-search="false" data-placeholder="Select an option">
                                            <option></option>
                                            @foreach ($areas as $area)
                                                <option value="{{ $area->id }}" @selected(old('area_id') == $area->id)>
                                                    {{ $area->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3 mb-5">
                                        <x-metronic.label for="title"
                                            class="col-form-label fw-bold fs-6">{{ __('Title') }}
                                        </x-metronic.label>

                                        <x-metronic.input id="title" type="text" name="title" :value="old('title')"
                                            placeholder="Enter the title"></x-metronic.input>
                                    </div>
                                    <div class="col-lg-3 mb-5">
                                        <x-metronic.label for="address_line_one"
                                            class="col-form-label fw-bold fs-6">{{ __('Address Line One') }}
                                        </x-metronic.label>

                                        <x-metronic.input id="address_line_one" type="text" name="address_line_one"
                                            placeholder="Enter the Address line one">{{ old('address_line_one') }}</x-metronic.input>
                                    </div>
                                    <div class="col-lg-3 mb-5">
                                        <x-metronic.label for="address_line_two"
                                            class="col-form-label fw-bold fs-6">{{ __('Address Line Two') }}
                                        </x-metronic.label>

                                        <x-metronic.input id="address_line_two" type="text" name="address_line_two"
                                            placeholder="Enter the Address Line Two">{{ old('address_line_two') }}</x-metronic.input>
                                    </div>
                                    <div class="col-lg-3 mb-7">
                                        <x-metronic.label for="status" class="col-form-label fw-bold fs-6">
                                            {{ __('Select a Status ') }}</x-metronic.label>
                                        <x-metronic.select-option id="status" name="status" data-hide-search="true"
                                            data-placeholder="Select an option">
                                            <option></option>
                                            <option value="active" @selected(old('status') == 'active')>Active</option>
                                            <option value="inactive" @selected(old('status') == 'inactive')>Inactive</option>
                                        </x-metronic.select-option>
                                    </div>


                                    <div class="col-lg-12 mb-5">
                                        <x-metronic.label for="url"
                                            class="col-form-label fw-bold fs-6">{{ __('Google Map URL') }}
                                        </x-metronic.label>

                                        <x-metronic.textarea id="url" name="url" :value="old('url')"
                                            placeholder="Enter the Google Map URL">{{ old('url') }}</x-metronic.textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-7">
                                    <i class="la la-trash-o fs-3"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--end::Form group-->

            <!--begin::Form group-->
            <div class="form-group mt-5">
                <a href="javascript:;" data-repeater-create class="btn btn-primary">
                    <i class="la la-plus"></i>
                </a>
            </div>
            <!--end::Form group-->
        </div>
    </div>
    <div class="row mt-2 justify-content-end">
        <div class="d-flex align-items-center justify-content-between">
            <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous" data-bs-target="#kt_vtab_pane_1"
                aria-selected="false" role="tab" tabindex="-1">
                Previous
                <span class="svg-icon svg-icon-4 ms-1 me-0">
                    <i class="fa-solid fa-arrow-right"></i>
                </span>
            </a>
            <a class="btn btn-lg btn-info rounded-0 tab-trigger-offer-next" data-bs-toggle="tab"
                data-bs-target="#kt_vtab_pane_3" aria-selected="false" role="tab" tabindex="-1">
                Save & Continue
                <span class="svg-icon svg-icon-4 ms-1 me-0">
                    <i class="fa-solid fa-arrow-right"></i>
                </span>
            </a>
            {{-- <x-metronic.button type="submit" class="info rounded-0">
            {{ __('Submit') }}
            <span class="svg-icon svg-icon-4 ms-1 me-0">
                <i class="fa-solid fa-arrow-right"></i>
            </span>
        </x-metronic.button> --}}
        </div>
    </div>
</form>
<!--end::Repeater-->

@push('scripts')
    <script>
        $('#stores').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function() {
                $(this).slideDown();

                // Re-init select2
                $(this).find('[data-kt-repeater="select2"]').select2();

                // Re-init flatpickr
                $(this).find('[data-kt-repeater="datepicker"]').flatpickr();

                // Re-init tagify
                new Tagify(this.querySelector('[data-kt-repeater="tagify"]'));
            },

            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            },

            ready: function() {
                // Init select2
                $('[data-kt-repeater="select2"]').select2();

                // Init flatpickr
                $('[data-kt-repeater="datepicker"]').flatpickr();

                // Init Tagify
                new Tagify(document.querySelector('[data-kt-repeater="tagify"]'));
            }
        });
    </script>
@endpush

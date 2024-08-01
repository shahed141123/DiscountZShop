<x-admin-app-layout :title="'Country List'">
    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title">
            </div>
            <div class="card-toolbar">

                <a href="javascript:void(0)" class="btn btn-light-primary" data-bs-toggle="modal"
                    data-bs-target="#AddModal">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                fill="currentColor" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                fill="currentColor" />
                        </svg>
                    </span>
                    Add Country
                </a>
            </div>
        </div>
        <div class="card-body pt-0">

            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">

                <thead>
                    <tr class="text-center text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th>Sl</th>
                        <th>Country Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody class="fw-bold text-gray-600">
                    @foreach ($countries as $country)
                        <tr class="text-center text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $country->name }}</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

    <div class="modal fade" id="AddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title ps-5">Add Country</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                </div>
                <form class="form" action="{{ route('admin.faq-category.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="col-lg-12 mb-7">
                            <x-metronic.label for="name"
                                class="col-form-label fw-bold fs-6 required">{{ __('Country Name') }}
                            </x-metronic.label>

                            <x-metronic.input id="name" type="text" name="name" :value="old('name')"
                                placeholder="Enter the Name" required></x-metronic.input>
                        </div>
                        <div class="col-lg-12 mb-7">
                            <x-metronic.label for="status" class="col-form-label required fw-bold fs-6">
                                {{ __('Select a Status ') }}</x-metronic.label>
                            <x-metronic.select-option id="status" name="status" data-hide-search="true"
                                data-placeholder="Select an option">
                                <option></option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </x-metronic.select-option>
                        </div>
                    </div>
                    <div class="modal-footer p-2">
                        <x-metronic.button type="submit" class="primary">
                            {{ __('Submit') }}
                        </x-metronic.button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-admin-app-layout>

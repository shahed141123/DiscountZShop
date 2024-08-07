        <input id="{{ $id ?? '' }}" type="{{ $type ?? 'text' }}"
            class="form-control @error($name)is-invalid @enderror" name="{{ $name }}" step="0.01" maxlength="{{ $maxlength ?? 250 }}"
            placeholder="{{ $placeholder ?? '' }}" value="{{ old($name, $value ?? '') }}" {{ $required ?? '' }}/>
        @error($name)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        {{-- <x-input id="full_name" type="text" name="full_name" placeholder="Enter full name"
    colSize="col-lg-8"></x-input> --}}

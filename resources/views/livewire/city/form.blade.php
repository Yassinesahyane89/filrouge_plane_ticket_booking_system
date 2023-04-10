<div class="row">
    <x-form.input name="city.name" label="City Name:" patternClass="col-4" wire:model="city.name" />
    <div class="form-group col-4">
        <label for="" class="form-label">Country</label>
        <select wire:model="city.country_id" class="form-select">
            <option value="">baliz select </option>
            @foreach ($countries as $country)
              <option value="{{$country->id}}">{{ $country->name }}</option>
            @endforeach
        </select>
        @error('city.country_id')
          <div class="invalid-feedback" style="display: block">
            <span>{{ $message }}</span>
          </div>
        @enderror
    </div>
    <div class="mt-3">
        <button class="btn btn-primary" wire:click="update" wire:loading.attr="disabled">Save</button>
    </div>
</div>

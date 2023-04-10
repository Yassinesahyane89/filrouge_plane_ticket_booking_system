<div class="row">
    <x-form.input name="airport.name" label="Airport Name:" patternClass="col-4" wire:model="airport.name" />
    <div class="form-group col-4">
        <label for="" class="form-label">City</label>
        <select wire:model="airport.city_id" class="form-select">
            <option value="">baliz select </option>
            @foreach ($cities as $city)
              <option value="{{$city->id}}">{{ $city->name }}</option>
            @endforeach
        </select>
        @error('airport.city_id')
          <div class="invalid-feedback" style="display: block">
            <span>{{ $message }}</span>
          </div>
        @enderror
    </div>
    <div class="mt-3">
        <button class="btn btn-primary" wire:click="update" wire:loading.attr="disabled">Save</button>
    </div>
</div>

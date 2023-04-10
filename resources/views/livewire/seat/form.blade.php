<div class="row">
    <x-form.input name="seat.number" label="Number of Seat:" patternClass="col-4" wire:model="seat.number" />
    <div class="form-group col-4">
        <label for="" class="form-label">Class</label>
        <select wire:model="seat.cabin_id" class="form-select">
            <option value="">baliz select </option>
            @foreach ($cabins as $cabin)
              <option value="{{$cabin->id}}">{{ $cabin->name }}</option>
            @endforeach
        </select>
        @error('seat.cabin_id')
          <div class="invalid-feedback" style="display: block">
            <span>{{ $message }}</span>
          </div>
        @enderror
    </div>
    <div class="mt-3">
        <button class="btn btn-primary" wire:click="update" wire:loading.attr="disabled">Save</button>
    </div>
</div>

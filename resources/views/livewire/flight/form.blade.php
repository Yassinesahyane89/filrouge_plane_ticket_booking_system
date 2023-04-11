<div class="row">
    <div class="form-group col-4">
        <label for="" class="form-label">Airport Departe</label>
        <select wire:model="flight.from_airport_id" class="form-select">
            <option value="">Please select</option>
            @foreach ($airports as $airport)
              <option value="{{$airport->id}}">{{ $airport->name }}</option>
            @endforeach
        </select>
        @error('flight.from_airport_id')
          <div class="invalid-feedback" style="display: block">
            <span>{{ $message }}</span>
          </div>
        @enderror
    </div>
    <div class="form-group col-4">
        <label for="" class="form-label">Airport Arrival</label>
        <select wire:model="flight.to_airport_id" class="form-select">
            <option value="">Please select</option>
             @if ($airport->id != $flight->from_airport_id)
                <option value="{{$airport->id}}">{{ $airport->name }}</option>
            @endif
        </select>
        @error('flight.to_airport_id')
          <div class="invalid-feedback" style="display: block">
            <span>{{ $message }}</span>
          </div>
        @enderror
    </div>
    <div class="form-group col-4">
        <label for="" class="form-label">Plan</label>
        <select wire:model="flight.plan_id" class="form-select">
            <option value="">baliz select </option>
            @foreach ($plans as $plan)
              <option value="{{$plan->id}}">{{ $plan->number }}</option>
            @endforeach
        </select>
        @error('flight.plan_id')
          <div class="invalid-feedback" style="display: block">
            <span>{{ $message }}</span>
          </div>
        @enderror
    </div>
    <x-form.input name="flight.departureDate" label="departure Date:" type="datetime-local" patternClass="col-4" wire:model="flight.departureDate" />
    <x-form.input name="flight.arrivalDate" label="Arrival Date:" type="datetime-local" patternClass="col-4" wire:model="flight.arrivalDate" />
    <div class="mt-3">
        <button class="btn btn-primary" wire:click="update" wire:loading.attr="disabled">Save</button>
    </div>
</div>

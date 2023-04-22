<div class="row">
    <div class="form-group col-4">
        <label for="flight.from_airport_id" class="form-label">Airport Departe</label>
        <select wire:model="flight.from_airport_id" id="flight.from_airport_id" name="flight.from_airport_id" class="form-select">
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
        <label for="flight.to_airport_id" class="form-label">Airport Arrival</label>
        <select wire:model="flight.to_airport_id" id="flight.to_airport_id" name="flight.to_airport_id" class="form-select">
            <option value="">Please select</option>
              @foreach ($airports as $airport)
                @if ($airport->id != $flight->from_airport_id)
                    <option value="{{$airport->id}}">{{ $airport->name }}</option>
                @endif
              @endforeach
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
            <option value="">Please select</option>
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
    <x-form.input name="flight.departure_date" label="departure Date:" type="datetime-local" patternClass="col-4" wire:model="flight.departure_date" :min="now()->format('Y-m-d\TH:i')"/>
    @if ($errors->has('departure_date'))
        <span class="error">{{ $errors->first('departure_date') }}</span>
    @endif
    <x-form.input name="flight.arrival_date" label="Arrival Date:" type="datetime-local" patternClass="col-4" wire:model="flight.arrival_date" :min="now()->format('Y-m-d\TH:i')" />
    @if ($errors->has('arrival_date'))
        <span class="error">{{ $errors->first('arrival_date') }}</span>
    @endif

    @foreach ($flightFares as $flightFare)
      <div class="row">
          <x-form.input name="flightFares" label="fare" patternClass="col-3" wire:model="flightFares.{{ $loop->index }}.fare" />

            <div class="form-group col-3">
              <label for="" class="form-label">cabin</label>
              <select wire:model="flightFares.{{ $loop->index }}.cabin_id" class="form-select">
                  <option value="">baliz select</option>
                  @foreach ($this->getCabinsByIndex($loop->index) as $cabin)
                      <option value="{{$cabin->id}}">{{ $cabin->name }}</option>
                  @endforeach
              </select>
              @error('flightFares.{{ $loop->index }}.cabin_id')
                <div class="invalid-feedback" style="display: block">
                  <span>{{ $message }}</span>
                </div>
              @enderror
          </div>

            <div class="mt-3 col-3">
                <button class="btn btn-danger" wire:click="remove({{$loop->index}})" wire:loading.attr="disabled">remove</button>
            </div>
      </div>
    @endforeach

    <div class="mt-3">
        <button class="btn btn-primary" wire:click="addFlightFare" wire:loading.attr="disabled">add</button>
    </div>
    <div class="mt-3">
        <button class="btn btn-primary" wire:click="update" wire:loading.attr="disabled">Save</button>
    </div>
</div>

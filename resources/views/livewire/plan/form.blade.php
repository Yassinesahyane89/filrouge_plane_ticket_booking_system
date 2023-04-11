<div class="row">
    <x-form.input name="plan.number" label="Name:" patternClass="col-3" wire:model="plan.number" />

    @foreach ($seats as $seat)
      <div class="row">
          <x-form.input name="seats" label="quantity" patternClass="col-3" wire:model="seats.{{ $loop->index }}.quantity" />
          <x-form.input name="seats" label="price:" patternClass="col-3" wire:model="seats.{{ $loop->index }}.price" />

            <div class="form-group col-3">
              <label for="" class="form-label">cabin</label>
              <select wire:model="seats.{{ $loop->index }}.cabin_id" class="form-select">
                  <option value="">baliz select</option>
                  @foreach ($this->getCabinsByIndex($loop->index) as $cabin)
                      <option value="{{$cabin->id}}">{{ $cabin->name }}</option>
                  @endforeach
              </select>
              @error('seats.{{ $loop->index }}.cabin_id')
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
        <button class="btn btn-primary" wire:click="addSeat" wire:loading.attr="disabled">add</button>
    </div>
    <div class="mt-3">
        <button class="btn btn-primary" wire:click="update" wire:loading.attr="disabled">Save</button>
    </div>
</div>

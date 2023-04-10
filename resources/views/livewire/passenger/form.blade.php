<div class="row">
    <x-form.input name="passenger.first_name" label="First_name:" patternClass="col-4" wire:model="passenger.first_name" />
    <x-form.input name="passenger.last_name" label="Last name:" patternClass="col-4" wire:model="passenger.last_name" />
    <x-form.input name="passenger.email" label="Email:" patternClass="col-4" wire:model="passenger.email" />
    <x-form.input name="passenger.phone"  label="Phone:" patternClass="col-4" wire:model="passenger.phone" />
    <div class="mt-3">
        <button class="btn btn-primary" wire:click="update" wire:loading.attr="disabled">Save</button>
    </div>
</div>

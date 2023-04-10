<div class="row">
    <x-form.input name="country.name" label="Country Name:" patternClass="col-4" wire:model="country.name" />
    <div class="mt-3">
        <button class="btn btn-primary" wire:click="update" wire:loading.attr="disabled">Save</button>
    </div>
</div>

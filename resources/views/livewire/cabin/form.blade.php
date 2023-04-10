<div class="row">
    <x-form.input name="cabin.name" label="Class Name:" patternClass="col-4" wire:model="cabin.name" />
    <div class="mt-3">
        <button class="btn btn-primary" wire:click="update" wire:loading.attr="disabled">Save</button>
    </div>
</div>

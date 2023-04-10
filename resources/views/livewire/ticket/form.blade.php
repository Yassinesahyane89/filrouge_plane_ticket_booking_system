<div class="row">
    <x-form.input name="ticket.name" label="Name:" patternClass="col-4" wire:model="ticket.name" />
    <div class="mt-3">
        <button class="btn btn-primary" wire:click="update" wire:loading.attr="disabled">Save</button>
    </div>
</div>

<div class="row">
    <x-form.input name="user.name" label="Name:" patternClass="col-4" wire:model="user.name" />
    <x-form.input name="user.email" label="Email:" patternClass="col-4" wire:model="user.email" type="email" />
    <x-form.input name="user.newPassword" label="New Password:" patternClass="col-4" wire:model="user.newPassword" type="password" />
    <div class="mt-3">
        <button class="btn btn-primary" wire:click="save" wire:loading.attr="disabled">Save</button>
    </div>
</div>

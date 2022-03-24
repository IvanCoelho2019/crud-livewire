<div class="modal-body">
    <form>
        <div class="form-group">
            <label for="firstname"> Fist Name</label>
            <input type="text" name="firstname" class="form-control" wire:model="firstname">
            @error('firstname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="lastname"> Last Name</label>
            <input type="text" name="lastname" class="form-control" wire:model="lastname">
            @error('lastname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email"> Email</label>
            <input type="email" name="email" class="form-control" wire:model="email">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone"> Phone</label>
            <input type="text" name="phone" class="form-control" wire:model="phone">
            @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

    </form>
</div>

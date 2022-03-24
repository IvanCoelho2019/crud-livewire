<!-- Modal -->
<div wire:ignore.self class="modal fade" id="deletedDialog" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Confirm Deletion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    Are you sure you want to delete the record?
                </div>
                <ul>
                    <li>{{ $ids }}</li>
                    <li>{{ $firstname }}</li>
                    <li>{{ $lastname }}</li>
                    <li>{{ $email }}</li>
                    <li>{{ $phone }}</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                <button type="button" class="btn btn-primary"
                    wire:click.prevent="deleteConfirm({{ $ids }})">YES</button>
            </div>
        </div>
    </div>
</div>

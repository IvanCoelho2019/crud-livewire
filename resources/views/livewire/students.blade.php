<div>
    @include('livewire.update')
    @include('livewire.create')
    @include('livewire.deleted')
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('message'))
                        <div id='alert' class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3>All Students
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#addStudentModal" wire:click.prevent="newStore()">
                                    Add New Student
                                </button>
                            </h3>

                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($students as $student)
                                        </tr>
                                        <td>{{ $student->firstname }}</td>
                                        <td>{{ $student->lastname }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->phone }}</td>
                                        <td>
                                            <button type="button" class="btn btn-info" data-toggle="modal"
                                                data-target="#updateStudentModal"
                                                wire:click.prevent='edit({{ $student->id }})'>Edit</button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#deletedDialog"
                                                wire:click.prevent='delete({{ $student->id }})'>
                                                Delete
                                            </button>
                                        </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div>
        </div>
    </section>
</div>

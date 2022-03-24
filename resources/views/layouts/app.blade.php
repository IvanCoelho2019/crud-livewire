<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire Projects</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    @livewireStyles

</head>

<body>
    {{ $slot }}
    @livewireScripts
    <script>
        window.livewire.on('studentAdded', () => {
            closeModal('#addStudentModal');
        });
        window.livewire.on('studentUpdated', () => {
            closeModal('#updateStudentModal');
        });
        window.livewire.on('studentDeleted', () => {
            closeModal('#deletedDialog');
        });



        function closeModal(idModal) {
            $(idModal).modal('hide');
            window.setTimeout(function() {
                $('.alert').alert('close');
            }, 5000);
        }
    </script>
</body>

</html>

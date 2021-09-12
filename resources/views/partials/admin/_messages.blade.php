@if (count($errors))
    @foreach ($errors->all() as $error)
        <script>
            $(document).Toasts('create', {
                title: '{{ $error }}',
                autohide: true,
                close: false,
                delay: 5000,
                icon: 'fas fa-circle-times',
                class: 'bg-danger',
            });
        </script>
    @endforeach
@endif

@if (session('success'))
    <script>
        Swal.fire({
            title: '{{ session('success') }}',
            icon: 'success',
        });
    </script>
@endif

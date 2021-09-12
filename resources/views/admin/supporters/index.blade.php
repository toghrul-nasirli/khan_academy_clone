@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dəstəkçilərimiz</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active">Dəstəkçilərimiz</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="table" class="table table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Logo</th>
                                        <th>COVID-19 cavabımızın tərəfdarı</th>
                                        <th>Əməliyyatlar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($supporters as $supporter)
                                        <tr style="line-height: 80px;">
                                            <td>{{ $supporter->id }}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('uploads/supporters/' . $supporter->logo) }}" width="120" height="80" loading="lazy" style="object-fit: contain;">
                                            </td>
                                            <td>
                                                <i class="fas fa-{{ $supporter->covid_19 ? 'check' : 'times' }}"></i>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.supporters.edit', $supporter) }}" class="px-1"><i class="fas fa-edit"></i></a>
                                                <a href="javascript:void(0)" class="delete-btn px-1" data-id="{{ $supporter->id }}"><i class="fas fa-trash-alt"></i></a>
                                                <form id="delete-form{{ $supporter->id }}" action="{{ route('admin.supporters.destroy', $supporter) }}" method="POST" class="d-none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
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
    </section>
    @include('admin.supporters._create')
@endsection

@section('scripts')
    <script src="{{ asset('backend/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/js/responsive.bootstrap4.min.js') }}"></script>

    <script>
        $(function() {
            $('#table').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": false,
                "autoWidth": false,
                "responsive": true,
            });

            $('input[type="file"]').on('change', function() {
                $(this).next('label').text(this.files[0].name);
            });

            $('.delete-btn').on('click', function() {
                Swal.fire({
                    title: 'Silmək istədiyinizdən əminsiniz?',
                    text: 'Bunu daha daha sonra geri ala bilməyəcəksiniz!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Bəli, silinsin!',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'İmtina',
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById(`delete-form${$(this).attr('data-id')}`).submit();
                    }
                });
            });
        });
    </script>
@endsection

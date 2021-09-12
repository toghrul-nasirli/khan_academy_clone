@extends('layouts.admin')

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
                    <form action="{{ route('admin.supporters.update', $supporter) }}" enctype="multipart/form-data" method="POST" autocomplete="off">
                        <div class="card">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label for="logo">Logo</label>
                                                <div class="custom-file">
                                                    <input type="file" accept="image/*" class="custom-file-input" id="logo" name="logo">
                                                    <label class="custom-file-label">Logo yükləyin</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 previewDiv d-none">
                                            <div class="text-center">
                                                <img id="previewLogo" class="profile-user-img img-fluid img-circle" style="height: 100px !important; width: 100px !important;">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="covid_19" name="covid_19" value="1" {{ $supporter->covid_19 ? 'checked' : '' }}>
                                                    <label class="form-check-label user-select-none" for="covid_19">
                                                        COVID-19 cavabımızın tərəfdarı
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-sm">Dəyişiklikləri yadda saxla</button>
                                <a href="{{ url()->previous() }}" class="btn btn-danger btn-sm">Geri</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(function() {
            logo.onchange = evt => {
                const [file] = logo.files;
                if (file) {
                    $(".previewDiv").addClass('d-block');
                    previewLogo.src = URL.createObjectURL(file);
                }
            }

            $('input[type="file"]').on('change', function() {
                $(this).next('label').text(this.files[0].name);
            });
        });
    </script>
@endsection

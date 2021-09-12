@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bizim işlərimiz</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active">Bizim işlərimiz</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.works.update', $work) }}" method="POST" autocomplete="off">
                        <div class="card">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="title">Başlıq(AZ)</label>
                                                <input type="text" class="form-control" id="title" name="title" value="{{ $work->title }}" placeholder="Başlıq daxil edin">
                                            </div>
                                            <div class="form-group">
                                                <label for="info">İnformasiya</label>
                                                <textarea class="form-control" rows="4" id="info" name="info">{{ $work->info }}</textarea>
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
            $('input[type="file"]').on('change', function() {
                $(this).next('label').text(this.files[0].name);
            });
        });
    </script>
@endsection

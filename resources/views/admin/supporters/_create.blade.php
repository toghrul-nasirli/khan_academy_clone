<button class="btn btn-primary btn-lg rounded-circle position-fixed" style="bottom:20px;right:20px;" data-toggle="modal" data-target="#modal-lg">+</button>
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.supporters.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Dəstəkçi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                                        <input class="form-check-input" type="checkbox" id="covid_19" name="covid_19" value="1">
                                        <label class="form-check-label user-select-none" for="covid_19">
                                            COVID-19 cavabımızın tərəfdarı
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url()->previous() }}" class="btn btn-default btn-sm" data-dismiss="modal">Geri</a>
                    <button type="submit" class="btn btn-primary btn-sm">Əlavə Et</button>
                </div>
            </form>
        </div>
    </div>
</div>

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
        });
    </script>
@endsection

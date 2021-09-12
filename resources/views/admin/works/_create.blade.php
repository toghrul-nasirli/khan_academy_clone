<button class="btn btn-primary btn-lg rounded-circle position-fixed" style="bottom:20px;right:20px;" data-toggle="modal" data-target="#modal-lg">+</button>
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.works.store') }}" method="POST" autocomplete="off">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Referans</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Başlıq</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Başlıq daxil edin">
                                </div>
                                <div class="form-group">
                                    <label for="info">İnformasiya</label>
                                    <textarea class="form-control" rows="4" id="info" name="info" placeholder="İnformasiya daxil edin"></textarea>
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

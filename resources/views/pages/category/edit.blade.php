<!-- Edit Modal -->
<div class="modal fade compose-modal" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card mb-0 p-3">
                    <form action="{{route('category.update')}}" method="post">
                        @csrf
                        <input id="id_edit" name="id_edit" type="hidden">
                        <div class="form-group mb-3">
                            <input id="name_edit" name="name_edit" type="text" class="form-control" placeholder="Tên chuyên mục">
                        </div>

                        <div class="form-group mb-3">
                            <input id="icon_edit" name="icon_edit" type="text" class="form-control" placeholder="Biểu tượng">
                        </div>

                        <div class="form-group">
                            <textarea id="note_edit" name="note_edit" class="form-control" rows="5" placeholder="Mô tả chuyên mục"></textarea>
                        </div>

                        <div class="btn-toolbar form-group mb-0">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-gradient-primary waves-effect waves-light">
                                    <span>Lưu</span>
                                    <i class="far fa-paper-plane ml-3"></i>
                                </button>
                                <button type="button" class="btn btn-gradient-danger waves-effect waves-light" data-dismiss="modal" >
                                    <span>Hủy</span>
                                    <i class="far fa-trash-alt ml-3"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

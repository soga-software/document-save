<!-- Edit Modal -->
<div class="modal fade compose-modal" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card mb-0 p-3">
                    <form action="{{route('document.update')}}" method="post">
                        @csrf
                        <input id="id_edit" name="id_edit" type="hidden">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <input id="name_edit" name="name_edit" type="text" class="form-control" placeholder="Tên tài liệu">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="type_edit" name="type_edit" class="form-control" placeholder="Loại tài liệu">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <select
                                        id="category_id_edit" name="category_id_edit"
                                        class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" required>
                                        <option value="0">Tất cả chuyên mục</option>
                                        @foreach ($data['categories'] as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select
                                        id="tag_id_edit" name="tag_id_edit[]"
                                        class="select2 mb-3 select2-multiple" style="width:100%"
                                        multiple data-placeholder="Chọn tag" required>
                                        <option value="0">Tất cả tag</option>
                                        @foreach ($data['tags'] as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" id="link_edit" name="link_edit" class="form-control" placeholder="Liên kết" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="note_edit" name="note_edit" rows="5" placeholder="Mô tả tài liệu"></textarea>
                        </div>
                        <div class="btn-toolbar form-group mb-0">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-gradient-primary waves-effect waves-light">
                                    <span>Lưu</span>
                                    <i class="far fa-paper-plane ml-3"></i>
                                </button>
                                <a class="btn btn-gradient-danger waves-effect waves-light"  href="#" onclick="setDelete()" data-toggle="modal" data-target="#deleteAlert" data-animation="fade">
                                    <span>Xóa</span>
                                    <i class="fas fa-trash-alt ml-3"></i>
                                </a>
                                <button type="button" class="btn btn-gradient-info waves-effect waves-light" data-dismiss="modal" >
                                    <span>Hủy</span>
                                    <i class="fas fa-chevron-left ml-3"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Modal -->
<div class="modal fade compose-modal" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="addModalLabel">Thêm dữ liệu mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card mb-0 p-3">
                    <form action="{{route('document.store')}}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" id="name" name="name"  class="form-control" placeholder="Tên tài liệu">
                        </div>
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <select
                                        id="category_id" name="category_id"
                                        value="{{old('category_id', 0)}}"
                                        class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" required>
                                        <option value="0">Tất cả chuyên mục</option>
                                        @foreach ($data['categories'] as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select
                                        id="tag_id" name="tag_id"
                                        class="select2 mb-3 select2-multiple" style="width:100%"
                                        multiple="multiple" data-placeholder="Choose" required>
                                        <option value="0">Tất cả tag</option>
                                        @foreach ($data['tags'] as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" id="link" name="link" class="form-control" placeholder="Liên kết" required>
                        </div>

                        <div class="form-group">
                            <input type="text" id="type" name="type" class="form-control" placeholder="Loại tài liệu">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="note" name="note" rows="5" id="message" placeholder="Mô tả tài liệu"></textarea>
                        </div>

                        <div class="btn-toolbar form-group mb-0">
                            <div class="pull-right">
                                <button class="btn btn-gradient-primary waves-effect waves-light">
                                    <span>Lưu</span>
                                    <i class="far fa-paper-plane ml-3"></i>
                                </button>
                                <button type="button" class="btn btn-gradient-danger waves-effect waves-light ">
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
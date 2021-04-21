<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <form class="">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" class="form-control" id="title_document" name="title_document" required="" placeholder="Tiêu đề">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select
                                id="categoryId"
                                name="categoryId"
                                value="{{old('categoryId', 0)}}"
                                class="select2 form-control mb-3 custom-select"
                                style="width: 100%; height:36px;">
                                <option value="0">Tất cả chuyên mục</option>
                                @foreach ($data['categories'] as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select  id="tagId" name="tagId" class="select2 mb-3 select2-multiple" style="width:100%" multiple="multiple" data-placeholder="Choose">
                                <option value="0">Tất cả tag</option>
                                @foreach ($data['tags'] as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 text-right">
                            <button type="submit" class="btn btn-sm btn-secondary px-4 btn-square waves-effect waves-light">
                                <i class="fas fa-search"></i>
                            </button>
                            <button type="submit" class="btn btn-sm btn-secondary px-4 btn-square waves-effect waves-light" data-toggle="modal" data-target="#addModal" data-animation="fade">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            @include('pages.nav')
        </div>

    </div><!--end card-body-->
</div><!--end card-->

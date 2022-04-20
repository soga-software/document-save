@section('search')
<div class="card bg-success">
    <div class="card-body p-2 pl-5 pr-5">
        <form id="documentForm">
            @csrf
            <input type="hidden" name="page" id="page" value="{{$data['page']}}">
            <input type="hidden" name="numLine" id="numLine" value="{{$data['numLine']}}">
            <input type="hidden" name="isSearch" id="isSearch" value="0">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="form-group m-0">
                        <input type="text" class="form-control" value="{{$data['name']}}" id="name" name="name" placeholder="Tiêu đề">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group m-0">
                        <input type="text" class="form-control" value="{{$data['type']}}" id="type" name="type" placeholder="Loại tài liệu">
                    </div>
                </div>
                <div class="col-md-2">
                    <select
                        id="category_id"
                        name="category_id"
                        value="{{old('category_id', '')}}"
                        class="select2 form-control custom-select"
                        style="width: 100%; height:36px;">
                        <option value="0">Tất cả chuyên mục</option>
                        @foreach ($data['categories'] as $category)
                            <option
                                value="{{ $category->id }}"
                                {{ ($data['category_id']  == $category->id) ? 'selected' : ''}}>
                                {{ $category->category_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <select
                        id="tag_id" name="tag_id[]"
                        class="select2 select2-multiple" style="width:100%"
                        multiple="multiple"
                        data-placeholder="Chọn tag">
                        <option value="0">Tất cả tag</option>
                        @foreach ($data['tags'] as $tag)
                            <option
                                value="{{ $tag->id }}"
                                {{in_array($tag->id, $data['tag_id'] ? $data['tag_id'] : []) ? "selected": ""}}>
                                {{ $tag->tag_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 text-right">
                    <div class="button-list btn-social-icon ml-2 d-flex align-items-center">
                        <button id="searchBtn" type="button" class="btn btn-info btn-xs"><i class="fas fa-search font-12"></i></button>
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#addModal" data-animation="fade"><i class="fas fa-plus font-12"></i></button>
                        <button type="button" onclick="goLibrary()" class="btn btn-danger btn-xs font-11"><i class="fas fa-bookmark font-12"></i></button>
                        <button type="button" onclick="goCategory()" class="btn btn-danger btn-xs font-11"><i class="fas fa-align-center font-12"></i></button>
                        <button type="button" onclick="goTag()" class="btn btn-danger btn-xs font-11"><i class="fas fa-tag font-12"></i></button>
                        <button type="button" onclick="goImport()" class="btn btn-danger btn-xs font-11"><i class="fas fa-tag font-12"></i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

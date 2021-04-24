@section('search')
<div class="navbar-custom-menu mt-2 float-right">
    <div id="navigation">
        <!-- Navigation Menu-->
        <ul class="navigation-menu">
            <li class="has-submenu">
                <form class="">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <div class="form-group m-0">
                                <input type="text" class="form-control br-50" value="{{old('name', '')}}" id="name" name="name" placeholder="Tiêu đề">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group m-0">
                                <input type="text" class="form-control br-50" value="{{old('type', '')}}" id="type" name="type" placeholder="Loại tài liệu">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select
                                id="category_id"
                                name="category_id"
                                value="{{old('category_id', '')}}"
                                class="select2 form-control custom-select br-50"
                                style="width: 100%; height:36px;">
                                <option value="0">Tất cả chuyên mục</option>
                                @foreach ($data['categories'] as $category)
                                    <option
                                        value="{{ $category->id }}"
                                        {{ (old('category_id')  == $category->id) ? 'selected' : ''}}>
                                        {{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select
                                id="tag_id" name="tag_id[]"
                                class="select2 select2-multiple br-50" style="width:100%"
                                multiple="multiple"
                                data-placeholder="Chọn tag">
                                <option value="0">Tất cả tag</option>
                                @foreach ($data['tags'] as $tag)
                                    <option
                                        value="{{ $tag->id }}"
                                        {{in_array($tag->id, old("tag_id") ? old("tag_id") : []) ? "selected": ""}}>
                                        {{ $tag->tag_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 text-right">
                            <div class="button-list btn-social-icon ml-2 d-flex align-items-center">
                                <button type="submit" class="btn btn-success btn-xs">Search</button>
                                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#addModal" data-animation="fade">Add</button>
                                <a class="btn btn-danger btn-xs font-11" href="{{ route('category.index') }}">Category</a>
                                <a class="btn btn-danger btn-xs font-11" href="{{ route('tag.index') }}">Tag</a>
                            </div>
                        </div>
                    </div>
                </form>
            </li>
        </ul>
    </div>
</div>
@endsection

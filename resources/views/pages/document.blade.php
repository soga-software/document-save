@extends('layouts.main')
@section('page')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('index') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('category.index') }}">Chuyên mục</a></li>
                </ol>
            </div>
            <h4 class="page-title">Trang chủ</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>
<!-- end page title end breadcrumb -->
<div class="card">
    <div class="card-body">
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
                    <button type="submit" class="btn btn-sm btn-primary px-4">Tìm kiếm</button>
                    <button type="submit" class="btn btn-sm btn-success px-4" data-toggle="modal" data-target="#exampleModal" data-animation="fade">Thêm dữ liệu mới</button>
                </div>
            </div>
        </form>
    </div><!--end card-body-->
</div><!--end card-->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-0 header-title">Danh sách bài đăng</h5>
                <div class="table-responsive">
                    <table class="table mb-0 table-centered">
                        <thead>
                        <tr>
                            <th>Chuyên mục</th>
                            <th>Tài liệu</th>
                            <th>Liên kết</th>
                            <th>Tag</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(0 != sizeof($data['documents']))
                        @foreach ($data['documents'] as $document)
                            <tr>
                                <td>
                                    <img src="{{URL::to('/')}}/assets/images/widgets/project1.jpg" alt="" class="rounded-circle thumb-xs mr-1">
                                    {{ $document->category_name }}
                                </td>
                                <td>{{ $document->name }}</td>
                                <td>{{ $document->link }}</td>
                                <td>{{ $document->tag }}</td>
                                <td>
                                    <div class="dropdown d-inline-block float-right">
                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v font-20 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel11" style="">
                                            <a class="dropdown-item" href="#">Creat Project</a>
                                            <a class="dropdown-item" href="#">Open Project</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        @else
                        <tr>
                            <td class="text-danger">
                                <h6>Hiện tại chưa có tài liệu nào phù hợp</h6>
                            </td>
                        </tr>
                        @endif
                        </tbody>
                    </table><!--end /table-->
                </div><!--end /tableresponsive-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div>
</div>

<!-- Modal -->
<div class="modal fade compose-modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="exampleModalLabel">Thêm dữ liệu mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card mb-0 p-3">
                    <form action="{{route('document.store')}}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" placeholder="Tên tài liệu">
                        </div><!--end form-group-->
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <select  id="tagId" name="tagId" class="select2 mb-3 select2-multiple" style="width:100%" multiple="multiple" data-placeholder="Choose">
                                        <option value="0">Tất cả tag</option>
                                        @foreach ($data['tags'] as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div><!--end form-group-->
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Liên kết">
                        </div><!--end form-group-->

                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="message" placeholder="Mô tả tài liệu"></textarea>
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
<script>
    // A $( document ).ready() block.
    $( document ).ready(function() {
        $(".select2").select2({
            width: '100%'
        });
        $('#categoryId').select2();
        $('#tag').select2();
    });
</script>
@endsection

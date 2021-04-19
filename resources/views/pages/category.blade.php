@extends('layouts.main')
@section('page')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Soga Teams</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                    <li class="breadcrumb-item active">Index</li>
                </ol>
            </div>
            <h4 class="page-title">Category Management</h4>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <form class="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="category" name="category" placeholder="Tiêu đề">
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <button type="submit" class="btn btn-sm btn-primary px-4">Tìm kiếm</button>
                            <button type="button" class="btn btn-sm btn-success px-4" data-toggle="modal" data-target="#addModal" data-animation="fade">Thêm chuyên mục</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <form class="">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" class="form-control" id="tag_name" name="tag_name" required="" placeholder="Tên tag">
                            </div>
                        </div>
                        <div class="col-md-3 text-right">
                            <button type="submit" class="btn btn-sm btn-success px-4" data-toggle="modal" data-target="#exampleModal" data-animation="fade">Thêm tag</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-0 header-title">Danh sách chuyên mục</h5>
                <div class="table-responsive">
                    <table class="table mb-0 table-centered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Icon</th>
                                <th>Chuyên mục</th>
                                <th>Ghi chú</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(0 != sizeof($data['categories']))
                        @foreach ($data['categories'] as $category)
                            <tr>
                                <td id="td_id_{{ $category->id }}">{{ $category->id }}</td>
                                <td id="td_icon_{{ $category->id }}">{!! $category->icon !!}</td>
                                <td id="td_category_name_{{ $category->id }}">{{ $category->category_name }}</td>
                                <td id="td_note_{{ $category->id }}">{{ $category->note }}</td>
                                <td>
                                    <span onclick="setCategoryEdit('{{$category->id}}')" class="badge badge-soft-primary"  data-toggle="modal" data-target="#editModal" data-animation="fade" ><i class="las la-pen text-primary font-18"></i></span>
                                    <span onclick="setElementValue('#categoryDelete', '{{ route('category.destroy', ['id'=> $category->id]) }}')" data-toggle="modal" data-target="#deleteAlert" data-animation="fade" class="badge badge-soft-danger"><i class="las la-trash-alt text-danger font-18"></i></span>
                                </td>
                            </tr>
                        @endforeach
                        @else
                        <tr>
                            <td class="text-danger">
                                <h6>Hiện tại chưa có chuyên mục nào phù hợp</h6>
                            </td>
                        </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        {{$data['categories']->links("pagination::bootstrap-4")}}
    </div>
</div>
<!-- Delete Modal -->
<div class="modal fade compose-modal" id="deleteAlert" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="exampleModalLabel">Dữ liệu mục này sẽ bị xóa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card mb-0 p-3">
                    <div class="pull-right">
                        <a id="categoryDelete" href="#"  class="btn btn-gradient-danger waves-effect waves-light">
                            <span>Xóa</span>
                            <i class="far fa-paper-plane ml-3"></i>
                        </a>
                        <button type="button" class="btn btn-gradient-success waves-effect waves-light ">
                            <span>Hủy</span>
                            <i class="far fa-trash-alt ml-3"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Modal -->
<div class="modal fade compose-modal" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="eModalLabel">Thêm dữ liệu mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card mb-0 p-3">
                    <form action="{{route('category.store')}}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <input id="name_add" name="name_add" type="text" class="form-control" placeholder="Tên chuyên mục">
                        </div>

                        <div class="form-group mb-3">
                            <input id="icon_add" name="icon_add" type="text" class="form-control" placeholder="Biểu tượng">
                        </div>

                        <div class="form-group">
                            <textarea id="note_add" name="note_add" class="form-control" rows="5" placeholder="Mô tả chuyên mục"></textarea>
                        </div>

                        <div class="btn-toolbar form-group mb-0">
                            <div class="pull-right">
                                <button class="btn btn-gradient-primary waves-effect waves-light">
                                    <span>Lưu</span>
                                    <i class="far fa-paper-plane ml-3"></i>
                                </button>
                                <button type="button" class="btn btn-gradient-danger waves-effect waves-light">
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
<!-- Add Modal -->
<div class="modal fade compose-modal" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="eModalLabel">Thêm dữ liệu mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
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
                            <textarea id="note_edit" name="note_edit" class="form-control" rows="5" id="message" placeholder="Mô tả chuyên mục"></textarea>
                        </div>

                        <div class="btn-toolbar form-group mb-0">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-gradient-primary waves-effect waves-light">
                                    <span>Lưu</span>
                                    <i class="far fa-paper-plane ml-3"></i>
                                </button>
                                <button type="button" class="btn btn-gradient-danger waves-effect waves-light">
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
    $(document).ready(function(){
        $('#categoryId').select2();
        $('#tag').select2();
    });
    function setCategoryEdit(id) {
        $('#id_edit').val($("#td_id_" + id).text());
        $('#name_edit').val($("#td_category_name_" + id).text());
        $('#icon_edit').val($("#td_icon_" + id).text());
        $('#note_edit').val($("#td_note_" + id).text());
    }

</script>
@endsection

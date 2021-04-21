@extends('layouts.main')
@section('page')

@include('pages.category.search')
@include('pages.category.list')
@include('pages.category.add')
@include('pages.category.edit')
@include('pages.delete')

<script>
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

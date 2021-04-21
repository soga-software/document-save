@extends('layouts.main')
@section('page')
@include('pages.document.search')
@include('pages.document.list')
@include('pages.document.add')
@include('pages.document.edit')
@include('pages.document.delete')

<script>
    // A $( document ).ready() block.
    $( document ).ready(function() {
        $(".select2").select2({
            width: '100%'
        });
        $('#categoryId').select2();
        $('#tag').select2();
    });
    function setCategoryEdit(id) {
        $('#id_edit').val($("#td_id_" + id).text());
        $('#name_edit').val($("#td_category_name_" + id).text());
        $('#icon_edit').val($("#td_icon_" + id).text());
        $('#note_edit').val($("#td_note_" + id).text());
    }

    function setCategoryEdit(id) {
        $('#id_edit').val($("#td_id_" + id).text());
        $('#name_edit').val($("#td_category_name_" + id).text());
        $('#icon_edit').val($("#td_icon_" + id).text());
        $('#note_edit').val($("#td_note_" + id).text());
    }
</script>
@endsection

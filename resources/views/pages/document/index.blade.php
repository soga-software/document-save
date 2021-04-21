@extends('layouts.main')
@section('page')
@include('pages.document.search')
@include('pages.document.list')
@include('pages.document.add')
@include('pages.document.edit')
@include('pages.delete')

<script>
    $(document).ready(function() {
        $('#categoryId').select2();
        $('#tag').select2();
        var categoryList = JSON.parse('{{ $data['categoryJsons'] }}');
        var tagList = JSON.parse('{{ $data['tagJsons'] }}');

    });
    function setDocumentEdit(id) {
        $('#id_edit').val($("#td_id_" + id).text());
        $('#name_edit').val($("#td_name_" + id).text());
        $('#link_edit').val($("#td_link_" + id).attr('href'));
        $('#type_edit').val($("#td_type_" + id).text());
        $('#category_id_edit').val($("#td_category_id_" + id).text());
        $('#category_id_edit').select2();
        tag = $("#td_tag_id_" + id).text().split(",").filter(Boolean);
        $('#tag_id_edit').val(tag);
        $('#tag_id_edit').select2();
        $('#note_edit').val($("#td_note_" + id).text());
    }

    function tagFromList() {
        $('#id_edit').val($("#td_id_" + id).text());
        $('#name_edit').val($("#td_category_name_" + id).text());
        $('#icon_edit').val($("#td_icon_" + id).text());
        $('#note_edit').val($("#td_note_" + id).text());
    }

    function categoryFromList(id) {
        $('#id_edit').val($("#td_id_" + id).text());
        $('#name_edit').val($("#td_category_name_" + id).text());
        $('#icon_edit').val($("#td_icon_" + id).text());
        $('#note_edit').val($("#td_note_" + id).text());
    }

</script>
@endsection

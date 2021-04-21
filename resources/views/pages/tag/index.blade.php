@extends('layouts.main')
@section('page')

@include('pages.tag.search')
@include('pages.tag.list')
@include('pages.tag.add')
@include('pages.tag.edit')
@include('pages.delete')

<script>
    function setTagEdit(id) {
        $('#id_edit').val($("#td_id_" + id).text());
        $('#name_edit').val($("#td_tag_name_" + id).text());
    }
</script>
@endsection

@extends('layouts.main')
@section('page')

@include('pages.library.search')
@include('pages.library.list')
@include('pages.library.add')
@include('pages.library.edit')
@include('pages.delete')

<script>
    function setLibraryEdit(id) {
        $('#id_edit').val($("#td_id_" + id).text());
        $('#name_edit').val($("#td_library_name_" + id).text());
        $('#link_edit').val($("#td_link_" + id).attr('href'));
        $('#note_edit').val($("#td_note_" + id).text());
    }
</script>
@endsection

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
        $('#link_edit').val($("#td_link_" + id).text());
        $('#note_edit').val($("#td_note_" + id).text());
    }
    function goCategory(){
        setTimeout(function(){document.location.href = "{{ route('category.index') }}"}, 100);
    }

    function goTag(){
        setTimeout(function(){document.location.href = "{{ route('tag.index') }}"}, 100);
    }

    function goLibrary(){
        setTimeout(function(){document.location.href = "{{ route('library.index') }}"}, 100);
    }

    function goHome(){
        setTimeout(function(){document.location.href = "{{ route('document.index') }}"}, 100);
    }


</script>
@endsection

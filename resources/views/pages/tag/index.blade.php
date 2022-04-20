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

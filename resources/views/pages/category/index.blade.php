@extends('layouts.main')
@section('page')
<style lang="css">
    .mw-20 {
        min-width: 20px !important;
    }
</style>
@include('pages.category.search')
@include('pages.category.list')
@include('pages.category.add')
@include('pages.category.edit')
@include('pages.delete')

<script>
    function setCategoryEdit(id) {
        $('#id_edit').val($("#td_id_" + id).text());
        $('#name_edit').val($("#td_category_name_" + id).text());
        $('#icon_edit').val($("#td_icon_" + id).text());
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

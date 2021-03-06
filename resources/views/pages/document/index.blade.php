@extends('layouts.main')
@section('page')
@include('pages.document.search')
@include('pages.document.list')
@include('pages.document.add')
@include('pages.document.edit')
@include('pages.delete')
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#categoryId').select2();
        $('#tag').select2();
    });
    function setDocumentEdit(id) {
        $('#id_edit').val(id);
        $('#name_edit').val($("#td_name_" + id).text());
        $('#link_edit').val($("#td_link_" + id).attr('href'));
        $('#type_edit').val($("#td_type_" + id).html());
        $('#category_id_edit').val($("#td_category_id_" + id).text());
        $('#category_id_edit').select2();
        tag = $("#td_tag_id_" + id).text().split(",").filter(Boolean);
        $('#tag_id_edit').val(tag);
        $('#tag_id_edit').select2();
        $('#note_edit').val($("#td_note_" + id).text());
    }

    function setDelete() {
        route = "{{ route('document.destroy', ['id'=> 'ZZUIDZZ']) }}".replace('ZZUIDZZ', $('#id_edit').val());
        setElementValue('#idDelete', route);
    }

    function viewNote(id, isShow){
        if(isShow){
            $("#view_note_" + id).attr("class","text-muted font-11 mb-0");
        } else {
            $("#view_note_" + id).attr("class","d-none");
        }
    }

    function goCategory(){
        setTimeout(function(){document.location.href = "{{ route('category.index') }}"},100);
    }

    function goTag(){
        setTimeout(function(){document.location.href = "{{ route('tag.index') }}"},100);
    }

    function goLibrary(){
        setTimeout(function(){document.location.href = "{{ route('library.index') }}"},100);
    }

    // function changeClassCSS(id, class){
    //     $("#td_type_" + id).attr("class","badge badge-boxed badge-soft-" + class);
    // }

    // function changeColerBadge(id){
    //     let typeSite = $("#td_type_" + id).text();
    //     switch (typeSite.toUpperCase()) {
    //         case 'VIBLO':
    //             changeClassCSS(id, 'primary')
    //             break;

    //         default:
    //             break;
    //     }
    // }
    var htmlValue = '';
    function importBookmark(){
        $.get("{{URL::to('/')}}/bookmarks_4_28_21.html", function(data) {
            htmlValue= data;
            htmlValue = $.parseHTML(htmlValue);
        }, 'html');
    }
</script>
@endsection

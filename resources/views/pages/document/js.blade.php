<script>
    // -------------- Render khi mới hiển thị trang -----------------------
    // Hiển thị nội dung các select thành select 2
    $(document).ready(function() {
        $('#categoryId').select2();
        $('#tag').select2();
        paginationSetting();
        $('#searchBtn').click(function(e) {
            $("#isSearch").val(1);
            $('#page').val(1);
            fetchData();
            $("#isSearch").val(0);
        });
        $('#updateBtn').click(function(e) {
            updateData();
        });
        $('#deleteBtn').click(function(e) {
            deleteData();
        });
    });

    function paginationSetting(){
        $('.page-link').click(function(e) {
            e.stopImmediatePropagation();
            e.preventDefault();
            console.log('hello');
            href = $(this).attr('href');
            numPage = href.substring(href.search("page")+5);
            $('#page').val(numPage);
            fetchData();
        });
    }

    // Search dữ liệu
    function fetchData() {
        var fmData = $('#documentForm').serialize();
        $.ajax({
            url: '{{route("api.document.index")}}',
            type: 'GET',
            dataType: "json",
            data: fmData,
            success: function (res, status) {
                if (res.status == 200){
                    $('#documentAjax').html(res.data);
                    // Cài đặt lại phân trang
                    paginationSetting()
                } else {
                    alert(res.errors[0]);
                }
            }
        });
    }

    // Chèn dữ liệu
    function insertData() {
        var fmData = $('#addForm').serializeArray();
        $.ajax({
            url: '{{route("api.document.store")}}',
            type: 'POST',
            dataType: "json",
            data: fmData,
            success: function (res, status) {
                if (res.status == 200){
                    $('#documentAjax').html(res.data);
                    // Cài đặt lại phân trang
                    paginationSetting();
                    // Clear bỏ các insert đã hoàn thành
                    clearInsert();
                } else{
                    alert(res.errors[0]);
                }
            }
        });
        $('#addModal').modal('hide');
    }

    // Chỉnh sửa dữ liệu dữ liệu
    function updateData() {
        var fmData = $('#updateForm').serializeArray();
        $.ajax({
            url: '{{route("api.document.update")}}',
            type: 'POST',
            dataType: "json",
            data: fmData,
            success: function (res, status) {
                if (res.status == 200){
                    $('#documentAjax').html(res.data);
                    // Cài đặt lại phân trang
                    paginationSetting()
                } else{
                    alert(res.errors[0]);
                }
            }
        });
        $('#deleteDocument').modal('hide');
        $('#editModal').modal('hide');
    }

    function clearInsert(){
        $("#name_add").val('');
        $("#type_add").val('');
        $("#category_id_add").val(0);
        $("#tag_id_add").val(0);
        $("#link_add").val('');
        $("#note_add").val('');
    }

    // Xóa dữ liệu dữ liệu
    function deleteData() {
        var id = $("#id_edit").val();
        $.ajax({
            url: '{{route("api.document.destroy")}}',
            type: 'POST',
            dataType: "json",
            data: {
                "_token": "{{ csrf_token() }}",
                "id": id
            },
            success: function (res, status) {
                if (res.status == 200){
                    $('#documentAjax').html(res.data);
                    // Cài đặt lại phân trang
                    paginationSetting()
                } else{
                    alert(res.errors[0]);
                }
            }
        });
        $('#deleteDocument').modal('hide');
        $('#editModal').modal('hide');
    }


    function setDocumentEdit(id) {
        $('#id_edit').val(id);
        $('#name_edit').val($("#td_name_" + id).text());
        $('#link_edit').val($("#td_link_" + id).text());
        $('#type_edit').val($("#td_type_" + id).html());
        $('#category_id_edit').val($("#td_category_id_" + id).text());
        $('#category_id_edit').select2();
        tag = $("#td_tag_id_" + id).text().split(",").filter(Boolean);
        $('#tag_id_edit').val(tag);
        $('#tag_id_edit').select2();
        $('#note_edit').val($("#td_note_" + id).text());
    }

    function viewNote(id, isShow){
        if(isShow){
            $("#view_note_" + id).attr("class","text-muted font-11 mb-0");
        } else {
            $("#view_note_" + id).attr("class","d-none");
        }
    }

    var htmlValue = '';
    function importBookmark(){
        $.get("{{URL::to('/')}}/bookmarks_4_28_21.html", function(data) {
            htmlValue= data;
            htmlValue = $.parseHTML(htmlValue);
        }, 'html');
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

</script>

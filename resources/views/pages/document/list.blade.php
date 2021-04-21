<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-0 header-title">Danh sách bài đăng</h5>
                <div class="table-responsive">
                    <table class="table mb-0 table-centered">
                        <thead>
                        <tr>
                            <th>Chuyên mục</th>
                            <th>Tài liệu</th>
                            <th>Liên kết</th>
                            <th>Tag</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(0 != sizeof($data['documents']))
                        @foreach ($data['documents'] as $document)
                            <tr>
                                <td>
                                    <img src="{{URL::to('/')}}/assets/images/widgets/project1.jpg" alt="" class="rounded-circle thumb-xs mr-1">
                                    {{ $document->category_name }}
                                </td>
                                <td>{{ $document->name }}</td>
                                <td>{{ $document->link }}</td>
                                <td>{{ $document->tag }}</td>
                                <td>
                                    <span onclick="setDocumentEdit('{{$document->id}}')" class="badge badge-soft-secondary"  data-toggle="modal" data-target="#editModal" data-animation="fade" >
                                        <i class="las la-pen text-primary font-18"></i>
                                    </span>
                                    <span onclick="setElementValue('#idDelete', '{{ route('document.destroy', ['id'=> $document->id]) }}')" data-toggle="modal" data-target="#deleteAlert" data-animation="fade" class="badge badge-soft-secondary">
                                        <i class="las la-trash-alt text-danger font-18"></i>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                        @else
                        @include('pages.emptydata')
                        @endif
                        </tbody>
                    </table><!--end /table-->
                </div><!--end /tableresponsive-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div>
</div>

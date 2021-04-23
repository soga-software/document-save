<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-0 header-title">Danh sách tag</h5>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th colspan="2" >ID</th>
                                <th colspan="6" >Tên tag</th>
                                <th colspan="4" >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(0 != sizeof($data['tags']))
                        @foreach ($data['tags'] as $tag)
                            <tr>
                                <td colspan="2" id="td_id_{{ $tag->id }}">{{ $tag->id }}</td>
                                <td colspan="6" id="td_tag_name_{{ $tag->id }}">{{ $tag->tag_name }}</td>
                                <td colspan="4">
                                    <span onclick="setTagEdit('{{$tag->id}}')" class="badge badge-soft-info"  data-toggle="modal" data-target="#editModal" data-animation="fade" >
                                        <i class="las la-pen text-primary font-18"></i>
                                    </span>
                                    <span onclick="setElementValue('#idDelete', '{{ route('tag.destroy', ['id'=> $tag->id]) }}')" data-toggle="modal" data-target="#deleteAlert" data-animation="fade" class="badge badge-soft-info">
                                        <i class="las la-trash-alt text-danger font-18"></i>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                        @else
                        @include('pages.emptydata')
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {{$data['tags']->links("pagination::bootstrap-4")}}
    </div>
</div>

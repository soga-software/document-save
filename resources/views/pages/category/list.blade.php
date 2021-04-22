<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-0 header-title">Danh sách chuyên mục</h5>
                <div class="table-responsive">
                    <table class="table mb-0 table-centered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Icon</th>
                                <th>Chuyên mục</th>
                                <th>Ghi chú</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(0 != sizeof($data['categories']))
                        @foreach ($data['categories'] as $category)
                            <tr>
                                <td id="td_id_{{ $category->id }}">{{ $category->id }}</td>
                                <td>
									<span id="td_icon_{{ $category->id }}" class="d-none">{{ $category->icon }}</span>
									{!! $category->icon !!}
								</td>
                                <td id="td_category_name_{{ $category->id }}">{{ $category->category_name }}</td>
                                <td id="td_note_{{ $category->id }}">{{ $category->note }}</td>
                                <td>
                                    <span onclick="setCategoryEdit('{{$category->id}}')" class="badge badge-soft-success"  data-toggle="modal" data-target="#editModal" data-animation="fade" >
                                        <i class="las la-pen text-primary font-18"></i>
                                    </span>
                                    <span onclick="setElementValue('#idDelete', '{{ route('category.destroy', ['id'=> $category->id]) }}')" data-toggle="modal" data-target="#deleteAlert" data-animation="fade" class="badge badge-soft-success">
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
        {{$data['categories']->links("pagination::bootstrap-4")}}
    </div>
</div>

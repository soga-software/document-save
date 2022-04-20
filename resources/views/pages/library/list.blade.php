<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>
                                {{-- <th>ID</th> --}}
                                <th>Website</th>
                                <th>Chú thích</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(0 != sizeof($data['libraries']))
                        @foreach ($data['libraries'] as $library)

                            <tr>
                                <td class="d-none" id="td_id_{{ $library->id }}">{{ $library->id }}</td>
                                <td class="d-none" id="td_link_{{ $library->id }}">{{ $library->link }}</td>
                                <td class="d-none" id="td_note_{{ $library->id }}">{{ $library->note }}</td>
                                <td class="d-none" id="td_library_name_{{ $library->id }}">{{ $library->library_name }}</td>
                                <td>
                                    <a href="{{ $library->link }}" target="_blank">
                                        {{ $library->library_name }}
                                    </a>
                                </td>
                                <td>{{ $library->note }}</td>
                                <td>
                                    <span onclick="setLibraryEdit('{{$library->id}}')" class="badge badge-soft-success"  data-toggle="modal" data-target="#editModal" data-animation="fade" >
                                        <i class="las la-pen text-primary font-18"></i>
                                    </span>
                                    <span onclick="setElementValue('#idDelete', '{{ route('library.destroy', ['id'=> $library->id]) }}')" data-toggle="modal" data-target="#deleteAlert" data-animation="fade" class="badge badge-soft-success">
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
        {{$data['libraries']->links("pagination::bootstrap-4")}}
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-0 header-title">Danh sách bài đăng</h5>
                <div class="table-responsive">
                    <table class="table mb-0 table-centered">
                        <thead>
                            <tr>
                                <th><i class="fas fa-key"></i></th>
                                <th><i class="far fa-bookmark"></i></th>
                                <th><i class="fas fa-list"></i></th>
                                <th><i class="fas fa-tags"></i></th>
                                <th><i class="fab fa-affiliatetheme"></i></th>
                                <th><i class="fas fa-link"></i></th>
                                <th class="text-center"><i class="fas fa-ellipsis-v"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(0 != sizeof($data['documents']))
                        @foreach ($data['documents'] as $document)
                            <tr>
                                <td id="td_id_{{ $document->id }}">{{ $document->id }}</td>
                                <td id="td_name_{{ $document->id }}">{{ $document->name }}</td>
                                <td>
                                    <span id="td_category_id_{{ $document->id }}" class="d-none">{{ $document->category_id}}</span>
                                    <img src="{{URL::to('/')}}/assets/images/logo.png" alt="" class="rounded-circle thumb-xs mr-1">
                                    {{ $document->category_name }}
                                </td>
                                <td>
                                    <span id="td_tag_id_{{ $document->id }}" class="d-none">{{ $document->tag_id}}</span>
                                    <span id="td_note_{{ $document->id }}" class="d-none">{{ $document->category_id}}</span>
                                    @foreach ($document->tagShow as $tag)
                                        <a href="{{route('document.index')}}/?name=&category_id=0&tag_id%5B%5D={{ $tag->id }}">
                                            <span class="badge badge-boxed  badge-soft-danger">{{ $tag->tag_name }}</span>
                                        </a>
                                    @endforeach
                                </td>
                                <td id="td_type_{{ $document->id }}">{{ $document->type }}</td>
                                <td>
                                    <a id="td_link_{{ $document->id }}" href="{{ $document->link }}">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </td>
                                <td class="text-center">
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

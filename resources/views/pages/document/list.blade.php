<?php use App\Http\Helpers\ColorBadgeHelper; ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body bg-light-alt">
                <h5 class="card-title mt-0">Danh sách bài đăng</h5>
                <div class="row">
                    @if(0 != sizeof($data['documents']))
                    @foreach ($data['documents'] as $document)
                    <div class="col-md-4">
                        <div class="card card-border m-1">
                            <div class="card-body p-3">
                                <span id="td_category_id_{{ $document->id }}" class="d-none">{{ $document->category_id}}</span>
                                <span id="td_tag_id_{{ $document->id }}" class="d-none">{{ $document->tag_id}}</span>
                                <span id="td_note_{{ $document->id }}" class="d-none">{{ $document->note}}</span>
                                <div class="card-subtitle font-14 d-flex justify-content-between align-items-center mh-50">
                                    <h6 class="m-0" onclick="viewNote('{{$document->id}}', true)">
                                        <span id="td_name_{{ $document->id }}">{{ $document->name }}</span>
                                    </h6>
                                    <div class="d-flex justify-content-end align-items-center">
                                        <span class="badge badge-soft-{{ ColorBadgeHelper::changeColerBadge($document->type)}} mr-2" id="td_type_{{ $document->id }}">{{ $document->type }}</span>
                                        <a class="inline" id="td_link_{{ $document->id }}" target="_blank" href="{{ $document->link }}">
                                            {!! $document->category_icon!!}
                                        </a>
                                    </div>
                                </div>
                                <p class="d-none" id="view_note_{{ $document->id }}" onclick="viewNote('{{$document->id}}', false)">{{ $document->note }}</p>
                                <div class="d-flex justify-content-between pt-1">
                                    <div class="d-flex justify-content-start">
                                    @foreach ($document->tagShow as $tag)
                                        <a class="mr-1" href="{{route('document.index')}}/?name=&category_id=0&tag_id%5B%5D={{ $tag->id }}">
                                            <span class="badge badge-boxed badge-soft-info">{{ $tag->tag_name }}</span>
                                        </a>
                                    @endforeach
                                    </div>
                                    <div>
                                        <a href="#" onclick="setDocumentEdit('{{$document->id}}')" class="pl-4 pr-1 text-secondary" data-toggle="modal" data-target="#editModal" data-animation="fade" >
                                            <i class="las la-pen font-18"></i>
                                        </a>
                                        <a href="#" onclick="setElementValue('#idDelete', '{{ route('document.destroy', ['id'=> $document->id]) }}')" class="text-danger" data-toggle="modal" data-target="#deleteAlert" data-animation="fade">
                                            <i class="las la-trash-alt font-18"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    @include('pages.emptydata')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {{$data['documents']->links("pagination::bootstrap-4")}}
    </div>
</div>

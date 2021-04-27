<?php use App\Http\Helpers\ColorBadgeHelper; ?>
<style lang="css">
    .navigation-menu > li a:hover {
        color: #fff;
        background-color: #ec2a35;
        border-color: #eb1e2a;
    }
</style>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body bg-light">
                <h5 class="card-title mt-0">Danh sách bài đăng</h5>
                <div class="row">
                    @if(0 != sizeof($data['documents']))
                    @foreach ($data['documents'] as $key => $document)
                    <div class="col-md-12">
                        <div class="card card-border m-1">
                            <div class="card-body p-2">
                                <span id="td_category_id_{{ $document->id }}" class="d-none">{{ $document->category_id}}</span>
                                <span id="td_tag_id_{{ $document->id }}" class="d-none">{{ $document->tag_id}}</span>
                                <span id="td_note_{{ $document->id }}" class="d-none">{{ $document->note}}</span>
                                <span id="td_type_{{ $document->id }}" class="d-none">{!! $document->type !!}</span>
                                <div class="card-subtitle font-14 d-flex justify-content-between align-items-center mh-50">
                                    <h6 class="m-0" onclick="viewNote('{{$document->id}}', true)">
                                        <strong class="mr-1 ">{{($data['documents']->currentPage()-1)*50 + $key +1}}.</strong>
                                        <span class="mr-1" id="td_name_{{ $document->id }}"> {{ $document->name }}</span>
                                        <span>{!! $document->type !!}</span>
                                    </h6>
                                    <div class="d-flex justify-content-end align-items-center">
                                        <div class="d-flex justify-content-start mr-1">
                                        @foreach ($document->tagShow as $tag)
                                            <a class="mr-1" href="{{route('document.index')}}/?name=&category_id=0&tag_id%5B%5D={{ $tag->id }}">
                                                <span class="badge badge-boxed badge-soft-secondary">{{ $tag->tag_name }}</span>
                                            </a>
                                        @endforeach
                                        </div>
                                        <a class="mr-2" id="td_link_{{ $document->id }}" target="_blank" href="{{ $document->link }}">
                                            {!! $document->category_icon!!}
                                        </a>
                                        <a href="#" onclick="setDocumentEdit('{{$document->id}}')" class="pr-1 text-info" data-toggle="modal" data-target="#editModal" data-animation="fade" >
                                            <i class="fas fa-eye-dropper font-12"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="d-none" id="view_note_{{ $document->id }}" onclick="viewNote('{{$document->id}}', false)">{{ $document->note }}</p>
                                <div class="d-flex justify-content-between pt-1">
                                    <!-- <div class="d-flex justify-content-start">
                                    @foreach ($document->tagShow as $tag)
                                        <a class="mr-1" href="{{route('document.index')}}/?name=&category_id=0&tag_id%5B%5D={{ $tag->id }}">
                                            <span class="badge badge-boxed badge-soft-secondary">{{ $tag->tag_name }}</span>
                                        </a>
                                    @endforeach
                                    </div> -->
                                    <!-- <div>
                                        <a href="#" onclick="setDocumentEdit('{{$document->id}}')" class="pr-1 text-info" data-toggle="modal" data-target="#editModal" data-animation="fade" >
                                            <i class="fas fa-dot-circle font-12"></i>
                                        </a>
                                    </div> -->
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

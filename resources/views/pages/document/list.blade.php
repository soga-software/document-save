<div id="documentAjax">
    <?php use App\Http\Helpers\ColorBadgeHelper; ?>
    <style lang="css">
        .navigation-menu > li a:hover {
            color: #fff !important;
            background-color: #ec2a35;
            border-color: #eb1e2a;
        }

        .card-h {
            overflow: hidden;
            text-overflow: ellipsis;
            height: min-content;
            display: inline-block;
            /* padding-top: 10px; */
            /* font-weight: normal; */
            font-size: 11px;
        }
        .tag-h{
            height: 30px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
    <div class="row">
        <div class="col-12">
            <div class="card mt-4">
                <div class="card-body bg-light">
                    <div class="row">
                        <div class="col-md-12">
                            {{$data['documents']->links("pagination::bootstrap-4")}}
                        </div>
                        @if(0 != sizeof($data['documents']))
                        @foreach ($data['documents'] as $key => $document)
                        <div class="col-md-12">
                            <div class="card card-border m-1">
                                <div class="card-body p-2">
                                    <span id="td_category_id_{{ $document->id }}" class="d-none">{{ $document->category_id}}</span>
                                    <span id="td_tag_id_{{ $document->id }}" class="d-none">{{ $document->tag_id}}</span>
                                    <span id="td_note_{{ $document->id }}" class="d-none">{{ $document->note}}</span>
                                    <span id="td_link_{{ $document->id }}" class="d-none">{{ $document->link }}</span>
                                    <span id="td_type_{{ $document->id }}" class="d-none">{!! $document->type !!}</span>
                                    <div class="card-subtitle font-14">
                                        <div class="d-flex">
                                            <h6 class="card-h mr-auto" onclick="viewNote('{{$document->id}}', true)">
                                                <a id="td_name_{{ $document->id }}" target="_blank" href="{{ $document->link }}"> {{ $document->name }}</a>
                                            </h6>
                                            <div class="d-flex justify-content-end">
                                                <div class="d-flex justify-content-start align-items-center ">
                                                    <span class="mr-2" >{!! $document->type !!}</span>
                                                    @foreach ($document->tagShow as $tag)
                                                        <a class="mr-1" href="{{route('document.index')}}/?name=&category_id=0&tag_id%5B%5D={{ $tag->id }}">
                                                            <span class="badge badge-boxed badge-soft-secondary">{{ $tag->tag_name }}</span>
                                                        </a>
                                                    @endforeach
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center ">
                                                    <a class="mr-2" href="{{route('document.index')}}/?name=&category_id={{$document->category_id}}&tag_id%5B%5D=">
                                                        {!! $document->category_icon!!}
                                                    </a>
                                                    <a href="#" onclick="setDocumentEdit('{{$document->id}}')" class="pr-1 text-info" data-toggle="modal" data-target="#editModal" data-animation="fade" >
                                                        <i class="fas fa-eye-dropper font-12"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="d-none" id="view_note_{{ $document->id }}" onclick="viewNote('{{$document->id}}', false)">{{ $document->note }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        @include('pages.emptydata')
                        @endif
                        <div class="col-md-12 pt-2">
                            {{$data['documents']->links("pagination::bootstrap-4")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

    </div>
</div>

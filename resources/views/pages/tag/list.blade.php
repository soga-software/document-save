<div class="row">
    <div class="col-12">
        <div class="card mt-4">
            <div class="card-body bg-light">
                <div class="row">
                    @if(0 != sizeof($data['tags']))
                    @foreach ($data['tags'] as $key => $tag)
                    <div class="col-md-4">
                        <div class="card card-border m-1">
                            <div class="card-body">
                                <div class="card-subtitle font-14 d-flex justify-content-between align-items-center mh-50">
                                    <h6 class="m-0" onclick="viewNote('{{$tag->id}}', true)">
                                        <span class="mr-2 font-10" id="td_id_{{ $tag->id }}">{!! $tag->id !!}</span>
                                        <span class="mr-2">|</span>
                                        <a href="{{route('document.index')}}/?name=&category_id=0&tag_id%5B%5D={{ $tag->id }}')}}" class="text-blue" id="td_tag_name_{{ $tag->id }}"> {{ $tag->tag_name }}</span>
                                    </h6>
                                    <div class="d-flex justify-content-end align-items-center">
                                        <a onclick="setTagEdit('{{$tag->id}}')" class="mr-3 text-info"  data-toggle="modal" data-target="#editModal" data-animation="fade" >
                                            <i class="fas fa-eye-dropper font-12 text-primary"></i>
                                        </a>
                                        <a onclick="setElementValue('#idDelete', '{{ route('tag.destroy', ['id'=> $tag->id]) }}')" data-toggle="modal" data-target="#deleteAlert" data-animation="fade">
                                            <i class="fas fa-trash font-12 text-danger"></i>
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
        {{$data['tags']->links("pagination::bootstrap-4")}}
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card mt-4">
            <div class="card-body bg-light">
                <div class="row">
                    @if(0 != sizeof($data['categories']))
                    @foreach ($data['categories'] as $key => $category)
                    <div class="col-md-4">
                        <div class="card card-border m-1">
                            <div class="card-body">
                                <span id="td_note_{{ $category->id }}" class="d-none">{{ $category->note}}</span>
                                <div class="card-subtitle font-14 d-flex justify-content-between align-items-center mh-50">
                                    <h6 class="m-0" onclick="viewNote('{{$category->id}}', true)">
                                        <span id="td_icon_{{ $category->id }}" class="d-none">{{ $category->icon }}</span>
                                        <span class="mr-2 font-10 mw-20" id="td_id_{{ $category->id }}">{!! $category->id !!}</span>
                                        <span class="mr-2">|</span>
                                        <a href="{{route('document.index')}}/?name=&type=&category_id={{ $category->id }}" class="text-blue" id="td_category_name_{{ $category->id }}">{{ $category->category_name }}</a>
                                    </h6>
                                    <div class="d-flex justify-content-end align-items-center">
                                        {!! $category->icon !!}
                                        <a onclick="setCategoryEdit('{{$category->id}}')" class="ml-3 mr-3 text-info"  data-toggle="modal" data-target="#editModal" data-animation="fade" >
                                            <i class="fas fa-eye-dropper font-12 text-primary"></i>
                                        </a>
                                        <a onclick="setElementValue('#idDelete', '{{ route('category.destroy', ['id'=> $category->id]) }}')" data-toggle="modal" data-target="#deleteAlert" data-animation="fade">
                                            <i class="fas fa-trash font-12 text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="text-info font-11 mb-0" id="td_note_{{ $category->id }}">{{ $category->note }}</p>
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
        {{$data['categories']->links("pagination::bootstrap-4")}}
    </div>
</div>

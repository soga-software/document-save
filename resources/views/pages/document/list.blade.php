<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mt-0">Danh sách bài đăng</h5>
				<div class="row">
					@if(0 != sizeof($data['documents']))
					@foreach ($data['documents'] as $document)
					<div class="col-md-4">
						<div class="card card-border">
							<div class="card-body">
								<span id="td_category_id_{{ $document->id }}" class="d-none">{{ $document->category_id}}</span>
								<span id="td_tag_id_{{ $document->id }}" class="d-none">{{ $document->tag_id}}</span>
								<span id="td_note_{{ $document->id }}" class="d-none">{{ $document->category_id}}</span>
								<p class="card-subtitle font-14 mb-2">
									<span id="td_name_{{ $document->id }}">{{ $document->name }}</span>
									<span class="badge badge-boxed  badge-soft-info"id="td_type_{{ $document->id }}">
										{{ $document->type }}
									</span>
								</p>
								<p class="card-text text-muted mb-0">
									{{ $document->note }}
								</p>
								<div class="d-flex justify-content-around">
									<a class="inline" id="td_link_{{ $document->id }}" target="_blank" href="{{ $document->link }}">
										{!! $document->category_icon!!}
									</a>
									@foreach ($document->tagShow as $tag)
										<a class="d-flex align-items-center" href="{{route('document.index')}}/?name=&category_id=0&tag_id%5B%5D={{ $tag->id }}">
											<span class="badge badge-boxed  badge-soft-info">{{ $tag->tag_name }}</span>
										</a>
									@endforeach
									<a href="#" onclick="setDocumentEdit('{{$document->id}}')" class="pl-4 pr-1 text-secondary d-flex align-items-center" data-toggle="modal" data-target="#editModal" data-animation="fade" >
										<i class="las la-pen font-18"></i>
									</a>
									<a href="#" onclick="setElementValue('#idDelete', '{{ route('document.destroy', ['id'=> $document->id]) }}')" class="text-danger	 d-flex align-items-center" data-toggle="modal" data-target="#deleteAlert" data-animation="fade">
										<i class="las la-trash-alt font-18"></i>
									</a>
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

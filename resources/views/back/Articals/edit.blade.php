<!-- Modal -->
<div class="modal fade" id="edit{{$artical->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('Articals.edit_artical') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="{{ route('artical.update', 'test') }}" method="post" enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input id="id" type="hidden" name="id" class="form-control"
                                   value="{{ $artical->id }}">
                            <label for="Name" class="mr-sm-2">{{ trans('Articals.title_ar') }}
                                :</label>
                            <input id="Name" type="text" name="title" class="form-control"
                                   {{--     mcamara pakage --}}
                                   value="{{ $artical->getTranslation('title', 'ar') }}"
                                   required>

                        </div>
                        <div class="col">
                            <label for="Name_en"
                                   class="mr-sm-2">{{ trans('Articals.title_en') }}
                                :</label>
                            <input type="text" class="form-control"
                                   value="{{ $artical->getTranslation('title', 'en') }}"
                                   name="title_en" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input id="id" type="hidden" name="id" class="form-control"
                                   value="{{ $artical->id }}">
                            <label for="Name" class="mr-sm-2">{{ trans('Articals.description_ar') }}
                                :</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                                      rows="3" > {{ $artical->getTranslation('description', 'ar') }} </textarea>

                        </div>
                        <div class="col">
                            <label for="Name_en"
                                   class="mr-sm-2">{{ trans('Articals.description_en') }}
                                :</label>
                            <textarea class="form-control" name="description_en" id="exampleFormControlTextarea1"
                                      rows="3"  >{{ $artical->getTranslation('description', 'en') }}  </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label
                            for="exampleFormControlTextarea1">{{ trans('Articals.image') }}
                            :</label>
                        <input type="file" name="image"   value="{{ old('image', $artical->image) }}" class="form-control">
                        <img src="{{ asset('images_admin/'.$artical->image) }}" style=" margin-top: 10px; width: 200px; height: 150px;" alt="">
                    </div>
                    <br><br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{ trans('Articals.close') }}</button>
                        <button type="submit"
                                class="btn btn-success">{{ trans('Articals.sure') }}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

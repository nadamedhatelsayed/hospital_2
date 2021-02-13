<div class="modal fade" id="delete{{ $artical->id }}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                    id="exampleModalLabel">
                    {{ trans('Articals.delete') }}
                </h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('artical.destroy','test')}}" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    {{ trans('Articals.warning') }}
                    <input id="id" type="hidden" name="id" class="form-control"
                           value="{{ $artical->id }}">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{ trans('Articals.close') }}</button>
                        <button type="submit"
                                class="btn btn-danger">{{ trans('Articals.sure') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


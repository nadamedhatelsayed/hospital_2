<div class="modal" id="modaldemo8">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">{{ trans('Articals.add_artical') }}</h6>
                <button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('artical.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col">
                            <label for="exampleInputEmail1">  {{ trans('Articals.title_en') }}</label>
                            <input type="text" class="form-control" name="title_en">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1">  {{ trans('Articals.title_ar') }}</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">  {{ trans('Articals.image') }}</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">  {{ trans('Articals.description_en') }}</label>
                        <textarea class="form-control" id="description" name="description_en" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">{{ trans('Articals.description_ar') }}</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">{{ trans('Articals.sure') }}</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('Articals.close') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Basic modal -->


</div>

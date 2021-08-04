<div class="modal fade" id="crudModal" tabindex="-1" aria-labelledby="crudModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-light" id="titleCrudModal"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">{{__("agenda.label_name")}}</label>
                        <div class="col-sm-10">
                            <input name="name" value="" type="text" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" value="" type="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tell" class="col-sm-2 col-form-label">Tell</label>
                        <div class="col-sm-10">
                            <input name="tell" value="" type="text" class="form-control" id="tell">
                        </div>
                    </div>
                    <div class="text-end">
                        <button id="cancel" type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__("agenda.cancel")}}</button>
                        <button id="send" type="submit" class="btn">{{__("agenda.send")}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

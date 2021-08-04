<div class="btn-toolbar" role="toolbar" aria-label="Button groups">
    <div class="btn-group me-2" role="group" aria-label="Group CRUD">

        <button type="button"
                data-action="show"
                data-model="{{$model}}"
                data-entity="{{$entity}}"
                class="btn btn-outline-light mx-1"
                data-bs-toggle="modal"
                data-bs-target="#crudModal"
                >
            <i class="bi-eye"></i>
        </button>

        <button type="button"
                data-action="edit"
                data-model="{{$model}}"
                data-entity="{{$entity}}"
                class="btn btn-outline-primary mx-1"
                data-bs-toggle="modal"
                data-bs-target="#crudModal"
                >
            <i class="bi-pencil-square"></i>
        </button>

        <button type="button"
                data-action="destroy"
                data-model="{{$model}}"
                data-entity="{{$entity}}"
                class="btn btn-outline-danger mx-1"
                data-bs-toggle="modal"
                data-bs-target="#crudModal"
                >
            <i class="bi-person-x-fill"></i>
        </button>
    </div>
</div>

$(document).ready(function(){
    if($('#crudModal').length > 0) {
        crudModal($('#crudModal'));
    }

    if($('#tell').length > 0) {
        $('#tell').mask('(00) 0.0000-0000');
    }
});


const crudModal = (crudModal) => {

    const url = window.location.hostname;
    var form = crudModal.find('form');

    //Clear form
    const clearForm = () => {
        form.find('input').map((key, input)=>{
            if($(input).attr('type') !== 'hidden') {
                $(input).val('').removeAttr('disabled');
            }
        });
    }

    const setValueForm = (entity, disable = false) => {
        clearForm();
        form.find('input').map((key, input)=>{
            var input = $(input);
            if(entity[input.attr('name')] !== undefined
                && entity[input.attr('name')].length > 0) {
                //add values in form
                input.val(entity[input.attr('name')]);

                //disable inputs in form
                if(disable) {
                    input.attr('disabled', true);
                }
            }
        });
    }

    const formCreate = (model) => {
        clearForm();
        form.attr('method', 'POST');
        form.attr('action', "/"+model);
        form.find('#send').text('Save').attr('class','btn btn-success');
    }

    const formShow = (model, entity) => {
        form.attr('method', 'GET');
        form.attr('action', "/"+model+"/"+entity.id);
        form.find('#send').attr('class','d-none');
    }

    const formEdit = (model, entity) => {
        form.attr('method', 'POST');
        form.attr('action', "/"+model+"/"+entity.id);
        form.append('<input type="hidden" name="_method" value="PUT"/>');
        form.find('#send').text('Update').attr('class','btn btn-primary');
    }

    const formDestroy = (model, entity) => {
        form.attr('method', 'POST');
        form.attr('action', "/"+model+"/"+entity.id);
        form.append('<input type="hidden" name="_method" value="DELETE"/>');
        form.find('#send').text('Delete').attr('class','btn btn-danger');
    }

    const setForm = (button) => {
        const model = button.data("model");
        const action = button.data("action");
        const entity = action !== 'create'?JSON.parse(button.data("entity").replace(/&quot;/g,'"')):{};

        crudModal.find('.modal-title').text("Crud: "+ action + " " + model);

        switch(action) {
            case 'create':
                formCreate(model);
                break;
            case 'show':
                formShow(model, entity);
                setValueForm(entity, true);
                break;
            case 'edit':
                formEdit(model, entity);
                setValueForm(entity);
                break;
            case 'destroy':
                formDestroy(model, entity);
                setValueForm(entity, true);
                break;
        }
    }

    crudModal.bind('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = $(event.relatedTarget);
        setForm(button);
    })
}



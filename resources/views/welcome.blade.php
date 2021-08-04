<x-layout>
    @section('title', 'Home')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center">
                    <h3 class="text-dark">{{__("agenda.welcome")}}</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{__("agenda.checklist_task")}}</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="bi-check text-success "></i>
                            {{__("agenda.fields_of_crud")}}
                        </li>
                        <li class="list-group-item">
                            <i class="bi-check text-success"></i>
                            {{__("agenda.laravel_framework")}}
                        </li>
                        <li class="list-group-item">
                            <i class="bi-check text-success"></i>
                            {{__("agenda.experience_framework")}}
                        </li>
                        <li class="list-group-item">
                            <i class="bi-check text-success"></i>
                            {{__("agenda.delivery_in_github")}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-layout>

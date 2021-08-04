<x-layout>
    @section('title', 'Agendas')

    @if(empty($agendas->toArray()))
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center bg-dark">
                        <h3 class="text-light">CRUD Agendas</h2>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{__("agenda.no_registration_found")}}</h5>
                        <p class="card-text">{{__("agenda.create_first_contact")}}</p>
                        <button type="button"
                                data-action="create"
                                data-model="agendas"
                                class="btn btn-outline-success"
                                data-bs-toggle="modal"
                                data-bs-target="#crudModal">
                            <i class="bi-person-plus-fill"></i>
                            {{__("agenda.btn_add_contact")}}
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    @else
        <table class="table table-dark table-hover table-striped w-100">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__("agenda.label_name")}}</th>
                    <th scope="col"></th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Tell</th>
                    <th scope="col">{{__("agenda.label_actions")}}
                        <button type="button"
                                data-action="create"
                                data-model="agendas"
                                class="btn ms-3 btn-outline-success btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#crudModal">
                            <i class="bi-person-plus-fill"></i>
                        </button>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($agendas as $agenda)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td colspan="2">{{ $agenda->name }}</td>
                        <td>{{ $agenda->email }}</td>
                        <td>{{ mask($agenda->tell, '(##) #.####-####') }}</td>
                        <td>
                            <x-actions model="agendas" entity="{{$agenda->toJson()}}"/>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <x-modal />

</x-layout>

<x-app-layout>
    <div class="row">
        <div class="col-6 mx-auto py-3">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row align-items-baseline">
                        <div class="col-10">
                            <h4>Edit Ibadah {{ $worship->name }}</h4>
                        </div>
                        <div class="col-2">
                            <a href="{{ url('/') }}" class="btn btn-block btn-secondary">
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <h5 class="px-3">Skill</h5>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th class="fit">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($worship->skills as $requirement)
                                <tr>
                                    <td>{{ $requirement->name }}</td>
                                    <td class="fit">
                                        <a href="{{ route('conditions.edit', $requirement->pivot->id) }}"
                                            class="btn btn-primary mr-3">
                                            Edit Kriteria
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <div class="row">
        <div class="col-6 mx-auto py-3">
            <div class="card card-body">
                <div class="row align-items-baseline">
                    <div class="col-8">
                        <h4>Data Partisipan</h4>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('servants.create') }}" class="btn btn-block btn-primary mr-3">
                            Tambah
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="{{ url('/') }}" class="btn btn-block btn-secondary">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>

            <div class="table-responsive card">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="fit">ID</th>
                            <th>Nama</th>
                            <th>Skill</th>
                            <th class="fit">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($servants as $servant)
                            <tr>
                                <td class="fit">{{ $servant->id }}</td>
                                <td>{{ $servant->name }}</td>
                                <td>{{ $servant->skill->name }}</td>
                                <td class="fit">
                                    <a href="{{ route('servants.edit', $servant) }}" class="btn btn-secondary mr-3">
                                        Edit
                                    </a>
                                    <a href="{{ route('servant-criterias.index', $servant->id) }}" class="btn btn-primary mr-3">
                                        Kriteria
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

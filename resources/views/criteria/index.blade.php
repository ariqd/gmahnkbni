<x-app-layout>
    <div class="row">
        <div class="col-6 mx-auto py-3">
            <div class="card card-body">
                <div class="row align-items-baseline">
                    <div class="col-8">
                        <h4>Master Data Kriteria</h4>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('criterias.create') }}" class="btn btn-block btn-primary mr-3">
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
                            <th class="fit">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($criterias as $criteria)
                            <tr>
                                <td class="fit">{{ $criteria->id }}</td>
                                <td>{{ $criteria->name }}</td>
                                <td class="fit">
                                    <a href="{{ route('criterias.edit', $criteria) }}" class="btn btn-primary mr-3">
                                        Edit
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

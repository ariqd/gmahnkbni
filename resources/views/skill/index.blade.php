<x-app-layout>
    <div class="row">
        <div class="col-6 mx-auto py-3">
            <div class="card card-body">
                <div class="row align-items-baseline">
                    <div class="col-10">
                        <h4>Master Data Skill</h4>
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
                            <th>ID</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skills as $skill)
                            <tr>
                                <td>{{ $skill->id }}</td>
                                <td>{{ $skill->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

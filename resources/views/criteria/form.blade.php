<x-app-layout>
    <div class="row">
        <div class="col-6 mx-auto py-3">
            <div class="card card-body">
                <div class="row align-items-baseline">
                    <div class="col-10">
                        <h4>{{ @$criteria ? 'Edit' : 'Tambah' }} Kriteria</h4>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('criterias.index') }}" class="btn btn-block btn-secondary">
                            Kembali
                        </a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <form action="{{ @$criteria ? route('criterias.update', $criteria) : route('criterias.store') }}" method="POST">
                            @csrf
                            {{ @$criteria ? method_field('PUT') : '' }}
                            <div class="form-group">
                                <label for="name">Nama Kriteria</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ @$criteria ? @$criteria->name : '' }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

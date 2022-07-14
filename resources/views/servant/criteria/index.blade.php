@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-6 mx-auto py-3">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row align-items-baseline">
                        <div class="col-10">
                            <h4>{{ $servant->name }} - {{ $servant->skill->name }} - Edit Kriteria</h4>
                        </div>
                        <div class="col-2">
                            <a href="{{ route('servants.index') }}"
                                class="btn btn-block btn-secondary">
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body py-2">
                    <form action="{{ route('servant-criterias.update', $servant->id) }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <select class="custom-select select2" name="criteria_id">
                            <option value="">-- Pilih Kriteria --</option>
                            @foreach ($criterias as $criteria)
                                <option value="{{ $criteria->id }}">{{ $criteria->name }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary btn-block my-3">Tambah Kriteria</button>
                    </form>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th class="fit">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($servant->criterias as $criteria)
                                <tr>
                                    <td>{{ $criteria->name }}</td>
                                    <td class="fit">
                                        <form action="{{ route('servant-criterias.destroy', $servant->id) }}" method="POST">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <input type="hidden" name="criteria_id" value="{{ $criteria->id }}">
                                            <button type="submit" class="btn btn-secondary mr-3">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endpush

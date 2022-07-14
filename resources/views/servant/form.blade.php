<x-app-layout>
    <div class="row">
        <div class="col-6 mx-auto py-3">
            <div class="card card-body">
                <div class="row align-items-baseline">
                    <div class="col-10">
                        <h4>{{ @$servant ? 'Edit' : 'Tambah' }} Partisipan</h4>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('servants.index') }}" class="btn btn-block btn-secondary">
                            Kembali
                        </a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <form action="{{ @$servant ? route('servants.update', $servant) : route('servants.store') }}"
                            method="POST">
                            @csrf
                            {{ @$servant ? method_field('PUT') : '' }}
                            <div class="form-group">
                                <label for="name">Nama Partisipan</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ @$servant ? @$servant->name : '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Skill</label>
                                <select class="custom-select select2" name="skill_id" required>
                                    <option value="">-- Pilih Skill --</option>
                                    @foreach ($skills as $skill)
                                        <option value="{{ $skill->id }}" {{ @$servant->skill_id == $skill->id ? 'selected' : '' }}>{{ $skill->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

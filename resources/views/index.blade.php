<x-app-layout>
    <div class="row">
        <div class="col-6 mx-auto py-3">
            <div class="card card-body">
                <h4 class="text-center">Lihat Jadwal</h4>
                <div class="row mt-3">
                    <div class="col-6">
                        <a href="{{ route('worships.index') }}" class="btn btn-primary btn-block">
                            Jadwal Ibadah
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('schedule.index') }}" class="btn btn-primary btn-block">
                            Jadwal Partisipan
                        </a>
                    </div>
                </div>
            </div>
            @auth
                @if (auth()->user()->role->id < 3)
                    <div class="card card-body mt-3">
                        <h4 class="text-center">Ubah Jadwal</h4>
                        <div class="row mt-3">
                            <div class="col-12">
                                @foreach (auth()->user()->role->worship as $worship)
                                    <a href="{{ route('worships.show', $worship) }}" class="btn btn-secondary btn-block">
                                        Ubah Jadwal Ibadah {{ $worship->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @else
                    <div class="card card-body mt-3">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="text-center mb-3">Master Data</h4>
                                <a href="{{ route('servants.index') }}" class="btn btn-secondary btn-block">
                                    Partisipan
                                </a>
                                <a href="{{ route('skills.index') }}" class="btn btn-secondary btn-block">
                                    Skill
                                </a>
                                <a href="{{ route('criterias.index') }}" class="btn btn-secondary btn-block">
                                    Kriteria
                                </a>
                            </div>
                            <div class="col-6">
                                <h4 class="text-center mb-3">Edit Ibadah</h4>
                                @foreach ($worships as $worship)
                                    <a href="{{ route('worships.edit', $worship) }}" class="btn btn-secondary btn-block">
                                        {{ $worship->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            @endauth
        </div>
    </div>
</x-app-layout>

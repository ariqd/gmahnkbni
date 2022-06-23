<x-app-layout>
    <div class="row">
        <div class="col-6 mx-auto py-3">
            <div class="card card-body">
                <h4 class="text-center">Lihat Jadwal</h4>
                <div class="row mt-3">
                    <div class="col-6">
                        <a href="{{ route('worships.index') }}" class="btn btn-primary btn-block">
                            Lihat Jadwal Ibadah
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="#" class="btn btn-primary btn-block">
                            Lihat Jadwal Partisipan
                        </a>
                    </div>
                </div>
            </div>
            @auth
                <div class="card card-body mt-3">
                    <h4 class="text-center">Ubah Jadwal</h4>
                    <div class="row mt-3">
                        <div class="col-12">
                            @foreach(auth()->user()->role->worship as $worship)
                                <a href="{{ route('worship.edit', $worship) }}" class="btn btn-secondary btn-block">
                                    Ubah Jadwal Ibadah {{ $worship->nama }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</x-app-layout>

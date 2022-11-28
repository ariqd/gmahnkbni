<x-app-layout>
    <div class="row">
        <div class="col-6 mx-auto py-3">
            <div class="card card-body">
                <h4 class="text-center">Lihat Jadwal Partisipan</h4>
                <div class="row mt-3">
                    <div class="col-12">
                        @foreach ($worships as $worship)
                            <a href="{{ route('schedule.show', $worship->id) }}" class="btn btn-primary btn-block">
                                Ibadah {{ $worship->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

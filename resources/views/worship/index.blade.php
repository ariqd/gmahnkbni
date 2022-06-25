<x-app-layout>
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card mt-3">
                <div class="card-body">
                    <h4 class="text-center">Jadwal Ibadah Rutin</h4>
                    <div class="mt-3">
                        <table class="table table-borderless">
                            <tr>
                                <td>
                                    <h4><b>Rabu Malam</b></h4>
                                    <h5>Ibadah Rabu Malam:</h5>
                                    <p>19.30 WIB - Selesai</p>
                                </td>
                                <td rowspan="2">
                                    <h4><b>Sabtu</b></h4>
                                    <h5>Sekolah Sabat:</h5>
                                    <p>08.50 WIB - 11.50 WIB</p>

                                    <h5>Khotbah:</h5>
                                    <p>12.00 WIB - 13.00 WIB</p>

                                    <h5>Pemuda Advent:</h5>
                                    <p>16.30 WIB - 18.00 WIB</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4><b>Jumat Malam</b></h4>
                                    <h5>Ibadah Vesper:</h5>
                                    <p>19.30 WIB - Selesai</p>
                                </td>
                            </tr>
                        </table>
                        {{-- @foreach($worships as $worship)
                            <a href="{{ route('worships.show', $worship) }}" class="btn btn-primary btn-block">
                                Jadwal Ibadah {{ $worship->name }}
                            </a>
                        @endforeach --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

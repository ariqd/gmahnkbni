<x-app-layout>
    <div class="card mt-3">
        <div class="card-body">
            <div class="row align-items-baseline">
                <div class="col-8">
                    <h4>Ubah Jadwal Ibadah {{ $worship->name }}</h4>
                    <form class="form-inline" method="GET">
                        <label class="my-1 mr-2" for="quarter">Triwulan ke-</label>
                        <select class="custom-select my-1 mr-sm-2" id="quarter" name="quarter">
                            <option value="1" @if ($quarter == 1) selected @endif>1</option>
                            <option value="2" @if ($quarter == 2) selected @endif>2</option>
                            <option value="3" @if ($quarter == 3) selected @endif>3</option>
                            <option value="4" @if ($quarter == 4) selected @endif>4</option>
                        </select>

                        <label class="my-1 mr-2" for="quarter">Tahun </label>
                        <select class="custom-select my-1 mr-sm-2" id="quarter" name="year">
                            @for ($i = 2022; $i < 2028; $i++)
                                <option value="{{ $i }}" @if ($year == $i) selected @endif>{{ $i }}</option>
                            @endfor
                        </select>

                        <button type="submit" class="btn btn-primary my-1">Ganti</button>
                    </form>
                </div>
                <div class="col-2">
                    <a href="{{ url('/') }}" class="btn btn-block btn-secondary">
                        Kembali
                    </a>
                </div>
                <div class="col-2">
                    <a href="#" class="btn btn-block btn-primary">
                        Simpan Jadwal
                    </a>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Pianist</th>
                        <th>MC</th>
                        <th>Ayat Inti & Doa Buka</th>
                        <th>Mission</th>
                        <th>Lagu Pujian</th>
                        <th>Diskusi Sekolah Sabat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($saturdays as $month => $days)
                        <tr>
                            <td class="text-center" colspan="7">{{ $month }}</td>
                        </tr>
                        @foreach ($days as $day)
                            <tr>
                                <td>{{ $day }}</td>
                                <td>Annice</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

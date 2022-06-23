<x-app-layout>
    <div class="card mt-3">
        <div class="card-body">
            <div class="row align-items-baseline">
                <div class="col-8">
                    <h4>Ubah Jadwal Ibadah {{ $worship->nama }}</h4>
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
                    <th></th>
                    <th>Pianist</th>
                    <th>MC</th>
                    <th>Ayat Inti & Doa Buka</th>
                    <th>Mission</th>
                    <th>Lagu Pujian</th>
                    <th>Diskusi Sekolah Sabat</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center" colspan="7">Juli</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Annice</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Elsa</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Bianca</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-center" colspan="7">Agustus</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Annice</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Elsa</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Bianca</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-center" colspan="7">September</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Annice</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Elsa</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Bianca</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

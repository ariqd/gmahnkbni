@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-body pb-0">
            <div class="row align-items-baseline">
                <div class="col-10">
                    <h4>Ubah Jadwal Ibadah {{ $worship->name }}</h4>
                    <form class="form-inline" method="GET">
                        <label class="my-1 mr-2" for="quarter">Triwulan ke-</label>
                        <select class="custom-select my-1 mr-sm-2" id="quarter" name="quarter">
                            <option value="1" @if ($quarter == 1) selected @endif>1</option>
                            <option value="2" @if ($quarter == 2) selected @endif>2</option>
                            <option value="3" @if ($quarter == 3) selected @endif>3</option>
                            <option value="4" @if ($quarter == 4) selected @endif>4</option>
                        </select>

                        <label class="my-1 mr-2" for="year">Tahun </label>
                        <select class="custom-select my-1 mr-sm-2" id="year" name="year">
                            @for ($i = 2022; $i < 2028; $i++)
                                <option value="{{ $i }}" @if ($year == $i) selected @endif>
                                    {{ $i }}</option>
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
            </div>
        </div>

        <hr>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        @foreach ($worship->skills as $skill)
                            <th>{{ $skill->name }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($months as $month => $days)
                        <tr>
                            <td class="text-center" colspan="{{ $worship->skills->count() + 1 }}">
                                {{ $month }}
                            </td>
                        </tr>
                        @foreach ($days as $day)
                            <tr>
                                <td>{{ $day }}</td>
                                @foreach ($worship->skills as $skill)
                                    <td>
                                        @php
                                            $date = Carbon\Carbon::parse($month . ' ' . $day . ', ' . date('Y'));
                                            $servant = $worship
                                                ->servants()
                                                ->wherePivot('worship_id', $worship->id)
                                                ->wherePivot('skill_id', $skill->id)
                                                ->wherePivot('assign_date', $date)
                                                ->first();
                                            echo @$servant->name;
                                        @endphp
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $(".select_servant").change(function() {
                const skill_id = $(this).data('skill');
                let count = $(this).data('count');
                let countPlus = count + 1;
                let countMinus = count - 1;
                const value = $(this).val();

                let next = $('.select_servant[data-skill="' + skill_id + '"][data-count="' + countPlus +
                    '"]');
                let prev = $('.select_servant[data-skill="' + skill_id + '"][data-count="' + countMinus +
                    '"]');

                if (value === prev.val()) {
                    $('.help[data-skill="' + skill_id + '"][data-count="' + count + '"]').removeClass(
                        'd-none');
                } else {
                    $('.help[data-skill="' + skill_id + '"][data-count="' + count + '"]').addClass(
                        'd-none');
                }

                if (value === next.val()) {
                    $('.help[data-skill="' + skill_id + '"][data-count="' + countPlus + '"]').removeClass(
                        'd-none');
                } else {
                    $('.help[data-skill="' + skill_id + '"][data-count="' + countPlus + '"]').addClass(
                        'd-none');
                }
            });
        });
    </script>
@endpush

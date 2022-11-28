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

        <form action="{{ route('servant-worship.update', $worship->id) }}" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <div class="row">
                <div class="col-2 mx-3 mb-3">
                    <button type="submit" class="btn btn-block btn-primary">
                        Simpan Jadwal
                    </button>
                </div>
            </div>
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
                        @php
                            $i = 0;
                            $skill_count = 1;
                        @endphp
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
                                            <input type="hidden" name="value[{{ $i }}][month]"
                                                value="{{ $month }}">
                                            <input type="hidden" name="value[{{ $i }}][day]"
                                                value="{{ $day }}">
                                            <input type="hidden" name="value[{{ $i }}][skill_id]"
                                                value="{{ $skill->id }}">
                                            <input type="hidden" name="value[{{ $i }}][skill_count]"
                                                value="{{ $skill_count }}">
                                            <select class="custom-select select2 select_servant"
                                                name="value[{{ $i }}][servant_id]"
                                                data-skill="{{ $skill->id }}" data-count="{{ $skill_count }}">
                                                <option value="" selected disabled></option>
                                                @foreach ($servants as $servant)
                                                    @if ($servant->skill_id == $skill->id)
                                                        @php
                                                            $servantCriterias = $servant->criterias->pluck('id')->toArray();
                                                            $criteriasCount = $skill->pivot->criterias->whereIn('id', $servantCriterias)->count();
                                                            $date = Carbon\Carbon::parse($month . ' ' . $day . ', ' . date('Y'));
                                                            $isExist = $servant
                                                                ->worships()
                                                                ->wherePivot('worship_id', $worship->id)
                                                                ->wherePivot('skill_id', $skill->id)
                                                                ->wherePivot('assign_date', $date)
                                                                ->count();
                                                        @endphp
                                                        <option value="{{ $servant->id }}"
                                                            @if ($isExist > 0) selected @endif>
                                                            {{ $servant->name }} (Memenuhi {{ $criteriasCount }}
                                                            dari
                                                            {{ $skill->pivot->criterias->count() }} kriteria)
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <small class="help form-text text-danger d-none"
                                                data-skill="{{ $skill->id }}" data-count="{{ $skill_count }}">
                                                Partisipan sama dengan minggu sebelumnya
                                            </small>
                                        </td>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                    @php
                                        $skill_count++;
                                    @endphp
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-2 mx-3 mb-3">
                    <button type="submit" class="btn btn-block btn-primary">
                        Simpan Jadwal
                    </button>
                </div>
            </div>
        </form>
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

                let next = $('.select_servant[data-skill="' + skill_id + '"][data-count="' + countPlus + '"]');
                let prev = $('.select_servant[data-skill="' + skill_id + '"][data-count="' + countMinus + '"]');

                if (value === prev.val()) {
                    $('.help[data-skill="' + skill_id + '"][data-count="' + count + '"]').removeClass('d-none');
                } else {
                    $('.help[data-skill="' + skill_id + '"][data-count="' + count + '"]').addClass('d-none');
                }

                if (value === next.val()) {
                    $('.help[data-skill="' + skill_id + '"][data-count="' + countPlus + '"]').removeClass('d-none');
                } else {
                    $('.help[data-skill="' + skill_id + '"][data-count="' + countPlus + '"]').addClass('d-none');
                }
            });
        });
    </script>
@endpush

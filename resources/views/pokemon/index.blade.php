@extends('layouts.custom-template.main')

@section('title', 'Pokemon List')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Pokemon List</h5>
                </div>
                <div class="card-body">
                    <table id="pokemonTable" class="table table-striped display  nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th align="center">No</th>
                                <th align="">Name</th>
                                <th align="">Base Experience</th>
                                <th align="">Weight</th>
                                <th align="center">Stat</th>
                                <th align="">Ability</th>
                                <th align="">Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pokemons as $pokemon)
                                <tr>
                                    <td align="center">{{ $loop->iteration }}</td>
                                    <td align="">{{ $pokemon->name }}</td>
                                    <td align="">{{ $pokemon->base_experience }}</td>
                                    <td align="">{{ $pokemon->weight }}</td>
                                    <td align="center">{{ $pokemon->stat_count }}</td>
                                    <td align="">
                                        @foreach ($pokemon->abilities as $ability)
                                            {{-- Pisahkan dengan koma apabila banyaknya ability lebih dari 1 --}}
                                            @if ($loop->last)
                                                {{ $ability->name }}
                                            @else
                                                {{ $ability->name }},
                                            @endif
                                        @endforeach
                                    </td>
                                    <td align=""><img src="{{ $pokemon->image_url }}" alt="Pokemon {{ $pokemon->name }} Image"
                                            width="80"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $('#pokemonTable').DataTable({
            responsive: true,
        });
    </script>
@endpush

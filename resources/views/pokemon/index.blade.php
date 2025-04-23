@extends('layouts.custom-template.main')

@section('title', 'Pokemon List')

@section('content')
    {{-- Pokemon data --}}
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
                                    <td align=""><img src="{{ $pokemon->image_url }}"
                                            alt="Pokemon {{ $pokemon->name }} Image" width="80"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Author Biodata --}}
    <div class="row mt-2">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6"
                        id="generalInformationForm" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="row mb-3">
                            {{-- Foto Profile --}}
                            @php
                                $profile_photo = URL::asset('storage/lte/assets/img/adam_photo_profile.jpg');
                            @endphp
                            <div class="col-3 text-center">
                                <img id="profilePreview" src="{{ $profile_photo }}" class="rounded-circle img-fluid mb-2"
                                    alt="Photo Profile"
                                    style="width: 300px; height: 300px; object-fit: cover; border: 2px solid #ffca2c;">
                                
                            </div>
    
                            <div class="col-4">
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input name="" type="text" class="form-control"
                                                value="Adam Arnap" id="" required readonly/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input name="" type="email" class="form-control"
                                                value="adamarnap0117@gmail.com" id="" required readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="col-form-label">No. Ponsel/Whats App</label>
                                        <div class="col-sm-10">
                                            <input name="" type="" class="form-control"
                                                value="+(62)813-9034-0376" id="" required readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-5">
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="col-form-label">Linkedin</label>
                                        <div class="col-sm-10">
                                            <a href="https://www.linkedin.com/in/adam-arnap-bb6987237" target="_blank" class="btn btn-secondary"><i class="bi bi-linkedin"></i> Kunjungi Linkedin Saya</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="col-form-label">Portofolio</label>
                                        <div class="col-sm-10">
                                            <a href="https://www.canva.com/design/DAGlVFxVmFs/9Wob1TYb-MJVSTxHapkatA/edit?utm_content=DAGlVFxVmFs&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton" target="_blank" class="btn btn-secondary"><i class="bi bi-person-vcard"></i> Kunjungi Portofolio Saya</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="col-form-label">Github</label>
                                        <div class="col-sm-10">
                                            <a href="https://github.com/adamarnap/" target="_blank" class="btn btn-secondary"><i class="bi bi-github"></i> Kunjungi Github Saya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </form>
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

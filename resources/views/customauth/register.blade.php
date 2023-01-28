@extends('base')

@section('main')

<div class="container pt-3 pb-3">
    <div class="chatbox">
        <div class="bodi">
        <span class="tip tip-left"></span>
            <span><img src="/img/smile.png"> Lengkapi form dibawah ya untuk Pendaftaran.. <i class="far fa-hand-point-down"></i> </span>
        </div>
    </div>
</div>

<div class="container">
    <div class="">
        <div class="card-body">
            <form method="post" action="{{ route('register') }}">
                @csrf
                <input type="hidden" name="uid" value="{{ $toko->id_toko }}">
                <div class="form-group row">
                    <label for="nohp" class="col-md-12 col-form-label">Nomor Whatsapp</label>
                    <div class="col-md-12">
                        <input id="nohp" type="text" placeholder="" class="form-control{{ $errors->has('nohp') ? ' is-invalid' : '' }}" name="nohp" value="{{ old('nohp') }}" required autofocus>

                        @if ($errors->has('nohp'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nohp') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="col-md-12 col-form-label">Nama</label>
                    <div class="col-md-12">
                        <input id="nama" type="text" placeholder="" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required autofocus>

                        @if ($errors->has('nama'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label>

                    <div class="col-md-12">
                        <input id="password" type="password" placeholder="" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-12 col-form-label">{{ __('Confirm Password') }}</label>

                    <div class="col-md-12">
                        <input id="password-confirm" type="password" placeholder="" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="id_jenis" class="col-md-12 col-form-label">Jenis Warung</label>
                    <div class="col-md-12">
                        <select class="form-control" id="id_jenis" name="id_jenis" required autofocus>
                            @foreach ($jenis as $item)
                            <option value="{{ $item->id_jenis }}">{{ $item->nama_jenis }}</option>
                            @endforeach
                         </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama_warung" class="col-md-12 col-form-label">Nama Warung</label>
                    <div class="col-md-12">
                        <input id="nama_warung" type="text"  class="form-control" name="nama_warung" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="id_provinsi" class="col-md-12 col-form-label">Provinsi</label>
                    <div class="col-md-12">
                        <select class="form-control" id="id_provinsi" name="id_provinsi" required autofocus>
                            @foreach ($provinsi as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                         </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="id_kota" class="col-md-12 col-form-label">Kota</label>
                    <div class="col-md-12">
                        <select class="form-control" id="id_kota" name="id_kota" required autofocus>
                            @foreach ($kota as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                         </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="id_kecamatan" class="col-md-12 col-form-label">Kecamatan</label>
                    <div class="col-md-12">
                        <select class="form-control" id="id_kecamatan" name="id_kecamatan" required autofocus>
                            @foreach ($kecamatan as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                         </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat" class="col-md-12 col-form-label">Alamat</label>
                    <div class="col-md-12">
                        <textarea name="alamat" id="" cols="5" rows="3" class="form-control" required autofocus></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kode_agen" class="col-md-12 col-form-label">Kode Agen</label>
                    <div class="col-md-12">
                        <input type="text" name="kode_agen" class="form-control" required autofocus>
                    </div>
                </div>



                <div class="form-group row mb-0">
                    <div class="col-md-12 offset-md-12">
                        <button type="submit" class="btn w-100" style="color: #fff; background-color: #ff1d00; border-color: #ff1d00">
                            {{ __('DAFTAR') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container pt-5 pb-3">
    <div class="chatbox">
        <div class="bodi">
        <span class="tip tip-left"></span>
            <span><img src="/img/smile.png"> Kalo sudah pernah punya akun, cukup login disini..</span>
            <p class="text-center"> <a href="{{ route('login') }}"> LOGIN </a> </p>
        </div>
    </div>
</div>

@endsection

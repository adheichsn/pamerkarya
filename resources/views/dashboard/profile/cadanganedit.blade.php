@extends('dashboard.layouts.main')

@section('container')
    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">Profil Saya</h1>
    </div>

    <!-- <div class="col-lg-8">
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ old('name', $user->name) }}">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username"
                    value="{{ old('username', $user->username) }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email"
                    value="{{ old('email', $user->email) }}">
            </div>
            <div class="mb-3">
                <label for="contact_number" class="form-label">Nomor WhatsApp</label>
                <input type="text" class="form-control" id="contact_number" name="contact_number"
                    value="{{ old('contact_number', $user->contact_number) }}" placeholder="Perbarui data kamu">
            </div>
            <div class="mb-3">
                <label for="school" class="form-label">Asal Sekolah mu</label>
                <input type="text" class="form-control" id="school" name="school"
                    value="{{ old('education', $user->education) }}" placeholder="Perbarui data kamu">
            </div>
            <div class="grid flex-row gap-3 mb-3 d-flex">
                <div class="col-sm-5">
                    <label for="number" class="form-label">Provinsi</label>
                    <input type="text" class="form-control" id="number" name="number"
                        value="{{ old('province', $user->province) }}" placeholder="Perbarui data kamu">
                </div>
                <div class="col-sm-5">
                    <label for="number" class="form-label">Kota</label>
                    <input type="text" class="form-control" id="number" name="number"
                        value="{{ old('city', $user->city) }}" placeholder="Perbarui data kamu">
                </div>
            </div>
            <div class="mb-3">
                <label for="slogan" class="form-label">Detail Alamat</label>
                <textarea class="form-control" id="address" value="{{ old('address', $user->address) }}" placeholder="Perbarui data kamu"></textarea>
            </div>
            <p class="mb-3">Media sosial (opsional)</p>
            <div class="grid flex-row gap-3 mb-3 d-flex">
                <div class="col-sm-3">
                    <label for="social" class="form-label">Instagram</label>
                    <input type="text" class="form-control" name="social" value="{{ old('instagram', $user->instagram) }}" placeholder="Perbarui data kamu">
                </div>
                <div class="col-sm-3">
                    <label for="social" class="form-label">Twitter</label>
                    <input type="text" class="form-control" name="social" value="{{ old('twitter', $user->twitter) }}" placeholder="Perbarui data kamu">
                </div>
                <div class="col-sm-3">
                    <label for="social" class="form-label">LinkedIn</label>
                    <input type="text" class="form-control" name="social" value="{{ old('linkedin', $user->linkedin) }}" placeholder="Perbarui data kamu">
                </div>
            </div>

            <button type="submit" class="mb-5 btn btn-primary">Update Profile</button>
        </form>
    </div> -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="contact_number">{{ __('Contact Number') }}</label>
                            <input id="contact_number" type="text" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" value="{{ old('contact_number', $user->contact_number) }}" required>
                            @error('contact_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="education">{{ __('Education') }}</label>
                            <input id="education" type="text" class="form-control @error('education') is-invalid @enderror" name="education" value="{{ old('education', $user->education) }}" required>
                            @error('education')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address">{{ __('Address') }}</label>
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address', $user->address) }}" required>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="social_media">{{ __('Instagram') }}</label>
                            <input id="social_media" type="text" class="form-control" name="instagram" value="{{ old('instagram', $user->instagram) }}">
                            @error('social_media')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-0 form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Profile') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', $user->name) }}">
                        </div>
                        <div class="mb-3">
                            <label for="contact_number" class="form-label">Nomor WhatsApp</label>
                            <input type="text" class="form-control" id="contact_number" name="contact_number"
                                value="{{ old('contact_number', $user->contact_number) }}" placeholder="Perbarui data kamu">
                        </div>
                        <div class="mb-3">
                            <label for="education" class="form-label">Asal Sekolah mu</label>
                            <input type="text" class="form-control" id="education" name="education"
                                value="{{ old('education', $user->education) }}" placeholder="Perbarui data kamu">
                        </div>
                        <div class="grid flex-row gap-3 mb-3 d-flex">
                            <div class="col-sm-5">
                                <label for="province" class="form-label">Provinsi</label>
                                <input type="text" class="form-control" id="province" name="province"
                                    value="{{ old('province', $user->province) }}" placeholder="Perbarui data kamu">
                            </div>
                            <div class="col-sm-5">
                                <label for="city" class="form-label">Kota</label>
                                <input type="text" class="form-control" id="city" name="city"
                                    value="{{ old('city', $user->city) }}" placeholder="Perbarui data kamu">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Detail Alamat</label>
                            <textarea class="form-control" id="address" name="address" placeholder="Perbarui data kamu">{{ old('address', $user->address) }}</textarea>
                        </div>
                        <p class="mb-3">Media sosial (opsional)</p>
                        <div class="grid flex-row gap-3 mb-3 d-flex">
                            <div class="col-sm-3">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" class="form-control" name="instagram" value="{{ old('instagram', $user->instagram) }}" placeholder="Perbarui data kamu">
                            </div>
                            <div class="col-sm-3">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" class="form-control" name="twitter" value="{{ old('twitter', $user->twitter) }}" placeholder="Perbarui data kamu">
                            </div>
                            <div class="col-sm-3">
                                <label for="linkedin" class="form-label">LinkedIn</label>
                                <input type="text" class="form-control" name="linkedin" value="{{ old('linkedin', $user->linkedin) }}" placeholder="Perbarui data kamu">
                            </div>
                        </div>

                        <button type="submit" class="mb-5 btn btn-primary">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection






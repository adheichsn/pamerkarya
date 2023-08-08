@extends('dashboard.layouts.main')

@section('container')
    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">Profil Saya</h1>
    </div>

    <div class="col-lg-8">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ $user->name }}" disabled>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username"
                    value="{{ $user->username }}" disabled>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email"
                    value="{{ $user->email }}" disabled>
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Nomor WhatsApp</label>
                <input type="text" class="form-control" id="number" name="number"
                    value="{{ $user->contact_number }}" placeholder="Perbarui data kamu" disabled>
            </div>
            <div class="mb-3">
                <label for="school" class="form-label">Asal Sekolah mu</label>
                <input type="text" class="form-control" id="school" name="school"
                    value="{{ $user->education }}" placeholder="Perbarui data kamu" disabled>
            </div>
            <div class="grid flex-row gap-3 mb-3 d-flex">
                <div class="col-sm-5">
                    <label for="number" class="form-label">Provinsi</label>
                    <input type="text" class="form-control" id="number" name="number"
                        value="{{ $user->province }}" placeholder="Perbarui data kamu" disabled>
                </div>
                <div class="col-sm-5">
                    <label for="number" class="form-label">Kota</label>
                    <input type="text" class="form-control" id="number" name="number"
                        value="{{ $user->city }}" placeholder="Perbarui data kamu" disabled>
                </div>
            </div>
            <!-- <div class="mb-3">
                <label for="address" class="form-label">Alamat Lengkap</label>
                <input id="address" type="hidden" name="address" value="{{ $user->address }}" disabled>
                <trix-editor input="address" disabled></trix-editor>
            </div> -->
            <div class="mb-3">
                <label for="slogan" class="form-label">Detail Alamat</label>
                <textarea class="form-control" id="address" value="{{ $user->address }}" placeholder="Perbarui data kamu" disabled ></textarea>
            </div>
            <p class="mb-3">Media sosial (opsional)</p>
            <div class="grid flex-row gap-3 mb-3 d-flex">
                <div class="col-sm-3">
                    <label for="social" class="form-label">Instagram</label>
                    <input type="text" class="form-control" name="social" value="{{ $user->instagram }}" placeholder="Perbarui data kamu" disabled>
                </div>
                <div class="col-sm-3">
                    <label for="social" class="form-label">Twitter</label>
                    <input type="text" class="form-control" name="social" value="{{ $user->twitter }}" placeholder="Perbarui data kamu" disabled>
                </div>
                <div class="col-sm-3">
                    <label for="social" class="form-label">LinkedIn</label>
                    <input type="text" class="form-control" name="social" value="{{ $user->linkedin }}" placeholder="Perbarui data kamu" disabled>
                </div>
            </div>

            <button type="submit" class="mb-5 btn btn-primary"><a href="{{ route('profile.edit') }}" style="text-decoration: none; color: #fff;">Edit Profile</a></button>
        </form>
    </div>
@endsection
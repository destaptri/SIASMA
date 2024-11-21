@extends('layouts.alumni')

@section('content')
<div class="biodata">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Biodata Alumni</li>
        </ol>
    </nav>

    <div class="container-biodata col-lg-12">
        <div class="row justify-content-center col-lg-12">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h3 class="text-lg-start text-center">Biodata Alumni</h3>

                <div class="row">
                    <!-- Foto Profil dan Ganti Foto -->
                    <div class="col-lg-3 col-md-12 text-center">
                        <img src="{{ $biodata->foto_pribadi ? asset('storage/' . $biodata->foto_pribadi) : Vite::asset('public/images/default_avatar.png') }}"
                             class="img-fluid mb-3" 
                             alt="Foto Alumni" 
                             id="profile-image">
                        <button class="btn btn-primary d-none" id="change-photo-btn">Ganti Foto</button>
                        <input type="file" name="foto_pribadi" class="form-control d-none" id="upload-photo">
                    </div>

                    <!-- Tabel Biodata Alumni -->
                    <div class="col-lg-9 col-md-12">
                        <form method="POST" action="{{ route('alumni.biodata.update') }}" enctype="multipart/form-data">
                            @csrf

                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th style="width: 25%;">NISN</th>
                                        <td class="input-td" onclick="editField(this)">
                                            <span class="editable-text" id="nisn-text">{{ $biodata->nisn }}</span>
                                            <input type="text" name="nisn" class="form-control w-100 d-none" value="{{ old('nisn', $biodata->nisn) }}" {{ $biodata->status_validasi != 'tidak' ? 'readonly' : '' }}>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width: 25%;">Nama Lengkap</th>
                                        <td class="input-td" onclick="editField(this)">
                                            <span class="editable-text" id="nama-lengkap-text">{{ $biodata->nama_lengkap }}</span>
                                            <input type="text" name="nama_lengkap" class="form-control w-100 d-none" value="{{ old('nama_lengkap', $biodata->nama_lengkap) }}" {{ $biodata->status_validasi != 'tidak' ? 'readonly' : '' }}>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width: 25%;">Kelas</th>
                                        <td class="input-td" onclick="editField(this)">
                                            <span class="editable-text" id="kelas-text">{{ $biodata->kelas }}</span>
                                            <input type="text" name="kelas" class="form-control w-100 d-none" value="{{ old('kelas', $biodata->kelas) }}" {{ $biodata->status_validasi != 'tidak' ? 'readonly' : '' }}>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width: 25%;">Tahun Lulus</th>
                                        <td class="input-td" onclick="editField(this)">
                                            <span class="editable-text" id="tahun-lulus-text">{{ $biodata->tahun_lulus }}</span>
                                            <input type="number" name="tahun_lulus" class="form-control w-100 d-none" value="{{ old('tahun_lulus', $biodata->tahun_lulus) }}" {{ $biodata->status_validasi != 'tidak' ? 'readonly' : '' }}>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width: 25%;">Universitas</th>
                                        <td class="input-td" onclick="editField(this)">
                                            <span class="editable-text" id="universitas-text">{{ $biodata->universitas }}</span>
                                            <input type="text" name="universitas" class="form-control w-100 d-none" value="{{ old('universitas', $biodata->universitas) }}" {{ $biodata->status_validasi != 'tidak' ? 'readonly' : '' }}>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width: 25%;">Fakultas</th>
                                        <td class="input-td" onclick="editField(this)">
                                            <span class="editable-text" id="fakultas-text">{{ $biodata->fakultas }}</span>
                                            <input type="text" name="fakultas" class="form-control w-100 d-none" value="{{ old('fakultas', $biodata->fakultas) }}" {{ $biodata->status_validasi != 'tidak' ? 'readonly' : '' }}>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width: 25%;">Jurusan</th>
                                        <td class="input-td" onclick="editField(this)">
                                            <span class="editable-text" id="jurusan-text">{{ $biodata->jurusan }}</span>
                                            <input type="text" name="jurusan" class="form-control w-100 d-none" value="{{ old('jurusan', $biodata->jurusan) }}" {{ $biodata->status_validasi != 'tidak' ? 'readonly' : '' }}>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width: 25%;">Jalur Penerimaan</th>
                                        <td class="input-td" onclick="editField(this)">
                                            <span class="editable-text" id="jalur-penerimaan-text">{{ $biodata->jalur_penerimaan }}</span>
                                            <input type="text" name="jalur_penerimaan" class="form-control w-100 d-none" value="{{ old('jalur_penerimaan', $biodata->jalur_penerimaan) }}" {{ $biodata->status_validasi != 'tidak' ? 'readonly' : '' }}>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width: 25%;">Tahun Diterima</th>
                                        <td class="input-td" onclick="editField(this)">
                                            <span class="editable-text" id="tahun-diterima-text">{{ $biodata->tahun_diterima }}</span>
                                            <input type="number" name="tahun_diterima" class="form-control w-100 d-none" value="{{ old('tahun_diterima', $biodata->tahun_diterima) }}" {{ $biodata->status_validasi != 'tidak' ? 'readonly' : '' }}>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width: 25%;">Status Pekerjaan</th>
                                        <td class="input-td" onclick="editField(this)">
                                            <span class="editable-text" id="status-pekerjaan-text">{{ $biodata->status_bekerja }}</span>
                                            <input type="text" name="status_bekerja" class="form-control w-100 d-none" value="{{ old('status_bekerja', $biodata->status_bekerja) }}" {{ $biodata->status_validasi != 'tidak' ? 'readonly' : '' }}>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status Validasi</th>
                                        <td>
                                            <span class="editable-text">{{ $biodata->status_validasi }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-center justify-content-lg-end mt-4">
                                <button type="button" class="btn btn-success me-2" id="edit-btn">Edit Biodata</button>
                                <button type="submit" class="btn btn-primary d-none" id="save-btn">Simpan</button>
                                <button type="button" class="btn btn-secondary d-none" id="cancel-btn">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editBtn = document.getElementById('edit-btn');
        const saveBtn = document.getElementById('save-btn');
        const cancelBtn = document.getElementById('cancel-btn');
        const changePhotoBtn = document.getElementById('change-photo-btn');
        const uploadPhoto = document.getElementById('upload-photo');
        const inputs = document.querySelectorAll('.input-td input');
        const spans = document.querySelectorAll('.input-td .editable-text');

        // Tombol Edit Biodata diklik
        editBtn.addEventListener('click', function () {
            // Menampilkan tombol Simpan dan Batal
            saveBtn.classList.remove('d-none');
            cancelBtn.classList.remove('d-none');
            changePhotoBtn.classList.remove('d-none');
            // Menyembunyikan tombol Edit
            editBtn.classList.add('d-none');
            
            // Menyembunyikan teks dan menampilkan input field untuk kolom-kolom yang bisa diubah
            inputs.forEach(function(input) {
                input.classList.remove('d-none');
            });

            spans.forEach(function(span) {
                span.classList.add('d-none');
            });
        });

        // Tombol Batal diklik
        cancelBtn.addEventListener('click', function () {
            // Menyembunyikan tombol Simpan dan Batal
            saveBtn.classList.add('d-none');
            cancelBtn.classList.add('d-none');
            changePhotoBtn.classList.add('d-none');
            // Menampilkan tombol Edit
            editBtn.classList.remove('d-none');
            
            // Mengembalikan kolom ke tampilan semula (hanya teks)
            inputs.forEach(function(input) {
                input.classList.add('d-none');
            });

            spans.forEach(function(span) {
                span.classList.remove('d-none');
            });
        });

        // Tombol Ganti Foto
        changePhotoBtn.addEventListener('click', function () {
            uploadPhoto.click();
        });
    });
</script>
@endsection

@extends('layouts.app')

@section('content')
    
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">About Me</h1>
</div>

<!-- About Content -->
<div class="row">
    <div class="col-lg-8">
        <!-- Profil Singkat -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Profile</h4>
            </div>
            <div class="card-body">
                <p>Hai nama saya <strong>Handes Triwi Bowo</strong>, Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, ratione consectetur repellendus vero molestiae mollitia perspiciatis totam pariatur recusandae officiis.</p>
            </div>
        </div>

        <!-- Jenjang Pendidikan -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Educational Background</h4>
            </div>
            <div class="card-body">
                <ul class="timeline">
                    <div>
                        <i class="fas fa-fw fa-graduation-cap"></i>
                        <span class="font-weight-bold">SD Negeri 1</span>
                        <i class="fas fa-fw fa-minus"></i>
                        <span class="text-muted">Tahun-tahun</span>
                    </div>
                    <li>
                        <h6 class="font-weight-bold">SMP Negeri 2</h6>
                        <p class="text-muted">Tahun-tahun</p>
                    </li>
                    <li>
                        <h6 class="font-weight-bold">SMA Negeri 3</h6>
                        <p class="text-muted">Tahun-tahun</p>
                    </li>
                    <li>
                        <h6 class="font-weight-bold">Universitas </h6>
                        <p class="text-muted">Tahun-tahun</p>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Visi Misi (Opsional) -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">visi-misin</h4>
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo tenetur facilis ab, magnam harum sed officiis perspiciatis asperiores consequatur?</p>
            </div>
        </div>
    </div>

    <!-- Sidebar Kontak -->
    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Contact</h4>
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> @example.com</p>
                <p><strong>Phone:</strong> 0000000000000000</p>
                <p><strong>GitHub:</strong> github.com/username</p>
            </div>
        </div>
    </div>
</div>

@endsection

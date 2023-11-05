@extends('layouts.superadmin.main')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tabel Admin</h6>
                    </div>
                    <div class="m-3">
                        <button class="btn btn-primary pb-0" data-bs-toggle="modal" data-bs-target="#staticBackdropAddAdmin">
                            <p class="">Tambah Admin <i class="fa fa-plus"></i></p>
                        </button>
                    </div>
                    <!-- Modal start-->
                    <div class="modal fade" id="staticBackdropAddAdmin" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Admin</h1>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                        aria-label="Close"><i class="fa fa-times"></i></button>
                                </div>
                                {{-- modal body start --}}
                                <div class="modal-body">
                                    <div class="form-floating ">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput" class="text-lg fw-normal">nama</label>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="form-floating ">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput" class="text-lg fw-normal">email</label>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="form-floating ">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput" class="text-lg fw-normal">Alamat</label>
                                    </div>
                                </div>

                                {{-- modal body end --}}
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Tutup</button>
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal end-->

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Lokasi</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3"
                                                        alt="user4">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Michael Levi</h6>
                                                    <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Kost Soehat</p>
                                            <p class="text-xs text-secondary mb-0"></p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Aktif</span>
                                        </td>

                                        <td class="align-middle">
                                            {{-- button trigger modal strat --}}
                                            <button type="button"
                                                class="text-secondary font-weight-bold text-xs bg-transparent"
                                                style="border: none;" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop1">
                                                Edit
                                            </button>
                                            {{-- button trigger modal end --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                        alt="user5">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Richard Gran</h6>
                                                    <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Kost Sigura-gura</p>
                                            <p class="text-xs text-secondary mb-0"></p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-secondary">offline</span>
                                        </td>

                                        <td class="align-middle">
                                            {{-- button trigger modal strat --}}
                                            <button type="button"
                                                class="text-secondary font-weight-bold text-xs bg-transparent"
                                                style="border: none;" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop2">
                                                Edit
                                            </button>
                                            {{-- button trigger modal end --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3"
                                                        alt="user6">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                                    <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Kost Sigura-gura</p>
                                            <p class="text-xs text-secondary mb-0"></p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-secondary">offline</span>
                                        </td>

                                        <td class="align-middle">
                                            {{-- button trigger modal strat --}}
                                            <button type="button"
                                                class="text-secondary font-weight-bold text-xs bg-transparent"
                                                style="border: none;" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop3">
                                                Edit
                                            </button>
                                            {{-- button trigger modal end --}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal start-->
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Admin</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-4">
                                Nama
                            </div>
                            <div class="col-8">
                                : Michael Levi
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Email
                            </div>
                            <div class="col-8">
                                : michael@creative-tim.com
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Lokasi
                            </div>
                            <div class="col-8">
                                : Kost Soehat
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Status
                            </div>
                            <div class="col-8">
                                : <span class="badge badge-sm bg-gradient-success">Aktif</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Hapus Admin</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end-->

    <!-- Modal start-->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end-->

    <!-- Modal start-->
    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end-->
@endsection

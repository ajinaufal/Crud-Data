@extends('layouts.master')

@section('body')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3 fs-3">Laproan Data</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="ms-3">
                            <p class="fw-bolder">{{ $data->name }}</p>
                            <p class="fw-bolder">{{ $data->email }}</p>
                        </div>
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class=" fw-bolder text-uppercase text-secondary font-weight-bolder">
                                            Aspek</th>
                                        <th
                                            class=" fw-bolder text-uppercase text-secondary font-weight-bolder ps-2">
                                            1</th>
                                        <th
                                            class=" fw-bolder text-center text-uppercase text-secondary font-weight-bolder">
                                            2
                                        </th>
                                        <th
                                            class=" fw-bolder text-center text-uppercase text-secondary font-weight-bolder">
                                            3</th>
                                        <th
                                            class=" fw-bolder text-center text-uppercase text-secondary font-weight-bolder">
                                            4</th>
                                        <th
                                            class=" fw-bolder text-center text-uppercase text-secondary font-weight-bolder">
                                            5</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Aspek Intelegensi</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">@if ($intelegensi == 1)✓@endif</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">@if ($intelegensi == 2)✓@endif</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">@if ($intelegensi == 3)✓@endif</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">@if ($intelegensi == 4)✓@endif</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">@if ($intelegensi == 5)✓@endif</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Aspek Numerical Ability</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">@if ($ability == 1)✓@endif</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">@if ($ability == 2)✓@endif</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">@if ($ability == 3)✓@endif</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">@if ($ability == 4)✓@endif</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">@if ($ability == 5)✓@endif</span>
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

@endsection

@extends('layouts.master')

@section('body')
    <div class="mt-4 col-lg-6 col-md-8 col-12 mx-auto">
        <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Input Data Nilai</h4>
                </div>
            </div>
            <div class="card-body">
                <form role="form" class="text-start" action="/create-data" method="post">
                    {{ csrf_field() }}
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Nilai X</label>
                        <input type="text" class="form-control @error('nilaix') is-invalid @enderror" name="nilaix" required>
                        @error('nilaix')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Nilai Y</label>
                        <input type="text" class="form-control @error('nilaiy') is-invalid @enderror" name="nilaiy" required>
                        @error('nilaiy')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Nilai Z</label>
                        <input type="text" class="form-control @error('nilaiz') is-invalid @enderror" name="nilaiz" required>
                        @error('nilaiz')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Nilai W</label>
                        <input type="text" class="form-control @error('nilaiw') is-invalid @enderror" name="nilaiw" required>
                        @error('nilaiw')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

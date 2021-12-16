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
                <form role="form" class="text-start" action="/edit-data/{{$data->id}}" method="post">
                    {{ csrf_field() }}
                    <div class="input-group input-group-outline my-3">
                        <label class="col-sm-2 col-form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required value="{{$data->name}}" placeholder="Name">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required value="{{$data->email}}" placeholder="Email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="col-sm-2 col-form-label">Nilai X</label>
                        <input type="text" class="form-control @error('nilaix') is-invalid @enderror" name="nilaix" value="{{$data->x}}" placeholder="Nilai X"
                            required>
                        @error('nilaix')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="col-sm-2 col-form-label">Nilai Y</label>
                        <input type="text" class="form-control @error('nilaiy') is-invalid @enderror" name="nilaiy" value="{{$data->y}}" placeholder="Nilai Y"
                            required>
                        @error('nilaiy')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="col-sm-2 col-form-label">Nilai Z</label>
                        <input type="text" class="form-control @error('nilaiz') is-invalid @enderror" name="nilaiz" value="{{$data->z}}" placeholder="Nilai Z"
                            required>
                        @error('nilaiz')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="col-sm-2 col-form-label">Nilai W</label>
                        <input type="text" class="form-control @error('nilaiw') is-invalid @enderror" name="nilaiw" value="{{$data->w}}" placeholder="Nilai W"
                            required>
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

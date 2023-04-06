@extends('layouts.master')

@section('page-content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" value="{{ $customer->name }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" value="{{ $customer->email }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="number" class="form-control" value="{{ $customer->phone }}" readonly>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alt Phone</label>
                    <input type="number" class="form-control" value="{{ $customer->alt_phone }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" value="{{ $customer->address }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Date of Birth</label>
                    <input type="text" class="form-control" value="{{ $customer->dob }}" readonly>
                </div>

                <div>
                    <label class="form-label">Image</label>
                    <img src="{{ $customer->image}}" width="300px" height="300px" alt="Banner image">
                </div>

            </div>


        </div>

        <div class="modal-footer">


        </div>
    </div>
    </div>
@endsection

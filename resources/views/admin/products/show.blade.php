@extends('layouts.master')

@section('page-content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" value="{{$product->name}}" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" value="{{$product->email}}" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Payoneer Password</label>
                        <input type="text" class="form-control" value="{{$product->payoneer_password}}"
                           >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Password</label>
                        <input type="text" class="form-control" value="{{$product->email_password}}" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Recovery Email</label>
                        <input type="email" class="form-control" value="{{$product->recovery_email}}" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="number" class="form-control" value="{{$product->phone}}" >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Security Questions Ans</label>
                        <input type="text" class="form-control" value="{{$product->security_qsn_ans}}">
                    </div>

                </div>
                <div class="modal-body">

                        <div class="col-lg-12">
                            <div>
                                <label class="form-label">Additional information</label>
                                <textarea class="form-control" rows="3">{{$product->add_info}}</textarea>
                            </div>
                        </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mt-3">
                                <label class="form-label">Image</label>
                            </div>
                        </div>
                        <div >
                                <img src="{{$product->f_image_link}}" width="300px" height="300px" alt="Banner image">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mt-4">
                                <label class="form-label">Second Image</label>
                            </div>
                        </div>
                        <div class="mb-3">
                                <img src="{{$product->s_image_link}}" width="300px" height="300px" alt="Banner image">
                        </div>
                    </div>
                </div>

            </div>

            <div class="modal-footer">


            </div>
        </div>
    </div>

@endsection

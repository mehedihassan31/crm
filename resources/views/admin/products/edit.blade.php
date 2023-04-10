@extends('layouts.master')

@section('page-content')
    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name"  class="form-control" value="{{ $product->name }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $product->email }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Payoneer Password</label>
                            <input type="text" class="form-control" name="payoneer_password" value="{{ $product->payoneer_password }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Password</label>
                            <input type="text" class="form-control" name="email_password" value="{{ $product->email_password }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Recovery Email</label>
                            <input type="email" class="form-control" name="recovery_email" value="{{ $product->recovery_email }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="number" class="form-control" name="phone"  value="{{ $product->phone }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Security Questions Ans</label>
                            <input type="text" class="form-control"  name="security_qsn_ans" value="{{ $product->security_qsn_ans }}">
                        </div>

                        <div class="row">
                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <label class="form-label">Image url</label>
                                    <div class="input-group input-group-flat">
                                        <input type="url" name="f_image_link" value="{{ $product->f_image_link }}" class="form-control ps-0"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <label class="form-label">Second Image url</label>
                                    <div class="input-group input-group-flat">
                                        <input type="url" name="s_image_link" value="{{ $product->s_image_link }}" class="form-control ps-0"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-body">

                        <div class="col-lg-12">
                            <div>
                                <label class="form-label">Additional information</label>
                                <textarea class="form-control" rows="3" name="add_info">{{ $product->add_info }}</textarea>
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
                            <div>
                                <img src="{{ $product->f_image_link }}" width="300px" height="300px" alt="Banner image">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mt-4">
                                    <label class="form-label">Second Image</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <img src="{{ $product->s_image_link }}" width="300px" height="300px" alt="Banner image">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <a href="javascript:history.back()" class="btn btn-link link-secondary">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        Submit
                    </button>


                </div>
            </div>
        </div>
    </form>
@endsection

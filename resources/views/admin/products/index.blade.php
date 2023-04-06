{{-- @extends('layouts.master')

@section('page-content')
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Platform Name</th>
                            <th>Is login</th>
                            <th>Login Limit</th>
                            <th>Is_Active</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customersInfo as $customerInfo)
                            <tr>
                                <td>
                                    <div class="d-flex py-1 align-items-center">
                                        <span class="avatar me-2"
                                            style="background-image: {{ 'url(' . Avatar::create($customerInfo->username)->toBase64() . ')' }}"></span>
                                        <div class="flex-fill">
                                            <div class="font-weight-medium">{{ $customerInfo->username }}</div>
                                            <div class="text-muted"><a href="#"
                                                    class="text-reset">{{ $customerInfo->email }}</a></div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                            </path>
                                        </svg>
                                        {{ $customerInfo->phone }}
                                    </div>
                                    <div class="text-muted"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-phone-off" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 21l18 -18"></path>
                                            <path
                                                d="M5.831 14.161a15.946 15.946 0 0 1 -2.831 -8.161a2 2 0 0 1 2 -2h4l2 5l-2.5 1.5c.108 .22 .223 .435 .345 .645m1.751 2.277c.843 .84 1.822 1.544 2.904 2.078l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a15.963 15.963 0 0 1 -10.344 -4.657">
                                            </path>
                                        </svg>{{ $customerInfo->alt_phone }}</div>
                                </td>
                                <td class="text-muted">
                                    {{ $customerInfo->platform_name }}
                                </td>
                                <td class="text-muted">
                                    <b class="btn btn-primary btn-sm"> {{ $customerInfo->is_login == 1 ? 'true' : 'false' }}
                                    </b>
                                </td>

                                <td class="text-muted">

                                    <b class="btn btn-primary btn-sm"> {{ $customerInfo->login_limit }}</b>

                                </td>

                                <td class="text-muted">

                                    <label class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                            {{ $customerInfo->is_active == 1 ? 'checked' : '' }}
                                            data-id="{{ $customerInfo->id }}" onchange="updateStatus(this)">
                                    </label>

                                </td>
                                <td class="text-muted">
                                    Customer
                                </td>
                                <td class="text-muted">

                                    <div class="btn-list flex-nowrap">
                                        <a href="#" class="btn">
                                            Edit
                                        </a>

                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" style="">
                                                <a class="dropdown-item" href="#">
                                                    Details
                                                </a>

                                            </div>
                                        </div>

                                    </div>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

                <div class="card-footer d-flex align-items-center">
                    <p class="m-0 text-muted">Showing
                        <span>{{ ($customersInfo->currentpage() - 1) * $customersInfo->perpage() + 1 }}</span> to
                        <span>{{ $customersInfo->currentpage() * $customersInfo->perpage() }}</span> of
                        <span>{{ $customersInfo->total() }}</span> entries
                    </p>
                    <ul class="pagination m-0 ms-auto">
                        {!! $customersInfo->appends(request()->input())->links() !!}

                    </ul>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('custom-scripts')
    <script>

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 1000
        });

        function updateStatus(checkbox) {
            var isChecked = checkbox.checked;
            var customerId = checkbox.getAttribute('data-id');
            console.log(customerId);

            axios.put('{{ url('customers') }}/' + customerId + '/update-status', {
                    is_active: isChecked ? 1 : 0
                })
                .then(function(response) {

                    var  jsonData=response.data;

                    Toast.fire({
                        type: 'success',
                        title: jsonData.message,
                    });

                })
                .catch(function(error) {
                    Toast.fire({
                        type: 'error',
                        title: 'Something went wrong!'
                    });
                });
        }
    </script>
@endpush --}}


@extends('layouts.master')

@section('page-action')
    <div class="btn-list">


        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
            data-bs-target="#modal-add-product">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 5l0 14" />
                <path d="M5 12l14 0" />
            </svg>
            Add a Product
        </a>
        @include('admin.products.modals.add')


    </div>
@endsection

@section('page-content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Products</h3>
            </div>

            <div class="table-responsive mt-3">
                <table id="dataTablePro" class="table card-circle card-table table-vcenter text-nowrap datatable  table-hover   dt-responsive" cellspacing="0" width="100%" >

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Payoneer Password</th>
                            <th>Email Password</th>
                            <th>Recovery Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                </table>
            </div>

        </div>
    @endsection

    @push('custom-scripts')
        <script>
            $(function() {

                getProductData();
                function getProductData() {
                    $('#dataTablePro').DataTable().destroy();
                    var table = $('#dataTablePro').DataTable({
                        processing: true,
                        serverSide: true,
                        lengthChange: false,
                        searching: true,
                        order: [
                            [0, "desc"]
                        ],
                        lengthMenu: [
                            [10, 20, 50, -1],
                            [10, 20, 50, "All"]
                        ],
                        mark: true,
                        language: {
                            infoFiltered: "",
                            info: "Showing _START_ to _END_ out of _TOTAL_ ",
                            infoEmpty: ""
                        },
                        columns: [{
                                data: 'id',
                                name: 'id'
                            },
                            {
                                data: 'name',
                                name: 'name'
                            },
                            {
                                data: 'email',
                                name: 'email'
                            },
                            {
                                data: 'payoneer_password',
                                name: 'payoneer_password'
                            },
                            {
                                data: 'email_password',
                                name: 'email_password'
                            },
                            {
                                data: 'recovery_email',
                                name: 'recovery_email'
                            },
                            {
                                data: 'phone',
                                name: 'phone'
                            },

                            {
                                data: 'status',
                                name: 'status'
                            },


                            {
                                data: 'action',
                                name: 'action'
                            },

                        ],
                        ajax: {
                            url: '{{ route('product.data') }}',
                            data: function(d) {

                                $(".form-filter").serializeArray().map(function(x) {
                                    d[x.name] = x.value;
                                });
                            }
                        }
                    });
                    $('.form-filter').on('submit', function(e) {
                        table.draw();
                        e.preventDefault();
                    });

                }

                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }

            });

        </script>
    @endpush


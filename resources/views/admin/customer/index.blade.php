
@extends('layouts.master')

@section('page-action')
    <div class="btn-list">


        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
            data-bs-target="#modal-add-customer">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 5l0 14" />
                <path d="M5 12l14 0" />
            </svg>
            Add a Product
        </a>
        @include('admin.customer.modals.add')


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
                            <th>Phone</th>
                            <th>Alt Phone</th>
                            <th>Address</th>
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
                                data: 'phone',
                                name: 'phone'
                            },

                            {
                                data: 'alt_phone',
                                name: 'alt_phone'
                            },
                            {
                                data: 'address',
                                name: 'address'
                            },

                            {
                                data: 'action',
                                name: 'action'
                            },

                        ],
                        ajax: {
                            url: '{{ route('customer.data') }}',
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


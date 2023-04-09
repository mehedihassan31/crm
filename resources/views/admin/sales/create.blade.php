@extends('layouts.master')
@section('page-content')
    <div class="col-12">
        <div class="card">
            <form action="{{ route('sales-invoice.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label required">Customer</label>
                        <div class="input-icon mb-3">
                            <select class="form-select " name="customer_id" required>
                                <option value="">Select a customer</option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name }}-{{ $customer->phone }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Select Products</label>

                        <div class="col-md-12">
                            <select id='tom-select' class='form-select tom-select selectid' name="product_id[]" required
                                multiple=true>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Total Unit</label>
                                <input type="number" id="unit_total" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Unit Price</label>
                                <input type="number" id="unit_price" class="form-control" name="unit_price" required>
                            </div>
                        </div>

                    </div>
                    {{-- <div class="mb-3">
                        <label class="form-label required">Sale Price</label>
                        <input type="number" class="form-control" name="sale_price">
                    </div> --}}

                    <div class="mb-3">
                        <label class="form-label required">Total Price </label>
                        <input type="number" id="total_price" class="form-control" name="total_price" required>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label ">Payment Date </label>
                        <input type="date" class="form-control" placeholder="Select a date" id="datepicker-icon-prepend" name="payment_date">
                    </div>


                </div>

                <div class="card-footer">
                    <a href="#" class="btn btn-link link-secondary">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary ">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        Create
                    </button>
                </div>

            </form>
        </div>
    @endsection
    @push('custom-scripts')
        <script>
            $(document).ready(function() {
                $('#tom-select').on('change', function() {
                    var totalUnit = 0;
                    // Loop through the selected options and sum up the total units
                    $('#tom-select option:selected').each(function() {
                        var productName = $(this).text();
                        var unitMatch = productName.match(/Unit: (\d+)/);
                        if (unitMatch) {
                            var unit = parseInt(unitMatch[1]);
                            if (!isNaN(unit)) {
                                totalUnit += unit;
                            }
                        }
                    });
                    // Update the total unit field
                    $('#unit_total').val(totalUnit);

                    // Update the total price field based on the unit price and total unit values
                    var unitPrice = parseFloat($('#unit_price').val());
                    if (!isNaN(unitPrice)) {
                        var totalPrice = unitPrice * totalUnit;
                        $('#total_price').val(totalPrice.toFixed(0));
                    }
                });

                // Listen to changes on the unit price field
                $('#unit_price').on('input', function() {
                    var unitPrice = parseFloat($(this).val());
                    var totalUnit = parseFloat($('#unit_total').val());
                    if (!isNaN(unitPrice) && !isNaN(totalUnit)) {
                        var totalPrice = unitPrice * totalUnit;
                        $('#total_price').val(totalPrice.toFixed(0));
                    } else {
                        $('#total_price').val('');
                    }
                });
            });
        </script>
    @endpush

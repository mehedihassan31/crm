<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Invoice - Payoneer</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/css/tabler.min.css?1674944402') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-flags.min.css?1674944402') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-payments.css?1674944402') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-vendors.min.css?1674944402') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/demo.min.css?1674944402') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    {{-- <script src="./dist/js/demo-theme.min.js?1674944402"></script> --}}
    <div class="page">

        @include('layouts.sidebar')

        <div class="page-wrapper">
            @include('layouts.page-header')
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <h2 class="page-title">
                                Invoice
                            </h2>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-auto ms-auto d-print-none">
                            <button type="button" class="btn btn-primary" onclick="javascript:window.print();">
                                <!-- Download SVG icon from http://tabler-icons.io/i/printer -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                                    <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                                    <path
                                        d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />
                                </svg>
                                Print Invoice
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="card card-lg">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <p class="h3">Zaitunsoft</p>
                                    <address>
                                        Street Address<br>
                                        State, City<br>
                                        Region, Postal Code<br>
                                        ctr@example.com
                                    </address>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="h3">To</p>
                                    <address>
                                        {{ $saleInvoice->customer->address }}<br>
                                        {{ $saleInvoice->customer->phone }}<br>

                                        {{ $saleInvoice->customer->email }}
                                    </address>
                                </div>
                                <div class="col-12 my-5">
                                    <h1>Invoice-{{ $saleInvoice->invoice_no }}</h1>
                                </div>
                            </div>
                            <table class="table table-transparent table-responsive">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 1%"></th>
                                        <th>Product</th>
                                        <th class="text-center" style="width: 1%">Qnt</th>
                                        <th class="text-end" style="width: 1%">Unit</th>
                                        <th class="text-end" style="width: 1%">Amount</th>
                                    </tr>
                                </thead>
                                {{-- <tr>
                                    <td class="text-center">1</td>
                                    <td>
                                        <p class="strong mb-1">Logo Creation</p>
                                        <div class="text-muted">Logo and business cards design</div>
                                    </td>
                                    <td class="text-center">
                                        1
                                    </td>
                                    <td class="text-end">$1.800,00</td>
                                    <td class="text-end">$1.800,00</td>
                                </tr> --}}
                                @php
                                    $i=0;
                                @endphp

                                @foreach ($saleInvoice->sales_product as $product)
                                    <tr>
                                        <td class="text-center">{{$i++}}</td>
                                        <td class="text-end">1</td>
                                        <td></td>

                                        <td class="text-end">{{$product->unit_price}}</td>
                                        <td class="text-end">{{$product->unit_price}}</td>
                                    </tr>
                                @endforeach










                                <tr>
                                    <td colspan="4" class="strong text-end">Subtotal</td>
                                    <td class="text-end">$25.000,00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="strong text-end">Vat Rate</td>
                                    <td class="text-end">20%</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="strong text-end">Vat Due</td>
                                    <td class="text-end">$5.000,00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="font-weight-bold text-uppercase text-end">Total Due</td>
                                    <td class="font-weight-bold text-end">$30.000,00</td>
                                </tr>
                            </table>
                            <p class="text-muted text-center mt-5">Thank you very much for doing business with us. We
                                look forward to working with
                                you again!</p>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="row text-center align-items-center flex-row-reverse">
                        <div class="col-lg-auto ms-lg-auto">

                        </div>
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    Copyright &copy; 2023
                                    <a href="." class="link-secondary">Zaitunsoft</a>.
                                    All rights reserved.
                                </li>
                                <li class="list-inline-item">
                                    <a href="./changelog.html" class="link-secondary" rel="noopener">
                                        v1.0.0-beta1
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('assets/js/tabler.min.js?1674944402') }}" defer></script>
    <script src="{{ asset('assets/js/demo.min.js?1674944402') }}" defer></script>
</body>

</html>

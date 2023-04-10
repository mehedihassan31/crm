<div class="modal modal-blur fade" id="modal-add-product" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Your report name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Your report name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Payoneer Password</label>
                        <input type="text" class="form-control" name="payoneer_password"
                            placeholder="Your report name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Password</label>
                        <input type="text" class="form-control" name="email_password" placeholder="Your report name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Recovery Email</label>
                        <input type="email" class="form-control" name="recovery_email" placeholder="Your report name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="number" class="form-control" name="phone" placeholder="Your report name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Security Questions Ans</label>
                        <input type="text" class="form-control" name="security_qsn_ans" placeholder="Your report name">
                    </div>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="mb-3">
                                <label class="form-label">Image url</label>
                                <div class="input-group input-group-flat">
                                    <input type="url" name="f_image_link" class="form-control ps-0"
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
                                    <input type="url" name="s_image_link" class="form-control ps-0"
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
                                <textarea class="form-control" name="add_info" rows="3"></textarea>
                            </div>
                        </div>
                </div>

                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        Submit
                    </button>
                </div>
            </div>

        </form>

    </div>
</div>

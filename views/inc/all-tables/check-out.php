<!-- Change Table Card -->
<div class="card shadow h-100">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Thanh toán</h6>
    </div>

    <div class="card-body">
        <!-- Rows -->
        <div class="row">
            <div class="col-12 form-group">
                <label for="discount">Giảm giá (%)</label>
                <input id="discount" name="discount" class="form-control" type="number" min="0" max="100" step="5" value="0">
            </div>
        </div>
        
        <!-- Rows -->
        <div class="row">
            <div class="col-12 form-group">
                <button class="btn btn-primary w-100 h-100" id="btn-check-out" data-toggle="modal" data-target="#checkoutModal">
                    <span class="text-uppercase font-weight-bold">Thanh toán</span>
                </button>
            </div>
        </div>

    </div>
</div>
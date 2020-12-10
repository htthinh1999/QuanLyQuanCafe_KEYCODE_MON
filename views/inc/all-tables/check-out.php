<form method="post" action="#" class="h-100">
        
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
                    <input id="discount" name="discount" class="form-control" type="number" min="-10" max="10" step="1" value="1">
                </div>
            </div>
            
            <!-- Rows -->
            <div class="row">
                <div class="col-12 form-group">
                    <button type="submit" class="btn btn-primary w-100 h-100">
                        <span class="text-uppercase font-weight-bold">Thanh toán</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</form>
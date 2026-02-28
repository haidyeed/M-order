
<form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="card-body">
        <div class="row clearfix">
    
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Sku</label>
                    <input type="text" name="sku" class="form-control">
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Price</label>
                    <input type="number" name="price" min=0 step="0.01" class="form-control">
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Stock</label>
                    <input type="number" name="stock" min=1 class="form-control">
                </div>
            </div>


            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Order</label>
                    <input type="number" name="order" min=0 class="form-control">
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <label class="form-group">
                    <span>Status &nbsp &nbsp</span>
                    <input type="checkbox" name="status" value=1 class="custom-switch-input btn-darkmode">
                    <span class="custom-switch-indicator"></span>
                </label>
            </div> 
      
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>  
    
        </div>
    </div>
</form>


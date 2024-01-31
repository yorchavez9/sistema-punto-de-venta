@extends('dashboard.body.main')

@section('specificpagestyles')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Código de barras</h4>
                    </div>
                </div>

                <div class="card-body">
                    <div class=" row align-items-center">
                        <div class="form-group col-md-6">
                            <label>Código de producto</label>
                            <input type="text" class="form-control bg-white" value="{{  $product->product_code }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Código de barras del producto</label>
                            {!! $barcode !!}
                        </div>
                    </div>
                    <!-- end: Show Data -->
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Producto de información</h4>
                    </div>
                </div>

                <div class="card-body">
                    <!-- begin: Show Data -->
                    <div class="form-group row align-items-center">
                        <div class="col-md-12">
                            <div class="profile-img-edit">
                                <div class="crm-profile-img-edit">
                                    <img class="crm-profile-pic rounded-circle avatar-100" id="image-preview" src="{{ $product->product_image ? asset('storage/products/'.$product->product_image) : asset('assets/images/product/default.webp') }}" alt="profile-pic">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" row align-items-center">
                        <div class="form-group col-md-12">
                            <label>Nombre del producto</label>
                            <input type="text" class="form-control bg-white" value="{{  $product->product_name }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Categoría</label>
                            <input type="text" class="form-control bg-white" value="{{  $product->category->name }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Proveedor</label>
                            <input type="text" class="form-control bg-white" value="{{  $product->supplier->name }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Garage del producto</label>
                            <input type="text" class="form-control bg-white" value="{{  $product->product_garage }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Almacen del producto</label>
                            <input type="text" class="form-control bg-white" value="{{  $product->product_store }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fecha de compra</label>
                            <input class="form-control bg-white" id="buying_date" value="{{ $product->buying_date }}" readonly/>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fecha de caducidad</label>
                            <input class="form-control bg-white" id="expire_date" value="{{ $product->expire_date }}" readonly />
                        </div>
                        <div class="form-group col-md-6">
                            <label>Precio de compra</label>
                            <input type="text" class="form-control bg-white" value="{{  $product->buying_price }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Precio de venta</label>
                            <input type="text" class="form-control bg-white" value="{{  $product->selling_price }}" readonly>
                        </div>
                    </div>
                    <!-- end: Show Data -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page end  -->
</div>

<script>
    $('#buying_date').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'yyyy-mm-dd'
        // https://gijgo.com/datetimepicker/configuration/format
    });
    $('#expire_date').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'yyyy-mm-dd'
        // https://gijgo.com/datetimepicker/configuration/format
    });
</script>

@include('components.preview-img-form')
@endsection

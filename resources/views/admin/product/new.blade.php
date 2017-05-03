<div class="box-header with-border">
    <h3 class="box-title">  {!! trans('product::product.names') !!}</h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" id="btn-new-product"><i class="fa fa-plus-circle"></i> New </button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" style="min-height:100px">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <h1 class="text-center">
            <small>
            <button type="button" class="btn btn-app" data-toggle="tooltip" data-placement="top" title=""  id="btn-new-product-icn">
            <span class="badge bg-purple">{!! Product::count('product') !!}</span>
            <i class="fa fa-plus-circle  fa-3x"></i>
            {{ trans('cms.create') }} {!! trans('product::product.name') !!}
            </button>
            <br>{!! trans('product::product.text.preview') !!}
            </small>
            </h1>
        </div>
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('#btn-new-product, #btn-new-product-icn').click(function(){
        $('#entry-product').load('{!!URL::to('admin/product/product/create')!!}');
    });
});
</script>
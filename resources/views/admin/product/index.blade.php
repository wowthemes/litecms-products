@extends('admin::curd.index')
@section('heading')
<i class="fa fa-file-text-o"></i> {!! trans('product::product.name') !!} <small> {!! trans('cms.manage') !!} {!! trans('product::product.names') !!}</small>
@stop

@section('title')
{!! trans('product::product.names') !!}
@stop

@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="http://www.lavalite.org/admin"><i class="fa fa-dashboard"></i> {!! trans('cms.home') !!} </a></li>
    <li class="active">{!! trans('product::product.names') !!}</li>
</ol>
@stop

@section('entry')
<div class="box box-warning" id='entry-product'>
</div>
@stop

@section('tools')
@stop

@section('content')
<table id="main-list" class="table table-striped table-bordered">
    <thead>
        <th>{!! trans('product::product.label.id')!!}</th>
                    <th>{!! trans('product::product.label.user_id')!!}</th>
                    <th>{!! trans('product::product.label.category_id')!!}</th>
                    <th>{!! trans('product::product.label.model_id')!!}</th>
                    <th>{!! trans('product::product.label.filter_id')!!}</th>
                    <th>{!! trans('product::product.label.store_id')!!}</th>
                    <th>{!! trans('product::product.label.download_id')!!}</th>
                    <th>{!! trans('product::product.label.related_id')!!}</th>
                    <th>{!! trans('product::product.label.name')!!}</th>
                        <th>{!! trans('product::product.label.price')!!}</th>
                    <th>{!! trans('product::product.label.status')!!}</th>
                    <th>{!! trans('product::product.label.quantity')!!}</th>
                                            <th>{!! trans('product::product.label.sku')!!}</th>
                    <th>{!! trans('product::product.label.upc')!!}</th>
                    <th>{!! trans('product::product.label.ean')!!}</th>
                    <th>{!! trans('product::product.label.jan')!!}</th>
                    <th>{!! trans('product::product.label.isbn')!!}</th>
                    <th>{!! trans('product::product.label.mpn')!!}</th>
                    <th>{!! trans('product::product.label.location')!!}</th>
                    <th>{!! trans('product::product.label.tax_class')!!}</th>
                    <th>{!! trans('product::product.label.substract_stock')!!}</th>
                    <th>{!! trans('product::product.label.outofstock_status')!!}</th>
                        <th>{!! trans('product::product.label.order')!!}</th>
                        <th>{!! trans('product::product.label.weight_class')!!}</th>
                    <th>{!! trans('product::product.label.length_class')!!}</th>
                    <th>{!! trans('product::product.label.date_available')!!}</th>
                    <th>{!! trans('product::product.label.manufacturer')!!}</th>
                    <th>{!! trans('product::product.label.layouts')!!}</th>
                                                <th>{!! trans('product::product.label.created_at')!!}</th>
                    <th>{!! trans('product::product.label.updated_at')!!}</th>
    </thead>
</table>
@stop
@section('script')
<script type="text/javascript">

var oTable;
$(document).ready(function(){
    $('#entry-product').load('{!!URL::to('admin/product/product/0')!!}');
    oTable = $('#main-list').dataTable( {
        "ajax": '{!! URL::to('/admin/product/product') !!}',
        "columns": [
            {data :'id'},
                    {data :'user_id'},
                    {data :'category_id'},
                    {data :'model_id'},
                    {data :'filter_id'},
                    {data :'store_id'},
                    {data :'download_id'},
                    {data :'related_id'},
                    {data :'name'},
                        {data :'price'},
                    {data :'status'},
                    {data :'quantity'},
                                            {data :'sku'},
                    {data :'upc'},
                    {data :'ean'},
                    {data :'jan'},
                    {data :'isbn'},
                    {data :'mpn'},
                    {data :'location'},
                    {data :'tax_class'},
                    {data :'substract_stock'},
                    {data :'outofstock_status'},
                        {data :'order'},
                        {data :'weight_class'},
                    {data :'length_class'},
                    {data :'date_available'},
                    {data :'manufacturer'},
                    {data :'layouts'},
                                                {data :'created_at'},
                    {data :'updated_at'},
        ],
        "productLength": 50
    });

    $('#main-list tbody').on( 'click', 'tr', function () {
        $(this).toggleClass("selected").siblings(".selected").removeClass("selected");

        var d = $('#main-list').DataTable().row( this ).data();

        $('#entry-product').load('{!!URL::to('admin/product/product')!!}' + '/' + d.id);

    });
});
</script>
@stop

@section('style')
@stop
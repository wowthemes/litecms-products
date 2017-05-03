[<a href="/user/product/product/create"> {{ trans('cms.create')  }}</a>]
<table id="main-list" class="table table-striped table-bordered">
    <thead>
        <td>Id</td>
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
        <td>Action</td>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td><a href="/user/product/product/{!! $product->eid !!}"> {!! $product->id !!} </a></td>
            <td>{{ $product->id }}</td>
                    <td>{{ $product->user_id }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td>{{ $product->model_id }}</td>
                    <td>{{ $product->filter_id }}</td>
                    <td>{{ $product->store_id }}</td>
                    <td>{{ $product->download_id }}</td>
                    <td>{{ $product->related_id }}</td>
                    <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                    <td>{{ $product->status }}</td>
                    <td>{{ $product->quantity }}</td>
                                            <td>{{ $product->sku }}</td>
                    <td>{{ $product->upc }}</td>
                    <td>{{ $product->ean }}</td>
                    <td>{{ $product->jan }}</td>
                    <td>{{ $product->isbn }}</td>
                    <td>{{ $product->mpn }}</td>
                    <td>{{ $product->location }}</td>
                    <td>{{ $product->tax_class }}</td>
                    <td>{{ $product->substract_stock }}</td>
                    <td>{{ $product->outofstock_status }}</td>
                        <td>{{ $product->order }}</td>
                        <td>{{ $product->weight_class }}</td>
                    <td>{{ $product->length_class }}</td>
                    <td>{{ $product->date_available }}</td>
                    <td>{{ $product->manufacturer }}</td>
                    <td>{{ $product->layouts }}</td>
                                                <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
            <td>
                <a href="/user/product/product/{!! $product->eid !!}/edit"> Edit </a>
                <a href="/user/product/product/{!! $product->eid !!}" class="link-delete"> Delete </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script type="text/javascript">
$(document).ready(function(){
    $('.link-delete').click(function(e){
        var url = $(this).attr('href');
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this data!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function(){
            $.ajax({
                url: url,
                type: 'DELETE',
                processData: false,
                contentType: false,
                success:function(data, textStatus, jqXHR)
                {
                    data = jQuery.parseJSON(data);
                    window.location = data.redirect;
                },
            });
        });
        e.preventDefault();
    });
});
</script>
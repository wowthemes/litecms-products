{!!Former::horizontal_open()
->id('edit-product-product')
->method('PUT')
->files('true')
->action(URL::to('user/product/product') .'/'.$product['eid'])!!}
@include('product::user.product.partial.entry')
{!! Former::close() !!}
{!!Former::horizontal_open()
->id('create-product-product')
->method('POST')
->files('true')
->action(URL::to('user/product/product'))!!}
@include('product::user.product.partial.entry')
{!! Former::close() !!}
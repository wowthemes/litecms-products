<div class="box-header with-border">
    <h3 class="box-title"> Edit  {!! trans('product::product.name') !!} [{!!$product->name!!}] </h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" id="btn-save"><i class="fa fa-floppy-o"></i> Save</button>
        <button type="button" class="btn btn-default btn-sm" id="btn-close"><i class="fa fa-times-circle"></i> cms.close</button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#product" data-toggle="tab">{!! trans('product::product.tab.name') !!}</a></li>
        </ul>
        {!!Former::vertical_open()
        ->id('edit-product')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(URL::to('admin/product/product/'. $product['id']))!!}
        <div class="tab-content">
            <div class="tab-pane active" id="product">
                @include('product::admin.product.partial.entry')
            </div>
        </div>
        {!!Former::close()!!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>
<script type="text/javascript">

        (function ($) {
            $('#btn-close').click(function(){
                $('#entry-product').load('{!!URL::to('admin/product/product')!!}/{!!$product->id!!}');
            });

            $('#btn-save').click(function(){
                $('#edit-product').submit();
            });

            $('#edit-product')
            .submit( function( e ) {

                if($('#edit-product').valid() == false) {
                    toastr.warning({{ trans('message.unprocessable') }}, '{{ trans('cms.warning') }}');
                    return false;
                }

                var formURL  = "{!! URL::to('admin/product/product/')!!}/{!!$product->id!!}";
                $.ajax( {
                    url: formURL,
                    type: 'POST',
                    data: new FormData( this ),
                    processData: false,
                    contentType: false,
                    success:function(data, textStatus, jqXHR)
                    {
                        $('#entry-product').load('{!!URL::to('admin/product/product')!!}/{!!$product->id!!}');
                        $('#main-list').DataTable().ajax.reload( null, false );
                    },
                    error: function(jqXHR, textStatus, errorThrown)
                    {
                    }
                });
                e.preventDefault();
            });

        }(jQuery));

</script>
<div class='col-md-4 col-sm-6'>
                    {!! Former::select('category_id')
                    -> options(trans('product::product.options.category_id'))
                    -> label(trans('product::product.label.category_id'))
                    -> placeholder(trans('product::product.placeholder.category_id'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Former::select('model_id')
                    -> options(trans('product::product.options.model_id'))
                    -> label(trans('product::product.label.model_id'))
                    -> placeholder(trans('product::product.placeholder.model_id'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Former::select('filter_id')
                    -> options(trans('product::product.options.filter_id'))
                    -> label(trans('product::product.label.filter_id'))
                    -> placeholder(trans('product::product.placeholder.filter_id'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Former::select('store_id')
                    -> options(trans('product::product.options.store_id'))
                    -> label(trans('product::product.label.store_id'))
                    -> placeholder(trans('product::product.placeholder.store_id'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Former::select('download_id')
                    -> options(trans('product::product.options.download_id'))
                    -> label(trans('product::product.label.download_id'))
                    -> placeholder(trans('product::product.placeholder.download_id'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Former::select('related_id')
                    -> options(trans('product::product.options.related_id'))
                    -> label(trans('product::product.label.related_id'))
                    -> placeholder(trans('product::product.placeholder.related_id'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('name')
                       -> label(trans('product::product.label.name'))
                       -> placeholder(trans('product::product.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::decimal('price')
                       -> label(trans('product::product.label.price'))
                       -> placeholder(trans('product::product.placeholder.price'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Former::select('status')
                    -> options(trans('product::product.options.status'))
                    -> label(trans('product::product.label.status'))
                    -> placeholder(trans('product::product.placeholder.status'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::numeric('quantity')
                       -> label(trans('product::product.label.quantity'))
                       -> placeholder(trans('product::product.placeholder.quantity'))!!}
                </div>

                <div class='col-md-12'>
                    {!! Former::textarea('description')
                    -> label(trans('product::product.label.description'))
                    -> dataUpload(URL::to($product->getUploadURL('description')))
                    -> addClass('html-editor')
                    -> placeholder(trans('product::product.placeholder.description'))!!}
                </div>
                <div class='col-md-4 col-sm-6'>
                    {!! Former::textarea ('meta_title')
                    -> label(trans('product::product.label.meta_title'))
                    -> placeholder(trans('product::product.placeholder.meta_title'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Former::textarea ('meta_description')
                    -> label(trans('product::product.label.meta_description'))
                    -> placeholder(trans('product::product.placeholder.meta_description'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('meta_keyword')
                       -> label(trans('product::product.label.meta_keyword'))
                       -> placeholder(trans('product::product.placeholder.meta_keyword'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('tags')
                       -> label(trans('product::product.label.tags'))
                       -> placeholder(trans('product::product.placeholder.tags'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::image('image')
                       -> label(trans('product::product.label.image'))
                       -> placeholder(trans('product::product.placeholder.image'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('sku')
                       -> label(trans('product::product.label.sku'))
                       -> placeholder(trans('product::product.placeholder.sku'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('upc')
                       -> label(trans('product::product.label.upc'))
                       -> placeholder(trans('product::product.placeholder.upc'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('ean')
                       -> label(trans('product::product.label.ean'))
                       -> placeholder(trans('product::product.placeholder.ean'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('jan')
                       -> label(trans('product::product.label.jan'))
                       -> placeholder(trans('product::product.placeholder.jan'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('isbn')
                       -> label(trans('product::product.label.isbn'))
                       -> placeholder(trans('product::product.placeholder.isbn'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('mpn')
                       -> label(trans('product::product.label.mpn'))
                       -> placeholder(trans('product::product.placeholder.mpn'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('location')
                       -> label(trans('product::product.label.location'))
                       -> placeholder(trans('product::product.placeholder.location'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('tax_class')
                       -> label(trans('product::product.label.tax_class'))
                       -> placeholder(trans('product::product.placeholder.tax_class'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Former::select('substract_stock')
                    -> options(trans('product::product.options.substract_stock'))
                    -> label(trans('product::product.label.substract_stock'))
                    -> placeholder(trans('product::product.placeholder.substract_stock'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Former::select('outofstock_status')
                    -> options(trans('product::product.options.outofstock_status'))
                    -> label(trans('product::product.label.outofstock_status'))
                    -> placeholder(trans('product::product.placeholder.outofstock_status'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('seo_keyword')
                       -> label(trans('product::product.label.seo_keyword'))
                       -> placeholder(trans('product::product.placeholder.seo_keyword'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::numeric('order')
                       -> label(trans('product::product.label.order'))
                       -> placeholder(trans('product::product.placeholder.order'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('dimensions')
                       -> label(trans('product::product.label.dimensions'))
                       -> placeholder(trans('product::product.placeholder.dimensions'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Former::select('weight_class')
                    -> options(trans('product::product.options.weight_class'))
                    -> label(trans('product::product.label.weight_class'))
                    -> placeholder(trans('product::product.placeholder.weight_class'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Former::select('length_class')
                    -> options(trans('product::product.options.length_class'))
                    -> label(trans('product::product.label.length_class'))
                    -> placeholder(trans('product::product.placeholder.length_class'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                    <div class='form-group'>
                        <label for='date_available' class='control-label'>{!!trans('product::product.label.date_available')!!}</label>
                        <div class='input-group date date-time-picker'>
                            {!! Former::text('date_available')
                            -> placeholder(trans('product::product.placeholder.date_available'))
                            -> dataDateFormat('D MMM YYYY hh:mm a')
                            ->raw()!!}
                           <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                        </div>
                    </div>
                 </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('manufacturer')
                       -> label(trans('product::product.label.manufacturer'))
                       -> placeholder(trans('product::product.placeholder.manufacturer'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('layouts')
                       -> label(trans('product::product.label.layouts'))
                       -> placeholder(trans('product::product.placeholder.layouts'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('options')
                       -> label(trans('product::product.label.options'))
                       -> placeholder(trans('product::product.placeholder.options'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('attributes')
                       -> label(trans('product::product.label.attributes'))
                       -> placeholder(trans('product::product.placeholder.attributes'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('recurrings')
                       -> label(trans('product::product.label.recurrings'))
                       -> placeholder(trans('product::product.placeholder.recurrings'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('discounts')
                       -> label(trans('product::product.label.discounts'))
                       -> placeholder(trans('product::product.placeholder.discounts'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('special')
                       -> label(trans('product::product.label.special'))
                       -> placeholder(trans('product::product.placeholder.special'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::images('images')
                       -> label(trans('product::product.label.images'))
                       -> placeholder(trans('product::product.placeholder.images'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('rewards')
                       -> label(trans('product::product.label.rewards'))
                       -> placeholder(trans('product::product.placeholder.rewards'))!!}
                </div>

{!!   Former::actions()
->large_primary_submit('Submit')
->large_inverse_reset('Reset')
!!}
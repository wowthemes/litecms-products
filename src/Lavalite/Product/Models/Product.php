<?php

namespace Lavalite\Product\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Lavalite\Filer\FilerTrait;

class Product extends Model
{
    use FilerTrait, SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * Initialiaze page modal.
     *
     * @param $name
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Initialize the modal variables.
     *
     * @return void
     */
    public function initialize()
    {
        $this->fillable = config('product.product.fillable');
        $this->uploads = config('product.product.uploadable');
        $this->uploadRootFolder = config('product.product.upload_root_folder');
        $this->table = config('product.product.table');
    }
}

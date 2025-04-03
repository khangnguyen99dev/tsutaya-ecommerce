<?php

namespace App\Models\Tsutaya;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model implements TranslatableContract
{
    use HasFactory, SoftDeletes, Translatable;

    protected $connection = "mysql";

    protected $table = "books";

    protected $primaryKey = "id";

    public $timestamps = true;

    public $translatedAttributes = ['title', 'description'];

    protected $fillable = [
        "is_isbn_queried",
        "short_sku",
        "plu_description",
        "line",
        "line_description",
        "division",
        "division_description", 
        "group",
        "group_description",
        "department",
        "department_description",
        "category",
        "category_description",
        "sub_category",
        "sub_category_description",
        "category_2",
        "first_create_supplier",
        "contract_no",
        "supplier_name",
        "primary_barcode",
        "tkt_type",
        "activated",
        "retail_gst_rate",
        "retail_w_gst",
        "retail_uom",
        "colour",
        "source",
        "parent_sku",
        "inventory",
        "cost_gst_rate",
        "last_purch_cost",
        "last_purch_uom",
        "size",
        "purchase_method",
        "ticket_sku",
        "pack_sku",
        "retail_gst_code",
        "standard_cost",
        "standard_uom",
        "style_code",
        "normal_item",
        "ingredient",
        "promotion_item",
        "weighing",
        "deleted",
        "cost_gst_code",
        "non_merch",
        "neire",
        "member_discount_item",
        "food_item",
        "vip_club_item",
        "kads1m_item",
        "ddp_cost",
        "auto_replenish",
        "item_grade",
        "item_origin_type",
        "country_of_origin",
        "item_packing",
        "launching_date",
        "cash_purchase_item",
        "production_date",
        "item_unit_size",
        "item_unit_size_uom",
        "expiry_guideline_takeout",
        "expiry_guideline_discount",
        "discontinued_flag",
        "discontinue_date",
        "creation_date",
        "hold_order_flag",
        "hold_order_start_date",
        "hold_order_end_date",
        "returnable",
        "stock_point_item",
        "activated_date",
        "store_info",
        "daiso_document_sku",
        "in_house_brand_item",
        "net_weight",
        "gross_weight",
        "cubic_meter",
        "hs_code",
        "msds_code",
        "export_item",
        "three_p_size",
        "three_p_grade",
        "dangerous_goods",
        "author",
        "synopsis",
        "publisher",
        "binding", 
        "language",
        "isbn13",
        "date_published"
    ];

    protected $appends = [
        "signed_image_url",
    ];

    // public function getSignedImageUrlAttribute(): string
    // {
    //     return empty($this->image) ? asset('assets/images/blank.png') : FileService::getSignedURL($this->image);
    // }

    public function authors(): HasMany
    {
        return $this->hasMany(Author::class, "book_id", "id");
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, "book_categories", "book_id", "category_id");
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}

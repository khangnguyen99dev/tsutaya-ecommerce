<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            
            // Basic info
            $table->string('image', 255)->nullable();
            $table->longText('synopsis')->nullable();
            $table->string('publisher', 255)->nullable();
            $table->string('binding', 255)->nullable();
            $table->string('language', 255)->nullable();
            $table->string('isbn13', 255)->nullable();
            $table->date('date_published')->nullable();
            $table->tinyInteger('is_isbn_queried')->default(0);
            $table->string('short_sku', 50)->nullable();
            $table->text('description')->nullable();
            $table->text('plu_description')->nullable();
            
            // Classification info
            $table->string('line', 50)->nullable();
            $table->string('line_description', 100)->nullable();
            $table->string('division', 100)->nullable();
            $table->string('division_description', 100)->nullable();
            $table->string('group', 100)->nullable();
            $table->string('group_description', 100)->nullable();
            $table->string('department', 100)->nullable();
            $table->string('department_description', 100)->nullable();
            $table->string('category', 100)->nullable();
            $table->string('category_description', 100)->nullable();
            $table->string('sub_category', 100)->nullable();
            $table->string('sub_category_description', 100)->nullable();
            $table->string('category_2', 100)->nullable();
            
            // Supplier info
            $table->string('first_create_supplier', 255)->nullable();
            $table->string('contract_no', 255)->nullable();
            $table->string('supplier_name', 255)->nullable();
            $table->string('primary_barcode', 255)->nullable();
            
            // Product info
            $table->string('tkt_type', 100)->nullable();
            $table->boolean('activated')->default(true);
            $table->string('retail_gst_rate', 100)->nullable();
            $table->string('retail_w_gst', 100)->nullable();
            $table->string('retail_uom', 100)->nullable();
            $table->string('colour', 100)->nullable();
            $table->string('source', 100)->nullable();
            $table->string('parent_sku', 100)->nullable();
            $table->string('inventory', 100)->nullable();
            
            // Price and cost info
            $table->string('cost_gst_rate', 100)->nullable();
            $table->string('last_purch_cost', 100)->nullable();
            $table->string('last_purch_uom', 100)->nullable();
            $table->string('size', 100)->nullable();
            $table->string('purchase_method', 100)->nullable();
            $table->string('ticket_sku', 100)->nullable();
            $table->string('pack_sku', 100)->nullable();
            $table->string('retail_gst_code', 100)->nullable();
            $table->string('standard_cost', 100)->nullable();
            $table->string('standard_uom', 100)->nullable();
            $table->string('style_code', 100)->nullable();
            
            // Other attributes
            $table->string('normal_item', 100)->nullable();
            $table->string('ingredient', 100)->nullable();
            $table->string('promotion_item', 100)->nullable();
            $table->string('weighing', 100)->nullable();
            $table->string('deleted', 100)->nullable();
            $table->string('cost_gst_code', 100)->nullable();
            $table->string('non_merch', 100)->nullable();
            $table->string('neire', 100)->nullable();
            $table->string('member_discount_item', 100)->nullable();
            $table->string('food_item', 100)->nullable();
            $table->string('vip_club_item', 100)->nullable();
            $table->string('kads1m_item', 100)->nullable();
            $table->string('ddp_cost', 100)->nullable();
            $table->string('auto_replenish', 100)->nullable();
            $table->string('item_grade', 100)->nullable();
            $table->string('item_origin_type', 100)->nullable();
            $table->string('country_of_origin', 100)->nullable();
            $table->string('item_packing', 100)->nullable();
            $table->string('launching_date', 100)->nullable();
            $table->string('cash_purchase_item', 100)->nullable();
            $table->string('production_date', 100)->nullable();
            $table->string('item_unit_size', 100)->nullable();
            $table->string('item_unit_size_uom', 100)->nullable();
            $table->string('expiry_guideline_takeout', 100)->nullable();
            $table->string('expiry_guideline_discount', 100)->nullable();
            $table->string('discontinued_flag', 100)->nullable();
            $table->string('discontinue_date', 100)->nullable();
            $table->string('creation_date', 100)->nullable();
            $table->string('hold_order_flag', 100)->nullable();
            $table->string('hold_order_start_date', 100)->nullable();
            $table->string('hold_order_end_date', 100)->nullable();
            $table->string('returnable', 100)->nullable();
            $table->string('stock_point_item', 100)->nullable();
            $table->string('activated_date', 100)->nullable();
            $table->string('store_info', 255)->nullable();
            $table->string('daiso_document_sku', 100)->nullable();
            $table->string('in_house_brand_item', 100)->nullable();
            $table->string('net_weight', 100)->nullable();
            $table->string('gross_weight', 100)->nullable();
            $table->string('cubic_meter', 100)->nullable();
            $table->string('hs_code', 100)->nullable();
            $table->string('msds_code', 100)->nullable();
            $table->string('export_item', 100)->nullable();
            $table->string('three_p_size', 100)->nullable();
            $table->string('three_p_grade', 100)->nullable();
            $table->string('dangerous_goods', 100)->nullable();
            $table->string('author', 255)->nullable();
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

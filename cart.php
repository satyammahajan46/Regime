<?php
class cart
{
    public $id,$product_name,$photo,$qty,$stock,$sp,$mrp,$gst,$CGST,$SGST,$code;
    public function __construct($_id,$_product_name,$_photo,$_qty,$_stock,$_sp,$_mrp,$_gst,$_cgst,$_sgst,$code)
    {
        $this->id=$_id;
        $this->product_name=$_product_name;
        $this->photo=$_photo;
        $this->qty=$_qty;
        $this->stock=$_stock;
        $this->sp=$_sp;
        $this->mrp=$_mrp;
        $this->TotalGST=$_gst;
        $this->CGST=$_cgst;
        $this->SGST=$_sgst;
        $this->code=$code;
            }
}
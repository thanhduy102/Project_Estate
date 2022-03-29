<?php

namespace App;

class BatDongSanFilter extends QueryFilter
{
    
    public function form($form)
    {
        return $this->builder->where('HinhThuc', $form);
    }

    public function type($type)
    {
       
        return $this->builder->where('LoaiBDS', $type);
    }

    public function province($province)
    {
        return $this->builder->where('id_TinhThanh', $province);
    }

    public function district($district)
    {
        return $this->builder->where('id_QuanHuyen', $district);
    }

    public function ward($ward)
    {
        return $this->builder->where('id_XaPhuong', $ward);
    }

    public function bedroom($bedroom)
    {
        return $this->builder->where('SoPhongNgu', $bedroom);
    }

    public function floor($floor)
    {
        return $this->builder->where('SoTang', $floor);
    }

    public function min_price($min_price){
        $price_min=$min_price*1000*1000;
        // dd($price_min);
        return $this->builder->where('GiaTienBDS','>=',$price_min)->get();
    }

    public function max_price($max_price){
        $price_max=$max_price*1000*1000;
        return $this->builder->where('GiaTienBDS','<=',$price_max)->get();
    }
    public function dt_min_price($dt_min_price){
        return $this->builder->where('DienTich','>=',$dt_min_price)->get();
    }

    public function dt_max_price($dt_max_price){
        return $this->builder->where('DienTich','<=',$dt_max_price)->get();
    }
}
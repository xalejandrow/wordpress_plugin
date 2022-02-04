<?php

class order {

    public function getOrders($params){
        global $wpdb;
        $table = "{$wpdb->prefix}wc_order_product_lookup p JOIN {$wpdb->prefix}woocommerce_order_items i ON p.order_id = i.order_id";
        $where = " WHERE DATE_FORMAT(p.date_created,'%Y-%m-%d') LIKE '%{$params['date']}%'";
        if($params['product_id'] != ''){
            $and = " AND p.product_id = {$params['product_id']}";
        }else{
            $and = '';
        }
        $query = "SELECT * FROM $table $where $and";
        // print_r($query);
        $data = $wpdb->get_results($query,ARRAY_A);
        if(empty($data) || is_null($data)){
            $data = array();
        }
        return $data;
    }

   

}


?>
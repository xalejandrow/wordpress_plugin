<?php

require_once PRUEBA_PLUGIN_DIR . '/class/order.class.php';
$actual_date = date("Y").'-'.date("m");
$_order = new order;
$params = [
 "date"=> $actual_date,
 "product_id"=> 12
];
$orders = $_order->getOrders($params);
$total = 0;
?>

<div class="wrap">
    <h1 class='wp-heading-inline'>Esto es una Prueba</h1>
		<h2>
           <label>Fecha: </label>
           <label > <?php echo $actual_date;?></label>
        </h2>
		<p>
            
</p>
</div>


<div class="wrap">
        <?php
             echo "<h1 class='wp-heading-inline'>Tabla</h1>";
        ?>
        <br><br>

         <table class="wp-list-table widefat fixed striped pages">
                <thead>
                    <th >Id</th>
                    <th >Id Prod</th>
                    <th >Producto</th>
                    <th >Cantidad</th>
                    <th >Precio</th>
                    <th >Fecha</th>
                </thead>
                <tbody id="the-list">
                    <?php 
                        foreach ($orders as $key => $value) {
                          $id = $value['order_id'];
                         $product = $value['product_id'];
                         $item_name = $value['order_item_name'];
                         $product_qty = $value['product_qty'];
                         $product_net_revenue = $value['product_net_revenue'];
                         $date = $value['date_created'];

                         $total += $product_net_revenue;
                           echo "
                                <tr>
                                    <td>$id</td>
                                    <td>$product </td>
                                    <td>$item_name </td>
                                    <td>$product_qty </td>
                                    <td>$product_net_revenue </td>
                                    <td>$date</td>
                                </tr>
                            ";
                        }

                    ?>
                </tbody>
        </table>


        <h2>Total de la compra: </h2>
        <h2><?php echo $total ?></h2>


 </div>
 

<div class="wrap">
<?php //var_dump($orders);?>
</div>
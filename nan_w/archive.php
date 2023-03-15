<?php
include_once('./_common.php');

$g5['title'] = '알림';
// include_once(G5_MSHOP_PATH.'/_head.php');
include_once(G5_THEME_SHOP_PATH.'/shop.head.php');

// $s_cart_id 로 현재 장바구니 자료 쿼리
$sql = " select a.ct_id,
                a.it_id,
                a.it_name,
                a.ct_price,
                a.ct_point,
                a.ct_qty,
                a.ct_status,
                a.ct_send_cost,
                a.it_sc_type,
                b.ca_id
           from {$g5['g5_shop_cart_table']} a left join {$g5['g5_shop_item_table']} b on ( a.it_id = b.it_id )
          where a.od_id = '$s_cart_id' ";
$sql .= " group by a.it_id ";
$sql .= " order by a.ct_id ";
$result = sql_query($sql);

$cart_count = sql_num_rows($result);
?>
<div>준비 중 입니다.</div>
<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
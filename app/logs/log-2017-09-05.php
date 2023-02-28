<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-09-05 15:50:53 --> Could not find the language line "P822D"
ERROR - 2017-09-05 15:51:01 --> Could not find the language line "P822D"
ERROR - 2017-09-05 15:52:27 --> Could not find the language line "P822D"
ERROR - 2017-09-05 15:52:28 --> Could not find the language line "P822D"
ERROR - 2017-09-05 15:54:10 --> Query error: Expression #55 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'FWP.quantity' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT sma_products.*, FWP.quantity as quantity, sma_categories.id as category_id, sma_categories.name as category_name
FROM `sma_products`
LEFT JOIN ( SELECT product_id, warehouse_id, quantity as quantity from sma_warehouses_products ) FWP ON `FWP`.`product_id`=`sma_products`.`id`
LEFT JOIN `sma_categories` ON `sma_categories`.`id`=`sma_products`.`category_id`
WHERE (`sma_products`.`track_quantity` =0 OR `FWP`.`quantity` >0) AND `FWP`.`warehouse_id` = '1' AND (`sma_products`.`name` LIKE '%1%' OR `sma_products`.`code` LIKE '%1%' OR  concat(sma_products.name, ' (', sma_products.code, ')') LIKE '%1%')
GROUP BY `sma_products`.`id`
 LIMIT 5

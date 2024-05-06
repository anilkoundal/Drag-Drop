mysql_select_distinct count except an ID.....

$mysql = "SELECT 
          count(DISTINCT CASE WHEN cp.filter_thread <> ".EXCLUDE_THREAD." THEN cp.filter_thread ELSE NULL END) as thread,
          count(DISTINCT CASE WHEN cp.filter_paint <> ".EXCLUDE_PAINT." THEN cp.filter_paint ELSE NULL END) as paint,
          count(DISTINCT CASE WHEN cp.filter_drive <> ".EXCLUDE_DRIVE." THEN cp.filter_drive ELSE NULL END) as drive, 
            count(DISTINCT cp.filter_finish) as finish, 
            count(DISTINCT cp.filter_material) as material 
            FROM `pd_cstm_product` as cp JOIN pd_cstm_product_term cpt ON cpt.cst_proid = cp.id WHERE cpt.product_term_id = 322";

<?
/*
    nan_learning_hist
    step_valid_bgn_dt
    step_valid_end_dt
*/
function getValidDtUpdQuery($mb_no){
    $query =
    "UPDATE nan_learning_hist nlh,
        ( SELECT
            mmry_step
            ,valid_time_type_cd
            ,step_valid_bgn_time
            ,step_valid_end_time
        FROM nan_memory_step nms
        ) nms
    SET  step_valid_bgn_dt = (
            CASE  WHEN nms.valid_time_type_cd = 'mi'  THEN DATE_ADD(now(), interval nms.step_valid_bgn_time MINUTE)
                WHEN nms.valid_time_type_cd = 'h'   THEN DATE_ADD(now(), interval nms.step_valid_bgn_time HOUR)
                WHEN nms.valid_time_type_cd = 'd'   THEN DATE_ADD(now(), interval nms.step_valid_bgn_time DAY)
            END )
        , step_valid_end_dt = (
            CASE  WHEN nms.valid_time_type_cd = 'mi'  THEN DATE_ADD(now(), interval nms.step_valid_bgn_time + nms.step_valid_end_time MINUTE)
                WHEN nms.valid_time_type_cd = 'h'   THEN DATE_ADD(now(), interval nms.step_valid_bgn_time + nms.step_valid_end_time HOUR)
                WHEN nms.valid_time_type_cd = 'd'   THEN DATE_ADD(now(), interval nms.step_valid_bgn_time + nms.step_valid_end_time DAY)
            END )
    WHERE   nlh.mmry_step + 1 = nms.mmry_step
    AND     step_valid_bgn_dt is null
    AND     nlh.mb_no = '$mb_no' 
    ";
    return $query;
}
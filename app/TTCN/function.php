<?php
/**
 * Created by PhpStorm.
 * User: HaiDucNguyen
 * Date: 1/8/2018
 * Time: 5:47 PM
 */
function cate_parent($categories, $parent_id = 0, $char = '', $select = 0)
{
    foreach ($categories as $key => $item) {
        // Nếu là chuyên mục con thì hiển thị
        if ($item['parent'] == $parent_id) {

            echo '<option value="' . $item['id'] . '" >';
            echo $char . $item['name'];
            echo '</option>';


            // Xóa chuyên mục đã lặp
            unset($categories[$key]);

            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
            cate_parent($categories, $item['id'], $char . '|---');
        }
    }
}

function cate_post($data, $select = 0)
{
    foreach ($data as $val) {
        $id = $val['id'];
        $name = $val['name'];


        if ($select != 0 && $id == $select) {
            echo "<option value='$id' selected='selected'> $name</option>";
        } else {
            echo "<option value='$id' > $name</option>";
        }
    }
}
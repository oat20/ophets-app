<?php
$package = array(
    array(
        'id' => '1',
        'title' => 'รายการตรวจสุขภาพทั่วไป',
        'package' => array(
            array(
            'id' => '11',
            'item' => 'A11',
            'price' => '90'
            ),
            array(
                'id' => '12',
                'item' => 'A12',
                'price' => '50'
            ),
        )
    ),
    array(
        'id' => '2',
        'title' => 'รายการตรวจพิเศษ (เบิกไม่ได้)',
        'package' => array(
            array(
                'id' => '21',
                'item' => 'A21',
                'price' => '250'
            ),
            array(
                'id' => '22',
                'item' => 'A22',
                'price' => '250'
            ),
        )
    )
);

echo json_encode($package, JSON_UNESCAPED_UNICODE);
?>
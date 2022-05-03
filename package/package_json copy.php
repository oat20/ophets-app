<?php
$package = array(
    array(
        'id' => '1',
        'title' => 'รายการตรวจสุขภาพทั่วไป',
        'package' => array(
            array(
            'id' => '11',
            'item' => 'ความสมบูรณ์ของเม็ดเลือด, โรคเลือด, ภาวะโลหิตจอง (CBC)',
            'price' => '90'
            ),
            array(
                'id' => '12',
                'item' => 'ตรวจปัสสาวะ (Urinalysis)',
                'price' => '50'
            ),
            array(
                'id' => '13',
                'item' => 'ตรวจอุจจาระ (Stool Exam & occult blood)',
                'price' => '70'
            ),
            array(
                'id' => '14',
                'item' => 'เอกซเรย์ปอด (Chest X-ray)',
                'price' => '170'
            ),
            array(
                'id' => '15',
                'item' => 'ระดับน้ำตาลในเลือด (Glucose)',
                'price' => '40'
            ),
            array(
                'id' => '16',
                'item' => 'การทำงานของไต (BUN, Creatinine)',
                'price' => '100'
            ),
            array(
                'id' => '17',
                'item' => 'กรดยูริค (Uric acid) โรคเก๊าท์',
                'price' => '60'
            ),
            array(
                'id' => '18',
                'item' => 'การทำงานของตับ (SGOT, SGPT, ALP)',
                'price' => '150'
            ),
            array(
                'id' => '19',
                'item' => 'ไขมันคอเลสเตอรอล (Cholesterol)',
                'price' => '60'
            ),
            array(
                'id' => '110',
                'item' => 'ไขมันไตรกลีเซอไรด์ (Triglyceride)',
                'price' => '60'
            ),
            array(
                'id' => '111',
                'item' => 'ไขมันคอเลสเตอรอลชนิดดี (HDL) และชนิดไม่ดี (LDL)',
                'price' => '100'
            ),
            array(
                'id' => '112',
                'item' => 'แคลเซียมในเลือด (Calcium)',
                'price' => '40'
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
<?php
header("Access-Control-Allow-Origin: *");
	
	header("Content-Type: application/json; charset=UTF-8");
	
	header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
	
	header("Access-Control-Max-Age: 3600");
	
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$package = array(
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
    array(
        'id' => '21',
        'item' => 'สารบ่งชี้การเกิดมะเร็งตับ (AFP)',
        'price' => '250'
    ),
    array(
        'id' => '22',
        'item' => 'สารบ่งชี้การเกิดทะเร็งสำไส้ใหญ่ (CEA)',
        'price' => '250'
    ),
);

http_response_code(200);
echo json_encode($package, JSON_UNESCAPED_UNICODE);
?>
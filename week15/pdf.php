<?php
require_once('./TCPDF-main/tcpdf.php');

// 開始輸出緩衝區
ob_start();

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// set font
$pdf->SetFont('msungstdlight', '', 10);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();

//連接資料庫
$link = mysqli_connect('localhost', 'root', '0000', 'school');

if (!$link) {
    // 使用緩衝區來避免直接輸出錯誤訊息
    ob_end_clean();
    die("無法開啟資料庫!<br/>");
}

//SQL語法
$SQL = "SELECT * FROM student"; 

//送出查詢
$result = mysqli_query($link, $SQL);

$html = '<table border="1" cellpadding="4">';  
$html .= "<tr><th>編號</th><th>姓名</th><th>系所</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    $html .= "<tr>";
    $html .= "<td>" . htmlspecialchars($row["No"]) . "</td>";
    $html .= "<td>" . htmlspecialchars($row["Name"]) . "</td>";
    $html .= "<td>" . htmlspecialchars($row["Department"]) . "</td>";
    $html .= "</tr>";
}
$html .= "</table>";

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

//Close and output PDF document
ob_end_clean();
$pdf->Output('student_info.pdf', 'D');

mysqli_close($link);
?>
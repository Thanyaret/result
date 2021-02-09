<?php
    error_reporting(0);
    error_reporting(E_ERROR | E_PARSE);

    // รับค่าจาก from
    $size_dog = $_POST["size_dog"]; // check ขนาดสายพันธุ์สุนัข
    $old_dog = $_POST["old_dog"]; // check ช่วงอายุของสุนัข
    $spt_fever = $_POST["spt_fever"]; // check อาการไข้
    $spt_seep = $_POST["spt_seep"]; // check อาการซึม
    $spt_anorexic = $_POST["spt_anorexic"]; // check อาการเบื่ออาหาร
    $spt_sorelegs = $_POST["spt_sorelegs"]; // check อาการเจ็บบริเวณขา

    // อาการบริเวณช่องปาก
    // check มีกลิ่นปาก
    if(!isset($_POST['spt_f_mouth'])){
        $spt_f_mouth = "No";
    } else {
        $spt_f_mouth = "Yes";
    };
    // check เลือดออกบริเวณเงือก
    if(!isset($_POST['spt_b_mouth'])){
        $spt_b_mouth = "No";
    } else {
        $spt_b_mouth = "Yes";
    };
    // check ฟันร่วง
    if(!isset($_POST['spt_t_mouth'])){
        $spt_t_mouth = "No";
    } else {
        $spt_t_mouth = "Yes";
    };
    // check แผลในปาก
    if(!isset($_POST['spt_s_mouth'])){
        $spt_s_mouth = "No";
    } else {
        $spt_s_mouth = "Yes";
    };
    // check ฟันโยก
    if(!isset($_POST['spt_r_mouth'])){
        $spt_r_mouth = "No";
    } else {
        $spt_r_mouth = "Yes";
    };
    // check เหงือกร่น
    if(!isset($_POST['spt_re_mouth'])){
        $spt_re_mouth = "No";
    } else {
        $spt_re_mouth = "Yes";
    };

    $spt_pptongue = $_POST["spt_pptongue"]; // check ภาวะลิ้นม่วง
    $spt_bigbelly = $_POST["spt_bigbelly"]; // check อาการท้องกางใหญ่
    $spt_weight_nm = $_POST["weight_nm"]; // check น้ำหนักตัวของสุนัข
    $spt_mood = $_POST["spt_mood"]; // check หงุดหงิดง่าย
    $spt_nervous = $_POST["spt_nervous"]; // check กระวนกระวาย

    // อาการเกี่ยวกับทางเดินหายใจ
    // check ไอ
    if(!isset($_POST['spt_cough'])){
        $spt_cough = "No";
    } else {
        $spt_cough = "Yes";
    };
    // check จาม
    if(!isset($_POST['spt_sneeze'])){
        $spt_sneeze = "No";
    } else {
        $spt_sneeze = "Yes";
    };
    // check หายใจติดขัด
    if(!isset($_POST['spt_tb'])){
        $spt_tb = "No";
    } else {
        $spt_tb = "Yes";
    };
    // check ลมหายใจเหม็น
    if(!isset($_POST['spt_breath'])){
        $spt_breath = "No";
    } else {
        $spt_breath = "Yes";
    };

    // อาการเกี่ยวกับทางเดินอาหาร
    // check อาเจียน
    if(!isset($_POST['spt_vomit'])){
        $spt_vomit = "No";
    } else {
        $spt_vomit = "Yes";
    };
    // check ท้องเสีย
    if(!isset($_POST['spt_diarrhea'])){
        $spt_diarrhea = "No";
    } else {
        $spt_diarrhea = "Yes";
    };
    // check ถ่ายเป็นเลือด
    if(!isset($_POST['spt_blood'])){
        $spt_blood = "No";
    } else {
        $spt_blood = "Yes";
    };
    // check ขับถ่ายน้อยลง
    if(!isset($_POST['spt_little'])){
        $spt_little = "No";
    } else {
        $spt_little = "Yes";
    };
    // check ปัสสาวะมาก
    if(!isset($_POST['spt_brinating'])){
        $spt_brinating = "No";
    } else {
        $spt_brinating = "Yes";
    };
    // check กระหายน้ำ
    if(!isset($_POST['spt_thirsty'])){
        $spt_thirsty = "No";
    } else {
        $spt_thirsty = "Yes";
    };

    // อาการเกี่ยวกับผิวหนัง
    // check ตุ่มหยองใต้ท้อง
    if(!isset($_POST['spt_pustules'])){
        $spt_pustules = "No";
    } else {
        $spt_pustules = "Yes";
    };
    // check คัน
    if(!isset($_POST['spt_skin_rod'])){
        $spt_skin_rod = "No";
    } else {
        $spt_skin_rod = "Yes";
    };
    // check ผื่นแดง
    if(!isset($_POST['spt_skin_rash'])){
        $spt_skin_rash = "No";
    } else {
        $spt_skin_rash = "Yes";
    };
    // check ขนร่วง
    if(!isset($_POST['spt_skin_wool'])){
        $spt_skin_wool = "No";
    } else {
        $spt_skin_wool = "Yes";
    };
    // check ผิวเป็นขุย
    if(!isset($_POST['spt_skin_flaky'])){
        $spt_skin_flaky = "No";
    } else {
        $spt_skin_flaky = "Yes";
    };

    // อาการเกี่ยวกับการมองเห็น
    // check ขี้ตา
    if(!isset($_POST['spt_see_oily'])){
        $spt_see_oily = "No";
    } else {
        $spt_see_oily = "Yes";
    };
    // check ม่านตาขยาย
    if(!isset($_POST['spt_see_e'])){
        $spt_see_e = "No";
    } else {
        $spt_see_e = "Yes";
    };

    // เกี่ยวกับการเชื่อมต่อ server 
    // $servername = "localhost:2002"; // ชื่อ server ที่เราต้องการเชื่อมต่อ
    // $username = "nongkaya"; // ชื่อ username ที่เราต้องการเชื่อมต่อ
    // $password = "4hq5Z]6J3iXyC["; // ชื่อ password ที่เราต้องการเชื่อมต่อ
    // $dbname = "nongkaya_1"; // ชื่อ ฐานข้อมูล ที่เราต้องการเชื่อมต่อ

    // host เราเอง 
    $servername = "localhost"; // ชื่อ server ที่เราต้องการเชื่อมต่อ
    $username = "root"; // ชื่อ username ที่เราต้องการเชื่อมต่อ
    $password = ""; // ชื่อ password ที่เราต้องการเชื่อมต่อ
    $dbname = "project_dog"; // ชื่อ ฐานข้อมูล ที่เราต้องการเชื่อมต่อ
    
    // Create connection ฟังชันก์ที่เราใช้ในการเชื่อมต่อกับ server โดยเราต้องส่ง พารามิเตอร์เป็น ชื่อ server , ชื่อ username , ชื่อ password  , ชื่อ ฐานข้อมูล
    $conn = mysql_connect($servername, $username, $password);
    // Check connection เช็คว่า เราสามารถเชื่อมต่อฐานข้อมูลได้หรือไม่
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // กำหนดให้ว่าจะใช้ฐานข้อมูลอะไร
    $objDB = mysql_select_db($dbname);
    // กำหนดให้ฐานขช้อมูลใช้ ภาษาไทย 
    mysql_set_charset("utf8");

    // ตั้งค่าเวลาไทย
    date_default_timezone_set("Asia/Bangkok");


    // ทำการ ดึงข้อมูลโดยใช้ ภาษา SQL
    $sql_data_disease = "SELECT * FROM data_disease"; // สร้างตัวแปรมาเก็บ ภาษา sql เพื่อนำไปดึงข้อมูล
    $result_data_disease = mysql_query($sql_data_disease) or die ("Error Query [".$sql_data_disease."]"); // จากทำการเรียกใช้ฟังก์ ใช้ในการนำ ขอความ sql ไปทำการ query

    // ทำการสร้างตัวแปรที่ใช้ในการเก็บชื่อโรคและ คะแนนจำนวนข้อที่ตอบตรงกับในฐานข้อมูล
    $name_disease_past_analyze = "";
    $score_conformable = 0;

    // ทำการวน loop เพื่อนนำข้อมูลออกมา 
    while($row_data_disease = mysql_fetch_array($result_data_disease)){

        $score_start = 0 ;

        // เช็ค ขนาดสายพันธุ์สุนัข
        if($row_data_disease["size_dog"] == $size_dog){
            $score_start++;
        };
        // เช็ค ช่วงอายุของสุนัข
        if($row_data_disease["old_dog"] == $old_dog){
            $score_start++;
        };
        // เช็ค อาการไข้
        if($row_data_disease["spt_fever"] == $spt_fever){
            $score_start++;
        };
        // เช็ค อาการซึม 
        if($row_data_disease["spt_seep"] == $spt_seep){
            $score_start++;
        };
        // เช็ค อาการเบื่ออาหาร
        if($row_data_disease["spt_anorexic"] == $spt_anorexic){
            $score_start++;
        };
        // เช็ค อาการเจ็บบริเวณขา
        if($row_data_disease["spt_sorelegs"] == $spt_sorelegs){
            $score_start++;
        };

        // อาการบริเวณช่องปาก 
        // เช็ค มีกลิ่นปาก
        if($row_data_disease["spt_f_mouth"] == $spt_f_mouth){
            $score_start++;
        };
        // เช็ค เลือดออกบริเวณเงือก
        if($row_data_disease["spt_b_mouth"] == $spt_b_mouth){
            $score_start++;
        };
        // เช็ค ฟันร่วง
        if($row_data_disease["spt_t_mouth"] == $spt_t_mouth){
            $score_start++;
        };
        // เช็ค แผลในปาก
        if($row_data_disease["spt_s_mouth"] == $spt_s_mouth){
            $score_start++;
        };
        // เช็ค ฟันโยก
        if($row_data_disease["spt_r_mouth"] == $spt_r_mouth){
            $score_start++;
        };
        // เช็ค เหงือกร่น
        if($row_data_disease["spt_re_mouth"] == $spt_re_mouth){
            $score_start++;
        };


        // เช็ค ภาวะลิ้นม่วง
        if($row_data_disease["spt_pptongue"] == $spt_pptongue){
            $score_start++;
        };
        // เช็ค อาการท้องกางใหญ่
        if($row_data_disease["spt_bigbelly"] == $spt_bigbelly){
            $score_start++;
        };
        // เช็ค น้ำหนักตัวของสุนัข
        if($row_data_disease["spt_weight_nm"] == $spt_weight_nm){
            $score_start++;
        };
        // เช็ค หงุดหงิดง่าย
        if($row_data_disease["spt_mood"] == $spt_mood){
            $score_start++;
        };
        // เช็ค กระวนกระวาย
        if($row_data_disease["spt_nervous"] == $spt_nervous){
            $score_start++;
        };

        // อาการเกี่ยวกับทางเดินหายใจ
        // เช็ค ไอ
        if($row_data_disease["spt_cough"] == $spt_cough){
            $score_start++;
        };
        // เช็ค จาม
        if($row_data_disease["spt_sneeze"] == $spt_sneeze){
            $score_start++;
        };
        // เช็ค หายใจติดขัด
        if($row_data_disease["spt_tb"] == $spt_tb){
            $score_start++;
        };
        // เช็ค ลมหายใจเหม็น
        if($row_data_disease["spt_breath"] == $spt_breath){
            $score_start++;
        };

        // อาการเกี่ยวกับทางเดินอาหาร
        // เช็ค อาเจียน
        if($row_data_disease["spt_vomit"] == $spt_vomit){
            $score_start++;
        };
        // เช็ค ท้องเสีย
        if($row_data_disease["spt_diarrhea"] == $spt_diarrhea){
            $score_start++;
        };
        // เช็ค ถ่ายเป็นเลือด
        if($row_data_disease["spt_blood"] == $spt_blood){
            $score_start++;
        };
        // เช็ค ขับถ่ายน้อยลง
        if($row_data_disease["spt_little"] == $spt_little){
            $score_start++;
        };
        // เช็ค ปัสสาวะมาก
        if($row_data_disease["spt_brinating"] == $spt_brinating){
            $score_start++;
        };
        // เช็ค กระหายน้ำ
        if($row_data_disease["spt_thirsty"] == $spt_thirsty){
            $score_start++;
        };

        // อาการเกี่ยวกับผิวหนัง
        // เช็ค ตุ่มหยองใต้ท้อง
        if($row_data_disease["spt_pustules"] == $spt_pustules){
            $score_start++;
        };
        // เช็ค คัน
        if($row_data_disease["spt_skin_rod"] == $spt_skin_rod){
            $score_start++;
        };
        // เช็ค ผื่นแดง
        if($row_data_disease["spt_skin_rash"] == $spt_skin_rash){
            $score_start++;
        };
        // เช็ค ขนร่วง
        if($row_data_disease["spt_skin_wool"] == $spt_skin_wool){
            $score_start++;
        };
        // เช็ค ผิวเป็นขุย
        if($row_data_disease["spt_skin_flaky"] == $spt_skin_flaky){
            $score_start++;
        };

        // อาการเกี่ยวกับการมองเห็น 
        // เช็ค  ขี้ตา
        if($row_data_disease["spt_see_oily"] == $spt_see_oily){
            $score_start++;
        };
        // เช็ค ม่านตาขยาย
        if($row_data_disease["spt_see_e"] == $spt_see_e){
            $score_start++;
        };

        // ทำการเช็คกับข้อมูลที่เราเก็บไว้ว่า อันไหนเหมือนกว่ากัน
        if($score_conformable <= $score_start){
            $name_disease_past_analyze = $row_data_disease["name_disease"];
            $score_conformable = $score_start;
        };

        // echo $score_start ;

    };
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Dog Training, Courses, Advanced Training, 10 reasons, You and your best friend can learn and grow together, How to Train a Dog?, #01, #02, #03, #04, Contact Us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>การพยากรณ์โรคสุนัข</title>
    <link rel="stylesheet" href="assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="assets/css/index.css" media="screen">
    <!-- <meta name="generator" content="Nicepage 2.25.2, nicepage.com"> -->
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Changa+One:400,400i">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@700&family=Kanit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pridi:wght@300&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- js -->
    <script class="u-script" type="text/javascript" src="assets/js/nicepage.js" defer=""></script>
</head>
<body data-home-page="https://website109225.nicepage.io/Page-2.html?version=b3dc036d-63c1-4d72-9104-7c6efe9ac836" data-home-page-title="Page 2" class="u-body">
    <header class="u-clearfix u-header u-header bg_herder" id="sec-5be5">
        <div class="u-clearfix u-sheet u-valign-bottom-sm u-valign-bottom-xs u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
            <a href="#" class="u-image u-logo u-image-1">
                <img src="assets/images/logo_dag_1.png" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="SM">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0; font-weight: 700;">
                    <a class="u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-custom-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-body-color u-text-hover-palette-2-base u-white"
                        href="#">
                        <svg>
                            <use xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                                    <rect y="1" width="16" height="2"></rect>
                                    <rect y="7" width="16" height="2"></rect>
                                    <rect y="13" width="16" height="2"></rect>
                                </symbol>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-spacing-20 u-text-body-alt-color u-unstyled u-nav-1">
                        <li class="u-nav-item"><a class="u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base " href="index.html" style="padding: 10px;">HOME</a>
                        </li>
                        <!-- <li class="u-nav-item"><a class="u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base active" href="#" style="padding: 10px;">RESULT</a>
                        </li>
                        <li class="u-nav-item"><a class="u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" href="#" style="padding: 10px;">Page 2</a>
                        </li> -->
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.html" style="padding: 10px 20px;">HOME</a>
                            </li>
                            <!-- <li class="u-nav-item"><a class="u-button-style u-nav-link active" href="#" style="padding: 10px 20px;">RESULT</a>
                            </li> -->
                            <!-- <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#" style="padding: 10px 20px;">Page 2</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>
    <section class="u-clearfix u-image u-section-1" id="sec-466c">
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-valign-middle-xs u-sheet-1">
            <div class="u-container-style u-group u-opacity u-opacity-65 u-palette-4-base u-group-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                    <h2 class="u-custom-font u-text u-text-font u-text-result-1 text_shadow"><?=$name_disease_past_analyze?></h2>
                    <br>
                    <br>
                    <br>
                    <h2 class="u-custom-font u-text u-text-font u-text-result-2 ">ค่าความถูกต้อง</h2>
                    <br>
                    <br>
                    <h2 class="u-custom-font u-text u-text-font u-text-result-3 "><?=number_format((($score_conformable*100)/34),2)?> %</h2>
                    <br> 
                    <br>
                    <br>
                    <!-- <p class="u-text u-text-3">Whether you have a young pup, older dog or a rescue, PetSmart training classes can help them learn how to behave appropriately at home and on-the-go.</p> -->
                    <a href="index.html" class="u-btn u-btn-rectangle u-button-style u-text-palette-1-base u-white u-btn-1">กลับหน้าหลัก</a>
                    <br>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-8f89">
    </footer>
    <section class="u-backlink u-clearfix u-grey-80">
        <a class="u-link" href="" target="_blank">
            <span>นางสาววรินธร กรสังข์</span>
        </a>
        <p class="u-text">
            <span>คณะวิทยาศาสตร์</span>
        </p>
        <a class="u-link" href="" target="_blank">
            <span>มหาวิทยาลัยนเรศวร</span>
        </a>.
    </section>
</body>

</html>
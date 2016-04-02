<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/cleanstream/wp-config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/cleanstream/wp-load.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/cleanstream/wp-includes/wp-db.php';
global $wpdb;
if (isset($_POST['pdf001']) == 'pdf001') {
	$id = $_POST['attendee_id'];
    $results = $wpdb->get_results('SELECT * FROM  `wp_attendee` where attendee_id=' . $id);	
    $res = maybe_unserialize($results);
	$attendee_id = $results[0]->attendee_id;
	$attendee_name = $results[0]->attendee;
	$attendee_org = $results[0]->organization;
	$attendee_email = $results[0]->email;
	$attendee_role = $results[0]->role;
	$newresult = $_POST['graph_array'];
	$newresult=stripslashes($newresult);
	$new = unserialize($newresult);
	print_r($new);
	/*  $a = $res['step_03']['fields']['settlor_full_name'];
    if($res['step_02']['fields']['Second_trustee_name'] != ""){$Second_trustee_name = ','.$res['step_02']['fields']['Second_trustee_name']; }
    $b = $res['step_02']['fields']['first_trustee_name'].$second_trustee_name;
    if($res['step_02']['fields']['Second_director_name'] != ""){$Second_director_name = ','.$res['step_02']['fields']['Second_director_name']; }
    $b1 = $res['step_02']['fields']['first_director_name'].$second_trustee_name;
    $c = $res['step_02']['fields']['desired_trust_name'];
    $d1 = $res['step_03']['fields']['fullname_1'];
    $d2 = $res['step_03']['fields']['agbfullname_1'];
   $e = $res['step_03']['fields']['fname_principal'];
    $f = $res['step_03']['fields']['fname_successor_principal'];
    $g = $res['step_02']['fields']['state_territory_name'];
    $acn = $res['step_02']['fields']['trusteeacn'];

    include_once $_SERVER['DOCUMENT_ROOT'] . '/pdf.php';
    $link = 'https://ausincorp.com.au/wp-content/plugins/order-record/pdf/docsss' . $id . '.pdf';
    $wpdb->query("update `tlb_ais_orderforms` set approve = 1,pdf_link= '".$link."' where order_form_id=".$id);
    echo '<a href='.$link.' target="new" >PDF ' . $id . '</a>';

    if ($results->owner != 1) {
        $to = $results->email;
        $subject = "AIS Discretionary Order";

        $message = '
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Congratulations your document is ready to be downloaded here (or just log into your admin section of the website).</p>
<p><a href="https://ausincorp.com.au/member/orderdetails/#discretionary_trust_order">Click Here</a> For download your PDF.</p>
<p>Thank You.</p>
<p>Australian Incorporation Services.</p>
</body>
</html>
';

// Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
        $headers .= 'From: <enquiries@ausincorp.com.au>' . "\r\n";

        mail($to, $subject, $message, $headers);
    }*/

include_once $_SERVER['DOCUMENT_ROOT'] . '/cleanstream/wp-content/themes/phosphor/pdf.php';
}

if (isset($_POST['pdf']) == 'pdf') {

    $id = $_POST['val'];
    //$Second_trustee_name ="";
    $results = $wpdb->get_row('SELECT * FROM  `tlb_ais_orderforms` where order_form_id=' . $id);
    $res = maybe_unserialize($results->data_obg);
    $a = $res['step_03']['fields']['settlor_full_name'];
    if($res['step_02']['fields']['Second_trustee_name'] != ""){$Second_trustee_name = ','.$res['step_02']['fields']['Second_trustee_name']; }
    $b = $res['step_02']['fields']['first_trustee_name'].$second_trustee_name;
    if($res['step_02']['fields']['Second_director_name'] != ""){$Second_director_name = ','.$res['step_02']['fields']['Second_director_name']; }
    $b1 = $res['step_02']['fields']['first_director_name'].$second_trustee_name;
    $c = $res['step_02']['fields']['desired_trust_name'];
    $d1 = $res['step_03']['fields']['fullname_1'];
    $d2 = $res['step_03']['fields']['agbfullname_1'];
   $e = $res['step_03']['fields']['fname_principal'];
    $f = $res['step_03']['fields']['fname_successor_principal'];
    $g = $res['step_02']['fields']['state_territory_name'];
    $acn = $res['step_02']['fields']['trusteeacn'];

    include_once $_SERVER['DOCUMENT_ROOT'] . '/pdf.php';
    $link = 'https://ausincorp.com.au/wp-content/plugins/order-record/pdf/docsss' . $id . '.pdf';
    $wpdb->query("update `tlb_ais_orderforms` set approve = 1,pdf_link= '".$link."' where order_form_id=".$id);
    echo '<a href='.$link.' target="new" >PDF ' . $id . '</a>';

    if ($results->owner != 1) {
        $to = $results->email;
        $subject = "AIS Discretionary Order";

        $message = '
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Congratulations your document is ready to be downloaded here (or just log into your admin section of the website).</p>
<p><a href="https://ausincorp.com.au/member/orderdetails/#discretionary_trust_order">Click Here</a> For download your PDF.</p>
<p>Thank You.</p>
<p>Australian Incorporation Services.</p>
</body>
</html>
';

// Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
        $headers .= 'From: <enquiries@ausincorp.com.au>' . "\r\n";

        mail($to, $subject, $message, $headers);
    }


}
if(isset($_POST['bare_pdf']) == 'bare_pdf'){
    $id = $_POST['val'];
    $results = $wpdb->get_row('SELECT * FROM  `tlb_ais_orderforms` where order_form_id=' . $id);
    $res = maybe_unserialize($results->data_obg);

    $a = $res['step_02']['fields']['trustname'];
    $a_add = $res['step_02']['fields']['aaddress'];
    $b = $res['step_02']['fields']['namesmsf'];
    $b_add = $res['step_02']['fields']['aaddress'];
    $c = $res['step_02']['fields']['cnameoftrust'];
    $d = $res['step_02']['fields']['daddress'];

    include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/order-record/bare_pdf_structure.php';
    $link = 'https://ausincorp.com.au/wp-content/plugins/order-record/pdf/docsss' . $id . '.pdf';
    $wpdb->query("update `tlb_ais_orderforms` set approve = 1,pdf_link= '".$link."' where order_form_id=".$id);

    echo '<a href='.$link.' target="new" >PDF ' . $id . '</a>';

    if ($results->owner != 1) {
        $to = $results->email;
        $subject = "AIS Bare Trust Order";

        $message = '
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Congratulations your document is ready to be downloaded here (or just log into your admin section of the website).</p>
<p><a href="https://ausincorp.com.au/member/orderdetails/#bare_trust_order">Click Here</a> For download your PDF.</p>
<p>Thank You.</p>
<p>Australian Incorporation Services.</p>
</body>
</html>
';

// Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
        $headers .= 'From: <enquiries@ausincorp.com.au>' . "\r\n";

        mail($to, $subject, $message, $headers);
    }
}

if(isset($_POST['unit_pdf']) == 'unit_pdf'){
    $id = $_POST['val'];
    $results = $wpdb->get_row('SELECT * FROM  `tlb_ais_orderforms` where order_form_id=' . $id);
    $res = maybe_unserialize($results->data_obg);

	$a = $res['step_02']['fields']['first_trustee_name'];
    $a_add = $res['step_02']['fields']['office_floor_building'];
    $b = $res['step_02']['fields']['desired_trust_name'];
    $b_add = $res['step_02']['fields']['street_number_name'];
    $c1 = $res['step_03']['fields']['unitholdername1'];
    $c1_add = $res['step_03']['fields']['office_floor_building_1'];
	$c2 = $res['step_03']['fields']['unitholdername2'];
    $c2_add = $res['step_03']['fields']['office_floor_building_2'];
	$d1 = $res['step_02']['fields']['state_of_jurisdiction'];
	$e = $res['step_02']['fields']['first_director_name'];

    include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/order-record/unit_pdf_structure.php';
    $link = 'https://ausincorp.com.au/wp-content/plugins/order-record/pdf/docsss' . $id . '.pdf';
    $wpdb->query("update `tlb_ais_orderforms` set approve = 1,pdf_link= '".$link."' where order_form_id=".$id);

    echo '<a href='.$link.' target="new" >PDF ' . $id . '</a>';

    if ($results->owner != 1) {
        $to = $results->email;
        $subject = "AIS Unit Trust Order";

        $message = '
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Congratulations your document is ready to be downloaded here (or just log into your admin section of the website). </p>
<p><a href="https://ausincorp.com.au/member/orderdetails/#unit_trust_order">Click Here</a> For download your PDF.</p>
<p>Thank You.</p>
<p>Australian Incorporation Services.</p>
</body>
</html>
';

// Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
        $headers .= 'From: <enquiries@ausincorp.com.au>' . "\r\n";

        mail($to, $subject, $message, $headers);
    }
}

if(isset($_POST['superannuation_pdf']) == 'superannuation_pdf'){
    $id = $_POST['val'];
    $results = $wpdb->get_row('SELECT * FROM  `tlb_ais_orderforms` where order_form_id=' . $id);
    $res = maybe_unserialize($results->data_obg);
	$b = $res['step_02']['fields']['name_of_fund'];
    include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/order-record/superannuation_pdf_structure.php';
    $link = 'https://ausincorp.com.au/wp-content/plugins/order-record/pdf/docsss' . $id . '.pdf';
    $wpdb->query("update `tlb_ais_orderforms` set approve = 1,pdf_link= '".$link."' where order_form_id=".$id);

    echo '<a href='.$link.' target="new" >PDF ' . $id . '</a>';

    if ($results->owner != 1) {
        $to = $results->email;
        $subject = "AIS Superannuation Order";

        $message = '
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Congratulations your document is ready to be downloaded here (or just log into your admin section of the website). </p>
<p><a href="https://ausincorp.com.au/member/orderdetails/#superannuation_order">Click Here</a> For download your PDF.</p>
<p>Thank You.</p>
<p>Australian Incorporation Services.</p>
</body>
</html>
';

// Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
        $headers .= 'From: <enquiries@ausincorp.com.au>' . "\r\n";

        mail($to, $subject, $message, $headers);
    }
}
?>



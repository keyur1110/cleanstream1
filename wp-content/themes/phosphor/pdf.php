<?php
require_once('tcpdf/tcpdf.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Hunani Infotech');
$pdf->SetTitle('Assesment Result');
$pdf->SetSubject('Assesment Result');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

//graph code
require_once('SVGGraph/SVGGraph.php'); 
$values = $new; 

$settings = array(
  'back_colour'       => '#eee',    'stroke_colour'      => '#000',
  'back_stroke_width' => 0,         'back_stroke_colour' => '#eee',
  'axis_colour'       => '#333',    'axis_overlap'       => 2,
  'axis_font'         => 'Georgia', 'axis_font_size'     => 14,
  'grid_colour'       => '#666',    'label_colour'       => '#000',
  'grid_straight'	  => true,		'show_subdivisions'	 => true,
  'pad_right'         => 20,        'pad_left'           => 20,
  'link_base'         => '/',       'link_target'        => '_top',
  'fill_under'        => true,		'crosshairs'		 => true,
  'show_subdivisions' => true,
  'marker_size'       => 5,
  'marker_type'       => ('square'),
  'marker_colour'     => array('yellow', 'red')
);

 
$colours = array(array('red', 'yellow'), array('blue', 'white'));
$links = array('Dough' => 'jpegsaver.php', 'Ray' => 'crcdropper.php',
  'Me' => 'svggraph.php');
 
$graph = new SVGGraph(600, 500, $settings);
$graph->colours = $colours;
$graph->Values($values);
$graph->Links($links);
$graph->Render('MultiRadarGraph');
$output = $graph->fetch('MultiRadarGraph');
//graph code endd

// Set some content to print
$html = '
<div>DATED:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2015</div>
<hr>
<h1>Welcome to <a href="http://hunani-infotech.com/cleanstream/" style="text-decoration:none;background-color:#CC0000;color:black;">&nbsp;<span style="color:black;">Cleanstream</span>&nbsp;</a>!</h1>
<i>This is your assesment result</i>
<p><strong>NAME:</strong>'.$attendee_name.'</p>
<p><strong>Organization:</strong>'.$attendee_org.'</p>
<p><strong>Role in your organization:</strong>'.$attendee_role.'</p>
<p><strong>Graph:</strong></p>';
$html .= $output;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);


// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output($_SERVER['DOCUMENT_ROOT'] .'/cleanstream/wp-content/uploads/pdf/example_001.pdf', 'F');

//============================================================+
// END OF FILE
//============================================================+

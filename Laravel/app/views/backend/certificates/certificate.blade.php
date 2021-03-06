<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Coffee School {{$certificate->course->name}} Certificate</title>
<style type="text/css">
<!--
body {
	font-family: Verdana, Geneva, sans-serif;
	line-height: 1;
}

h1{	font-size: 48px; margin-top: 2;}
h2{	font-size: 28px;}
h3{	font-size: 22px;}
h4{	font-size: 16px;}
h5{	font-size: 12px;}
h6{	font-size: 8px;}
p{	font-size: 11px;}

-->
</style>
</head>

<body >
<div style="width: 100%; text-align:center; border:1px solid grey; padding-left:20px;">
	<div><p><b>Ton Ton Song Pty Ltd Trading as :</b></p><h1><em>The Coffee School</em></h1></div>
	<div><img src="{{Request::root()}}/images/coffee1.jpg" width="70" height="70" hspace="5" /> <img src="{{Request::root()}}/images/coffee2.jpg" width="70" height="70" /> <img src="{{Request::root()}}/images/coffee3.jpg" width="70" height="70" hspace="5" /> <img src="{{Request::root()}}/images/coffee4.jpg" width="70" height="70" hspace="5" /></div>
	<div><h5>ABN: 92115 419 988</h5></div>
	<div><h3>RTO ID: {{$certificate->course->rto_code}}</h3></div>
	<div><h2>Statement of Attainment</h2></div>
	<div>This is a statement that</div>
	<div><h3>{{$certificate->customer->full_name}}</h3></div>
	<div>has attained</div>
	<div><h3>{{$certificate->course->certificate_code}}</h3></div>
	<div>&nbsp;</div>
	<div><hr width="70%" /><strong>Paula Benmayor<br />Chief Executive Officer</strong><br /><img src="{{Request::root()}}/images/paula_signature.jpg" width="175" height="50" /></div>
	<div><h4>{{date('d F Y', strtotime($certificate->certificate_date))}}</h4></div>
	<div><img src="{{Request::root()}}/images/nrt_logo.jpg" width="120" /></div>
	<div>
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		  <tr>
			@foreach($locations as $location)
			<td align="left" valign="top"><h6><b>Coffee School {{$location->name}}<br />
			  {{$location->address}}<br />
			  {{$location->city}} {{$location->state}} {{$location->post_code}}<br />
			  Ph: {{$location->phone}}<br />
			  Fax: {{$location->fax}}</b></h6></td>
			@endforeach
		  </tr>
		</table>
	</div>
	<div><b>Email: <a href="mailto: info@coffeeschool.com.au">info@coffeeschool.com.au</a> Web: <a href="http://www.coffeeschool.com.au">www.coffeeschool.com.au</a></b></div>
	<div><p>A Statement of Attainment is issued by a Registered Training Organisation<br />
		when an individual has completed one or more accredited units</p></div>
	<div><p>Certificate No: CSC{{$certificate->id}}-{{$certificate->course_id}}</p></div>
	<div><p>To authenticate this Statement of Attainment email <a href="mailto:info@coffeeschool.com.au">info@coffeeschool.com.au</a></p></div>
</div>
</body>
</html>

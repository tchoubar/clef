<?php include 'view/header.php'; ?>
<link rel="stylesheet" href="css/form.css" /> 
<link rel="stylesheet" href="css/structure.css" /> 
<link rel="stylesheet" href="css/theme.css" /> 

<div id="container" class="ltr">

<form id="form27" name="form27" class="wufoo  page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
action="index.html">

<header id="header" class="info">
<h2>Contact Form</h2>
<div></div>
</header>

<label class="desc" id="title1" for="Field1" align="left">
Message
<span id="req_1" class="req">*</span>
</label>

<div>
<textarea id="Field1" 
name="Field1" 
class="field textarea medium" 
spellcheck="true" 
rows="10" cols="50" 
tabindex="1" 
onkeyup=""
required  ></textarea>

</div>

<!-- <p class="instruct" id="instruct1"><small>This field is required.</small></p>-->

<label class="desc" id="title2" for="Field2" align="left">
Email Address
</label>
<div>
<input id="Field2" name="Field2" type="email" spellcheck="false" class="field text large" value="" maxlength="255" tabindex="2" /> 
</div>
<p class="instruct" id="instruct2"><small>We won't share this with strangers.</small></p>

<div>

 <p>                   <input id="saveForm" name="saveForm" class="btTxt submit" 
    type="submit" value="Submit"
 /></p></div>



</form> 

</div><!--container-->

<a class="powertiny" href="http://wufoo.com/form-builder/" title="Powered by Wufoo"
style="display:block !important;visibility:visible !important;text-indent:0 !important;position:relative !important;height:auto !important;width:95px !important;overflow:visible !important;text-decoration:none;cursor:pointer !important;margin:0 auto !important">
<span style="background:url(./images/powerlogo.png) no-repeat center 7px; margin:0 auto;display:inline-block !important;visibility:visible !important;text-indent:-9000px !important;position:static !important;overflow: auto !important;width:62px !important;height:30px !important">Wufoo</span>
<b style="display:block !important;visibility:visible !important;text-indent:0 !important;position:static !important;height:auto !important;width:auto !important;overflow: auto !important;font-weight:normal;font-size:9px;color:#777;padding:0 0 0 3px;">Designed by Wufoo</b>
</a>

<?php include 'view/footer.php'; ?>
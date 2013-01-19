<?php include 'view/header.php'; ?>
<link rel="stylesheet" href="css/form.css" /> 
<link rel="stylesheet" href="css/structure.css" /> 
<link rel="stylesheet" href="css/theme.css" /> 

<div id="container" class="ltr">

<form id="form102" name="form102" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
action="index.html">

<header id="header" class="info">
<h2>Service Request Form</h2>
<div></div>
</header>

<ul>

<li id="foli1" class="notranslate      ">
<label class="desc" id="title1" for="Field1" align="left">
Name
</label>
<span>
<input id="Field1" name="Field1" type="text" class="field text fn" value="" size="8" tabindex="1" />
<label for="Field1">First</label>
</span>
<span>
<input id="Field2" name="Field2" type="text" class="field text ln" value="" size="14" tabindex="2" />
<label for="Field2">Last</label>
</span>
</li>
<li id="foli3" class="notranslate      ">
<label class="desc" id="title3" for="Field3" align="left">
Address
</label>
<div>
<input id="Field3" name="Field3" type="text" class="field text medium" value="" maxlength="255" tabindex="3" onkeyup="" />
</div>
</li><li id="foli18" class="notranslate      ">
<label class="desc" id="title18" for="Field18" align="left">
Town
</label>
<div>
<input id="Field18" name="Field18" type="text" class="field text medium" value="" maxlength="255" tabindex="4" onkeyup="" />
</div>
</li><li id="foli4" class="notranslate      ">
<label class="desc" id="title4" for="Field4" align="left">
Email
</label>
<div>
<input id="Field4" name="Field4" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="5" /> 
</div>
</li>
<li id="foli19" class="notranslate      ">
<fieldset>
<![if !IE | (gte IE 8)]>
<legend id="title19" class="desc">
Service required: 
</legend>
<![endif]>
<!--[if lt IE 8]>
<label id="title19" class="desc">
Problem Category
</label>
<![endif]-->
<div>
<input id="radioDefault_19" name="Field19" type="hidden" value="" />
<span>
<input id="Field19_0" name="Field19" type="radio" class="field radio" value="Computer" tabindex="6" checked="checked"  
/>
<label class="choice" for="Field19_0" align="left">
Rent a guitar</label>
</span>
<span>
<input id="Field19_1" name="Field19" type="radio" class="field radio" value="Email" tabindex="7" />
<label class="choice" for="Field19_1" align="left">
Rent a bass</label>
</span>
<span>
<input id="Field19_2" name="Field19" type="radio" class="field radio" value="Network" tabindex="8" />
<label class="choice" for="Field19_2" align="left">
Rent drums</label>
</span>
<span>
<input id="Field19_3" name="Field19" type="radio" class="field radio" value="Phone" tabindex="9" />
<label class="choice" for="Field19_3" align="left">
Rent a piano</label>
</span>
<span>
<input id="Field19_4" name="Field19" type="radio" class="field radio" value="Other" tabindex="10" onmouseup="document.getElementById('Field19_other').focus();" />
<label class="choice" for="Field19_4" align="left"  onmouseup="document.getElementById('Field19_other').focus();">
Other</label>
<input id="Field19_other" name="Field19_other_Other" type="text" class="field text other" value="" onclick="document.getElementById('Field19_4').checked = 'checked';" tabindex="11" />
</span>
</div>
</fieldset>
</li><li id="foli16" 
class="notranslate      "><label class="desc" id="title16" for="Field16" align="left">
Comments and Questions
</label>

<div>
<textarea id="Field16" 
name="Field16" 
class="field textarea medium" 
spellcheck="true" 
rows="10" cols="50" 
tabindex="12" 
onkeyup=""
 ></textarea>

</div>
</li> <li class="buttons ">
<div>

                    <input id="saveForm" name="saveForm" class="btTxt submit" 
    type="submit" value="Submit"
 /></div>
</li>

</ul>
</form> 

</div><!--container-->

<a class="powertiny" href="http://wufoo.com/form-builder/" title="Powered by Wufoo"
style="display:block !important;visibility:visible !important;text-indent:0 !important;position:relative !important;height:auto !important;width:95px !important;overflow:visible !important;text-decoration:none;cursor:pointer !important;margin:0 auto !important">
<span style="background:url(./images/powerlogo.png) no-repeat center 7px; margin:0 auto;display:inline-block !important;visibility:visible !important;text-indent:-9000px !important;position:static !important;overflow: auto !important;width:62px !important;height:30px !important">Wufoo</span>
<b style="display:block !important;visibility:visible !important;text-indent:0 !important;position:static !important;height:auto !important;width:auto !important;overflow: auto !important;font-weight:normal;font-size:9px;color:#777;padding:0 0 0 3px;">Designed by Wufoo</b>
</a>
<?php include 'view/footer.php'; ?>
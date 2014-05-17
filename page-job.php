<?php get_header(); ?>
<div class="wrapper-class message-holder">
  <div class="container">
   <h1>Get Started.</h1>

   <p>Submit your job order and we will have it in no time for you.</p>
 </div>
</div>
<section class="shirt-wizard">
  <div class="container">
    <div class="part1">
     <h1>What you need to know.</h1>

     <h4>Here are some things that we need from you.</h4>

     <ol>
      <li>A <b>PDF</b> or <b>AI</b> (vector) file of your artwork, <a href="contact">if you have a question about this contact your designer or contact us.</a>

      </li>
      <li>The amount of shirts that will be printed</li>
    </ol>
  </div>
  <hr>
  <div class="part2">
   <h1>1. Select your canvas</h1>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
   <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/button-javascript.js"></script>
   <form class="jotform-form" action="http://submit.jotform.us/submit.php" method="post" enctype="multipart/form-data" name="form_41107452846150" id="41107452846150" accept-charset="utf-8">
    <input type="hidden" name="formID" value="41107452846150" />
    <div class="form-all">
      <div class="row row-separation">
        <div class="col-sm-4 work-tile-image-holder">
          <label class="form-label-top" id="label_3" for="input_3"></label>
          <div id="cid_3" class="form-input-wide">
            <div class="form-single-column"> <span class="form-checkbox-item" style="clear:left;">
              <input type="checkbox" class="form-checkbox from-control" id="input_3_0" name="q3_input3[]" value="T-Shirt" />
              <label for="input_3_0"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/shirt.jpg"> </label></span>
              <span class="clearfix"></span>

            </div>
            <label class="form-label-top" id="label_14" for="input_14"># of T-Shirts</label>
            <div id="cid_14" class="form-input-wide">
              <input type="number" id="input_14" name="q14_Of" data-type="input-spinner" class="form-spinner-input form-textbox" />
            </div>
          </div>
        </div>
        <div class="col-sm-4 work-tile-image-holder">
          <label class="form-label-top" id="label_4" for="input_4"></label>
          <div id="cid_4" class="form-input-wide">
            <div class="form-single-column"> <span class="form-checkbox-item" style="clear:left;">
              <input type="checkbox" class="form-checkbox from-control" id="input_4_0" name="q4_input4[]" value="Hoodie" />
              <label for="input_4_0"> <img src="http://www.publicdomainpictures.net/pictures/40000/nahled/polo-shirt-illustration.jpg"> </label></span>
              <span class="clearfix"></span>

            </div>
            <label class="form-label-top" id="label_15" for="input_15"># of Hoodies</label>
            <div id="cid_15" class="form-input-wide">
              <input type="number" id="input_15" name="q15_Of15" data-type="input-spinner" class="form-spinner-input form-textbox" />
            </div>
          </div>
        </div>
        <div class="col-sm-4 work-tile-image-holder">
          <label class="form-label-top" id="label_5" for="input_5"></label>
          <div id="cid_5" class="form-input-wide">
            <div class="form-single-column"> <span class="form-checkbox-item" style="clear:left;">
              <input type="checkbox" class="form-checkbox" id="input_5_0" name="q5_input5[]" value="Jacket" />
              <label for="input_5_0"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/shirt3.jpg"> </label></span>
              <span class="clearfix"></span>

            </div>
            <label class="form-label-top" id="label_16" for="input_16"># of Polo</label>
            <div id="cid_16" class="form-input-wide">
              <input type="number" id="input_16" name="q16_Of16" data-type="input-spinner" class="form-spinner-input form-textbox" />
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="row row-separation">
       <h1>2. What kind of job is it?</h1>

       <div class="col-sm-6 work-tile-custom">
        <label class="fomr-label-top" id="label_7" for="input_7"></label>
        <div id="cid_7" class="form-input-wide type-of-job-selector"> <span class="form-checkbox-item" style="clear:left;">
          <input type="checkbox" class="form-checkbox" id="input_7_0" name="q7_input7[]" value="Screen Printing" />
          <label for="input_7_0" class="job-type-custom-selector" style="background-image:url(http://images.reachsite.com/110c9404-e917-465b-b1cd-8e91a5b89fe4/media/821506/original/821506.jpg); background-size:cover;"> Screen Printing </label></span>
          <span class="clearfix"></span>

        </div>
      </div>
      <div class="col-sm-6 work-tile-custom">
        <label class="fomr-label-top" id="label_7" for="input_7"></label>
        <div id="cid_7" class="form-input-wide type-of-job-selector"> <span class="form-checkbox-item" style="clear:left;">
          <input type="checkbox" class="form-checkbox" id="input_8_0" name="q8_input8[]" value="Embroidery" />
          <label for="input_8_0" class="job-type-custom-selector" style="background-image:url(http://proimagenj.com/wp-content/uploads/toys-r-us.jpg); background-size:cover;"> Embroidery </label></span>
          <span class="clearfix"></span>

        </div>
      </div>
    </div>
    <hr>
    <div class="row row-separation">
     <h1>3. Upload your design.</h1>

     <label class="form-label-top" id="label_6" for="input_6"></label>
     <div id="cid_6" class="form-input-wide custom-dropzone">
      <form action="/file-upload" class="dropzone form-upload dropbox-box">
        <div class="fallback">
          <input class="form-upload dropbox-box" id="input_6" name="q6_input6" type="file" file-accept="pdf, zip, jpg, jpeg, png, gif, ai" file-maxsize="1024" />
        </div>
      </form>
      <!--<input class="form-upload dropbox-box" type="file" id="input_6" name="q6_input6" file-accept="pdf, zip, jpg, jpeg, png, gif, ai" file-maxsize="1024" />--></div>
    </div>
    
    <hr>
    
    <div class="row row-separation">
      <h1>4. Your contact information</h1>
        <div class="col-sm-5">
          <div id="cid_9" class="form-input">
            <span class="form-sub-label-container">
              <label class="form-sub-label" for="first_9" id="sublabel_first">First Name</label>
            </span>
            <input class="form-textbox form-control" type="text" size="10" name="q9_name[first]" id="first_9" />
            <label class="form-sub-label" for="last_9" id="sublabel_last">Last Name</label>

            <span class="form-sub-label-container">
            <input class="form-textbox form-control" type="text" size="15" name="q9_name[last]" id="last_9" />
          </div>
        </div>

        <div class="col-sm-5">
          <label class="form-label-left" id="label_10" for="input_10"> Email </label>
          <div id="cid_10" class="form-input">
            <input type="email" class="form-textbox validate[Email] form-control" id="input_10" name="q10_email" size="30" value="" />
          </div>

          <label class="form-label-left" id="label_11" for="input_11"> Telephone </label>
          <div id="cid_11" class="form-input form-inline">
            <span class="form-sub-label-container">
              <label class="form-sub-label" for="input_11_area" id="sublabel_area"></label>
            </span>
            <input class="form-textbox form-control" type="tel" name="q11_telephone[area]" id="input_11_area" size="3">-<span class="form-sub-label-container">
            <input class="form-textbox form-control" type="tel" name="q11_telephone[phone]" id="input_11_phone" size="8">
            <label class="form-sub-label" for="input_11_phone" id="sublabel_phone"></label>
            </span>
          </div>
        </div>
        
        <div class="col-sm-5 form-inline">
          <label class="form-label-left" id="label_13" for="input_13">Desired Delivery Date</label>
          <div id="cid_13" class="form-input">
            <span class="form-sub-label-container">
              <input class="form-textbox form-control col-xs-1" id="month_13" name="q13_deliveryDate[month]" type="tel" size="2" maxlength="2" value="" />
              <span class="date-separate">&nbsp;/</span>

              <label class="form-sub-label" for="month_13" id="sublabel_month">Month</label>
            </span>
            <span class="form-sub-label-container">
              <input class="noDefault form-textbox form-control col-xs-1" id="day_13" name="q13_deliveryDate[day]" type="tel" size="2" maxlength="2" value="" />
              <span class="date-separate">&nbsp;/</span>
          
              <label class="form-sub-label" for="day_13" id="sublabel_day">Day</label>
            </span>
            <span class="form-sub-label-container">
              <input class="form-textbox form-control col-xs-1" id="year_13" name="q13_deliveryDate[year]" type="tel" size="4" maxlength="4" value="" />
              <span class="date-separate">&nbsp;/</span>

              <label class="form-sub-label" for="year_13" id="sublabel_year"> Year </label>
            </span>
            <span class="form-sub-label-container">
              <img class="showAutoCalendar" alt="Pick a Date" id="input_13_pick" src="http://max.jotfor.ms/images/calendar.png" align="absmiddle" />
              <label class="form-sub-label" for="input_13_pick">
              <div>&nbsp;&nbsp;&nbsp;</div>
              </label>
            </span>
          </div>
        </div>

        <div class="col-sm-5">
            <label class="form-label-left" id="label_12" for="input_12">Delivery Address</label>
  <div id="cid_12" class="form-input">
    <table summary="" class="form-address-table" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2"> <span class="form-sub-label-container">
          <input class="form-textbox form-address-line form-control" type="text" name="q12_deliveryAddress[addr_line1]" id="input_12_addr_line1" />
          <label class="form-sub-label" for="input_12_addr_line1" id="sublabel_12_addr_line1"> Street Address </label></span>

        </td>
      </tr>
      <tr>
        <td colspan="2"> <span class="form-sub-label-container">
          <input class="form-textbox form-address-line form-control" type="text" name="q12_deliveryAddress[addr_line2]" id="input_12_addr_line2" size="46" />
          <label class="form-sub-label" for="input_12_addr_line2" id="sublabel_12_addr_line2"> Street Address Line 2 </label></span>

        </td>
      </tr>
      <tr>
        <td width="50%"> <span class="form-sub-label-container">
          <input class="form-textbox form-address-city form-control" type="text" name="q12_deliveryAddress[city]" id="input_12_city" size="21" />
          <label class="form-sub-label" for="input_12_city" id="sublabel_12_city"> City </label></span>

        </td>
        <td> <span class="form-sub-label-container">
          <input class="form-textbox form-address-state form-control" type="text" name="q12_deliveryAddress[state]" id="input_12_state" size="22" />
          <label class="form-sub-label" for="input_12_state" id="sublabel_12_state"> State / Province </label></span>

        </td>
      </tr>
      <tr>
        <td width="50%" function zip(){var iterator=Prototype.K,args=$A(arguments);if(Object.isFunction(args.last())) iterator=args.pop();var collections=[this].concat(args).map($A);return this.map(function(value,index){return iterator(collections.pluck(index));});}> <span class="form-sub-label-container">
          <input class="form-textbox form-address-postal form-control" type="text" name="q12_deliveryAddress[postal]" id="input_12_postal" size="10" />
          <label class="form-sub-label" for="input_12_postal" id="sublabel_12_postal"> Postal / Zip Code </label></span>

        </td>
        <td style="display: none;"> <span class="form-sub-label-container">
          <select class="form-dropdown form-address-country" name="q12_deliveryAddress[country]" id="input_12_country">
            <option value="" selected> Please Select </option>
            <option value="United States"> United States </option>
          </select>
          <label class="form-sub-label" for="input_12_country" id="sublabel_12_country"> Country </label></span>

        </td>
      </tr>
    </table>
  </div>

  <div id="cid_2" class="form-input-wide">
    <div style="margin-left:156px" class="form-buttons-wrapper">
      <button id="input_2" type="submit" class="form-submit-button btn btn-default">Submit</button>
    </div>
  </div>
  <li style="display:none">Should be Empty:
    <input type="text" name="website" value="" />
  </li>

        </div>

<input type="hidden" id="simple_spc" name="simple_spc" value="41107452846150" />
<script type="text/javascript">
document.getElementById("si" + "mple" + "_spc").value = "41107452846150-41107452846150";
</script>
</form>
</section>
<?php get_footer(); ?>
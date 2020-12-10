  <!--------------------------- user section start here ---------------------------->
  
  <section class="user_section">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-4">
      				<div class="person_detail basic_info pading_top_bottom">
      					<div id="accordion">
                       <div class="card ctm_card">
                         <div class="card-header ctm_card_header" id="headingOne">
                           <div class="mb-0 ctm_btn_sec" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <h6> Teacher Information</h6>
                                   <img src="<?php echo base_url();?>assets/img/arrow_down.svg" alt=" " width="8">
                           </div>
                         </div>
                         <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                           <div class="card-body ctm_card_body">
                                 <ul id="tabs-nav">
                                    <li><a href="#basic_link"><i class="fa fa-circle size_circle"></i> Basic Information</a></li>
                                    <li><a href="#private_link"><i class="fa fa-circle size_circle"></i> Private Information</a></li>
                                    <li><a href="#communication_link"><i class="fa fa-circle size_circle"></i> Communication Tools</a></li>
                                 </ul>
                           </div>
                         </div>
                       </div>
                       <div class="card ctm_card">
                         <div class="card-header ctm_card_header" id="headingTwo">
                           <div class="mb-0 ctm_btn_sec" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <h6> Teacher Profile </h6>
                                   <img src="<?php echo base_url();?>assets/img/arrow_down.svg" alt=" " width="8">
                           </div>
                         </div>
                         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                           <div class="card-body ctm_card_body">
                                 <ul id="tabs-nav">
                                    <li><a href="#introduction_link"><i class="fas fa-circle size_circle"></i> Introduction</a></li>
                                    <li><a href="#contact_link"><i class="fas fa-circle size_circle"></i> Contact Form </a></li>
                                    <li><a href="#video_link"><i class="fas fa-circle size_circle"></i> Video</a></li>
                                    <li><a href="#language_link"><i class="fas fa-circle size_circle"></i> Languages</a></li>
                                    <li><a href="#resume_link"><i class="fas fa-circle size_circle"></i> Resume and Certificates</a></li>

                                 </ul>
                           </div>
                         </div>
                       </div>
                       <div class="card ctm_card">
                         <div class="card-header ctm_card_header" id="headingThree">
                           <div class="mb-0 ctm_btn_sec" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">   
                               <h6> Lessons and Availability </h6>
                             <img src="<?php echo base_url();?>assets/img/arrow_down.svg" alt=" " width="8">
                           </div>
                         </div>
                         <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body ctm_card_body">
                                 <ul id="tabs-nav">
                                    <li><a href="#lesson_link"> <i class="fas fa-circle size_circle"></i>Lesson Management</a></li>
                                    <li><a href="#availability_link"> <i class="fas fa-circle size_circle "></i> Availability Settings </a></li>
                                    <li id='render_calender' ><a href="#teacher_link"> <i class="fas fa-circle size_circle"></i> Teacher Calendar</a></li>
                                   

                                 </ul>
                           </div>
                         </div>
                       </div>
                        <div class="card ctm_card">
                        <div class="card-header ctm_card_header">
                           <ul class="mb-0 ctm_btn_sec Withdraw_ul"  id="tabs-nav">
                              <li><a href="#withdrawal_link">
                                <input type="submit" name="" value="Withdraw" class="withdraw_btn">
                             </a>
                          </li>
                           </ul>
                         </div>
                       </div>
                       <div class="card ctm_card">
                         <div class="card-header ctm_card_header border_none">
                           <div class="mb-0 ctm_btn_sec">
                           <a class="view_profile" target="_blank" href="<?php echo base_url('teacher/profile?id='.$user_detail[0]['id']); ?>">
                             View Profile
                           </a>
                           </div>
                         </div>
                       </div>
                     </div>
      				
      				
      				</div>
      			</div>
      			<div class="col-md-8"  id="tabs-content">
<!------------------------------- Basic_info ------------------->

      				<div class="profile_right_sec tab-content" id="basic_link">
      					<div class="person_detail profile_right_part  basic_information">
                        <!-- id="basicinformation" class="collapse show" aria-labelledby="right_headingOne" data-parent="#private_according" -->
								<div class="profile_name pro_rgt_prt_head basic_info_header">
      								<h3>Basic Information</h3>
      							</div>
      							<hr>
                                 <div class="basic_info_profile">  
                                 <ul>
                                 <li>
                                    <div class="profile_image">
                                    <a href="javascript:void(0);"><?php if($user_detail[0]['avatar']){ ?>
                                    <img src="<?php echo  base_url($user_detail[0]['avatar']);  ?>"  alt="Profile">
                                     <?php }else{?>
                                        <img src="<?php echo base_url('uploads/profile/avatar_1522144273.png'); ?>"  alt="Profile">
                                    <?php   }?>
                                 </a>
                                    </div>
                                 </li>
                                 <li class="line">
                                 </li>
                                 <li>
                                    <ul class="p_margin_bottom">
                                    <li><p> <i class="fas fa-circle size_circle"></i> At least 500 x 500 pixels</p></li>
                                    <li><p> <i class="fas fa-circle size_circle "></i> JPG, PNG and BMP formats only </p></li>
                                    <li><p> <i class="fas fa-circle size_circle"></i> Maximum size of 2MB</p></li>
                                   <li><p> <i class="fas fa-circle size_circle"></i> Complete requirements list</p></li>
                                   <form action="<?php echo base_url('Auth/update_avtar') ?>" method="POST" enctype="multipart/form-data">
                                   <input name="file" size="40" class="change_photo " accept=".png, .jpg, .jpeg" onchange="$('#upload-file').html($(this).val());" type="file">                          
                                   <p class='label label-info' id="upload-file"></p>
                                   <input type="hidden" name="user_id" value="<?php echo $user_detail[0]['id']; ?>">
                                   <input type="submit" name="" value="Change Photo" class="change_photo">
                                   </form>
                                 </ul>
                                 </li>
                                  </ul>
                                 </div>
                                 <?php if(!empty($id)){?>
                                 <form class="basic_info_form" action="<?php echo base_url('Auth/update_basic') ?>" method="POST">
                                 <?php }else{?>
                                    <form class="basic_info_form" action="<?php echo base_url('Auth/basic_info') ?>" method="POST">
                                 <?php } ?>
                                    <div class="row form_row">
                                    <div class="form-group col-md-12">
                                     <label>Display Name</label>               
                                     <input type="text" class="form-control" id="inputAddress" value="<?php if($user_detail[0]['username']){ echo $user_detail[0]['username']; }?>" readonly>
                                   </div>
   <?php if($basic_detail){ ?>
                                     <div class="form-group col-md-6 ">
                                       <label>From</label>
                                       <select name="from_add" class="custom-select animations-select arrow_des" id="inputGroupSelect01" data-target="#animation-bottom">
                                       <?php 
                                          echo "<option selected=''>".$basic_detail[0]['from_add']."</option>";
                                          foreach($country as $countrys) {
                                          echo "<option value=".$countrys.">".$countrys."</option>";
                                                 }?>
                                       </select>
                                     </div>
                                     
                                     <?php // echo form_dropdown('reg_country', , '-1');?>
                                     <div class="form-group col-md-6">
                                     <label>State</label>
                                     <input name="from_state" type="text" class="form-control" id="inputAddress" placeholder="State" value="<?php echo $basic_detail[0]['from_state']; ?>">
                                     </div>
                                     <div class="form-group col-md-6">
                                       <label>Living in</label>
                                       <select name="live_add" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                       <?php 
                                       echo "<option selected=''>".$basic_detail[0]['from_add']."</option>";
                                       foreach($country as $countrys) {
                                          echo "<option value=".$countrys.">".$countrys."</option>";
                                                 }?>
                                       </select>
                                     </div>
                                     <div class="form-group col-md-6">
                                     <label>State</label>
                                     <input name="live_state" type="text" class="form-control" id="inputAddress" placeholder="State" value="<?php echo $basic_detail[0]['live_state']; ?>">
                                     </div>
                                     <div class="form-group col-md-12">
                                       <label>Time Zone</label>
                                       <select name="time_zone"class="custom-select animations-select arrow_des" id="inputGroupSelect05" data-target="#animation-bottom">
                                            <option selected=""><?php echo "[UTC ".$basic_detail[0]['time_zone']."]"; ?></option>
                                            <option value="-12">[UTC - 12] Baker Island Time</option>
                                            <option value="-11">[UTC - 11] Niue Time, Samoa Standard Time</option>
                                            <option value="-10">[UTC - 10] Hawaii-Aleutian Standard Time, Cook Island Time</option>
                                            <option value="-9.5">[UTC - 9:30] Marquesas Islands Time</option>
                                            <option value="-9">[UTC - 9] Alaska Standard Time, Gambier Island Time</option>
                                            <option value="-8">[UTC - 8] Pacific Standard Time</option>
                                            <option value="-7">[UTC - 7] Mountain Standard Time</option>
                                            <option value="-6">[UTC - 6] Central Standard Time</option>
                                            <option value="-5">[UTC - 5] Eastern Standard Time</option>
                                            <option value="-4.5">[UTC - 4:30] Venezuelan Standard Time</option>
                                            <option value="-4">[UTC - 4] Atlantic Standard Time</option>
                                            <option value="-3.5">[UTC - 3:30] Newfoundland Standard Time</option>
                                            <option value="-3">[UTC - 3] Amazon Standard Time, Central Greenland Time</option>
                                            <option value="-2">[UTC - 2] Fernando de Noronha Time, South Georgia &amp; the South Sandwich Islands Time</option>
                                            <option value="-1">[UTC - 1] Azores Standard Time, Cape Verde Time, Eastern Greenland Time</option>
                                            <option value="0">[UTC] Western European Time, Greenwich Mean Time</option>
                                            <option value="+1">[UTC + 1] Central European Time, West African Time</option>
                                            <option value="+2">[UTC + 2] Eastern European Time, Central African Time</option>
                                            <option value="+3">[UTC + 3] Moscow Standard Time, Eastern African Time</option>
                                            <option value="+3.5">[UTC + 3:30] Iran Standard Time</option>
                                            <option value="+4">[UTC + 4] Gulf Standard Time, Samara Standard Time</option>
                                            <option value="+4.5">[UTC + 4:30] Afghanistan Time</option>
                                            <option value="+5">[UTC + 5] Pakistan Standard Time, Yekaterinburg Standard Time</option>
                                            <option value="+5.5">[UTC + 5:30] Indian Standard Time, Sri Lanka Time</option>
                                            <option value="+5.75">[UTC + 5:45] Nepal Time</option>
                                            <option value="+6">[UTC + 6] Bangladesh Time, Bhutan Time, Novosibirsk Standard Time</option>
                                            <option value="+6.5">[UTC + 6:30] Cocos Islands Time, Myanmar Time</option>
                                            <option value="+7">[UTC + 7] Indochina Time, Krasnoyarsk Standard Time</option>
                                            <option value="+8">[UTC + 8] Chinese Standard Time, Australian Western Standard Time, Irkutsk Standard Time</option>
                                            <option value="+8.75">[UTC + 8:45] Southeastern Western Australia Standard Time</option>
                                            <option value="+9">[UTC + 9] Japan Standard Time, Korea Standard Time, Chita Standard Time</option>
                                            <option value="+9.5">[UTC + 9:30] Australian Central Standard Time</option>
                                            <option value="+10">[UTC + 10] Australian Eastern Standard Time, Vladivostok Standard Time</option>
                                            <option value="+10.5">[UTC + 10:30] Lord Howe Standard Time</option>
                                            <option value="+11">[UTC + 11] Solomon Island Time, Magadan Standard Time</option>
                                            <option value="+11.5">[UTC + 11:30] Norfolk Island Time</option>
                                            <option value="+12">[UTC + 12] New Zealand Time, Fiji Time, Kamchatka Standard Time</option>
                                            <option value="+12.75">[UTC + 12:45] Chatham Islands Time</option>
                                            <option value="+13">[UTC + 13] Tonga Time, Phoenix Islands Time</option>
                                            <option value="+14">[UTC + 14] Line Island Time</option>
                                       </select>
                                     </div>
                        <?php }else{?>
                                                   <div class="form-group col-md-6 ">
                                       <label>From</label>
                                       <select name="from_add" class="custom-select animations-select arrow_des" id="inputGroupSelect01" data-target="#animation-bottom">
                                       <?php foreach($country as $countrys) {
                                          echo "<option value=".$countrys.">".$countrys."</option>";
                                                 }?>
                                       </select>
                                     </div>
                                     
                                     <?php // echo form_dropdown('reg_country', , '-1');?>
                                     <div class="form-group col-md-6">
                                     <label>State</label>
                                     <input name="from_state" type="text" class="form-control" id="inputAddress" placeholder="State" value="">
                                     </div>
                                     <div class="form-group col-md-6">
                                       <label>Living in</label>
                                       <select name="live_add" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                       <?php foreach($country as $countrys) {
                                          echo "<option value=".$countrys.">".$countrys."</option>";
                                                 }?>
                                       </select>
                                     </div>
                                     <div class="form-group col-md-6">
                                     <label>State</label>
                                     <input name="live_state" type="text" class="form-control" id="inputAddress" placeholder="State" value="">
                                     </div>
                                     <div class="form-group col-md-12">
                                       <label>Time Zone</label>
                                       <select name="time_zone"class="custom-select animations-select arrow_des" id="inputGroupSelect05" data-target="#animation-bottom">
                                            <option value="-12">[UTC - 12] Baker Island Time</option>
                                            <option value="-11">[UTC - 11] Niue Time, Samoa Standard Time</option>
                                            <option value="-10">[UTC - 10] Hawaii-Aleutian Standard Time, Cook Island Time</option>
                                            <option value="-9.5">[UTC - 9:30] Marquesas Islands Time</option>
                                            <option value="-9">[UTC - 9] Alaska Standard Time, Gambier Island Time</option>
                                            <option value="-8">[UTC - 8] Pacific Standard Time</option>
                                            <option value="-7">[UTC - 7] Mountain Standard Time</option>
                                            <option value="-6">[UTC - 6] Central Standard Time</option>
                                            <option value="-5">[UTC - 5] Eastern Standard Time</option>
                                            <option value="-4.5">[UTC - 4:30] Venezuelan Standard Time</option>
                                            <option value="-4">[UTC - 4] Atlantic Standard Time</option>
                                            <option value="-3.5">[UTC - 3:30] Newfoundland Standard Time</option>
                                            <option value="-3">[UTC - 3] Amazon Standard Time, Central Greenland Time</option>
                                            <option value="-2">[UTC - 2] Fernando de Noronha Time, South Georgia &amp; the South Sandwich Islands Time</option>
                                            <option value="-1">[UTC - 1] Azores Standard Time, Cape Verde Time, Eastern Greenland Time</option>
                                            <option value="0">[UTC] Western European Time, Greenwich Mean Time</option>
                                            <option value="+1">[UTC + 1] Central European Time, West African Time</option>
                                            <option value="+2">[UTC + 2] Eastern European Time, Central African Time</option>
                                            <option value="+3">[UTC + 3] Moscow Standard Time, Eastern African Time</option>
                                            <option value="+3.5">[UTC + 3:30] Iran Standard Time</option>
                                            <option value="+4">[UTC + 4] Gulf Standard Time, Samara Standard Time</option>
                                            <option value="+4.5">[UTC + 4:30] Afghanistan Time</option>
                                            <option value="+5">[UTC + 5] Pakistan Standard Time, Yekaterinburg Standard Time</option>
                                            <option value="+5.5">[UTC + 5:30] Indian Standard Time, Sri Lanka Time</option>
                                            <option value="+5.75">[UTC + 5:45] Nepal Time</option>
                                            <option value="+6">[UTC + 6] Bangladesh Time, Bhutan Time, Novosibirsk Standard Time</option>
                                            <option value="+6.5">[UTC + 6:30] Cocos Islands Time, Myanmar Time</option>
                                            <option value="+7">[UTC + 7] Indochina Time, Krasnoyarsk Standard Time</option>
                                            <option value="+8">[UTC + 8] Chinese Standard Time, Australian Western Standard Time, Irkutsk Standard Time</option>
                                            <option value="+8.75">[UTC + 8:45] Southeastern Western Australia Standard Time</option>
                                            <option value="+9">[UTC + 9] Japan Standard Time, Korea Standard Time, Chita Standard Time</option>
                                            <option value="+9.5">[UTC + 9:30] Australian Central Standard Time</option>
                                            <option value="+10">[UTC + 10] Australian Eastern Standard Time, Vladivostok Standard Time</option>
                                            <option value="+10.5">[UTC + 10:30] Lord Howe Standard Time</option>
                                            <option value="+11">[UTC + 11] Solomon Island Time, Magadan Standard Time</option>
                                            <option value="+11.5">[UTC + 11:30] Norfolk Island Time</option>
                                            <option value="+12">[UTC + 12] New Zealand Time, Fiji Time, Kamchatka Standard Time</option>
                                            <option value="+12.75">[UTC + 12:45] Chatham Islands Time</option>
                                            <option value="+13">[UTC + 13] Tonga Time, Phoenix Islands Time</option>
                                            <option value="+14">[UTC + 14] Line Island Time</option>
                                       </select>
                                     </div>
                                 <?php } ?>   
                                     <div class="border_hor"></div>

                                      <div class="form-group  col-md-12 save_btn_part">
                                       <p class="color_green"> 
                                       <?php  if($user_detail[0]['status'] == '1'){ ?>
                                       <i class="fas fa-circle size_circle color_green "></i>Approved
                                       <?php }else {
                                            echo "Disapproved";
                                       } ?>
                                       </p>
                                       <input type="hidden" name="user_id" value="<?php echo $user_detail[0]['id']; ?>">
                                       <input type="submit" name="" value="Save" class="change_photo save">
                                     </div>

                                 </div>
                          
                           </form>
                                 
      					</div>      					
      				</div>
<!------------------------------- private_info ------------------->

                  <div class="person_detail profile_right_part private_info tab-content" id="private_link">
                           <div class="profile_name pro_rgt_prt_head basic_info_header private_info_header">
                              <h3>Private</h3>
                              <hr>
                              <p class="text-left">Please fill in the information below. This information is used for internal security purposes and will not be shared publicly. Information provided here must match your personal details for your payment withdrawal method of choice.</p>
                           </div>
                      <?php if($basic_detail){ ?>     
                                 <form class="basic_info_form"  action="<?php echo base_url('teacher/private_info') ?>" method="POST">
                                    <div class="row form_row">
                                     <div class="form-group col-md-6 ">
                                       <label>First Name</label>
                                       <input type="text" class="form-control" name="first_name"  value="<?php echo $basic_detail[0]['first_name']; ?>">
                                     </div>
                                     <div class="form-group col-md-6 ">
                                       <label>Last Name</label>
                                       <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?php echo $basic_detail[0]['last_name']; ?>">
                                     </div>
                                     <div class="form-group col-md-3">
                                       <label>Birthday</label>
                                       <select name="birth_year" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                          <option selected=""><?php echo $basic_detail[0]['birth_year']; ?></option>
                                          <option value="1999">1999</option>
                                          <option value="1998">1998</option>
                                          <option value="1997">1997</option>
                                          <option value="1996">1996</option>
                                          <option value="1995">1995</option>
                                          <option value="1994">1994</option>
                                          <option value="1993">1993</option>
                                          <option value="1992">1992</option>
                                          <option value="1991">1991</option>
                                          <option value="1990">1990</option>
                                          <option value="1989">1989</option>
                                          <option value="1988">1988</option>
                                          <option value="1986">1986</option>
                                          <option value="1985">1985</option>
                                          <option value="1984">1984</option>
                                          <option value="1983">1983</option>
                                          <option value="1982">1982</option>
                                          <option value="1980">1980</option>
                                          <option value="1979">1979</option>
                                          <option value="1978">1978</option>
                                          <option value="1977">1977</option>
                                          <option value="1976">1976</option>
                                          <option value="1975">1975</option>
                                          <option value="1974">1974</option>
                                          <option value="1973">1973</option>
                                          <option value="1972">1972</option>
                                          <option value="1971">1971</option>
                                          <option value="1970">1970</option>
                                          <option value="1969">1969</option>
                                          <option value="1968">1968</option>
                                          <option value="1967">1967</option>
                                          <option value="1966">1966</option>
                                          <option value="1965">1965</option>
                                          <option value="1964">1964</option>
                                          <option value="1963">1963</option>
                                          <option value="1962">1962</option>
                                          <option value="1961">1961</option>
                                          <option value="1960">1960</option>
                                          <option value="1959">1959</option>
                                          <option value="1958">1958</option>
                                          <option value="1957">1957</option>
                                          <option value="1956">1956</option>
                                          <option value="1955">1955</option>
                                          <option value="1954">1954</option>
                                          <option value="1953">1953</option>
                                          <option value="1952">1952</option>
                                          <option value="1951">1951</option>
                                          <option value="1950">1950</option>
                                          <option value="1949">1949</option>
                                          <option value="1948">1948</option>
                                          <option value="1947">1947</option>
                                          <option value="1946">1946</option>
                                          <option value="1945">1945</option>
                                          <option value="1944">1944</option>
                                          <option value="1943">1943</option>
                                          <option value="1942">1942</option>
                                          <option value="1941">1941</option>
                                          <option value="1940">1940</option>
                                          <option value="1939">1939</option>
                                          <option value="1938">1938</option>
                                          <option value="1937">1937</option>
                                          <option value="1936">1936</option>
                                          <option value="1935">1935</option>
                                          <option value="1934">1934</option>
                                          <option value="1933">1933</option>
                                          <option value="1932">1932</option>
                                          <option value="1931">1931</option>
                                          <option value="1930">1930</option>
                                       </select>
                                     </div>
                                     <div class="form-group col-md-3">
                                       <select  name="birth_month" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                       <option selected=""><?php echo $basic_detail[0]['birth_month']; ?></option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                          <option value="11">11</option>
                                          <option value="12">12</option>
                                       </select>
                                     </div>
                                     <div class="form-group col-md-2">  
                                       <select  name="birth_day" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                       <option selected=""><?php echo $basic_detail[0]['birth_day']; ?></option>
                                       <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                          <option value="11">11</option>
                                          <option value="12">12</option>
                                          <option value="13">13</option>
                                          <option value="14">14</option>
                                          <option value="15">15</option>
                                          <option value="16">16</option>
                                          <option value="17">17</option>
                                          <option value="18">18</option>
                                          <option value="19">19</option>
                                          <option value="20">20</option>
                                          <option value="21">21</option>
                                          <option value="22">22</option>
                                          <option value="23">23</option>
                                          <option value="24">24</option>
                                          <option value="25">25</option>
                                          <option value="26">26</option>
                                          <option value="27">27</option>
                                          <option value="28">28</option>
                                          <option value="29">29</option>
                                          <option value="30">30</option>
                                          <option value="31">31</option>
                                       </select>
                                     </div>
                                     <div class="form-group col-md-4">
                                       <label>Gender</label>
                                       <select  name="gender" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                          <option selected=""><?php echo $user_detail[0]['gender']; ?></option>
                                          <option value="Male">Male</option>
                                          <option value="Female">Female</option>
                                          <option value="Not given">Not given</option>  
                                       </select>
                                     </div>
                                     <div class="form-group col-md-12">
                                       <label>Street Address</label>
                                       <input type="text" name="street_add" class="form-control" placeholder="Street Address" value="<?php echo $basic_detail[0]['street_add']; ?>">
                                     </div>
                                     <div class="border_hor"></div>
                                      <div class="form-group  col-md-12 save_btn_part">
                                       <p class="color_green"> 
                                        <?php  if($user_detail[0]['status'] == '1'){ ?>
                                       <i class="fas fa-circle size_circle color_green "></i>Approved
                                       <?php }else {
                                            echo "Disapproved";
                                       } ?>
                                       </p>
                                       <input type="hidden" name="user_id" value="<?php echo $user_detail[0]['id']; ?>">
                                       <input type="submit" name="" value="Save" class="change_photo save">
                                     </div>
                                 </div>
                                 </form>
                                    <?php }else{?>
                                       <form class="basic_info_form"  action="<?php echo base_url('teacher/private_info') ?>" method="POST">
                                    <div class="row form_row">
                                     <div class="form-group col-md-6 ">
                                       <label>First Name</label>
                                       <input type="text" class="form-control" name="first_name"  value="">
                                     </div>
                                     <div class="form-group col-md-6 ">
                                       <label>Last Name</label>
                                       <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="">
                                     </div>
                                     <div class="form-group col-md-3">
                                       <label>Birthday</label>
                                       <select name="birth_year" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                          <option value="2000">2000</option>
                                          <option value="1999">1999</option>
                                          <option value="1998">1998</option>
                                          <option value="1997">1997</option>
                                          <option value="1996">1996</option>
                                          <option value="1995">1995</option>
                                          <option value="1994">1994</option>
                                          <option value="1993">1993</option>
                                          <option value="1992">1992</option>
                                          <option value="1991">1991</option>
                                          <option value="1990">1990</option>
                                          <option value="1989">1989</option>
                                          <option value="1988">1988</option>
                                          <option value="1986">1986</option>
                                          <option value="1985">1985</option>
                                          <option value="1984">1984</option>
                                          <option value="1983">1983</option>
                                          <option value="1982">1982</option>
                                          <option value="1980">1980</option>
                                          <option value="1979">1979</option>
                                          <option value="1978">1978</option>
                                          <option value="1977">1977</option>
                                          <option value="1976">1976</option>
                                          <option value="1975">1975</option>
                                          <option value="1974">1974</option>
                                          <option value="1973">1973</option>
                                          <option value="1972">1972</option>
                                          <option value="1971">1971</option>
                                          <option value="1970">1970</option>
                                          <option value="1969">1969</option>
                                          <option value="1968">1968</option>
                                          <option value="1967">1967</option>
                                          <option value="1966">1966</option>
                                          <option value="1965">1965</option>
                                          <option value="1964">1964</option>
                                          <option value="1963">1963</option>
                                          <option value="1962">1962</option>
                                          <option value="1961">1961</option>
                                          <option value="1960">1960</option>
                                          <option value="1959">1959</option>
                                          <option value="1958">1958</option>
                                          <option value="1957">1957</option>
                                          <option value="1956">1956</option>
                                          <option value="1955">1955</option>
                                          <option value="1954">1954</option>
                                          <option value="1953">1953</option>
                                          <option value="1952">1952</option>
                                          <option value="1951">1951</option>
                                          <option value="1950">1950</option>
                                          <option value="1949">1949</option>
                                          <option value="1948">1948</option>
                                          <option value="1947">1947</option>
                                          <option value="1946">1946</option>
                                          <option value="1945">1945</option>
                                          <option value="1944">1944</option>
                                          <option value="1943">1943</option>
                                          <option value="1942">1942</option>
                                          <option value="1941">1941</option>
                                          <option value="1940">1940</option>
                                          <option value="1939">1939</option>
                                          <option value="1938">1938</option>
                                          <option value="1937">1937</option>
                                          <option value="1936">1936</option>
                                          <option value="1935">1935</option>
                                          <option value="1934">1934</option>
                                          <option value="1933">1933</option>
                                          <option value="1932">1932</option>
                                          <option value="1931">1931</option>
                                          <option value="1930">1930</option>
                                       </select>
                                     </div>
                                     <div class="form-group col-md-3">
                                       <select  name="birth_month" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                          <option value="11">11</option>
                                          <option value="12">12</option>
                                       </select>
                                     </div>
                                     <div class="form-group col-md-2">  
                                       <select  name="birth_day" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                          <option value="11">11</option>
                                          <option value="12">12</option>
                                          <option value="13">13</option>
                                          <option value="14">14</option>
                                          <option value="15">15</option>
                                          <option value="16">16</option>
                                          <option value="17">17</option>
                                          <option value="18">18</option>
                                          <option value="19">19</option>
                                          <option value="20">20</option>
                                          <option value="21">21</option>
                                          <option value="22">22</option>
                                          <option value="23">23</option>
                                          <option value="24">24</option>
                                          <option value="25">25</option>
                                          <option value="26">26</option>
                                          <option value="27">27</option>
                                          <option value="28">28</option>
                                          <option value="29">29</option>
                                          <option value="30">30</option>
                                          <option value="31">31</option>
                                       </select>
                                     </div>
                                     <div class="form-group col-md-4">
                                       <label>Gender</label>
                                       <select  name="gender" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                          <option value="Male">Male</option>
                                          <option value="Female">Female</option>
                                          <option value="Not given">Not given</option>  
                                       </select>
                                     </div>
                                     <div class="form-group col-md-12">
                                       <label>Street Address</label>
                                       <input type="text" name="street_add" class="form-control" placeholder="Street Address" value="">
                                     </div>
                                     <div class="border_hor"></div>
                                      <div class="form-group  col-md-12 save_btn_part">
                                       <p class="color_green"> 
                                        <?php  if($user_detail[0]['status'] == '1'){ ?>
                                       <i class="fas fa-circle size_circle color_green "></i>Approved
                                       <?php }else {
                                            echo "Disapproved";
                                       } ?>
                                       </p>
                                       <input type="hidden" name="user_id" value="<?php echo $user_detail[0]['id']; ?>">
                                       <input type="submit" name="" value="Save" class="change_photo save">
                                     </div>
                                 </div>
                                 </form>
                                    
                                    <?php }?>
                     </div>

                      <!------------------------------- private_info end  -------------------> 

   <!--------------------------------------- Communication Tools ------------------------------------>

                            <div class="person_detail profile_right_part private_info tab-content" id="communication_link">
                           <div class="profile_name pro_rgt_prt_head basic_info_header private_info_header">
                              <h3>Communication Tools</h3> 
                           </div>
                            <hr>
                      <?php if($basic_detail){?>  
                                 <form class="basic_info_form" action="<?php echo base_url('teacher/comm_info') ?>" method="POST">
                                    <div class="row form_row">
                                    <div class="form-group col-md-6">
                                       <label>Preferred IM/Chat</label>
                                       <select name="Communication_tool" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                          <option selected=""><?php echo $basic_detail[0]['Communication_tool']; ?></option>
                                          <option value="Google Hangouts">Google Hangouts</option>
                                          <option value="Skype">Skype</option>
                                          <option value="Wechat">Wechat</option>
                                          <option value="QQ">QQ</option>
                                          <option value="FaceTime">FaceTime</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>User Account ID</label>
                                       <input type="text" name="Communication_id" class="form-control" placeholder="User Account ID" value="<?php echo $basic_detail[0]['Communication_id']; ?>">
                                    </div>
                                     <a href="javascript:void(0);" class="add_comm">+ Add a communication tool</a>
                                    <div class="border_hor"></div>
                                      <div class="form-group  col-md-12 save_btn_part">
                                       <p class="color_green">
                                       <?php  if($user_detail[0]['status'] == '1'){ ?>
                                       <i class="fas fa-circle size_circle color_green "></i>Approved
                                       <?php }else {
                                            echo "Disapproved";
                                       } ?>
                                       </p>
                                       <input type="hidden" name="user_id" value="<?php echo $user_detail[0]['id']; ?>">
                                       <input type="submit" name="" value="Save" class="change_photo save">
                                      </div>
                                    </div>
                                 </form>
                                    <?php }else{ ?>
                           <form class="basic_info_form" action="<?php echo base_url('teacher/comm_info') ?>" method="POST">
                                    <div class="row form_row">
                                    <div class="form-group col-md-6">
                                       <label>Preferred IM/Chat</label>
                                       <select name="Communication_tool" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                          <option value="Google Hangouts">Google Hangouts</option>
                                          <option value="Skype">Skype</option>
                                          <option value="Wechat">Wechat</option>
                                          <option value="QQ">QQ</option>
                                          <option value="FaceTime">FaceTime</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>User Account ID</label>
                                       <input type="text" name="Communication_id" class="form-control" placeholder="User Account ID" value="">
                                    </div>
                                     <a href="javascript:void(0);" class="add_comm">+ Add a communication tool</a>
                                    <div class="border_hor"></div>
                                      <div class="form-group  col-md-12 save_btn_part">
                                       <p class="color_green">
                                       <?php  if($user_detail[0]['status'] == '1'){ ?>
                                       <i class="fas fa-circle size_circle color_green "></i>Approved
                                       <?php }else {
                                            echo "Disapproved";
                                       } ?>
                                       </p>
                                       <input type="hidden" name="user_id" value="<?php echo $user_detail[0]['id']; ?>">
                                       <input type="submit" name="" value="Save" class="change_photo save">
                                      </div>
                                    </div>
                                 </form>

                                       <?php  } ?>
                     </div>

                     <!--------------------------------------- Communication Tools end ------------------------------------>
                      <!------------------------------- Lesson Management start ------------------->
            <div class="person_detail profile_right_part private_info tab-content" id="lesson_link">
                           <div class="profile_name pro_rgt_prt_head basic_info_header private_info_header">
                              <h3>Lesson Management</h3>
                           </div>
                            <hr>
                            <div class="lesson_part">
                                  <h5>Lessons</h5>
                              <ul>
                              <?php foreach($lesson as $less_detail){?>
                                 <li class="lesson_card">
                                    <div class="green_dot"></div>
                                    <div class="lesson_card_text">
                                       <div class="lesson_text">
                                          <h6><?php echo $less_detail['title']?></h6>
                                          <div class="redbar black lesson_bar"></div>
                                          <p>General • <?php echo $less_detail['language_taught'] ?> • $<?php echo $less_detail['lesson_price'] ?> USD / <?php echo $less_detail['lesson_time'] ?> min</p>
                                       </div>
                                        <div class="lesson_icon" >
                                          <a class="add_comm creatt_lesson" target="_blank" href="<?php echo base_url('teacher/lesson_edit/'.$less_detail['lesson_id'])?>">
                                                   <img src="<?php echo base_url();?>assets/img/edit.svg" alt="Edit"> 
                                          </a>
                                         <a href="<?php echo base_url('teacher/lesson_delete?id='.$less_detail['lesson_id']); ?>"  onclick="return confirm('Are you sure you want to delete this Lesson?');"> 
                                             <img src="<?php echo base_url();?>assets/img/remove.svg" alt="Remove"> 
                                         </a>
                                       </div>
                                    </div>
                                   
                                 </li>
                              <?php } ?>
                               
                                 <a class="add_comm creatt_lesson">
                                    <button type="button" class="btn-list-button" data-toggle="modal"
                                          data-target="#myModal" onclick="$('#lesson_id').val('<?php echo $user_detail[0]['id']; ?>');">
                                       + Create a Lesson
                                    </button>
                                 </a>
                              </ul>
                              <hr>
                                <h5>Trial Lesson</h5>
                              <ul>
                              <?php if($trial_lesson){?>
                                 <li class="lesson_card">
                                    <div class="green_dot"></div>
                                    <div class="lesson_card_text">
                                       <div class="lesson_text">
                                          <h6><?php echo $trial_lesson[0]['title'] ?></h6>
                                          <div class="redbar black lesson_bar"></div>
                                          <p>$<?php echo $trial_lesson[0]['lesson_price'] ?> USD / <?php echo $trial_lesson[0]['lesson_time'] ?> min</p>
                                       </div>
                                        <div class="lesson_icon">
                                          <a class="add_comm creatt_lesson">
                                             <button type="button" class="btn-list-button" data-toggle="modal"
                                                   data-target="#edit_trail" onclick="$('#lesson_').val('<?php echo $trial_lesson[0]['lesson_id']; ?>');">
                                                   <img src="<?php echo base_url();?>assets/img/edit.svg" alt="Edit"> 
                                             </button>
                                          </a>
                                        </div>
                                    </div>
                                 </li>
                              <?php } else{?>
                                 <a class="add_comm creatt_lesson">
                                    <button type="button" class="btn-list-button" data-toggle="modal"
                                          data-target="#add_trail" onclick="$('#_id').val('<?php echo $user_detail[0]['id']; ?>');">
                                       + Create Trial Lesson
                                    </button>
                                 </a>

                              <?php } ?>
                              </ul>

                   </div>
            </div>

                      <!------------------------------- Lesson Management end  -------------------> 

                      <!--------------------------------------- Availability Settings ------------------------------------>

                  <div class="person_detail profile_right_part private_info tab-content" id="availability_link">
                           <div class="profile_name pro_rgt_prt_head basic_info_header private_info_header">
                              <h3>Availability Settings</h3> 
                           </div>
                            <hr>
                            <?php if($available){ ?>
      
                                 <form class="basic_info_form availab_form" action="<?php echo base_url('teacher/availibity_info') ?>" method="POST">
                                  <h6>Lesson Requests</h6>
                                    <div class="row form_row availab_row ">
                                   <div class="form-group col-md-6">
                                       <label>Allow lesson requests from:</label>
                                     </div>
                                     <div class="form-group col-md-4">
                                       <select name="sess_req" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                             <option selected=""><?php echo $available[0]['sess_req']?></option>
                                             <option selected="">All students</option>
                                             <option value="1">Current Students</option>
                                             <option value="2">Nobody</option>
                                       </select>
                                     </div>

                                  </div>
                                  <hr>
                                  <h6>Instant Booking</h6>
                                  <div class="row form_row availab_row inst_book">
                                     <div class="form-group col-md-12">
                                       <p>Your Instant Booking privileges have been disabled because you were absent from 2 or more lessons. For further details, please contact us at support@mylanguagepro.com.</p>
                                     </div>
                                     <div class="form-group col-md-6">
                                       <label>Allow Instant Booking</label>
                                     </div>
                                     <div class="form-group col-md-6">
                                          <label class="switch">
                                          <?php  if($available[0]['instant_booking'] == '1'){ ?>
                                             <input name="status" value="0" type="checkbox" class="success" checked>
                                                <span class="slider round"></span>
                                          <?php }else {?>
                                                      <input name="status" value="1" type="checkbox" class="success">
                                                      <span class="slider round"></span>
                                             <?php     } ?>
                                         </label>
                                     </div>
                                     <div class="form-group col-md-6">
                                       <label>Automatically accept lesson requests from:</label>
                                     </div>
                                     <?php  if($available[0]['auto_acc_book'] == 'New'){ ?>
                                             <div class="form-group col-md-6">
                                                <label class="checkbox">
                                                      <input name="auto_acc_book" value="New" type="checkbox"  checked/>
                                                      <span class="success"></span>
                                                </label>
                                                <label class="check_label">New Students</label>
                                             </div>
                                             <div class="form-group col-md-6">
                                             </div>
                                                <div class="form-group col-md-6">   
                                                   <label class="checkbox">
                                                      <input name="auto_acc_book" value="Current" type="checkbox" />
                                                      <span class="success"></span>
                                                   </label>
                                                   <label class="check_label">Current Students</label>
                                                
                                                </div>
                                          <?php }else {?>
                                             <div class="form-group col-md-6">
                                                <label class="checkbox">
                                                      <input name="auto_acc_book" value="New" type="checkbox"  />
                                                      <span class="success"></span>
                                                </label>
                                                <label class="check_label">New Students</label>
                                             </div>
                                             <div class="form-group col-md-6">
                                             </div>
                                                <div class="form-group col-md-6">   
                                                   <label class="checkbox">
                                                      <input name="auto_acc_book" value="Current" type="checkbox" checked/>
                                                      <span class="success"></span>
                                                   </label>
                                                   <label class="check_label">Current Students</label>
                                                
                                                </div>
                                             <?php     } ?>                         
                                     <div class="border_hor"></div>
                                      <div class="form-group  col-md-12 save_btn_part">
                                       <p></p>
                                       <input type="hidden" name="user_id" value="<?php echo $user_detail[0]['id']; ?>">
                                       <input type="submit" name="" value="Save" class="change_photo save">
                                     </div>
                                </div>

                                 </form>
                            <?php }
                            else{ ?>
                           <form class="basic_info_form availab_form" action="<?php echo base_url('teacher/add_availbility') ?>" method="POST">
                                  <h6>Lesson Requests</h6>
                                    <div class="row form_row availab_row ">
                                   <div class="form-group col-md-6">
                                       <label>Allow lesson requests from:</label>
                                     </div>
                                     <div class="form-group col-md-4">
                                       <select name="sess_req" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                           <option selected="">All students</option>
                                          <option value="1">Current Students</option>
                                          <option value="2">Nobody</option>
                                    
                                       </select>
                                     </div>

                                  </div>
                                  <hr>
                                  <h6>Instant Booking</h6>
                                  <div class="row form_row availab_row inst_book">
                                     <div class="form-group col-md-12">
                                       <p>Your Instant Booking privileges have been disabled because you were absent from 2 or more lessons. For further details, please contact us at support@mylanguagepro.com.</p>
                                     </div>
                                     <div class="form-group col-md-6">
                                       <label>Allow Instant Booking</label>
                                     </div>
                                     <div class="form-group col-md-6">
                                          <label class="switch">
                                              <input name="instant_booking" value="1" type="checkbox" class="success">
                                              <span class="slider round"></span>
                                         </label>
                                     </div>
                                     <div class="form-group col-md-6">
                                       <label>Automatically accept lesson requests from:</label>
                                     </div>
                                     <div class="form-group col-md-6">
                                             <label class="checkbox">
                                                 <input name="auto_acc_book" value="New" type="checkbox" />
                                                 <span class="success"></span>
                                             </label>
                                             <label class="check_label">New Students</label>
                                        </div>
                                         <div class="form-group col-md-6">
                                         </div>
                                          <div class="form-group col-md-6">   
                                             <label class="checkbox">
                                                 <input name="auto_acc_book" value="Current" type="checkbox" />
                                                 <span class="success"></span>
                                             </label>
                                             <label class="check_label">Current Students</label>
                                     </div>
                                     <div class="border_hor"></div>
                                      <div class="form-group  col-md-12 save_btn_part">
                                       <p></p>
                                       <input type="hidden" name="user_id" value="<?php echo $user_detail[0]['id']; ?>">
                                       <input type="submit" name="" value="Save" class="change_photo save">
                                     </div>
                                </div>

                                 </form>
                            <?php }?>
                     </div>

            <!--------------------------------------- Availability Settings end ------------------------------------>




             <!--------------------------------------- Teacher Calendar start ------------------------------------>

               <div class="person_detail profile_right_part private_info tab-content" id="teacher_link">
                           <div class="profile_name pro_rgt_prt_head basic_info_header private_info_header">
                              <h3>Teacher Calendar</h3> 
                              <p>This is your calendar. You can set specific dates and times when you are available.</p>
                           </div>
                           <link href='<?php echo base_url();?>Cassets/js/lib/main.css' rel='stylesheet' />
                            <link href="<?php echo base_url();?>Cassets/css/bootstrapValidator.min.css" rel="stylesheet" />        
                            <link href="<?php echo base_url();?>Cassets/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
                            <script src='<?php echo base_url();?>Cassets/js/moment.min.js'></script>
                            <script src="<?php echo base_url();?>Cassets/js/jquery.min.js"></script>
                            <script src="<?php echo base_url();?>Cassets/js/bootstrapValidator.min.js"></script>
                            <script src="<?php echo base_url();?>Cassets/js/lib/main.js"></script>
                            <script src='<?php echo base_url();?>Cassets/js/main.js'></script>
                            <?php
                                $days       = [];
                                $start_time = [];
                                $end_time   = [];
                                foreach( $availbility as $availble ){
                                    if( $availble['date_day'] == '0' ){
                                        if( $availble['day'] == 'Mon' ){
                                            array_push( $days , 1 );
                                            array_push( $start_time , $availble['start_time'] );
                                            array_push( $end_time , $availble['end_time'] );
                                        }else if($availble['day'] == 'Tue'){
                                            array_push( $days , 2 );
                                            array_push( $start_time , $availble['start_time'] );
                                            array_push( $end_time , $availble['end_time'] );
                                        }else if($availble['day'] == 'Wed'){
                                            array_push( $days , 3 );
                                            array_push( $start_time , $availble['start_time'] );
                                            array_push( $end_time , $availble['end_time'] );
                                        }else if($availble['day'] == 'Thurs'){
                                            array_push( $days , 4 );
                                            array_push( $start_time , $availble['start_time'] );
                                            array_push( $end_time , $availble['end_time'] );
                                        }else if($availble['day'] == 'Fri'){
                                            array_push( $days , 5 );
                                            array_push( $start_time , $availble['start_time'] );
                                            array_push( $end_time , $availble['end_time'] );
                                        }else if($availble['day'] == 'Sat'){
                                            array_push( $days , 6 );
                                            array_push( $start_time , $availble['start_time'] );
                                            array_push( $end_time , $availble['end_time'] );
                                        }else if($availble['day'] == 'Sun'){
                                            array_push( $days , 7 );
                                            array_push( $start_time , $availble['start_time'] );
                                            array_push( $end_time , $availble['end_time'] );
                                        }    
                                    }else{
                                        $date_events[] = array (
                                            'title' => $availble['day'],
                                            'start' => $availble['day'],
                                        );
                                    }
                                }
                                foreach( $days as $key => $day ){
                                    
                                    $startEnd = date('h:i A', strtotime($start_time[$key])).' T '.date('h:i A', strtotime($end_time[$key]));
                                    $events[] = array (
                                        'daysOfWeek' => [ $day ],
                                        'title'      => $startEnd,
                                        'color'      => 'green'
                                    );
                                }
                            ?>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                var calendarEl = document.getElementById('calendar');
                                var calendar = new FullCalendar.Calendar(calendarEl, {
                                    events: [
                                        <?php 
                                            foreach ( $events as $event ){
                                                echo json_encode($event).",";
                                            }
                                            if( $availble['date_day'] == '1' ){    
                                                foreach ( $date_events as $date_event ){
                                                    echo json_encode($date_event).",";
                                                }
                                            }
                                        ?>
                                    ],
                                    height: 650,
                                });
                                $('#render_calender').click(function(){
                                    calendar.render();
                                });    
                                });
                            </script>
                              <!-- <div class="calendar_sec"> -->
                                        <div id='calendar'></div>
                                       
                                        <!------------------------------------>
<div id="calender_modal" class="calender_modal modal fade" role="dialog" >
   <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title"></h4>
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
               
            </div>
            <div class="modal-body">
               <div class="error"></div>
               <form class="form-horizontal row" id="crud-form">
               <input type="hidden" id="start">
               <input type="hidden" id="color" name="color" type="text" class="form-control input-md" readonly="readonly" />
               <input type="hidden" id="end">
               <input type="hidden" id="user_id" value="<?php echo $user_detail[0]['id']; ?>" name="user_id">
                     <div class="form-group col-md-4">
                     <label>From Booking</label>
                        <select  id="from_time" name="from_time" class="custom-select animations-select arrow_des" data-target="#animation-bottom">
                          <?php if($calander){
                             foreach($calander as $calanders){
                             echo '<option value="'.$calanders['from_time'].'">'.$calanders['from_time'].'</option>';
                             } ?>
                             <option value="00:00">00:00</option>
                           <option value="00:30">00:30</option>
                           <option value="01:00">01:00</option>
                           <option value="01:30">01:30</option>
                           <option value="02:00">01:00</option>
                           <option value="02:30">01:30</option>
                           <option value="03:00">03:00</option>
                           <option value="03:30">03:30</option>
                           <option value="04:00">04:00</option>
                           <option value="04:30">04:30</option>
                           <option value="05:00">05:00</option>
                           <option value="05:30">05:30</option>
                           <option value="06:00">06:00</option>
                           <option value="06:30">06:30</option>
                           <option value="07:00">07:00</option>
                           <option value="07:30">04:30</option>
                           <option value="08:00">08:00</option>
                           <option value="08:30">08:30</option>
                           <option value="09:00">09:00</option>
                           <option value="09:30">09:30</option>
                           <option value="10:00">10:00</option>
                           <option value="10:30">10:30</option>
                           <option value="11:00">11:00</option>
                           <option value="11:30">11:30</option>
                           <option value="12:00">12:00</option>
                           <option value="12:30">12:30</option>
                           <option value="13:00">13:00</option>
                           <option value="13:30">13:30</option>
                           <option value="14:00">14:00</option>
                           <option value="14:30">14:30</option>
                           <option value="15:00">15:00</option>
                           <option value="15:30">15:30</option>
                           <option value="16:00">16:00</option>
                           <option value="16:30">16:30</option>
                           <option value="17:00">17:00</option>
                           <option value="17:30">17:30</option>
                      <?php    } else {?>
                           <option value="00:00">00:00</option>
                           <option value="00:30">00:30</option>
                           <option value="01:00">01:00</option>
                           <option value="01:30">01:30</option>
                           <option value="02:00">01:00</option>
                           <option value="02:30">01:30</option>
                           <option value="03:00">03:00</option>
                           <option value="03:30">03:30</option>
                           <option value="04:00">04:00</option>
                           <option value="04:30">04:30</option>
                           <option value="05:00">05:00</option>
                           <option value="05:30">05:30</option>
                           <option value="06:00">06:00</option>
                           <option value="06:30">06:30</option>
                           <option value="07:00">07:00</option>
                           <option value="07:30">04:30</option>
                           <option value="08:00">08:00</option>
                           <option value="08:30">08:30</option>
                           <option value="09:00">09:00</option>
                           <option value="09:30">09:30</option>
                           <option value="10:00">10:00</option>
                           <option value="10:30">10:30</option>
                           <option value="11:00">11:00</option>
                           <option value="11:30">11:30</option>
                           <option value="12:00">12:00</option>
                           <option value="12:30">12:30</option>
                           <option value="13:00">13:00</option>
                           <option value="13:30">13:30</option>
                           <option value="14:00">14:00</option>
                           <option value="14:30">14:30</option>
                           <option value="15:00">15:00</option>
                           <option value="15:30">15:30</option>
                           <option value="16:00">16:00</option>
                           <option value="16:30">16:30</option>
                           <option value="17:00">17:00</option>
                           <option value="17:30">17:30</option>
                      <?php }?>
                        </select>
                     </div>                           
                     <div class="form-group col-md-4">
                     <label>To Booking</label>
                        <select id="to_time"  name="to_time" class="custom-select animations-select arrow_des" data-target="#animation-bottom">
                        <?php if($calander){
                             foreach($calander as $calanders){
                             echo '<option value="'.$calanders['to_time'].'">'.$calanders['to_time'].'</option>';
                             } ?>
                           <option value="08:00">08:00</option>
                           <option value="08:30">08:30</option>
                           <option value="09:00">09:00</option>
                           <option value="09:30">09:30</option>
                           <option value="10:00">10:00</option>
                           <option value="10:30">10:30</option>
                           <option value="11:00">11:00</option>
                           <option value="11:30">11:30</option>
                           <option value="12:00">12:00</option>
                           <option value="12:30">12:30</option>
                           <option value="13:00">13:00</option>
                           <option value="13:30">13:30</option>
                           <option value="14:00">14:00</option>
                           <option value="14:30">14:30</option>
                           <option value="15:00">15:00</option>
                           <option value="15:30">15:30</option>
                           <option value="16:00">16:00</option>
                           <option value="16:30">16:30</option>
                           <option value="17:00">17:00</option>
                           <option value="17:30">17:30</option>
                           <option value="18:00">18:00</option>
                           <option value="18:30">18:30</option>
                           <option value="19:00">19:00</option>
                           <option value="19:30">19:30</option>
                           <option value="20:00">20:00</option>
                           <option value="20:30">20:30</option>
                           <option value="21:00">21:00</option>
                           <option value="21:30">21:30</option>
                           <option value="22:00">22:00</option>
                           <option value="22:30">22:30</option>
                           <option value="23:00">23:00</option>
                           <option value="23:30">23:30</option>
                           <?php    } else {?>
                              <option value="08:00">08:00</option>
                           <option value="08:30">08:30</option>
                           <option value="09:00">09:00</option>
                           <option value="09:30">09:30</option>
                           <option value="10:00">10:00</option>
                           <option value="10:30">10:30</option>
                           <option value="11:00">11:00</option>
                           <option value="11:30">11:30</option>
                           <option value="12:00">12:00</option>
                           <option value="12:30">12:30</option>
                           <option value="13:00">13:00</option>
                           <option value="13:30">13:30</option>
                           <option value="14:00">14:00</option>
                           <option value="14:30">14:30</option>
                           <option value="15:00">15:00</option>
                           <option value="15:30">15:30</option>
                           <option value="16:00">16:00</option>
                           <option value="16:30">16:30</option>
                           <option value="17:00">17:00</option>
                           <option value="17:30">17:30</option>
                           <option value="18:00">18:00</option>
                           <option value="18:30">18:30</option>
                           <option value="19:00">19:00</option>
                           <option value="19:30">19:30</option>
                           <option value="20:00">20:00</option>
                           <option value="20:30">20:30</option>
                           <option value="21:00">21:00</option>
                           <option value="21:30">21:30</option>
                           <option value="22:00">22:00</option>
                           <option value="22:30">22:30</option>
                           <option value="23:00">23:00</option>
                           <option value="23:30">23:30</option>

                           <?php }?>
                        </select>
                     </div>
               </form>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
      </div>
   </div>
</div>

                                 <!-- </div> -->
                                 <div class="calender_bottom">
                                    <ul>
                                          <li>
                                       <p>Based on your timezone (UTC+02:00)</p>
                                    </li>
                                    <!-- <li>
                                       <input type="submit" name="" value="Calendar Cleanup" class="change_photo cal_fotr_btn">
                                       <input type="submit" name="" value="Turn on Vacation" class="change_photo cal_fotr_btn">
                                    </li> -->
                                    </ul>
                                 </div>
                              </div>

                     <!--------------------------------------- Teacher Calendar  end ------------------------------------>


               
                        <!--------------------------------------- Introduction start ------------------------------------>

                        <div class="person_detail profile_right_part private_info tab-content" id="introduction_link">
                           <div class="profile_name pro_rgt_prt_head basic_info_header private_info_header">
                              <h3>Introduction</h3> 
                           </div>
                           <hr>
                           <?php if($teacher_detail){ 
                              foreach($teacher_detail as $teacher_details){
                              ?>
                               <?php $this->load->view('admin/includes/_messages'); ?>
                              <form class="basic_info_form availab_form" action="<?php echo base_url('teacher/teacher_intro_update') ?>" method="POST">                              
                              
                                 <div class="form-group col-md-12">   
                                       <div class="intro_sec">
                                           <h6>About Me</h6>
                                       </div>
                                       <div class="form-group col-md-12">
                                          <textarea name="about" class="intro_part"><?php echo $teacher_details['about'];  ?></textarea>
                                       </div>
                                  </div>                    
                                  <div class="form-group col-md-12">   
                                       <div class="intro_sec">
                                       <h6>Me as a Teacher</h6>
                                       </div>
                                       <div class="form-group col-md-12">
                                          <textarea  name="teacher_info" class="intro_part"><?php echo $teacher_details['teacher_info'];  ?></textarea>
                                       </div>
                                  </div> 

                                  <div class="form-group col-md-12">   
                                    <div class="intro_sec">
                                       <h6>My Lessons & Teaching Style</h6>
                                    </div>
                                    <div class="form-group col-md-12">
                                          <textarea name="teaching_style" class="intro_part"><?php echo $teacher_details['teaching_style'];  ?></textarea>
                                    </div>
                                    </div>  
                                 <div class="border_hor"></div>
                                 <div class="form-group  col-md-12 save_btn_part margin_top">
                                    <p class="color_green"><?php  if($user_detail[0]['status'] == '1'){ ?>
                                          <i class="fas fa-circle size_circle color_green"></i>Approved
                                          <?php } else {
                                             echo "Disapproved";}?>
                                    </p>
                                    <input type="hidden" name="user_id" value="<?php echo $user_detail[0]['id'];?>">
                                    <input type="submit" value="Save" class="change_photo save">
                                 </div>    
                              </form>  
                           <?php }
                        } else {?>     
                               <?php $this->load->view('admin/includes/_messages'); ?>
                              <form class="basic_info_form availab_form" action="<?php echo base_url('teacher/teacher_intro') ?>" method="POST">                              
                                 <div class="form-group col-md-12">   
                                       <div class="intro_sec">
                                           <h6>About Me</h6>
                                       </div>
                                       <div class="form-group col-md-12">
                                          <textarea name="about" class="intro_part"></textarea>
                                       </div>
                                  </div>                    
                                  <div class="form-group col-md-12">   
                                       <div class="intro_sec">
                                       <h6>Me as a Teacher</h6>
                                       </div>
                                       <div class="form-group col-md-12">
                                          <textarea  name="teacher_info" class="intro_part"></textarea>
                                       </div>
                                  </div> 

                                  <div class="form-group col-md-12">   
                                       <div class="intro_sec">
                                       <h6>My Lessons & Teaching Style</h6>
                                       </div>
                                       <div class="form-group col-md-12">
                                          <textarea name="teaching_style" class="intro_part"></textarea>
                                       </div>
                                  </div>  
                                 <div class="border_hor"></div>
                                 <div class="form-group  col-md-12 save_btn_part margin_top">
                                 <p class="color_green"> 
                                 <?php  if($user_detail[0]['status'] == '1'){ ?>
                                       <i class="fas fa-circle size_circle color_green "></i>Approved
                                       <?php }else {
                                            echo "Disapproved";
                                       } ?>
                                       </p>
                                 <input type="hidden" name="user_id" value="<?php echo $user_detail[0]['id']; ?>">
                                 <input type="submit" name="" value="Save" class="change_photo save">
                                 </div>    
                              </form> 
                           <?php }?>                                                      
                     </div>

                     <!--------------------------------------- Introduction end ------------------------------------>



                         <!--------------------------------------- Contact Form start ------------------------------------>

                        <div class="person_detail profile_right_part private_info tab-content" id="contact_link">
                           <div class="profile_name pro_rgt_prt_head basic_info_header private_info_header">
                              <h3>Contact Form</h3> 
                           </div>
                           <hr>
                                <div class="intro_sec">                                                             
                                    <p>You can select 3 to 5 questions to display on your contact teacher form.</p>
                                     <p>If you teach more than one language, we will ask which language the student wants to learn.</p>
                                     <div class="contact_form_part">
                                 <form class="basic_info_form availab_form" action="<?php echo base_url('teacher/teacher_contact') ?>" method="POST">                                                            
                                 <?php if($teacher_detail){ 
                              foreach($teacher_detail as $teacher_details){
                              ?>
                                     <ul>                               
                                       <li class="lesson_card cnt_padding">
                                             <div class="cont_check_box_part">
                                                <div class="form-group">
                                                   <div class="cont_check_box">
                                                      <label class="checkbox small">
                                                      <?php  if($teacher_details['teacher_reason'] == '1'){ ?>
                                                         <input name="teacher_reason" value="0" type="checkbox" checked>
                                                         <span class="success"></span>
                                                         <?php }else {
                                                           echo '<input name="teacher_reason" value="1" type="checkbox" >  <span class="success"></span>';
                                                         } ?>
                                                           
                                                      </label>
                                                      <label class="check_label size">What is the main reason you're taking lessons?</label>
                                                   </div>
                                                   <div class="check_box_part">
                                                      <div class="redbar black "></div>
                                                      <p>7 Possible Answers <a data-toggle="modal" data-target="#reason">View Answers</a></p>
                                                         <div class="modal fade" id="reason" role="dialog">
                                                            <div class="modal-dialog">                                                              
                                                               <!-- Modal content-->
                                                               <div class="modal-content">
                                                                  <div class="modal-header">
                                                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                     <h5>What is the main reason you're taking lessons?</h5>
                                                                        <ul  class="contact_modal">
                                                                           <li> School </li> 
                                                                           <li> Test</li> 
                                                                           <li> Work</li> 
                                                                           <li> Travel</li> 
                                                                           <li> Personal interest</li> 
                                                                           <li> Lessons are for my child</li> 
                                                                           <li> Other</li> 
                                                                        </ul>
                                                                  </div>
                                                               </div>                                                                
                                                            </div>
                                                         </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>

                                          <li class="lesson_card cnt_padding">
                                             <div class="cont_check_box_part">
                                                <div class="form-group">
                                                   <div class="cont_check_box">
                                                      <label class="checkbox small">
                                                      <?php  if($teacher_details['teachingplan'] == '1'){ ?>
                                                         <input name="teachingplan" value="0" type="checkbox" checked>
                                                         <span class="success"></span>
                                                         <?php }else {
                                                           echo '<input name="teachingplan" value="1" type="checkbox" >  <span class="success"></span>';
                                                         } ?>
                                                      </label>
                                                      <label class="check_label size">How often are you planning to take lessons?</label>
                                                   </div>
                                                   <div class="check_box_part">
                                                      <div class="redbar black "></div>
                                                      <p>4 Possible Answers <a data-toggle="modal" data-target="#planning">View Answers</a></p>
                                                         <div class="modal fade" id="planning" role="dialog">
                                                            <div class="modal-dialog">                                                              
                                                               <!-- Modal content-->
                                                               <div class="modal-content">
                                                                  <div class="modal-header">
                                                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                     <h5>How often are you planning to take lessons?</h5>
                                                                        <ul  class="contact_modal">
                                                                           <li> 1 lesson every 2 weeks </li> 
                                                                           <li> 1 lesson a week</li> 
                                                                           <li> 2 lessons a week</li> 
                                                                           <li> 3+ lessons a week</li>                                                                         
                                                                        </ul>
                                                                  </div>
                                                               </div>                                                                
                                                            </div>
                                                         </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>

                                          <li class="lesson_card cnt_padding">
                                             <div class="cont_check_box_part">
                                                <div class="form-group">
                                                   <div class="cont_check_box">
                                                      <label class="checkbox small">
                                                      <?php  if($teacher_details['lesson_length'] == '1'){ ?>
                                                         <input name="lesson_length" value="0" type="checkbox" checked>
                                                         <span class="success"></span>
                                                         <?php }else {
                                                           echo '<input name="lesson_length" value="1" type="checkbox" >  <span class="success"></span>';
                                                         } ?>
                                                      </label>
                                                      <label class="check_label size">What is a comfortable lesson length for you?</label>
                                                   </div>
                                                   <div class="check_box_part">
                                                      <div class="redbar black "></div>
                                                      <p>2 Possible Answers <a data-toggle="modal" data-target="#comfortable">View Answers</a></p>
                                                         <div class="modal fade" id="comfortable" role="dialog">
                                                            <div class="modal-dialog">                                                              
                                                               <!-- Modal content-->
                                                               <div class="modal-content">
                                                                  <div class="modal-header">
                                                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                     <h5>What is a comfortable lesson length for you?</h5>
                                                                        <ul  class="contact_modal">
                                                                           <li> 30 minutes </li> 
                                                                           <li> 60 minutes</li>                                                            
                                                                        </ul>
                                                                  </div>
                                                               </div>                                                                
                                                            </div>
                                                         </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>

                                          <li class="lesson_card cnt_padding">
                                             <div class="cont_check_box_part">
                                                <div class="form-group">
                                                   <div class="cont_check_box">
                                                      <label class="checkbox small">
                                                          <?php  if($teacher_details['specific_area'] == '1'){ ?>
                                                         <input name="specific_area" value="0" type="checkbox" checked>
                                                         <span class="success"></span>
                                                         <?php }else {
                                                           echo '<input name="specific_area" value="1" type="checkbox" >  <span class="success"></span>';
                                                         } ?>     
                                                      </label>
                                                      <label class="check_label size">Is there a specific area that you would like to focus on during your lessons?</label>
                                                   </div>
                                                   <div class="check_box_part">
                                                      <div class="redbar black "></div>
                                                      <p>6 Possible Answers <a data-toggle="modal" data-target="#specific">View Answers</a></p>
                                                         <div class="modal fade" id="specific" role="dialog">
                                                            <div class="modal-dialog">                                                              
                                                               <!-- Modal content-->
                                                               <div class="modal-content">
                                                                  <div class="modal-header">
                                                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                     <h5>Is there a specific area that you would like to focus on during your lessons?</h5>
                                                                        <ul class="contact_modal">
                                                                           <li> Grammar </li> 
                                                                           <li> Vocabulary</li>                                                            
                                                                           <li> Pronunciation</li>                                                            
                                                                           <li> Reading Comprehension</li>                                                            
                                                                           <li> Conversational Practice</li>                                                            
                                                                           <li> Other</li>                                                            
                                                                        </ul>
                                                                  </div>
                                                               </div>                                                                
                                                            </div>
                                                         </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>

                                          <li class="lesson_card cnt_padding">
                                             <div class="cont_check_box_part">
                                                <div class="form-group">
                                                   <div class="cont_check_box">
                                                      <label class="checkbox small">
                                                         <?php  if($teacher_details['language_prof'] == '1'){ ?>
                                                            <input name="language_prof" value="0" type="checkbox" checked>
                                                            <span class="success"></span>
                                                            <?php }else {
                                                            echo '<input name="language_prof" value="1" type="checkbox" >  <span class="success"></span>';
                                                            } ?>     
                                                      </label>
                                                      <label class="check_label size">What language proficiency level are you aiming for?</label>
                                                   </div>
                                                   <div class="check_box_part">
                                                      <div class="redbar black "></div>
                                                      <p>7 Possible Answers  <a data-toggle="modal" data-target="#proficiency">View Answers</a></p>
                                                         <div class="modal fade" id="proficiency" role="dialog">
                                                            <div class="modal-dialog">                                                              
                                                               <!-- Modal content-->
                                                               <div class="modal-content">
                                                                  <div class="modal-header">
                                                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                     <h5>What language proficiency level are you aiming for?</h5>
                                                                        <ul  class="contact_modal">
                                                                           <li>A1: Beginner</li> 
                                                                           <li>A2: Elementary</li>                                                            
                                                                           <li>B1: Intermediate</li>                                                            
                                                                           <li>B2: Upper Intermediate</li>                                                            
                                                                           <li>C1: Advanced</li>                                                            
                                                                           <li>C2: Proficient</li>                                                            
                                                                           <li>Native</li>                                                            
                                                                        </ul>
                                                                  </div>
                                                               </div>                                                                
                                                            </div>
                                                         </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>

                                          <li class="lesson_card cnt_padding">
                                             <div class="cont_check_box_part">
                                                <div class="form-group">
                                                   <div class="cont_check_box">
                                                      <label class="checkbox small">
                                                      <?php  if($teacher_details['teacher_material'] == '1'){ ?>
                                                            <input name="teacher_material" value="0" type="checkbox" checked>
                                                            <span class="success"></span>
                                                            <?php }else {
                                                            echo '<input name="teacher_material" value="1" type="checkbox" >  <span class="success"></span>';
                                                            } ?> 
                                                      </label>
                                                      <label class="check_label size">What kind of teaching materials would be most helpful to you?</label>
                                                   </div>
                                                   <div class="check_box_part">
                                                      <div class="redbar black "></div>
                                                      <p>13 Possible Answers  <a data-toggle="modal" data-target="#materials">View Answers</a></p>
                                                         <div class="modal fade" id="materials" role="dialog">
                                                            <div class="modal-dialog">                                                              
                                                               <!-- Modal content-->
                                                               <div class="modal-content">
                                                                  <div class="modal-header">
                                                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                     <h5>What kind of teaching materials would be most helpful to you?</h5>
                                                                        <ul class="contact_modal">                                                         
                                                                           <li>PDF file</li> 
                                                                           <li>Text Documents</li>    
                                                                           <li>Presentation slides/PPT</li>                                                       
                                                                           <li>Audio files</li>                                                       
                                                                           <li>Image files</li>                                                       
                                                                           <li>Video files</li>                                                       
                                                                           <li>Flashcards</li>                                                       
                                                                           <li>Articles and news</li>                                                       
                                                                           <li>Quizzes</li>                                                       
                                                                           <li>Test templates and examples</li>                                                       
                                                                           <li>Graphs and charts</li>                                                       
                                                                           <li>Homework Assignments</li>                                                       
                                                                           <li>Other</li>                                                       
                                                                        </ul>
                                                                  </div>
                                                               </div>                                                                
                                                            </div>
                                                         </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>

                                          <li class="lesson_card cnt_padding">
                                             <div class="cont_check_box_part">
                                                <div class="form-group">
                                                   <div class="cont_check_box">
                                                      <label class="checkbox small">
                                                      <?php  if($teacher_details['time_prefer'] == '1'){ ?>
                                                            <input name="time_prefer" value="0" type="checkbox" checked>
                                                            <span class="success"></span>
                                                            <?php }else {
                                                            echo '<input name="time_prefer" value="1" type="checkbox" >  <span class="success"></span>';
                                                            } ?> 
                                                      </label>
                                                      <label class="check_label size">What time do you prefer to have your lessons?</label>
                                                   </div>
                                                   <div class="check_box_part">
                                                      <div class="redbar black "></div>
                                                      <p>7 Possible Answers <a data-toggle="modal" data-target="#time">View Answers</a></p>
                                                         <div class="modal fade" id="time" role="dialog">
                                                            <div class="modal-dialog">                                                              
                                                               <!-- Modal content-->
                                                               <div class="modal-content">
                                                                  <div class="modal-header">
                                                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                     <h5>What time do you prefer to have your lessons?</h5>
                                                                        <ul  class="contact_modal">                                                         
                                                                           <li>Early Morning (06:00 - 09:00)</li> 
                                                                           <li>Morning (09:00 - 12:00)</li>    
                                                                           <li>Afternoon (12:00 -15:00)</li>                                                       
                                                                           <li>Late Afternoon (15:00 -18:00)</li>                                                       
                                                                           <li>Evening (18:00 - 21:00)</li>                                                       
                                                                           <li>Night (21:00 - 00:00)</li>                                                       
                                                                           <li>After Midnight (00:00 - 06:00)</li>                                                                                                            
                                                                        </ul>
                                                                  </div>
                                                               </div>                                                                
                                                            </div>
                                                         </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>

                                          <li class="lesson_card cnt_padding">
                                             <div class="cont_check_box_part">
                                                <div class="form-group">
                                                   <div class="cont_check_box">
                                                      <label class="checkbox small">
                                                          <?php  if($teacher_details['fsq'] == '1'){ ?>
                                                            <input name="fsq" value="0" type="checkbox" checked>
                                                            <span class="success"></span>
                                                            <?php }else {
                                                            echo '<input name="fsq" value="1" type="checkbox" >  <span class="success"></span>';
                                                            } ?> 
                                                      </label>
                                                      <label class="check_label size">Feel free to ask your own question!</label>
                                                   </div>
                                                   <div class="check_box_part">
                                                      <div class="redbar black "></div>
                                                      <p>Please note that this question will not be automatically translated into the student's display language</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>

                                       </ul>
                                       <?php } } else {?>  
                                          <ul>                               
                                       <li class="lesson_card cnt_padding">
                                             <div class="cont_check_box_part">
                                                <div class="form-group">
                                                   <div class="cont_check_box">
                                                      <label class="checkbox small">
                                                            <input name="teacher_reason" value="1" type="checkbox">
                                                            <span class="success"></span>
                                                      </label>
                                                      <label class="check_label size">What is the main reason you're taking lessons?</label>
                                                   </div>
                                                   <div class="check_box_part">
                                                      <div class="redbar black "></div>
                                                      <p>7 Possible Answers <a data-toggle="modal" data-target="#reason">View Answers</a></p>
                                                         <div class="modal fade" id="reason" role="dialog">
                                                            <div class="modal-dialog">                                                              
                                                               <!-- Modal content-->
                                                               <div class="modal-content">
                                                                  <div class="modal-header">
                                                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                     <h5>What is the main reason you're taking lessons?</h5>
                                                                        <ul  class="contact_modal">
                                                                           <li> School </li> 
                                                                           <li> Test</li> 
                                                                           <li> Work</li> 
                                                                           <li> Travel</li> 
                                                                           <li> Personal interest</li> 
                                                                           <li> Lessons are for my child</li> 
                                                                           <li> Other</li> 
                                                                        </ul>
                                                                  </div>
                                                               </div>                                                                
                                                            </div>
                                                         </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>

                                          <li class="lesson_card cnt_padding">
                                             <div class="cont_check_box_part">
                                                <div class="form-group">
                                                   <div class="cont_check_box">
                                                      <label class="checkbox small">
                                                            <input name="teachingplan" value="1" type="checkbox">
                                                            <span class="success"></span>
                                                      </label>
                                                      <label class="check_label size">How often are you planning to take lessons?</label>
                                                   </div>
                                                   <div class="check_box_part">
                                                      <div class="redbar black "></div>
                                                      <p>4 Possible Answers <a data-toggle="modal" data-target="#planning">View Answers</a></p>
                                                         <div class="modal fade" id="planning" role="dialog">
                                                            <div class="modal-dialog">                                                              
                                                               <!-- Modal content-->
                                                               <div class="modal-content">
                                                                  <div class="modal-header">
                                                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                     <h5>How often are you planning to take lessons?</h5>
                                                                        <ul  class="contact_modal">
                                                                           <li> 1 lesson every 2 weeks </li> 
                                                                           <li> 1 lesson a week</li> 
                                                                           <li> 2 lessons a week</li> 
                                                                           <li> 3+ lessons a week</li>                                                                         
                                                                        </ul>
                                                                  </div>
                                                               </div>                                                                
                                                            </div>
                                                         </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>

                                          <li class="lesson_card cnt_padding">
                                             <div class="cont_check_box_part">
                                                <div class="form-group">
                                                   <div class="cont_check_box">
                                                      <label class="checkbox small">
                                                            <input name="lesson_length" value="1" type="checkbox">
                                                            <span class="success"></span>
                                                      </label>
                                                      <label class="check_label size">What is a comfortable lesson length for you?</label>
                                                   </div>
                                                   <div class="check_box_part">
                                                      <div class="redbar black "></div>
                                                      <p>2 Possible Answers  <a data-toggle="modal" data-target="#comfortable">View Answers</a></p>
                                                         <div class="modal fade" id="comfortable" role="dialog">
                                                            <div class="modal-dialog">                                                              
                                                               <!-- Modal content-->
                                                               <div class="modal-content">
                                                                  <div class="modal-header">
                                                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                     <h5>What is a comfortable lesson length for you?</h5>
                                                                        <ul  class="contact_modal">
                                                                           <li> 30 minutes </li> 
                                                                           <li> 60 minutes</li>                                                            
                                                                        </ul>
                                                                  </div>
                                                               </div>                                                                
                                                            </div>
                                                         </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>

                                          <li class="lesson_card cnt_padding">
                                             <div class="cont_check_box_part">
                                                <div class="form-group">
                                                   <div class="cont_check_box">
                                                      <label class="checkbox small">
                                                            <input name="specific_area" value="1" type="checkbox">
                                                            <span class="success"></span>
                                                      </label>
                                                      <label class="check_label size">Is there a specific area that you would like to focus on during your lessons?</label>
                                                   </div>
                                                   <div class="check_box_part">
                                                      <div class="redbar black "></div>
                                                      <p>6 Possible Answers <a data-toggle="modal" data-target="#specific">View Answers</a></p>
                                                         <div class="modal fade" id="specific" role="dialog">
                                                            <div class="modal-dialog">                                                              
                                                               <!-- Modal content-->
                                                               <div class="modal-content">
                                                                  <div class="modal-header">
                                                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                     <h5>Is there a specific area that you would like to focus on during your lessons?</h5>
                                                                        <ul class="contact_modal">
                                                                           <li> Grammar </li> 
                                                                           <li> Vocabulary</li>                                                            
                                                                           <li> Pronunciation</li>                                                            
                                                                           <li> Reading Comprehension</li>                                                            
                                                                           <li> Conversational Practice</li>                                                            
                                                                           <li> Other</li>                                                            
                                                                        </ul>
                                                                  </div>
                                                               </div>                                                                
                                                            </div>
                                                         </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>

                                          <li class="lesson_card cnt_padding">
                                             <div class="cont_check_box_part">
                                                <div class="form-group">
                                                   <div class="cont_check_box">
                                                      <label class="checkbox small">
                                                            <input name="language_prof" value="1" type="checkbox">
                                                            <span class="success"></span>
                                                      </label>
                                                      <label class="check_label size">What language proficiency level are you aiming for?</label>
                                                   </div>
                                                   <div class="check_box_part">
                                                      <div class="redbar black "></div>
                                                      <p>7 Possible Answers  <a data-toggle="modal" data-target="#proficiency">View Answers</a></p>
                                                         <div class="modal fade" id="proficiency" role="dialog">
                                                            <div class="modal-dialog">                                                              
                                                               <!-- Modal content-->
                                                               <div class="modal-content">
                                                                  <div class="modal-header">
                                                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                     <h5>What language proficiency level are you aiming for?</h5>
                                                                        <ul  class="contact_modal">
                                                                           <li>A1: Beginner</li> 
                                                                           <li>A2: Elementary</li>                                                            
                                                                           <li>B1: Intermediate</li>                                                            
                                                                           <li>B2: Upper Intermediate</li>                                                            
                                                                           <li>C1: Advanced</li>                                                            
                                                                           <li>C2: Proficient</li>                                                            
                                                                           <li>Native</li>                                                            
                                                                        </ul>
                                                                  </div>
                                                               </div>                                                                
                                                            </div>
                                                         </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>

                                          <li class="lesson_card cnt_padding">
                                             <div class="cont_check_box_part">
                                                <div class="form-group">
                                                   <div class="cont_check_box">
                                                      <label class="checkbox small">
                                                            <input name="teacher_material" value="1" type="checkbox">
                                                            <span class="success"></span>
                                                      </label>
                                                      <label class="check_label size">What kind of teaching materials would be most helpful to you?</label>
                                                   </div>
                                                   <div class="check_box_part">
                                                      <div class="redbar black "></div>
                                                      <p>13 Possible Answers  <a data-toggle="modal" data-target="#materials">View Answers</a></p>
                                                         <div class="modal fade" id="materials" role="dialog">
                                                            <div class="modal-dialog">                                                              
                                                               <!-- Modal content-->
                                                               <div class="modal-content">
                                                                  <div class="modal-header">
                                                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                     <h5>What kind of teaching materials would be most helpful to you?</h5>
                                                                        <ul class="contact_modal">                                                         
                                                                           <li>PDF file</li> 
                                                                           <li>Text Documents</li>    
                                                                           <li>Presentation slides/PPT</li>                                                       
                                                                           <li>Audio files</li>                                                       
                                                                           <li>Image files</li>                                                       
                                                                           <li>Video files</li>                                                       
                                                                           <li>Flashcards</li>                                                       
                                                                           <li>Articles and news</li>                                                       
                                                                           <li>Quizzes</li>                                                       
                                                                           <li>Test templates and examples</li>                                                       
                                                                           <li>Graphs and charts</li>                                                       
                                                                           <li>Homework Assignments</li>                                                       
                                                                           <li>Other</li>                                                       
                                                                        </ul>
                                                                  </div>
                                                               </div>                                                                
                                                            </div>
                                                         </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>

                                          <li class="lesson_card cnt_padding">
                                             <div class="cont_check_box_part">
                                                <div class="form-group">
                                                   <div class="cont_check_box">
                                                      <label class="checkbox small">
                                                            <input name="time_prefer" value="1" type="checkbox">
                                                            <span class="success"></span>
                                                      </label>
                                                      <label class="check_label size">What time do you prefer to have your lessons?</label>
                                                   </div>
                                                   <div class="check_box_part">
                                                      <div class="redbar black "></div>
                                                      <p>7 Possible Answers <a data-toggle="modal" data-target="#time">View Answers</a></p>
                                                         <div class="modal fade" id="time" role="dialog">
                                                            <div class="modal-dialog">                                                              
                                                               <!-- Modal content-->
                                                               <div class="modal-content">
                                                                  <div class="modal-header">
                                                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                     <h5>What time do you prefer to have your lessons?</h5>
                                                                        <ul  class="contact_modal">                                                         
                                                                           <li>Early Morning (06:00 - 09:00)</li> 
                                                                           <li>Morning (09:00 - 12:00)</li>    
                                                                           <li>Afternoon (12:00 -15:00)</li>                                                       
                                                                           <li>Late Afternoon (15:00 -18:00)</li>                                                       
                                                                           <li>Evening (18:00 - 21:00)</li>                                                       
                                                                           <li>Night (21:00 - 00:00)</li>                                                       
                                                                           <li>After Midnight (00:00 - 06:00)</li>                                                                                                            
                                                                        </ul>
                                                                  </div>
                                                               </div>                                                                
                                                            </div>
                                                         </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>

                                          <li class="lesson_card cnt_padding">
                                             <div class="cont_check_box_part">
                                                <div class="form-group">
                                                   <div class="cont_check_box">
                                                      <label class="checkbox small">
                                                            <input name="fsq" value="1" type="checkbox">
                                                            <span class="success"></span>
                                                      </label>
                                                      <label class="check_label size">Feel free to ask your own question!</label>
                                                   </div>
                                                   <div class="check_box_part">
                                                      <div class="redbar black "></div>
                                                      <p>Please note that this question will not be automatically translated into the student's display language</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>

                                       </ul>
                                       <?php }?>
                                     </div>
                                     <div class="border_hor"></div>
                                         <div class="form-group  col-md-12 save_btn_part margin_top">
                                          <!-- <input type="submit" name="" value="Preview" class="change_photo"> -->
                                          <p class="color_green"> 
                                          <?php  if($user_detail[0]['status'] == '1'){ ?>
                                          <i class="fas fa-circle size_circle color_green "></i>Approved
                                          <?php }else {
                                             echo "Disapproved";
                                          } ?>
                                          </p>
                                          <input type="hidden" name="user_id" value="<?php echo $user_detail[0]['id']; ?>">
                                          <input type="submit" name="" value="Save" class="change_photo save">
                                        </div> 
                                </form>
                           </div>
                     </div>

                     <!--------------------------------------- Contact Form end ------------------------------------>


                         <!--------------------------------------- video start ------------------------------------>

                        <div class="person_detail profile_right_part private_info tab-content" id="video_link">
                           <div class="profile_name pro_rgt_prt_head basic_info_header private_info_header">
                              <h3>Video</h3> 
                           </div>
                           <hr>
                           <?php if($teacher_detail){ 
                              foreach($teacher_detail as $teacher_details){
                              ?>
                           <form class="basic_info_form availab_form" action="<?php echo base_url('teacher/teacher_video') ?>" method="POST" enctype="multipart/form-data"> 
                                <div class="video_sec">
                                    <div class="video_part text-center">
                                       <video controls>
                                         <source src="<?php echo base_url($teacher_details['vedio']); ?>" type="video/mp4">
                                       </video>
                                       <input type="file" name="vedio" class="change_photo video">
                                    </div>  
                                    <hr>                    
                                  
                                     <div class="video_text_part">
                                       <ul>
                                          <li><i class="fas fa-circle size_circle"></i><p>By submitting your video to My language Pro, you acknowledge that you agree to My language Pro's Terms of Service. Please be sure not to violate others' copyright or privacy rights.</p></li>
                                          <li><i class="fas fa-circle size_circle"></i><p>File size may not exceed 500 MB</p></li>
                                          <li><i class="fas fa-circle size_circle"></i><p>Please take some time to read the<a href="<?php echo base_url('introduction-video-guidelines-and-requirements') ?>" target="_blank"> Video Introduction Requirements</a> before you update your video.</p></li>
                                         
                                       </ul>
                                     </div>
                                     <!--<hr>-->
                                       <!--<div class="cont_check_box video_check_box">-->
                                       <!--   <label class="checkbox small">                                            -->
                 
                                                <!--<input name="use_webcam" value="0" type="checkbox" checked>-->
                                                <!--<span class="success"></span>-->
                                                 <?php //}else {
                                                // echo '<input name="use_webcam" value="1" type="checkbox" >  <span class="success"></span>';
                                            //    } ?> 
                                       <!--   </label>-->
                                       <!--   <label class="check_label size">I have a webcam and I can offer video-based lessons.</label>-->
                                       <!--</div>-->

                                     <div class="border_hor"></div>
                                         <div class="form-group  save_btn_part">
                                         <p class="color_green">
                                         <?php  if($user_detail[0]['status'] == '1'){ ?>
                                          <i class="fas fa-circle size_circle color_green "></i>Approved
                                          <?php }else {
                                             echo "Disapproved";
                                          } ?>
                                         </p>
                                          <input type="hidden" name="user_id" value="<?php echo $user_detail[0]['id']; ?>">
                                          <input type="submit" name="" value="Save" class="change_photo save">
                                        </div> 
                                 </form>
                                       <?php } }else{?>
                                          <form class="basic_info_form availab_form" action="<?php echo base_url('teacher/teacher_video') ?>" method="POST" enctype="multipart/form-data"> 
                                <div class="video_sec">
                                    <div class="video_part text-center">
                                       <video controls>
                                         <source src="videos/video_one.mp4" type="video/mp4">
                                       </video>
                                       <input type="file" name="vedio" class="change_photo video">
                                    </div>  
                                    <hr>                    
                                  
                                     <div class="video_text_part">
                                       <ul>
                                          <li><i class="fas fa-circle size_circle"></i><p>By submitting your video to My language Pro, you acknowledge that you agree to My language Pro's Terms of Service. Please be sure not to violate others' copyright or privacy rights.</p></li>
                                          <li><i class="fas fa-circle size_circle"></i><p>File size may not exceed 500 MB</p></li>
                                          <li><i class="fas fa-circle size_circle"></i><p>Please take some time to read the<a href="<?php echo base_url('introduction-video-guidelines-and-requirements') ?>" target="_blank"> Video Introduction Requirements</a> before you update your video.</p></li>
                                         
                                       </ul>
                                     </div>
                                     <!--<hr>-->
                                     <!--  <div class="cont_check_box video_check_box">-->
                                     <!--     <label class="checkbox small">-->
                                     <!--        <input name="use_webcam" value="1" type="checkbox">-->
                                     <!--        <span class="success"></span>-->
                                     <!--     </label>-->
                                     <!--     <label class="check_label size">I have a webcam and I can offer video-based lessons.</label>-->
                                     <!--  </div>-->

                                     <div class="border_hor"></div>
                                         <div class="form-group  save_btn_part">
                                         <p class="color_green">
                                         <?php  if($user_detail[0]['status'] == '1'){ ?>
                                          <i class="fas fa-circle size_circle color_green "></i>Approved
                                          <?php }else {
                                             echo "Disapproved";
                                          } ?>
                                         </p>
                                          <input type="hidden" name="user_id" value="<?php echo $user_detail[0]['id']; ?>">
                                          <input type="submit" name="" value="Save" class="change_photo save">
                                        </div> 
                                 </form>
                                        <?php }?>
                                </div>

                           
                     </div>

                     <!--------------------------------------- video end ------------------------------------>



                      <!------------------------------- Languages start ------------------->

                  <div class="person_detail profile_right_part private_info tab-content" id="language_link">
                           <div class="profile_name pro_rgt_prt_head basic_info_header private_info_header">
                              <h3>Languages</h3>
                              <hr> 
                           </div>
                           <?php if($teacher_detail){ 
                              foreach($teacher_detail as $teacher_details){
                              ?>
                                 <form class="basic_info_form availab_form" action="<?php echo base_url('teacher/teacher_language') ?>" method="POST">
                                    <div class="row form_row">
                                     <div class="form-group col-md-4">
                                       <h6>Language Skills</h6>
                                       <label>Native Language</label>
                                       <select name="native_lang"  class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                          <option selected=""><?php echo $teacher_details['native_lang']; ?></option>
                                          <option value="English">English</option>
                                          <option value="Chinese">Chinese (Mandarin)</option>
                                          <option value="French">French</option>
                                          <option value="Portuguese">Portuguese</option>
                                          <option value="Japanese">Japanese</option>
                                          <option value="Korean">Korean</option>
                                       </select>
                                       <a href="javascript:void(0);" class="add_comm creatt_lesson" style="display:none;">
                                       + Add more</a>
                                     </div>
                                  </div>
                                  <div class="row form_row">
                                     <div class="form-group col-md-4">
                                       <label>Languages you speak or learn</label>
                                       <select  name="speak_language" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                          <option selected=""><?php echo $teacher_details['speak_language']; ?></option>
                                          <option value="English">English</option>
                                          <option value="Chinese">Chinese (Mandarin)</option>
                                          <option value="French">French</option>
                                          <option value="Portuguese">Portuguese</option>
                                          <option value="Japanese">Japanese</option>
                                          <option value="Korean">Korean</option>
                                       </select>
                                     </div>
                                     <div class="form-group col-md-4">
                                       <select name="speak_level" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                          <option selected=""><?php echo $teacher_details['speak_level']; ?></option>
                                          <option value="A2">A2</option>
                                          <option value="B1">B1</option>
                                          <option value="B2">B2</option>
                                          <option value="C1">C1</option>
                                          <option value="C2">C2</option>
                                       </select>
                                     </div>
                                     <div class="form-group col-md-2 pading_0">  
                                                   <div class="cont_check_box mg_top">
                                                      <label class="checkbox small">
                                                         <?php  if($teacher_details['speak_lang_le'] == '1'){ ?>
                                                         <input name="speak_lang_le" value="0" type="checkbox" checked>
                                                         <span class="success"></span>
                                                         <?php }else {
                                                         echo '<input name="speak_lang_le" value="1" type="checkbox" >  <span class="success"></span>';
                                                         } ?> 
                                                      </label>
                                                      <label class="check_label size">Learning</label>
                                                   </div>
                                     </div>
                                     <div class="form-group col-md-2 pading_0">
                                          <div class="custom-control custom-radio mg_top_rad">                                         
                                                <?php  if($teacher_details['speak_lang_pri'] == '1'){ ?>
                                                   <input name="speak_lang_pri" value="1" type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
                                                   <label class="custom-control-label" for="customRadio1">Primary</label>
                                                <?php }else { ?>
                                                <input name="speak_lang_pri" value="0" type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="customRadio1">Primary</label>
                                         <?php } ?> 
                                          </div>
                                     </div>
                                     <div class="row form_row">
                                     <div class="form-group col-md-4 ml-3">
                                     <p class="text-primary">*Optional</p>
                                       <select  name="optional_language" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                          <option selected="">Select Language</option>
                                          <option value="English">English</option>
                                          <option value="Chinese">Chinese (Mandarin)</option>
                                          <option value="French">French</option>
                                          <option value="Portuguese">Portuguese</option>
                                          <option value="Japanese">Japanese</option>
                                          <option value="Korean">Korean</option>
                                       </select>
                                     </div>
                                     <div class="form-group col-md-4">
                                       <select name="optional_lang_speak_level" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                          <option selected="">Select Level</option>
                                          <option value="0">A1: Beginner</option>
                                          <option value="1">A2: Elementary</option>
                                          <option value="2">B1: Intermediate</option>
                                          <option value="3">B2: Upper Intermediate</option>
                                          <option value="3">C1: Advanced</option>
                                          <option value="3">C2: Proficient</option>
                                       </select>
                                     </div>
                                     <!--learning-->
                                     <div class="form-group col-md-2 pading_0">  
                                                   <div class="cont_check_box mg_top">
                                                      <label class="checkbox small">
                                                            <input name="optional_lang_le" value="1" type="checkbox">
                                                            <span class="success"></span>
                                                      </label>
                                                      <label class="check_label size">Learning</label>
                                                   </div>
                                     </div>
                                  </div>
                                    
                                  </div>
                                   <div class="row form_row">
                                     <div class="border_hor"></div>
                                      <div class="form-group  col-md-12 save_btn_part">
                                       <p class="color_green">
                                       <?php  if($user_detail[0]['status'] == '1'){ ?>
                                          <i class="fas fa-circle size_circle color_green "></i>Approved
                                          <?php }else {
                                             echo "Disapproved";
                                          } ?>
                                       </p>
                                       <input type="hidden" name="user_id" value="<?php echo $user_detail[0]['id']; ?>">
                                       <input type="submit" name="" value="Save" class="change_photo save">
                                     </div>
                                 </div>
                                 </form>
                                 <?php } }else{?>
                                    <form class="basic_info_form availab_form" action="<?php echo base_url('teacher/teacher_language') ?>" method="POST">
                                    <div class="row form_row">
                                     <div class="form-group col-md-4">
                                       <h6>Language Skills</h6>
                                       <label>Native Language</label>
                                       <select name="native_lang"  class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                          <option selected="">English</option>
                                          <option value="Chinese">Chinese (Mandarin)</option>
                                          <option value="French">French</option>
                                          <option value="Portuguese">Portuguese</option>
                                          <option value="Japanese">Japanese</option>
                                          <option value="Korean">Korean</option>
                                       </select>
                                       <a href="javascript:void(0);" class="add_comm creatt_lesson" style="display:none;">+ Add more</a>
                                     </div>
                                  </div>
                                  <div class="row form_row">
                                     <div class="form-group col-md-4">
                                       <label>Languages you speak or learn</label>
                                       <select  name="speak_language" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                          <option selected="">Select Language</option>
                                          <option value="English">English</option>
                                          <option value="Chinese">Chinese (Mandarin)</option>
                                          <option value="French">French</option>
                                          <option value="Portuguese">Portuguese</option>
                                          <option value="Japanese">Japanese</option>
                                          <option value="Korean">Korean</option>
                                       </select>
                                     </div>
                                     <div class="form-group col-md-4">
                                       <select name="speak_level" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                          <option selected="">Select Level</option>
                                          <option value="0">A1: Beginner</option>
                                          <option value="1">A2: Elementary</option>
                                          <option value="2">B1: Intermediate</option>
                                          <option value="3">B2: Upper Intermediate</option>
                                          <option value="3">C1: Advanced</option>
                                          <option value="3">C2: Proficient</option>
                                       </select>
                                     </div>
                                     <!--learning-->
                                     <div class="form-group col-md-2 pading_0">  
                                                   <div class="cont_check_box mg_top">
                                                      <label class="checkbox small">
                                                            <input name="speak_lang_le" value="1" type="checkbox">
                                                            <span class="success"></span>
                                                      </label>
                                                      <label class="check_label size">Learning</label>
                                                   </div>
                                     </div>
                                     <!----primary-->
                                     <div class="form-group col-md-2 pading_0">
                                          <div class="custom-control custom-radio mg_top_rad">
                                            <input name="speak_lang_pri" value="1" type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Primary</label>
                                            <!-- <i class="fas fa-times mar_left"></i> -->
                                          </div>
                                     </div>
                                    
                                  </div>
                                  <div class="row form_row">
                                     <div class="form-group col-md-4">
                                     <p class="text-primary">*Optional</p>
                                       <select  name="optional_language" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                          <option selected="">Select Language</option>
                                          <option value="English">English</option>
                                          <option value="Chinese">Chinese (Mandarin)</option>
                                          <option value="French">French</option>
                                          <option value="Portuguese">Portuguese</option>
                                          <option value="Japanese">Japanese</option>
                                          <option value="Korean">Korean</option>
                                       </select>
                                     </div>
                                     <div class="form-group col-md-4">
                                       <select name="optional_lang_speak_level" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                                          <option selected="">Select Level</option>
                                          <option value="0">A1: Beginner</option>
                                          <option value="1">A2: Elementary</option>
                                          <option value="2">B1: Intermediate</option>
                                          <option value="3">B2: Upper Intermediate</option>
                                          <option value="3">C1: Advanced</option>
                                          <option value="3">C2: Proficient</option>
                                       </select>
                                     </div>
                                     <!--learning-->
                                     <div class="form-group col-md-2 pading_0">  
                                                   <div class="cont_check_box mg_top">
                                                      <label class="checkbox small">
                                                            <input name="optional_lang_le" value="1" type="checkbox">
                                                            <span class="success"></span>
                                                      </label>
                                                      <label class="check_label size">Learning</label>
                                                   </div>
                                     </div>
                                     <!----primary-->
                                     <div class="form-group col-md-2 pading_0">
                                          <div class="custom-control custom-radio mg_top_rad">
                                            <input name="optional_lang_pri" value="1" type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Primary</label>
                                            <!-- <i class="fas fa-times mar_left"></i> -->
                                          </div>
                                     </div>
                                    
                                  </div>
                                   <div class="row form_row">
                                     <div class="border_hor"></div>
                                      <div class="form-group  col-md-12 save_btn_part">
                                       <p class="color_green">
                                       <?php  if($user_detail[0]['status'] == '1'){ ?>
                                          <i class="fas fa-circle size_circle color_green "></i>Approved
                                          <?php }else {
                                             echo "Disapproved";
                                          } ?>
                                       </p>
                                       <input type="hidden" name="user_id" value="<?php echo $user_detail[0]['id']; ?>">
                                       <input type="submit" name="" value="Save" class="change_photo save">
                                     </div>
                                 </div>
                                 </form>
                                       <?php }?>
                     </div>

                      <!------------------------------- Languages end  -------------------> 


              <!------------------------------- Resume and Certificates start ----------------->

                  <div class="person_detail profile_right_part private_info tab-content" id="resume_link">
                           <div class="profile_name pro_rgt_prt_head basic_info_header private_info_header">
                              <h3>Resume and Certificates</h3>
                           </div>        
                            <hr>
                     <form class="basic_info_form availab_form" action="<?php echo base_url('teacher/status_certificate') ?>" method="POST">                                  
                            <div class="resume_sec">
                                  <h5>Education</h5>
                              <?php 
                              if($teacher_education){
                              foreach($teacher_education as $teacher_educations){?>
                              <ul>                           
                                 <li class="resume_part ">
                                    <div class="resume_part_left">
                                       <p><?php echo $teacher_educations['from_institute'] ." - ". $teacher_educations['to_institute'] ?></p>
                                    </div>
                                    <div class="resume_part_right">
                                       <div class="resume_part_text">
                                          <h6><?php echo $teacher_educations['degree']?> - <?php echo $teacher_educations['topic']?></h6>
                                          <div class="redbar black lesson_bar"></div>
                                          <p><?php echo $teacher_educations['institute']?></p>
                                          <p class="green"> 
                                          <?php  if($teacher_educations['diploma_upload']){?>
                                          <i class="fas fa-circle size_circle_green"></i> Diploma uploaded</p>
                                          <?php }else{
                                                echo '<i class="fas fa-circle size_circle_green"></i> Diploma uploaded</p>';
                                          }?>
                                          </p>
                                       </div>
                                        <div class="resume_part_link">
                                         <a href="javascript:void(0);">Edit </a>
                                         <a href="<?php echo base_url('teacher/teacher_edu_delete?id='.$teacher_educations['teach_id']); ?>"  onclick="return confirm('Are you sure you want to delete this Education?');"> Remove</a>
                                       </div>
                                    </div>                                  
                                 </li>
                              </ul>
                              <?php }}  ?>
                           </div>
                           <a href="javascript:void(0);" class="add_comm creatt_lesson">
                              <button type="button" class="btn-list-button" data-toggle="modal"
                                    data-target="#myEducation" onclick="$('#modal_user_id').val('<?php echo $user_detail[0]['id']; ?>');">
                                    + Add more
                              </button>
                           </a>
                           
                           <div class="resume_sec ">
                                  <h5>Work Experience</h5>
                        <?php
                        if($teacher_work){
                        foreach($teacher_work as $teacher_works){?>
                              <ul>
                                 <li class="resume_part">
                                    <div class="resume_part_left">
                                       <p><?php echo $teacher_works['from_work'] ." - ". $teacher_works['to_work'] ?></p>
                                       <!-- <span>Approved</span> -->
                                    </div>
                                    <div class="resume_part_right">
                                       <div class="resume_part_text">
                                          <h6><?php echo $teacher_works['position']?></h6>
                                          <div class="redbar black lesson_bar"></div>
                                          <p><?php echo $teacher_works['company']?> -<?php echo $teacher_works['country_work']?>,<?php echo $teacher_works['city_work']?></p>
                                          <p><?php //echo $teacher_works['work_description']?></p>
                                       </div>
                                        <div class="resume_part_link">
                                         <a href="javascript:void(0);">Edit </a>
                                         <a href="<?php echo base_url('teacher/teacher_edu_delete?id='.$teacher_works['id']); ?>"  onclick="return confirm('Are you sure you want to delete this Education?');"> 
                                         Remove</a>
                                       </div>
                                    </div>
                                   
                                 </li>
                              </ul>
                        <?php }} ?>
                           </div>
                         <a href="#" class="add_comm creatt_lesson">
                           <button type="button" class="btn-list-button" data-toggle="modal"
                                    data-target="#mywork" onclick="$('#work_id').val('<?php echo$user_detail[0]['id'];?>');">
                                    + Add more
                           </button>
                        </a>

                          <div class="resume_sec ">
                                  <h5>Certificates</h5>
                              <?php
                              if($teacher_certificate){
                              foreach($teacher_certificate as $teacher_certificates){?>
                                 <ul>                           
                                    <li class="resume_part ">
                                       <div class="resume_part_left">
                                          <p><?php echo $teacher_certificates['from_cerftificate']; ?></p>
                                       </div>
                                       <div class="resume_part_right">
                                          <div class="resume_part_text">
                                             <h6><?php echo $teacher_certificates['certificate']?></h6>
                                             <div class="redbar black lesson_bar"></div>
                                             <p><?php echo $teacher_certificates['inst_certificate']?></p>
                                             <p class="green"> 
                                             <?php  if($teacher_certificates['certificate_upload']){?>
                                             <i class="fas fa-circle size_circle_green"></i> Certificate uploaded</p>
                                             <?php }else{
                                                   echo '<i class="fas fa-circle size_circle_green"></i> Diploma uploaded</p>';
                                             }?>
                                             </p>
                                          </div>
                                          <div class="resume_part_link">
                                          <a href="javascript:void(0);">Edit </a>
                                          <a href="<?php echo base_url('teacher/teacher_edu_delete?id='.$teacher_certificates['id']); ?>"  onclick="return confirm('Are you sure you want to delete this Education?');"> 
                                           Remove</a>
                                          </div>
                                       </div>                                  
                                    </li>
                              </ul>
                              <?php }}  ?>
                              </div>
                              <a href="#" class="add_comm creatt_lesson">
                                 <button type="button" class="btn-list-button" data-toggle="modal"
                                       data-target="#certificates" onclick="$('#cert_id').val('<?php echo $user_detail[0]['id']; ?>');">
                                       + Add more
                                 </button>
                              </a>

                              <div class="cont_check_box englich_check">
                                 <label class="checkbox small">
                                       <?php  if($teacher_status){
                                          if($teacher_status[0]['status'] == '1'){ ?>
                                             <input name="status" value="0" type="checkbox" checked>
                                             <span class="success"></span>
                                          <?php }else {
                                             echo '<input name="status" value="1" type="checkbox">
                                             <span class="success"></span>';
                                          }}else{
                                             echo '<input name="status" value="1" type="checkbox">
                                             <span class="success"></span>';
                                          }
                                           ?>
                                       </p>
                                       
                                 </label>
                                 <label class="check_label size">Public - title and description visible on my teaching profile </label>
                              </div>

                             
                                    <div class="row form_row">
                                     <div class="border_hor"></div>
                                      <div class="form-group  col-md-12 save_btn_part">
                                       <p></p>
                                       <input type="hidden" name="user_id" value="<?php echo $user_detail[0]['id']; ?>">
                                       <input type="submit" name="" value="Save" class="change_photo save">
                                     </div>
                                    </form>
                                 
                              </div>
                           </div>


                    

                      <!------------------------------- Resume and Certificates end  -------------------> 





                   <!------------------------------- Withdrawal Settings start ------------------->

                  <div class="person_detail profile_right_part private_info tab-content" id="withdrawal_link">
                           <div class="profile_name pro_rgt_prt_head basic_info_header private_info_header">
                              <h3>Withdrawal Settings</h3>
                           </div>



                           <div class="Withdrawal_sec">

                              <ul>
                                 <li>
                                    Stripe
                                 </li>
                                 <li>
                                     <a href="https://dashboard.stripe.com/register">Create an account .</a>
                                      <!-- <a href="javascript:void(0;)">Connect</a> -->
                                 </li>
                              </ul>

                              <!-- <ul>
                                 <li>
                                   <p>PayPal</p>
                                 </li>
                                 <li>
                                     <a href="javascript:void(0;)">Add</a>
                                 </li>
                              </ul>
 -->
                              <ul>
                                 <li class="margin_plus">
                                   <p  style="color:#7ec937"><a href="javascript:void(0);">Bank Transfer (by Stripe)</a> <i class="fas fa-circle size_circle_green"></i>Primary </p>
                                   <p style="margin-top: 10px;"> Bank account connected via Stripe</p>
                                 </li>
                              </ul>

                               <ul>
                                 <li class="apply_withdraw">
                                   <a href="<?php echo base_url('teacher/Wallet'); ?>"><input type="submit" name="" value="Apply to withdraw from your Teacher Wallet" class="change_photo save apply_withdraw"></a>
                                 </li>
                              </ul>

                                <ul class="border_top_none margin_set">
                                 <li>
                                   <h6>For payments to teachers, My language Pro  works with:</h6>
                                 </li>
                              </ul>

                               <ul class="border_top_none margin_set">
                                 <li>
                                  <img src="<?php echo base_url('uploads/images/stripe.png'); ?>" alt="paypalb">
                                 </li>
                              </ul>
                              <ul class="border_top_none margin_set">
                                 <li class="pading_set">
                                    <p>MylanguagePro does not charge additional transaction fees when a teacher withdraws payment, unless the teacher has requested an express withdrawal.</p>
                                    <p>However, every payment partner has its own transaction fees, which may differ depending on your country/region.</p>
                                    <p><a href="<?php echo base_url('article') ?>"> article</a></p>
                                 </li>
                              </ul>   
                           </div>
                        </div>
                      <!------------------------------- Withdrawal Settings end  -------------------> 





                   </div>   
                  </div>
      			</div>
      		</div>
      	</div>
      </section>

      <!--------------------------- user section end here ---------------------------->
<style>
.fade:not(.show) {
    opacity: 1;
}
</style>


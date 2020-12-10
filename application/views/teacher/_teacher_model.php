<!----------------------- Education modal End-------------------------------->
<div id="myEducation" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title center">Add a new Education</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form class="basic_info_form availab_form" action="<?php echo base_url('teacher/add_education') ?>" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
               <div class="row form_row">
                  <div class="form-group col-md-4">
                     <label>From</label>
                     <select  name="from_institute" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                     <option value="1989">1989</option><option value="2004">2004</option>
                        <option value="1990">1990</option><option value="2005">2005</option>
                        <option value="1991">1991</option><option value="2006">2006</option>
                        <option value="1992">1992</option><option value="2007">2007</option>
                        <option value="1993">1993</option><option value="2008">2008</option>
                        <option value="1994">1994</option><option value="2009">2009</option>
                        <option value="1995">1995</option><option value="2010">2010</option>
                        <option value="1996">1996</option><option value="2011">2011</option>
                        <option value="1997">1997</option><option value="2012">2012</option>
                        <option value="1998">1998</option><option value="2013">2013</option>
                        <option value="1999">1999</option><option value="2014">2014</option>
                        <option value="2000">2000</option><option value="2015">2015</option>
                        <option value="2001">2001</option><option value="2016">2016</option>
                        <option value="2002">2002</option><option value="2017">2017</option>
                        <option value="2003">2003</option><option value="2018">2018</option>
                     </select>
                  </div>
                  <div class="form-group col-md-4">  
                     <label>To</label>
                     <select  name="to_institute" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                        <option selected>2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                     </select>
                  </div>

                  <div class="form-group col-md-6">
                     <label>Institution</label>
                     <input type="text" name="institute" class="form-control" >
                  </div>
                  <div class="form-group col-md-6">  
                     <label>Major / Topic</label>
                     <input type="text" name="topic" class="form-control" >
                  </div>
                  <div class="form-group col-md-12">
                  <label>Degree</label>
                  <select  name="degree" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                        <option>Choose</option>
                        <option value="General">Bachelor</option>
                        <option value="Business">Master's</option>
                        <option value="Preparation">Doctorate</option>
                        <option value="Kids">Postdoctoral</option>
                     </select>
                  </div>
                  <div class="form-group col-md-12">
                  <label>Description (Optional)</label>
                  <textarea name="Edu_description" class="form-control" maxlength="200"> </textarea>
                  </div>
                     <div class="video_text_part col-md-12">
                     <p>Attachment (Scanned and in color)</p>
                        <ul>
                           <li><i class="fas fa-circle size_circle"></i><p>Max 2MB</p></li>
                           <li><i class="fas fa-circle size_circle"></i><p>PDF or JPG file</p></li>
                           <li><i class="fas fa-circle size_circle"></i><p>Visible to italki staff only</p></li>
                        </ul>
                     </div>
                     <div class="form-group col-md-12">
                     <input type="file" name="diploma_upload" value="Diploma uploaded" class="change_photo video">
                     </div>   
               </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="user_id" id="modal_user_id" value="">
                <input type="submit"  class="change_photo save"  name="" value="Save" >
                <button type="button" class="change_photo save" data-dismiss="modal">Close</button>
            </div>
               </form>
        </div>
    </div>
</div>
<!--------------------Education modal End--------------------------->
<!----------------------- Work modal End-------------------------------->
<div id="mywork" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title center">Add Work Experience</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form class="basic_info_form availab_form" action="<?php echo base_url('teacher/add_work') ?>" method="POST">
            <div class="modal-body">
               <div class="row form_row">
                  <div class="form-group col-md-4">
                     <label>From</label>
                     <select  name="from_work" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                        <option selected="">1989</option><option value="2004">2004</option>
                        <option value="1990">1990</option><option value="2005">2005</option>
                        <option value="1991">1991</option><option value="2006">2006</option>
                        <option value="1992">1992</option><option value="2007">2007</option>
                        <option value="1993">1993</option><option value="2008">2008</option>
                        <option value="1994">1994</option><option value="2009">2009</option>
                        <option value="1995">1995</option><option value="2010">2010</option>
                        <option value="1996">1996</option><option value="2011">2011</option>
                        <option value="1997">1997</option><option value="2012">2012</option>
                        <option value="1998">1998</option><option value="2013">2013</option>
                        <option value="1999">1999</option><option value="2014">2014</option>
                        <option value="2000">2000</option><option value="2015">2015</option>
                        <option value="2001">2001</option><option value="2016">2016</option>
                        <option value="2002">2002</option><option value="2017">2017</option>
                        <option value="2003">2003</option><option value="2018">2018</option>
                       
                     </select>
                  </div>
                  <div class="form-group col-md-4">  
                     <label>To</label>
                     <select  name="to_work" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                        <option selected="">2017</option>
                        <option value="2022">2018</option>
                        <option value="2022">2019</option>
                        <option value="2022">2020</option>
                        <option value="2022">2021</option>
                        <option value="2022">2022</option>
                        <option value="2022">2023</option>
                        <option value="2023">2024</option>
                        <option value="2024">2025</option>
                     </select>
                  </div>

                  <div class="form-group col-md-6">
                     <label>Company</label>
                     <input type="text" name="company" class="form-control" >
                  </div>
                  <div class="form-group col-md-6">  
                     <label>Position</label>
                     <input type="text" name="position" class="form-control" >
                  </div>

                  <div class="form-group col-md-6">
                     <label>Country / Region</label>
                     <select name="country_work" class="custom-select animations-select arrow_des" id="inputGroupSelect01" data-target="#animation-bottom">                                     
                     <?php foreach($country as $countrys) {
                        echo "<option value=".$countrys.">".$countrys."</option>";
                                 }?>
                     </select>
                  </div>
                  <div class="form-group col-md-6">  
                     <label>City</label>
                     <input type="text" name="city_work" class="form-control" >
                  </div>
                  <div class="form-group col-md-12">
                  <label>Description (Optional)</label>
                  <textarea name="work_description" class="form-control" maxlength="200"> </textarea>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="user_id" id="work_id" value="">
                <input type="submit"  class="change_photo save"  name="" value="Save" >
                <button type="button" class="change_photo save" data-dismiss="modal">Close</button>
            </div>
               </form>
        </div>
    </div>
</div>
<!--------------------Work modal End--------------------------->
<!----------------------- Certificate modal End-------------------------------->
<div id="certificates" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title center">Add Certificate</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form class="basic_info_form availab_form" action="<?php echo base_url('teacher/add_certificate') ?>" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
               <div class="row form_row">
                  <div class="form-group col-md-3">
                     <label>From</label>
                     <select  name="from_cerftificate" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                        <option selected="">1989</option><option value="2004">2004</option>
                        <option value="1990">1990</option><option value="2005">2005</option>
                        <option value="1991">1991</option><option value="2006">2006</option>
                        <option value="1992">1992</option><option value="2007">2007</option>
                        <option value="1993">1993</option><option value="2008">2008</option>
                        <option value="1994">1994</option><option value="2009">2009</option>
                        <option value="1995">1995</option><option value="2010">2010</option>
                        <option value="1996">1996</option><option value="2011">2011</option>
                        <option value="1997">1997</option><option value="2012">2012</option>
                        <option value="1998">1998</option><option value="2013">2013</option>
                        <option value="1999">1999</option><option value="2014">2014</option>
                        <option value="2000">2000</option><option value="2015">2015</option>
                        <option value="2001">2001</option><option value="2016">2016</option>
                        <option value="2002">2002</option><option value="2017">2017</option>
                        <option value="2003">2003</option><option value="2018">2018</option>
                       
                     </select>
                  </div>
                  <div class="row form_row">
                  <div class="form-group col-md-6">
                     <label>Certificate Name</label>
                     <input type="text" name="certificate" class="form-control" >
                  </div>
                  <div class="form-group col-md-6">  
                     <label>Institution</label>
                     <input type="text" name="inst_certificate" class="form-control" >
                  </div>
                  </div>
                  <div class="form-group col-md-12">
                  <label>Description (Optional)</label>
                  <textarea name="desc_work_" class="form-control" maxlength="200"> </textarea>
                  </div>
                  <div class="video_text_part col-md-12">
                     <p>Attachment (Scanned and in color)</p>
                        <ul>
                           <li><i class="fas fa-circle size_circle"></i><p>Max 2MB</p></li>
                           <li><i class="fas fa-circle size_circle"></i><p>PDF or JPG file</p></li>
                           <li><i class="fas fa-circle size_circle"></i><p>Visible to italki staff only</p></li>
                        </ul>
                     </div>
                  <div class="form-group col-md-12">
                  <input type="file" name="certificate_upload" value="CHOOSE FILE" class="change_photo video">
                  </div>   
               </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="user_id" id="cert_id" value="">
                <input type="submit"  class="change_photo save"  name="" value="Save" >
                <button type="button" class="change_photo save" data-dismiss="modal">Close</button>
            </div>
               </form>
        </div>
    </div>
</div>
<!--------------------Certificate modal End--------------------------->

     



<!-- add lesson Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title center">Add a new Lesson</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form class="basic_info_form availab_form" action="<?php echo base_url('teacher/lesson_add') ?>" method="POST">
            <div class="modal-body">
               <div class="row form_row">
                  <div class="form-group col-md-12">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" >
                  </div>
                  <div class="form-group col-md-12">
                  <label>description</label>
                  <textarea name="description" class="form-control" maxlength="200"> </textarea>
                  </div>
                  <div class="form-group col-md-5">
                     <label>Language Taught</label>
                     <select name="language_taught" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                        <option value="English">English</option>
                     </select>
                     </div>
                     <div class="form-group col-md-3">
                     <label>Student Language Level</label>
                     <select  name="st_level_from" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>
                        <option value="B1">B1</option>
                        <option value="B2">B2</option>
                        <option value="C1">C1</option>
                        <option value="C2">C2</option>
                     </select>
                     <!-- <span>—</span> -->
                     </div>
                     <div class="form-group col-md-3">  
                     <select  name="st_level_to" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>
                        <option value="B1">B1</option>
                        <option value="B2">B2</option>
                        <option value="C1">C1</option>
                        <option value="C2">C2</option>
                     </select>
                     </div>
                     <div class="form-group col-md-6">
                     <label>Category</label>
                     <select  id="category" name="category" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                        <option>Choose</option>
                        <option value="General">General</option>
                        <option value="Business">Business</option>
                        <option value="Preparation">Test Preparation</option>
                        <option value="Kids">Kids</option>
                        <option value="Conversation">Conversation Practice</option>
                     </select>
                     </div>
                     <div class="form-group col-md-6">
                     <label>Lesson Tags</label>
                     <select  id="lesson" name="lesson" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                     </select>
                     </div>
                     <div class="form-group col-md-5">
                     <label>Individual Lessons</label>
                     <div class="lesson_price">
                        <input type="text" name="lesson_price" class="form-control" placeholder="Price" value="">
                        <span>/60 min</span>
                        </div>
                     </div>
                     <div class="form-group col-md-3">
                     <label>Packages</label>
                     <select  name="lesson_package" class="custom-select animations-select arrow_des" id="inputGroupSelect03" data-target="#animation-bottom">
                        <option selected="">N/A</option>
                        <option value="5">5 Lessons</option>
                        <option value="10">10 Lessons</option>
                        <option value="20">20 Lessons</option>
                     </select>
                     </div>
                     <div class="form-group col-md-3">  
                     <label>Total</label>
                     <input type="text" name="total_price" class="form-control" placeholder="Price">
                     </div>
                     <div class="form-group col-md-6">
                        <label class="switch">
                              <input name="status" value="1" type="checkbox" class="success">
                              <span class="slider round"></span>
                        </label>
                     </div>
               </div>
            </div>
            <div class="modal-footer">
               <input type="hidden" name="user_id" id="lesson_id" value="">
                <input type="submit"  class="change_photo save"  name="" value="Save" >
                <button type="button" class="change_photo save" data-dismiss="modal">Close</button>
            </div>
               </form>
        </div>
    </div>
</div>
<!----------------------------------------------->


<!------------------ Add Trial lesson start------------------->
<div id="add_trail" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title center">Add a new Lesson</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form class="basic_info_form availab_form" action="<?php echo base_url('teacher/lesson_add') ?>" method="POST">
            <input type="hidden" name="user_id" id="_id" value="">
            <div class="modal-body">
               <div class="row form_row">
                  <div class="form-group col-md-12">
                  <label>description</label>
                  <textarea name="description" class="form-control" maxlength="200"></textarea>
                  </div>
                     <div class="form-group col-md-12">                   
                        <label>Individual Lessons</label>
                        <div class="lesson_price">
                        <input type="text" name="lesson_price" class="form-control" placeholder="Price" value="">
                        <span>/30 min</span>
                        </div>
                     </div>
                     <div class="form-group col-md-6">
                        <label class="switch">
                              <input name="status" value="1" type="checkbox" class="success">
                              <span class="slider round"></span>
                        </label>
                     </div>
               </div>
            </div>
            <div class="modal-footer">
               <input type="hidden" name="lesson_type"  value="2">
                <input type="submit"  class="change_photo save"  name="" value="Save" >
                <button type="button" class="change_photo save" data-dismiss="modal">Close</button>
            </div>
               </form>
        </div>
    </div>
</div>


<!-------------Edit modal lesson end--------------------->




<!-------------Edit modal trial--------------------->

<div id="edit_trail" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title center">Add a new Lesson</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form class="basic_info_form availab_form" action="<?php echo base_url('teacher') ?>" method="POST">
            <div class="modal-body">
               <div class="row form_row">
                  <div class="form-group col-md-12">
                  <label>description</label>
                  <textarea name="description" class="form-control" maxlength="200"><?php echo $trial_lesson[0]['description'] ?></textarea>
                  </div>
                     <div class="form-group col-md-12">                   
                        <label>Individual Lessons</label>
                        <div class="lesson_price">
                        <input type="text" name="lesson_price" class="form-control" placeholder="Price" value="<?php echo $trial_lesson[0]['lesson_price'] ?>">
                        <span>/<?php  echo $trial_lesson[0]['lesson_time'];?></span>
                        </div>
                     </div>
                     <div class="form-group col-md-6">
                        <label class="switch">
                        <?php  if($trial_lesson[0]['status'] == '1'){ ?>
                            <input name="status" value="0" type="checkbox" class="success" checked>
                              <span class="slider round"></span>
                        <?php }else {?>
                                    <input name="status" value="1" type="checkbox" class="success">
                                    <span class="slider round"></span>
                           <?php     } ?>
                        </label>
                     </div>
               </div>
            </div>
            <div class="modal-footer">
               <input type="hidden" name="lesson_id" id="lesson_" value="">
                <input type="submit"  class="change_photo save"  name="" value="Save" >
                <button type="button" class="change_photo save" data-dismiss="modal">Close</button>
            </div>
               </form>
        </div>
    </div>
</div>

<!------------------------------>





<style>
.modal{
    z-index: 1500;
}
.modal-dialog {
    max-width: 720px;
}
.modal-content{
   border-radius: 0.9rem;
    outline: 0;
    box-shadow: 0px 1px 14px 0px #6c757d;
    padding: 10px;
}
.lessSettingFont18 {
    font-size: 18px;
    margin-left: 8px;
    margin-top: 11px;
}
.lesson_price {
    display: flex;
}
.lesson_price span {
    font-size: 18px;
    margin-left: 8px;
    margin-top: 10px;
    width: 40%;
}
</style>
 


<script>
var options="";
$("#category").on('change',function(){
    var value=$(this).val();
    if(value=="General")
    {
         options="<option>Choose</option>"
          		+"<option value='Grammar'>Grammar</option>"
      	 		+"<option value='Spelling'>Spelling</option>"
               +"<option value='Reading'>Reading</option>"
               +"<option value='Listening'>Listening</option>"
               +"<option value='Writing'>Writing</option>";
        $("#lesson").html(options);
    }
    else if(value=="Business")
    {
        options='<option>Choose</option>'
               +'<option value="Presentation">Meeting</option>'
      		   +'<option value="Presentation">Presentation</option>'
               +'<option value="Interview">Job Interview</option>'
               +'<option value="Negotiation">Negotiation</option>'
               +'<option value="Business">Business Etiquette</option>'
               +'<option value="Industry">Industry Terminology</option>';
        $("#lesson").html(options);
    }else
        $("#lesson").find('option').remove()
});
</script>
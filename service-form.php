<style>
    
/* Modal Content */
.modalforgot-content2 {
  background-color: #fefefe;
  /*margin: auto;*/
  padding: 30px;
  border: 1px solid #888;
  width: 420px;
  border-radius: 8px;
   /*background-image:url('img/popup-form-img2.jpg');*/
}
input{
    margin-bottom:15px;
    height:45px !important;
    color:#000 !important;
    font-size:15px!important;
    border-radius:10px!important;
    /*border: none!important;*/
}
textarea{
   margin-bottom:15px; 
   color:#000 !important;
    font-size:15px!important;
    border-radius:10px!important;
    /*border: none!important;*/
}
#contactForm_submit_services{
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    background-color: #0053ce;
    text-align: center;
    line-height: 1;
    border: 1px #0053ce;
    /*border-radius: 10px;*/
    border-radius:50px!important;
}
</style>

<!-- The Modal -->
<div id="myModalforgot2" class="modalforgot2">

  <!-- Modal content -->
  <div class="modalforgot-content2">
    <!--<span class="close">&times;</span>-->
    
    <div class="forgotform">
         <div class="alert"></div>
        <h4>GET IN TOUCH..</h4>
       
        <form method="post" id="contactFrm_services">
            <input type="text" name="name1" id="name1" placeholder="Your Name" class="form-control">
            <input type="text" name="email1" id="email1" placeholder="Your email" class="form-control">
            
            <input type="text" name="mobile1" id="mobile1" placeholder="Your mobile" class="form-control" >
            <select type="text" name="services1" id="services1" class="form-control" >
                <option value="0">-select services-</option>
                <option value="Web Development">Web Development</option>
                <option value="App Development">App Development</option>
                <option value="iOS Development">iOS Development</option>
                <option value="Android Development">Android Development</option>
                <option value="Hybrid Development">Hybrid Development</option>
                <option value="Digital Marketing">Digital Marketing</option>
                <option value="others">Others</option>
            </select>
            <textarea type="text" name="msg1" id="subject1" placeholder="Message" class="form-control" rows="5" ></textarea>
            <button id="contactForm_submit_services" class="form-control">submit</submit>
        </form>
    </div>
  </div>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(function(){
        
        $("button#contactForm_submit_services").click(function(e){
            e.preventDefault();
            var name1 = $("#name1").val();
            var email1 = $("#email1").val();
            var mobile1 = $("#mobile1").val();
            var sub1 = $("#subject1").val();
            var services1 = $("#services1").val();
            if(name1 == ''){
                $("#name1").attr("placeholder","please enter your name");
                $("#name1").append("<style>#name1::placeholder{color:red}</style>");
                $("#name1").css("borderColor","red");
                return false;
            }else{
            $("#name1").css("borderColor","green");
            }
            if(email1 == '' || isCEmail1(email1)!= true){
                $("#email1").attr("placeholder","please enter your email");
                $("#email1").append("<style>#email1::placeholder{color:red}</style>");
                $("#email1").css("borderColor","red");
                return false;
            }else{
            $("#email1").css("borderColor","green");
            }
            if(mobile == '' || isMobile1(mobile1)!= true){
                $("#mobile1").attr("placeholder","please enter your mobile");
                $("#mobile1").append("<style>#mobile1::placeholder{color:red}</style>");
                $("#mobile1").css("borderColor","red");
                return false;
            }else{
            $("#mobile1").css("borderColor","green");
            }
            
            if(services1 == '0'){
                $("#services1").attr("placeholder","please select services");
                $("#services1").append("<style>#services1::placeholder{color:red}</style>");
                $("#services1").css("borderColor","red");
                return false;
            }else{
            $("#services1").css("borderColor","green");
            }
            
            
            
            if(sub1 == ''){
                $("#subject1").attr("placeholder","please enter your subject");
                $("#subject1").append("<style>#subject1::placeholder{color:red}</style>");
                $("#subject1").css("borderColor","red");
                return false;
            }else{
            $("#subject1").css("borderColor","green");
            }
            
            if(name1 != '' || email1 != '' || mobile1 != '' || sub1 != ''||services1!='0' ){
                //mail("gokul@techninza.com","My subject",$msg);
                $("#cover-spin").show(0);
                var form = $("form#contactFrm_services")[0];
                $.ajax({
                    url:"mailtest2.php",
                    method:"POST",
                    data: new FormData(form),
                    contentType:false,
                    processData:false,
                    cache:false,
                    success:function(data){
                        $("#cover-spin").hide();
                        $(".alert").append("<p style='background: #dc3545;color: #fff!important; font-size: 15px; padding-top: 5px;padding-bottom: 5px;'>Request Sent</p>").show(0);
                         setTimeout(function () {
                            $(".alert").hide();
                            window.location.href="thankyou";
                            get_record_cust1(name1,email1,mobile1,services1,sub1);
                        }, 1000);
                    }
            })
            
        }
        }); 
    });
    
</script>


<script>
    // check email is valid

function isCEmail1(email1) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email1);
}


// check phone no is valid

function isMobile1(mobile1) {
  var mob = /^[1-9]{1}[0-9]{9}$/;
  return mob.test(mobile1);
}

</script>

<script>
    function get_record_cust1(name1,email1,mobile1,services1,sub1){
        var form2 = new FormData();
        form2.append("name1",name1);
        form2.append("email1",email1);
        form2.append("mobile1",mobile1);
        form2.append("services1",services1);
        form2.append("msg1",sub1);
        $.ajax({
                    url:"save_cust_record2.php",
                    method:"POST",
                    data: form2,
                    contentType:false,
                    processData:false,
                    cache:false,
                    success:function(data){
                        
                    }
            })
    }
</script>
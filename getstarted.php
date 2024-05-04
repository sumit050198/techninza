<style>
/* The Modal (background) */
.modalforgot {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 1.5%; /* Location of the box */
  left: 0;
  top: 0;
      z-index: 1047;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  /*overflow: auto !important;*/
  /*background-color: rgb(0,0,0); */
  background-color: rgba(0,0,0,0.4) !important; 
 
}

/* Modal Content */
.modalforgot-content {
  background-color: #fefefe;
  margin: auto;
  padding: 35px;
  border: 1px solid #888;
  width: 1000px;
  border-radius: 8px;
  background-repeat: no-repeat;
  background-color: #fafafa;
   background-image:url('img/techninza_free_consultation_new.png');
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.terms_txt {
   font-size: 9px;
    color: #696969 !important;
    line-height: 1.5;
}
}
input{
    margin-bottom:10px;
    height:35px !important;
    color:#000 !important;
    font-size:15px!important;
    border-radius:10px!important;
    /*border: none!important;*/
}
select,input,textarea{
   margin-bottom:15px; 
   color:#000 !important;
    font-size:15px!important;
    border-radius:10px!important;
    /*border: none!important;*/
}
.alert{
    display:none;
   margin-top: 30px;
    text-align: center;
}
#contactForm_submit{
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
.popup-free-consultation{
    margin:0px !important;
}
.popup-free-consulation-imgage{
    width:100%;
}
</style>






<!-- The Modal -->
<div id="myModalforgot" class="modalforgot">
<div class="row popup-free-consultation">
  <!-- Modal content -->
  <div class="modalforgot-content">
    <span class="close">&times;</span>
        <div class="col-md-12">
        <div class="col-md-8 popup-free-first">
            <!--<img src="img/services/App-development.png" class="popup-free-consulation-imgage">-->
        </div>
        <div class="col-md-4" style="margin-top:-10px;">
    <div class="forgotform">
        <div class="alert"></div>
        <h4>Fill below form to get consultation</h4>
        
        <form method="post" id="contactFrm">
            <input type="text" name="name" id="name" placeholder="Your Name" class="form-control">
            <input type="text" name="email" id="email" placeholder="Your email" class="form-control">
            <input type="text" name="mobile" id="mobile" placeholder="Your mobile" class="form-control" >
            <select type="text" name="services" id="services" class="form-control" >
                <option value="0">-select services-</option>
                <option value="Web Development">Web Development</option>
                <option value="App Development">App Development</option>
                <option value="IOS Development">IOS Development</option>
                <option value="Android Development">Android Development</option>
                <option value="Hybrid Development">Hybrid Development</option>
                <option value="Digital Marketing">Digital Marketing</option>
                <option value="CRM">CRM Development</option>
                <option value="others">Others</option>
            </select>
            <textarea type="text" name="msg" id="subject" placeholder="Message" class="form-control" rows="3" ></textarea>
            <p class="terms_txt">*Your data is safe with us. This data will be used only for contacting you.</p>
            <button id="contactForm_submit" class="form-control">Request Free Consultation </submit>
        </form>
    </div>
    </div>
    </div>
    </div>
  </div>

</div>


<script>
// Get the modal
var modal = document.getElementById("myModalforgot");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<script>
// Get the modal
var modal = document.getElementById("myModalforgot");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
window.onload = function(){
    var path = window.location.href;
    if(path == 'https://www.techninza.in/index' || path == 'https://www.techninza.in/'){
setTimeout(function(){ 
    modal.style.display = "block"
    }, 5000);
}}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(function(){
        
        $("button#contactForm_submit").click(function(e){
            e.preventDefault();
            var name = $("#name").val();
            var email = $("#email").val();
            var mobile = $("#mobile").val();
            var sub = $("#subject").val(); 
            var services = $("#services").val();
            if(name == ''){
                $("#name").attr("placeholder","please enter your name");
                $("#name").append("<style>#name::placeholder{color:red}</style>");
                $("#name").css("borderColor","red");
                return false;
            }else{
            $("#name").css("borderColor","green");
            }
            if(email == '' || isCEmail(email)!= true){
                $("#email").attr("placeholder","please enter your email");
                $("#email").append("<style>#email::placeholder{color:red}</style>");
                $("#email").css("borderColor","red");
                return false;
            }else{
            $("#email").css("borderColor","green");
            }
            if(mobile == '' || isMobile(mobile)!= true){
                $("#mobile").attr("placeholder","please enter your mobile");
                $("#mobile").append("<style>#mobile::placeholder{color:red}</style>");
                $("#mobile").css("borderColor","red");
                return false;
            }else{
            $("#mobile").css("borderColor","green");
            }
            
            if(services == '0'){
                $("#services").attr("placeholder","please select services");
                $("#services").append("<style>#services::placeholder{color:red}</style>");
                $("#services").css("borderColor","red");
                return false;
            }else{
            $("#services").css("borderColor","green");
            }
            
            
            
            if(sub == ''){
                $("#subject").attr("placeholder","please enter your subject");
                $("#subject").append("<style>#subject::placeholder{color:red}</style>");
                $("#subject").css("borderColor","red");
                return false;
            }else{
            $("#subject").css("borderColor","green");
            }
            
            if(name != '' || email != '' || mobile != '' ||services!='0' || sub != ''){
                //mail("gokul@techninza.com","My subject",$msg);
                $("#cover-spin").show(0);
                var form = $("form#contactFrm")[0];
                $.ajax({
                    url:"mailtest.php",
                    method:"POST",
                    data: new FormData(form),
                    contentType:false,
                    processData:false,
                    cache:false,
                    success:function(data){
                        $("#cover-spin").hide();
                        $(".alert").append("<p style='background: #dc3545;color: #fff!important; font-size: 15px; padding-top: 5px;padding-bottom: 5px;'>Your consultation request submitted and our customer ninja will contact you soon</p>").show(0);
                        
                         setTimeout(function () {
                            $(".alert").hide();
                             $("#myModalforgot").hide();
                             window.location.href="thankyou";
                         get_record_cust(name,email,mobile,services,sub);
                        }, 1000);
                        
                       
                    }
            })
            
        }
        }); 
    });
    
</script>

<script>
    // check email is valid

function isCEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}


// check phone no is valid

function isMobile(mobile) {
  var mob = /^[1-9]{1}[0-9]{9}$/;
  return mob.test(mobile);
}

</script>



<script>
    function get_record_cust(name,email,mobile,services,sub){
        var form2 = new FormData();
        form2.append("name",name);
        form2.append("email",email);
        form2.append("mobile",mobile);
        form2.append("services",services);
        form2.append("msg",sub);
        $.ajax({
                    url:"save_cust_record.php",
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

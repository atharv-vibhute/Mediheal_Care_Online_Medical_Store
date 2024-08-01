<?php include_once('5_Header.php') ?>

<script>

 $(document).ready(function () {

		$("#btnSubmit").click(function (event) {

			event.preventDefault();

			  var data = new FormData($('#contactform')[0]);

			  if($('#name').val().trim()==''){

				 document.getElementById("nameErr").innerHTML = "Please provide Name";

				 document.getElementById("name").focus();

				 return;

			  }

			  if($('#email').val().trim()==''){

				 document.getElementById("emailErr").innerHTML = "Please provide Email";

				 document.getElementById("email").focus();

				 return;

			  }

			  if($('#phone').val().trim()==''){

				 document.getElementById("phoneErr").innerHTML = "Please provide Mobile Number";

				 document.getElementById("phone").focus();

				 return;

			  }
			   if($('#subject').val().trim()==''){

				 document.getElementById("subjectErr").innerHTML = "Please provide subject";

				 document.getElementById("subject").focus();

				 return;

			  }

			  if($('#message').val().trim()==''){

				 document.getElementById("messageErr").innerHTML = "Please provide Message";

				 document.getElementById("message").focus();

				 return;

			  }

			  $("#btnSubmit").prop("disabled", true);

			  

   

    //alert(dataString);

     //var form = $(this);

			  $.ajax({

            type: "POST",

            url: "send_email.php",

            data: data,

            processData: false,

				contentType: false,

				cache: false,

				success: function(data) { 
 console.log(data);
               $("#mail-status").removeClass('text-danger');

						$("#mail-status").addClass('text-success');

						$("#mail-status").html("We have received your enquiry successfully!");

						$("#btnSubmit").prop("disabled", false);

						$('#name').val('');

						$('#email').val('');

						$('#phone').val('');
						$('#subject').val('');

						$('#message').val('');

            },

            error: function(error){

                $("#mail-status").removeClass('text-success');

						$("#mail-status").addClass('text-danger');

						$("#mail-status").html("Something went wrong..Please try again!");

            }

				

            

        

        });

	});

      });

    </script>

    <main>

        <div class="contact_us_header">
            <div class="ed_img_overlay">
                <div class="container">
                    <div class="row">
                        <div class="header_contact">
                            <h1 class="h1">CONTACT US</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="form_div">

                <div class="row">
                    <h2 class="h2 connect_with_mediheal mediheal">CONNECT WITH <span class="alternate_mediheal">MEDIHEAL</span></h2>
                </div>

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="contact_form blue">
                            <h3 class="h3 say_hello">Say Hello!</h3>
                            <form method="post" id="contactform">

                                <input type="text" name="name" id="name" placeholder="Your Name*" required
                                        autofocus class="input" onkeyup="document.getElementById('nameErr').innerHTML=''">               
                                <label class="text-danger " id="nameErr"></label>

                                <input type="email" name="email" id="email" placeholder="Your Email Address*"
                                        required class="input" onkeyup="document.getElementById('emailErr').innerHTML=''">
                                <label class="text-danger " id="emailErr"></label>

                                <input type="number" name="phone" id="phone"
                                        placeholder="Your Mobile Number*" required class="input" onkeyup="document.getElementById('phoneErr').innerHTML=''">
                                <label class="text-danger " id="phoneErr"></label>
                                
                                <input type="text" name="subject" id="subject" placeholder="Your Subject*"
                                        required class="input" onkeyup="document.getElementById('subjectErr').innerHTML=''">
                                <label class="text-danger " id="subjectErr"></label>
                                
                                <textarea type="textarea" name="message" id="message" placeholder="Your Message*"
                                        required cols="47" class="input" onkeyup="document.getElementById('messageErr').innerHTML=''"></textarea>
                                <label class="text-danger " id="messageErr"></label>
                                
                                <!-- <button type="submit" id="submit" class="send_message_button more_btn3">Send
                                    Message</button> -->
                                    <div class="submit">
                                        <p class="btnform">
 
							                <button type="submit" id="btnSubmit" class="send_message_button more_btn3">Send Message</button>

                                        </p>
                                    </div>

                                    <div id="mail-status"></div>

                            </form>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <img src="Images/14_contact-us-customer-communication-sound_copy_505x383.jpg" alt="contact"
                            width="100%" class="contact_us_photo">
                    </div>

                </div>
            </div>
        </div>

        <div class="blue address_banner">
            <div class="ed_img_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="office_details">
                                <h3 class="h3 blue_text">MEDIHEAL'S OFFICE DETAILS</h3>
                                <div class="office_details_center">
                                    <div class="address_center_mobile">
                                        <h4 Class="h4">Address</h4>
                                        <p class="para2">Kolhapur IT Park, Datta Colony, Kolhapur,</p>
                                        <p class="para2">Maharashtra, India 416001</p>
                                        <h4 class="h4">Mobile Number</h4>
                                        <p class="para2">+9188888888</p>
                                    </div>
                                    <div class="space"></div>
                                    <div>
                                        <h4 class="h4">Email Address</h4>
                                        <p class="para2">medihealcare@gmail.com</p>
                                        <h4 class="h4">Working Time</h4>
                                        <p class="para2">9 am to 5 pm</p>
                                        <h4>Working Days</h4>
                                        <p class="para2">Monday to Saturday</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.8790265242747!2d74.22801337461232!3d16.682936022717634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc1001b45aaaaab%3A0x68287d4a9d8a7cef!2sKolhapur%20IT%20Park!5e0!3m2!1sen!2sin!4v1718994541964!5m2!1sen!2sin"
                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>

    <!-- email demo -->

<!-- <script>

 $(document).ready(function () {

		$("#btnSubmit").click(function (event) {

			event.preventDefault();

			  var data = new FormData($('#contactform')[0]);

			  if($('#name').val().trim()==''){

				 document.getElementById("nameErr").innerHTML = "Please provide Name";

				 document.getElementById("name").focus();

				 return;

			  }

			  if($('#email').val().trim()==''){

				 document.getElementById("emailErr").innerHTML = "Please provide Email";

				 document.getElementById("email").focus();

				 return;

			  }

			  if($('#phone').val().trim()==''){

				 document.getElementById("phoneErr").innerHTML = "Please provide Mobile Number";

				 document.getElementById("phone").focus();

				 return;

			  }
			   if($('#subject').val().trim()==''){

				 document.getElementById("subjectErr").innerHTML = "Please provide subject";

				 document.getElementById("subject").focus();

				 return;

			  }

			  if($('#message').val().trim()==''){

				 document.getElementById("messageErr").innerHTML = "Please provide Message";

				 document.getElementById("message").focus();

				 return;

			  }

			  $("#btnSubmit").prop("disabled", true);

			  

   

    //alert(dataString);

     //var form = $(this);

			  $.ajax({

            type: "POST",

            url: "send_email.php",

            data: data,

            processData: false,

				contentType: false,

				cache: false,

				success: function(data) { 
 console.log(data);
               $("#mail-status").removeClass('text-danger');

						$("#mail-status").addClass('text-success');

						$("#mail-status").html("We have received your enquiry successfully!");

						$("#btnSubmit").prop("disabled", false);

						$('#name').val('');

						$('#email').val('');

						$('#phone').val('');
						$('#subject').val('');

						$('#message').val('');

            },

            error: function(error){

                $("#mail-status").removeClass('text-success');

						$("#mail-status").addClass('text-danger');

						$("#mail-status").html("Something went wrong..Please try again!");

            }

				

            

        

        });

	});

      });

    </script> -->

<?php include_once('6_Footer.php') ?>
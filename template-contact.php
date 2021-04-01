<?php
/*
 Template Name: Contact	
*/
?>

<?php get_header('color');?>
<style>
	.section-title {
	position: relative;
}
.section-title p {
	font-size: 16px;
	margin-bottom: 5px;
	font-weight: 400;
}
.section-title h4 {
	font-size: 40px;
	font-weight: 600;
	text-transform: capitalize;
	position: relative;
	padding-bottom: 20px;
	display: inline-block;
}
.section-title h4::before {
	position: absolute;
	content: "";
	width: 80px;
	height: 2px;
	background-color: #d8d8d8;
	bottom: 0;
	left: 50%;
	margin-left: -40px;
}
.section-title h4::after {
	position: absolute;
	content: "";
	width: 50px;
	height: 2px;
	background-color: #FF7200;
	left: 0;
	bottom: 0;
	left: 50%;
	margin-left: -25px;
}
.contact {
	background-position: center;
	position: relative;
	z-index: 2;
	color: #fff;
}
.contact-form input,
textarea {
	width: 100%;
    border: 1px solid #e5e5e5;
    padding: 10px 10px;
    text-transform: capitalize;
    margin-top: 15px;
    margin-bottom: 15px;
    background-color: transparent;
    color: #fff;
}
.contact:before {
	position: absolute;
	content: "";
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background-color: #fff;
	z-index: -1;
	opacity: .85;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=85)";
}
.single-contact {
	text-align: left;
	position: relative;
	padding-left: 70px;
	margin-bottom: 50px;
	margin-top: 10px;
}
.single-contact i.fa {
	position: absolute;
	left: 0;
	top: 50%;
	-webkit-transform: translateY(-50%);
	        transform: translateY(-50%);
	background-color: var(--primary-color);
	width: 40px;
	height: 40px;
	line-height: 40px;
	text-align: center;
	border-radius: 40px;
	box-shadow: var(--box-shadow);
}
.single-contact h5 {
	font-size: 18px;
	margin-bottom: 10px;
	font-weight: 500;
	color: #272625;
}
.single-contact p {
	font-size: 15px;
	font-weight: 400;
	color: #272625;
}
.contact-form input[type="submit"] {
	background-color: var(--primary-color);
	border: 0px;
	cursor: pointer;
	font-size: 16px;
	padding: 0.75rem;
	box-shadow: var(--box-shadow3);
	-webkit-transition: .4s;
	transition: .4s
}
.contact-form input[type="submit"]:hover {
	box-shadow: none;
}
.contact-form input:focus, textarea:focus {
	border-color: #CC5B00
}
</style>

  <section class="contact pt-5 pb-5" id="contact">
         <div class="container">
           
            <div class="row text-center">
                  <div class="col-md-8">
                     <form action="#" class="contact-form">
                        <div class="row">
                           <div class="col-xl-6">
                              <input type="text" placeholder="name">
                           </div>
                           <div class="col-xl-6">
                              <input type="text" placeholder="email">
                           </div>
                           <div class="col-xl-6">
                              <input type="text" placeholder="subject">
                           </div>
                           <div class="col-xl-6">
                              <input type="text" placeholder="telephone">
                           </div>
                           <div class="col-xl-12">
                              <textarea placeholder="message" cols="30" rows="10"></textarea>
                              <input type="submit" class="btn btn-lg" value="send message">
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-4">
                     <div class="single-contact">
                        <i class="fa fa-map-marker"></i>
                        <h5>Address</h5>
                        <p>661 Lefferts, NY 11203, USA</p>
                     </div>
                     <div class="single-contact">
                        <i class="fa fa-phone"></i>
                        <h5>Phone</h5>
                        <p>(+1) 517 397 7100</p>
                     </div>
                     <div class="single-contact">
                        <i class="fa fa-envelope"></i>
                        <h5>Email</h5>
                        <p>infor@personal.com</p>
                     </div>
                  </div>
            </div>
         </div>
      </section>

<?php get_footer();?>
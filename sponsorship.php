<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>College chess</title>
    <link rel="icon" href="./images/logo.png" type="image/png">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link href="./styles.css">
    <link href="assets/css/style.css">
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <style>
        .breadcrumbs-page-wrap {
        position: relative;
}
body {
    font-family: 'DM Sans', sans-serif;
    font-size: 1rem;
    font-weight: 400;
    color: #636886;
    background: #f8f4f3; 
    line-height: 1.9;
}
.heading-main small {
    color: #477763;
    font-family: 'Playfair Display', serif;
    position: relative;
    text-transform: capitalize;
    margin-bottom: 15px;
    display: block;
    font-size: 1.2rem;
    font-weight: 600;
}
div {
    display: block;
    unicode-bidi: isolate;
}
.bg-fixed {
    width: 100%;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
}
.breadcrumbs-page:before {
    position: absolute;
    content: "";
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
    z-index: -1;
    border-radius: 0;
}
.breadcrumbs-page h1 {
    color: white;
    text-transform: capitalize;
    font-size: 4.5rem;
    font-weight: 600;
    line-height: 1;
    padding: 10rem 0;
}
.pos-rel {
    position: relative;
}
.breadcrumbs-page {
    background-image: url(./assets/images/breadcrumbs_bg.jpg);
    background-repeat: no-repeat;
    background-position: center !important;
    max-width: 100%;
    margin: 0 auto;
    z-index: 2;
    position: relative;
    border-radius: 0;
}
*, ::after, ::before {
    box-sizing: border-box;
}

.breadcrumbs-page .breadcrumb-item+.breadcrumb-item::before, .breadcrumb-item.active {
    color: #eeeeee;
    content: none;
}
.breadcrumbs-page .breadcrumb-item {
    display: -ms-flexbox;
    display: flex;
    min-height: 30px;
    align-items: center;
    font-size: 0.875rem;
    font-weight: 600;
}

.breadcrumbs-page .breadcrumb a {
    color: white;
    border-radius: 0;
    position: relative;
    text-decoration: none;
}
.breadcrumb-wrap {
    position: absolute;
    bottom: -15px;
    padding: 0.7rem 1.2rem;
    background:#e0aa07;
    border-radius: 4px;
}
/* bootstrap */
.container{
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    width: 100%;
    padding-right: calc(var(--bs-gutter-x)* .5);
    padding-left: calc(var(--bs-gutter-x)* .5);
    margin-right: auto;
    margin-left: auto;
}
.breadcrumbs-page .breadcrumb {
    background: transparent;
    color: #eeeeee;
    padding: 0;
    font-size: 0.875rem;
    font-weight: 500;
    margin: 0;
    line-height: 1;
}
    /* Donation */
    
    .heading-main small {
    color:#027e02;
    font-family: 'Playfair Display', serif;
    position: relative;
    text-transform: capitalize;
    margin-bottom: 15px;
    display: block;
    font-size: 1.2rem;
    font-weight: 600;
    margin-top: 25px;
}
.heading-main small::after {
    position: absolute;
    content: "";
    height: 2px;
    width: 41px;
    background:#027e02 ;
    top: 50%;
    left: -60px;
    transform: translateY(-50%);
}
p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    unicode-bidi: isolate;
    color: #636886;
}
h3 {
    display: block;
    font-size: 1.17em;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    unicode-bidi: isolate;
}
   /* form */
.donation-wrap {
    background: white;
    border-radius: 20px;
    padding: 2.5rem;
    margin-top: 2rem;
}

/* head */
.heading-main {
    color: #d59b2d; 
    font-size: 2.80rem;
    position: relative;
    font-weight: 800;
    z-index: 1;
    margin-bottom: 3rem;
}
/* form */
.donation-wrap .form-control {
    border: 2px solid #e9eaed;
    background-color: #e9eaed; 
    margin-bottom: 1.375rem;
}
.form-control {
    border: none;
    box-shadow: none;
    font-size: 0.9375rem;
    border: 1px solid white;
    outline: none;
    color: #5b5b5b;
    background-color: white;
    height: auto;
    padding: 0.8rem 1rem;
    border-radius: 5px;
    box-shadow: 0px 0px 147px 0px rgba(0, 0, 0, 0.07);
    transition: all 400ms ease-in-out;}

    .select2-container.select2-container .select2-selection--single {
    padding: 0.8rem;
    height: auto;
    border-radius: 5px;
    background: #e9eaed;
    z-index: 3;
    position: relative;
}
.select2-container .select2-selection--single .select2-selection__rendered {
    display: block;
    padding-left: 8px;
    padding-right: 20px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
/* list */

/* form */
.faqs-sidebar {
    background: url(./assets/images/man_with_hand.jpg) no-repeat center center;
    background-size: cover;
    padding: 1.8rem;
    border-radius: 10px;
    overflow: hidden;
}

.bg-overlay.opacity-80 {
    opacity: 0.8;
}
.bg-overlay.blue {
    background-color: #27304b;
}
.bg-overlay {
    position: absolute;
    top: 0;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    left: 0;
    z-index: 1;
}
.donation-select{
  height: 40px;
  border: none;
    box-shadow: none;
    font-size: 0.9375rem;
    border: 1px solid white;
    outline: none;
    color: #5b5b5b;
    background-color: white;
    height: auto;
    padding: 0.8rem 1rem;
    border-radius: 5px;
    box-shadow: 0px 0px 147px 0px rgba(0, 0, 0, 0.07);
    transition: all 400ms ease-in-out;}


/* formtext */
.faqs-sidebar form {
    position: relative;
    z-index: 99;
}
.txt-white {
    color: white;
}
h3.h3-sm {
    font-size: 1.375rem;
}
.fw-7 {
    font-weight: 700;
}
.mb-3 {
    margin-bottom: 1rem !important;
}
/* formfont */
.faqs-sidebar form label {
    color: white;
}
label {
    font-size: 0.875rem;
}
label {
    display: inline-block;
}
/* Foyminput */
.form-light.form-control {
    font-size: 0.9375rem;
    outline: none;
    color: #131313;
    background-color: white;
    height: auto;
    padding: 0.8rem 1rem;
    border-radius: 5px;
    box-shadow: none;
    border: none;
}
.faqs-sidebar form .form-group {
    margin-bottom: 1.375rem;
}
.faqs-sidebar .form-light.form-control {
    background-color: rgba(255, 255, 255, 0.8);
}
/* button */
.btn-default, .btn-default:disabled, .btn-default:hover:disabled {
    color: white;
    background-color: #d59b2d;
    border-color: #d59b2d;
}
.mt-3 {
    margin-top: 1rem !important;
}

.btn {
    display: inline-flex;
    justify-content: center;
    padding: 0.719rem 1.9rem;
    font-size: 1rem;
    outline: none;
    align-items: center;
    position: relative;
    -webkit-border-radius: 60px;
    -moz-border-radius: 60px;
    border-radius: 60px;
    -webkit-transition: all 400ms ease-in-out;
    -moz-transition: all 400ms ease-in-out;
    -o-transition: all 400ms ease-in-out;
    -ms-transition: all 400ms ease-in-out;
    transition: all 400ms ease-in-out;
    text-transform: capitalize;
    font-family: 'Playfair Display', serif;
    font-weight: 800;
    overflow: hidden;
}
*, ::after, ::before {
    box-sizing: border-box;
}
.wide-tb-100 {
    padding-top: 100px;
    padding-bottom: 100px;
}

/* 2nd background */
.bg-img-6 {
    background-image: url(./assets/images/callout_bg.jpg);
    background-repeat: no-repeat;
    background-position: center center;
}
.bg-scroll {
    width: 100%;
    background-attachment: fixed !important;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
}
.callout-style-1 .container {
    position: relative;
    z-index: 2;
}
.light-mode.heading-main {
    color: white;
}
.wide-tb-150 {
    padding-top: 150px;
    padding-bottom: 150px;
}

/* carousel */
#home-clients{
  display: flex;
  gap: 70px;
 
}

@media (max-width: 1024px){
  #home-clients {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
}
}

@media (max-width: 770px){
  #home-clients {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
}
}

@media (max-width: 430px){
.heading-main{
    font-size: 40px;
  }
}

@media (max-width: 375px){
  html{
    width: fit-content;
  }
  .breadcrumbs-page h1{
    font-size: 60px;
  }
  .heading-main{
    font-size: 40px;
  }
  .light-mode.heading-main {
    font-size: 35px;
  }
  #home-clients {
    grid-template-columns: 1fr;
  }
  #home-clients img{
    height: 250px;
    width: 100%;
    border-radius: 25px;
  }
}
@media (max-width: 726px){
  #rexxie{
    font-size: 50px;
  }
}
@media (max-width: 320px){
  #rexxie{
    font-size: 40px;
  }
  .row>* {
    padding-right: 5px;
    padding-left: 5px;
}
#home-clients {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 20px;
    }
#home-clients img {
        height: 140px !important;
        width: 140px !important;
        border-radius: 15px;
    }
}


 
  


    </style>

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>

<?php
include("includes/pre-loader.php");
?>
<?php
include("includes/nav.php");
?>

<br><br> 
  
  <?php
$pageTitle = "Sponsorship";
?>
    <?php
include("includes/banner1.php");
?>
    
    
    <main id="body-content">
    
    <section class="wide-tb-100">
    <div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-12">
    <h1 class="heading-main">
    <small>Donation</small>
    Don't Let Poverty Destroy Someone's Dreams
    </h1>
    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless. Spread sunshine in their lives no matter what the weather may be.</p>
    <div class="donation-wrap">
    <h3 class="h3-sm fw-5 txt-blue mb-3">Select Your Donation Amount</h3>
    <div class="row">
    <div class="col-md-8">
    <div class="form-group">
    <div class="form-check form-check-inline">
    <input class="form-check-input form-light" type="radio" name="Amount" id="amount1" value="option1">
    <label class="form-check-label label-dark" for="amount1">$10</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input form-light" type="radio" name="Amount" id="amount2" value="option2">
    <label class="form-check-label label-dark" for="amount2">$20</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input form-light" type="radio" name="Amount" id="amount4" value="option3">
    <label class="form-check-label label-dark" for="amount4">$40</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input form-light" type="radio" name="Amount" id="amount5" value="option3">
    <label class="form-check-label label-dark" for="amount5">$50</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input form-light" type="radio" name="Amount" id="amount6" value="option3">
    <label class="form-check-label label-dark" for="amount6">$100</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input form-light" type="radio" name="Amount" id="amount7" value="option3">
    <label class="form-check-label label-dark" for="amount7">$500</label>
    </div>
    <div class="mt-3">
    <input type="text" class="form-control" id="custom" placeholder="Custom Amount">
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
    <div class="mb-3"><strong>Pay Using</strong></div>
    <a href="#"><img src="assets/images/paypal_btn.png" alt></a>
    </div>
    </div>
    <div class="col-md-12">
    <p class="text-primary">This is simple a note to the donators regarding our services and policy.</p>
    <div class="border-top mb-4"></div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <input type="text" class="form-control" id="name" placeholder="First Name">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <input type="text" class="form-control" id="last_name" placeholder="Last Name">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <input type="email" class="form-control" id="email" placeholder="Your Email">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <input type="text" class="form-control" id="zip" placeholder="Zip Code">
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <select class="theme-combo donation-select" name="state" style="width: 100%"style="height: 100px" >
    <option>Select Country</option>
    <option value="Afganistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bonaire">Bonaire</option>
    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
    <option value="Botswana">Botswana</option>
    <option value="Brazil">Brazil</option>
    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
    <option value="Brunei">Brunei</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Canary Islands">Canary Islands</option>
    <option value="Cape Verde">Cape Verde</option>
    <option value="Cayman Islands">Cayman Islands</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Channel Islands">Channel Islands</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas Island">Christmas Island</option>
    <option value="Cocos Island">Cocos Island</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Cook Islands">Cook Islands</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Cote DIvoire">Cote DIvoire</option>
    <option value="Croatia">Croatia</option>
    <option value="Cuba">Cuba</option>
    <option value="Curaco">Curacao</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="East Timor">East Timor</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Falkland Islands">Falkland Islands</option>
    <option value="Faroe Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="French Guiana">French Guiana</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="French Southern Ter">French Southern Ter</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Great Britain">Great Britain</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guinea">Guinea</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Hawaii">Hawaii</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="Indonesia">Indonesia</option>
    <option value="India">India</option>
    <option value="Iran">Iran</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Isle of Man">Isle of Man</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Korea North">Korea North</option>
    <option value="Korea Sout">Korea South</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Laos">Laos</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libya">Libya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macau">Macau</option>
    <option value="Macedonia">Macedonia</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Malawi">Malawi</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Mexico">Mexico</option>
    <option value="Midway Islands">Midway Islands</option>
    <option value="Moldova">Moldova</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Nambia">Nambia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherland Antilles">Netherland Antilles</option>
    <option value="Netherlands">Netherlands (Holland, Europe)</option>
    <option value="Nevis">Nevis</option>
    <option value="New Caledonia">New Caledonia</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk Island">Norfolk Island</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau Island">Palau Island</option>
    <option value="Palestine">Palestine</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Phillipines">Philippines</option>
    <option value="Pitcairn Island">Pitcairn Island</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Puerto Rico">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Republic of Montenegro">Republic of Montenegro</option>
    <option value="Republic of Serbia">Republic of Serbia</option>
    <option value="Reunion">Reunion</option>
    <option value="Romania">Romania</option>
    <option value="Russia">Russia</option>
    <option value="Rwanda">Rwanda</option>
    <option value="St Barthelemy">St Barthelemy</option>
    <option value="St Eustatius">St Eustatius</option>
    <option value="St Helena">St Helena</option>
    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
    <option value="St Lucia">St Lucia</option>
    <option value="St Maarten">St Maarten</option>
    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
    <option value="Saipan">Saipan</option>
    <option value="Samoa">Samoa</option>
    <option value="Samoa American">Samoa American</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra Leone">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Slovakia">Slovakia</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South Africa">South Africa</option>
    <option value="Spain">Spain</option>
    <option value="Sri Lanka">Sri Lanka</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Swaziland">Swaziland</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syria">Syria</option>
    <option value="Tahiti">Tahiti</option>
    <option value="Taiwan">Taiwan</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania">Tanzania</option>
    <option value="Thailand">Thailand</option>
    <option value="Togo">Togo</option>
    <option value="Tokelau">Tokelau</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Erimates">United Arab Emirates</option>
    <option value="United States of America">United States of America</option>
    <option value="Uraguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Vatican City State">Vatican City State</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Vietnam">Vietnam</option>
    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
    <option value="Wake Island">Wake Island</option>
    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
    <option value="Yemen">Yemen</option>
    <option value="Zaire">Zaire</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>
    </select>
    </div>
    </div>
    </div>
    <h3 class="h3-sm fw-5 txt-blue mb-3 mt-3">Payment Details</h3>
    <div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <input type="text" class="form-control" id="card" placeholder="Enter your card number">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <input type="text" class="form-control" id="card_name" placeholder="Name on your card">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <div class="pos-rel">
    <input type="text" class="form-control" placeholder="Expiry Date">
    </div>
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <input type="text" class="form-control" id="security" placeholder="Security Code">
    </div>
    </div>
    <div class="col-md-12">
    <button class="btn btn-default"><i data-feather="heart">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
    </i> Donate Now</button>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-12">
    <div class="faqs-sidebar pos-rel">
    <div class="bg-overlay blue opacity-80"></div>
    <form>
    <h3 class="h3-sm fw-7 txt-white mb-3">Have any Question?</h3>
    <div class="form-group">
    <label for="fullname"><strong>Full Name</strong></label>
    <input type="text" class="form-control form-light" id="fullname">
    </div>
    <div class="form-group">
    <label for="emailform"><strong>Email Address</strong></label>
    <input type="email" class="form-control form-light" id="emailform">
    </div>
    <div class="form-group">
    <label for="questionmsg"><strong>How can help you?</strong></label>
    <textarea class="form-control form-light" rows="5" id="questionmsg"></textarea>
    </div>
    <button type="submit" class="btn btn-default mt-3">Ask It Now</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="wide-tb-150 bg-scroll bg-img-6 pos-rel callout-style-1">
    <div class="bg-overlay blue opacity-80"></div>
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-7">
    <h1 class="heading-main light-mode">
    <small>Help Other People</small>
    We Dream to Create A Bright Future Of The Underprivileged Children
    </h1>
    </div>
    <div class="col-sm-12 text-md-end">
    <a href="donation-page.html" class="btn btn-default">Donate Now</a>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="wide-tb-100">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-12">
    <h1 class="heading-main">
    <small>Global Providers</small>
    Our List Of Active Partner
    </h1>
    </div>
    <div class="col-sm-12">
    <div class="owl-carousel owl-theme" id="home-clients">
    
    <div class="item">
    <div class="clients-logo">
    <img src="assets/images/clients/Alphastones.png" width="160px" height="120px">
    </div>
    </div>
    
    
    <div class="item">
    <div class="clients-logo">
    <img src="assets/images/clients/asap.jpg" width="160px" height="120px">
    </div>
    </div>
    
    
    <div class="item">
    <div class="clients-logo">
    <img src="assets/images/clients/import.jpg" width="160px" height="120px">
    </div>
    </div>
    
    
    <div class="item">
    <div class="clients-logo">
    <img src="assets/images/clients/cake.jpg" width="160px" height="120px">
    </div>
    </div>
    
    
    <div class="item">
    <div class="clients-logo">
    <img src="assets/images/clients/scrapyard.jpg" width="160px" height="120px">
    </div>
    </div>
    
    </div>
    </div>
    </div>
    </div>
    </section>

  <!-- footer-area -->
               <?php
include("includes/footer.php");
?>
  <script src="debug.js"></script>

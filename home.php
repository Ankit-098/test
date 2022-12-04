<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PM-WANI APNA WIFI</title>
    <link rel="icon" href="public/web_images/wifi_logo.png">
    <link rel="stylesheet" href="public/css/home_page.css">
    <script src="/public/js/home_page_form.js"></script>
</head>
<body>

  <?php include('./main/header.php'); ?>

  <!-- Banner -->

  <div id="banner">
    <img class="imageBanner" src="public/web_images/banner_apna_wifi.png"  alt="">
  </div>


<div class="pdo_plan_Container">
  <div class="inner_contain">
      <div class="plans">
        <table>
            <caption>PLANS</caption>
            <thead>
              <tr>
                <th scope="col">AMOUNT</th>
                <th scope="col">DURATION</th>
           
              </tr>
            </thead>
            <tbody>
             
              <tr>
                <td scope="row" data-label="Account">₹5</td>
                <td data-label="Due Date">1 day</td>
              
              </tr>
              <tr>
                <td scope="row" data-label="Account">₹29</td>
                <td data-label="Due Date">7 days</td>
               
              </tr>
              <tr>
                <td scope="row" data-label="Acount">₹99</td>
                <td data-label="Due Date">1 month</td>
               
              </tr>
            </tbody>
          </table>
      </div>
      <div class="pdo">
        <div class="inner_pdo_contain">
         <p class="pdo_heading">Become our Public Data Officer(PDO)</p>
    
         <div class="button" onclick="return show_form()" >
          <a href="#" class='butn butn__new'><span>Let us discuss together!</span></a>
        </div>
         <div class="contact_info">
           <p class="contact_pdo"><svg  xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" fill="#333" class="bi bi-telephone" viewBox="0 0 16 16">
             <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
           </svg> <span style="padding-left: 8px;font-size:14px">  +917888979880</span></p>
         </div>
        </div>
    
       </div>
  </div>

</div>


<!-- show onclick data -->


<div class="container_Main_Contact">
  <div class="contact-box">
    <!-- <div class="left"></div> -->
    <div class="right">
  <div class="click_show_data_header">
    <h2 class="heading_contact_us_header">Become our PDO</h2>
 <span class="cross" onclick="hide_form()">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor"
  class="bi bi-x-lg" viewBox="0 0 16 16">
  <path
      d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
</svg>
 </span>
  </div>
  <form action="">

    <input type="text" required class="field" placeholder="Name">
    <input type="text" required class="field" placeholder="Phone or email">
    <textarea placeholder="Message" class="field"   ></textarea>
    <button class="btn">Submit</button>
  </form>

    </div>
  </div>
</div>


 <div class="about_Section">
   <p class="about_us_title">About Us</p>
  <div class="inner_about_section_container">
  <div class="about_content_section">
    <p>  Apna Wifi PM-WANI 
It envisages to Provide WiFi connectivity 
through Public WiFi Hotspots. 


This Central government's scheme is called the Prime Minister Wi-Fi Access Network Interface (PM-WANI) and is being seen as an attempt by the government to elevate wireless internet connectivity in the country. 

The scheme would enable our small shopkeepers to provide WiFi service. This will boost incomes as well as ensure our youth gets seamless internet connectivity. It will also strengthen our Digital India mission.
    </p>
  
  </div>
  <div class="image">
    <img src="https://pmwaniapnawifi.com/public/web_images/wifi_logo.png" width="100%" alt="">
  </div>
  </div>    
</div>   

<!-- Floating Icons Add In Home Page -->
<div class="floating_icons" style="position: fixed;
height: 5rem;
width: 4%;
background:none;
left: 15px;
bottom: 54px;
z-index: 20;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;">
    <div class="whats_app media" style="background: green;
padding: 8px;
border-radius: 50%;
height: 38px;
width: 38px;
display: flex;
justify-content: center;
color: #fff;margin-top:10px">
<a  href="https://api.whatsapp.com/send?phone=7888979880">
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#fff" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
            </svg> 
</a>
   
    </div>
    <div class="whats_app media" style="background: blue;
padding: 8px;
border-radius: 50%;
height: 38px;
width: 38px;
display: flex;
justify-content: center;
color: #fff;margin-top:8px">

    
            
            <a href="tel:+91-8699505560">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#fff" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
            </a>
    </div>
</div>



    
<!-- Footer code -->
<?php include('./main/footer.php'); ?>


</body>

</html>
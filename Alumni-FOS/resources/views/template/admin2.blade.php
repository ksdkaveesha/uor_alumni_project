<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Update Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!--Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/user.css')}}">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->


    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Register Form</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>


  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <div style="position: absolute">
        <img src="images/logo.png">
    </div>



  <!-- ======= Header ======= -->
  <header id="header">

    <div class="d-flex flex-column">
        <div class="profile2">
            <img src="images/logo.png">
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if(session('succ_notice'))
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'success',
                            text: '{{ session('succ_notice') }}',
                        });
                    </script>
        @endif


      <div class="profile">
        @if (isset(auth()->guard('webadmin')->user()->path))
            <img src="{{asset('storage/'.auth()->guard('webadmin')->user()->path)}}" alt="" class="img-fluid rounded-circle">
            <h4 style="text-align: center" class="text-light">{{ auth()->guard('webadmin')->user()->name }}</h4>
        @else
            <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
            <h4 style="text-align: center" class="text-light">{{ auth()->guard('webadmin')->user()->name }}</h4>
        @endif
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#update" class="nav-link scrollto"><i class="bx bx-user-plus"></i> <span>Add Users</span></a></li>
          <li><a href="#testamonials" class="nav-link scrollto"><i class="bx bx-book-add"></i> <span>Add Testamonials</span></a></li>
          <li><a href="#alumni_member" class="nav-link scrollto"><i class="bx bx-book-add"></i> <span>Alumni Members</span></a></li>
          <li><a href="/admin" class="nav-link scrollto"><i class="bx bx-arrow-back"></i> <button type="submit"><span style="color: #6f7180">Back</span></button></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">


     <!--General Confirmation Modal -->
     <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="staticBackdropLabel"> </h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"
                     aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <p id="staticBackdropLabe2"></p>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                 <button type="button" class="btn btn-primary" id="confirmBtn"></button>
             </div>
         </div>
     </div>
 </div>

    <!-- ======= user register Section ======= -->
    <section id="update" class="contact">
        <div class="container">

          <div class="section-title">
            <h2>User Registration</h2>
          </div>

          <div class="row" data-aos="fade-in">


            <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch" style="padding-left: 5%">
                <div id="alumni_personal_details">
                    <form id="addAlumni"  action="<?=url('/add_member_by_admin')?>" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="address"><h2><b>Register Alumni Member</b></h2></label>
                        </div>
                        <div class="form-group">
                            <label for="address"><h4><b>Alumni Member Personal Details</b></h4></label>
                        </div>
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" name="name" id="m_name" value="{{old('name')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="sc_number">SC Number</label>
                            <input type="text" class="form-control" name="sc_number" id="sc_number" value="{{old('sc_number')}}" required>
                            @error('sc_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" required/>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="m_code">Mobile Code</label>
                            <select name="m_code" class="form-control" id="m_code" value="{{old('m_code')}}" required>
                                <option value="" disabled selected>Country</option>
                                <option value="93">Afghanistan +93</option>
                                <option value="358">Aland Islands +358</option>
                                <option value="355">Albania +355</option>
                                <option value="213">Algeria +213</option>
                                <option value="1684">American Samoa +1684</option>
                                <option value="376">Andorra +376</option>
                                <option value="244">Angola +244</option>
                                <option value="1264">Anguilla +1264</option>
                                <option value="672">Antarctica +672</option>
                                <option value="1268">Antigua and Barbuda +1268</option>
                                <option value="54">Argentina +54</option>
                                <option value="374">Armenia +374</option>
                                <option value="297">Aruba +297</option>
                                <option value="61">Australia +61</option>
                                <option value="43">Austria +43</option>
                                <option value="994">Azerbaijan +994</option>
                                <option value="1242">Bahamas +1242</option>
                                <option value="973">Bahrain +973</option>
                                <option value="880">Bangladesh +880</option>
                                <option value="1246">Barbados +1246</option>
                                <option value="375">Belarus +375</option>
                                <option value="32">Belgium +32</option>
                                <option value="501">Belize +501</option>
                                <option value="229">Benin +229</option>
                                <option value="1441">Bermuda +1441</option>
                                <option value="975">Bhutan +975</option>
                                <option value="591">Bolivia +591</option>
                                <option value="599">Bonaire, Sint Eustatius and Saba +599</option>
                                <option value="387">Bosnia and Herzegovina +387</option>
                                <option value="267">Botswana +267</option>
                                <option value="55">Bouvet Island +55</option>
                                <option value="55">Brazil +55</option>
                                <option value="246">British Indian Ocean Territory +246</option>
                                <option value="673">Brunei Darussalam +673</option>
                                <option value="359">Bulgaria +359</option>
                                <option value="226">Burkina Faso +226</option>
                                <option value="257">Burundi +257</option>
                                <option value="855">Cambodia +855</option>
                                <option value="237">Cameroon +237</option>
                                <option value="1">Canada +1</option>
                                <option value="238">Cape Verde +238</option>
                                <option value="1345">Cayman Islands +1345</option>
                                <option value="236">Central African Republic +236</option>
                                <option value="235">Chad +235</option>
                                <option value="56">Chile +56</option>
                                <option value="86">China +86</option>
                                <option value="61">Christmas Island +61</option>
                                <option value="672">Cocos (Keeling) Islands +672</option>
                                <option value="57">Colombia +57</option>
                                <option value="269">Comoros +269</option>
                                <option value="242">Congo +242</option>
                                <option value="242">Congo, Democratic Republic of the Congo +242</option>
                                <option value="682">Cook Islands +682</option>
                                <option value="506">Costa Rica +506</option>
                                <option value="225">Cote D Ivoire +225</option>
                                <option value="385">Croatia +385</option>
                                <option value="53">Cuba +53</option>
                                <option value="599">Curacao +599</option>
                                <option value="357">Cyprus +357</option>
                                <option value="420">Czech Republic +420</option>
                                <option value="45">Denmark +45</option>
                                <option value="253">Djibouti +253</option>
                                <option value="1767">Dominica +1767</option>
                                <option value="1809">Dominican Republic +1809</option>
                                <option value="593">Ecuador +593</option>
                                <option value="20">Egypt +20</option>
                                <option value="503">El Salvador +503</option>
                                <option value="240">Equatorial Guinea +240</option>
                                <option value="291">Eritrea +291</option>
                                <option value="372">Estonia +372</option>
                                <option value="251">Ethiopia +251</option>
                                <option value="500">Falkland Islands (Malvinas) +500</option>
                                <option value="298">Faroe Islands +298</option>
                                <option value="679">Fiji +679</option>
                                <option value="358">Finland +358</option>
                                <option value="33">France +33</option>
                                <option value="594">French Guiana +594</option>
                                <option value="689">French Polynesia +689</option>
                                <option value="262">French Southern Territories +262</option>
                                <option value="241">Gabon +241</option>
                                <option value="220">Gambia +220</option>
                                <option value="995">Georgia +995</option>
                                <option value="49">Germany +49</option>
                                <option value="233">Ghana +233</option>
                                <option value="350">Gibraltar +350</option>
                                <option value="30">Greece +30</option>
                                <option value="299">Greenland +299</option>
                                <option value="1473">Grenada +1473</option>
                                <option value="590">Guadeloupe +590</option>
                                <option value="1671">Guam +1671</option>
                                <option value="502">Guatemala +502</option>
                                <option value="44">Guernsey +44</option>
                                <option value="224">Guinea +224</option>
                                <option value="245">Guinea-Bissau +245</option>
                                <option value="592">Guyana +592</option>
                                <option value="509">Haiti +509</option>
                                <option value="39">Holy See (Vatican City State) +39</option>
                                <option value="504">Honduras +504</option>
                                <option value="852">Hong Kong +852</option>
                                <option value="36">Hungary +36</option>
                                <option value="354">Iceland +354</option>
                                <option value="91">India +91</option>
                                <option value="62">Indonesia +62</option>
                                <option value="98">Iran, Islamic Republic of +98</option>
                                <option value="964">Iraq +964</option>
                                <option value="353">Ireland +353</option>
                                <option value="44">Isle of Man +44</option>
                                <option value="972">Israel +972</option>
                                <option value="39">Italy +39</option>
                                <option value="1876">Jamaica +1876</option>
                                <option value="81">Japan +81</option>
                                <option value="44">Jersey +44</option>
                                <option value="962">Jordan +962</option>
                                <option value="7">Kazakhstan +7</option>
                                <option value="254">Kenya +254</option>
                                <option value="686">Kiribati +686</option>
                                <option value="850">Korea, Democratic Peoples Republic of +850</option>
                                <option value="82">Korea, Republic of +82</option>
                                <option value="383">Kosovo +383</option>
                                <option value="965">Kuwait +965</option>
                                <option value="996">Kyrgyzstan +996</option>
                                <option value="856">Lao Peoples Democratic Republic +856</option>
                                <option value="371">Latvia +371</option>
                                <option value="961">Lebanon +961</option>
                                <option value="266">Lesotho +266</option>
                                <option value="231">Liberia +231</option>
                                <option value="218">Libyan Arab Jamahiriya +218</option>
                                <option value="423">Liechtenstein +423</option>
                                <option value="370">Lithuania +370</option>
                                <option value="352">Luxembourg +352</option>
                                <option value="853">Macao +853</option>
                                <option value="389">Macedonia, the Former Yugoslav Republic of +389</option>
                                <option value="261">Madagascar +261</option>
                                <option value="265">Malawi +265</option>
                                <option value="60">Malaysia +60</option>
                                <option value="960">Maldives +960</option>
                                <option value="223">Mali +223</option>
                                <option value="356">Malta +356</option>
                                <option value="692">Marshall Islands +692</option>
                                <option value="596">Martinique +596</option>
                                <option value="222">Mauritania +222</option>
                                <option value="230">Mauritius +230</option>
                                <option value="262">Mayotte +262</option>
                                <option value="52">Mexico +52</option>
                                <option value="691">Micronesia, Federated States of +691</option>
                                <option value="373">Moldova, Republic of +373</option>
                                <option value="377">Monaco +377</option>
                                <option value="976">Mongolia +976</option>
                                <option value="382">Montenegro +382</option>
                                <option value="1664">Montserrat +1664</option>
                                <option value="212">Morocco +212</option>
                                <option value="258">Mozambique +258</option>
                                <option value="95">Myanmar +95</option>
                                <option value="264">Namibia +264</option>
                                <option value="674">Nauru +674</option>
                                <option value="977">Nepal +977</option>
                                <option value="31">Netherlands +31</option>
                                <option value="599">Netherlands Antilles +599</option>
                                <option value="687">New Caledonia +687</option>
                                <option value="64">New Zealand +64</option>
                                <option value="505">Nicaragua +505</option>
                                <option value="227">Niger +227</option>
                                <option value="234">Nigeria +234</option>
                                <option value="683">Niue +683</option>
                                <option value="672">Norfolk Island +672</option>
                                <option value="1670">Northern Mariana Islands +1670</option>
                                <option value="47">Norway +47</option>
                                <option value="968">Oman +968</option>
                                <option value="92">Pakistan +92</option>
                                <option value="680">Palau +680</option>
                                <option value="970">Palestinian Territory, Occupied +970</option>
                                <option value="507">Panama +507</option>
                                <option value="675">Papua New Guinea +675</option>
                                <option value="595">Paraguay +595</option>
                                <option value="51">Peru +51</option>
                                <option value="63">Philippines +63</option>
                                <option value="64">Pitcairn +64</option>
                                <option value="48">Poland +48</option>
                                <option value="351">Portugal +351</option>
                                <option value="1787">Puerto Rico +1787</option>
                                <option value="974">Qatar +974</option>
                                <option value="262">Reunion +262</option>
                                <option value="40">Romania +40</option>
                                <option value="7">Russian Federation +7</option>
                                <option value="250">Rwanda +250</option>
                                <option value="590">Saint Barthelemy +590</option>
                                <option value="290">Saint Helena +290</option>
                                <option value="1869">Saint Kitts and Nevis +1869</option>
                                <option value="1758">Saint Lucia +1758</option>
                                <option value="590">Saint Martin +590</option>
                                <option value="508">Saint Pierre and Miquelon +508</option>
                                <option value="1784">Saint Vincent and the Grenadines +1784</option>
                                <option value="684">Samoa +684</option>
                                <option value="378">San Marino +378</option>
                                <option value="239">Sao Tome and Principe +239</option>
                                <option value="966">Saudi Arabia +966</option>
                                <option value="221">Senegal +221</option>
                                <option value="381">Serbia +381</option>
                                <option value="381">Serbia and Montenegro +381</option>
                                <option value="248">Seychelles +248</option>
                                <option value="232">Sierra Leone +232</option>
                                <option value="65">Singapore +65</option>
                                <option value="721">Sint Maarten +721</option>
                                <option value="421">Slovakia +421</option>
                                <option value="386">Slovenia +386</option>
                                <option value="677">Solomon Islands +677</option>
                                <option value="252">Somalia +252</option>
                                <option value="27">South Africa +27</option>
                                <option value="500">South Georgia and the South Sandwich Islands +500</option>
                                <option value="211">South Sudan +211</option>
                                <option value="34">Spain +34</option>
                                <option value="94">Sri Lanka +94</option>
                                <option value="249">Sudan +249</option>
                                <option value="597">Suriname +597</option>
                                <option value="47">Svalbard and Jan Mayen +47</option>
                                <option value="268">Swaziland +268</option>
                                <option value="46">Sweden +46</option>
                                <option value="41">Switzerland +41</option>
                                <option value="963">Syrian Arab Republic +963</option>
                                <option value="886">Taiwan, Province of China +886</option>
                                <option value="992">Tajikistan +992</option>
                                <option value="255">Tanzania, United Republic of +255</option>
                                <option value="66">Thailand +66</option>
                                <option value="670">Timor-Leste +670</option>
                                <option value="228">Togo +228</option>
                                <option value="690">Tokelau +690</option>
                                <option value="676">Tonga +676</option>
                                <option value="1868">Trinidad and Tobago +1868</option>
                                <option value="216">Tunisia +216</option>
                                <option value="90">Turkey +90</option>
                                <option value="7370">Turkmenistan +7370</option>
                                <option value="1649">Turks and Caicos Islands +1649</option>
                                <option value="688">Tuvalu +688</option>
                                <option value="256">Uganda +256</option>
                                <option value="380">Ukraine +380</option>
                                <option value="971">United Arab Emirates +971</option>
                                <option value="44">United Kingdom +44</option>
                                <option value="1">United States +1</option>
                                <option value="1">United States Minor Outlying Islands +1</option>
                                <option value="598">Uruguay +598</option>
                                <option value="998">Uzbekistan +998</option>
                                <option value="678">Vanuatu +678</option>
                                <option value="58">Venezuela +58</option>
                                <option value="84">Viet Nam +84</option>
                                <option value="1284">Virgin Islands, British +1284</option>
                                <option value="1340">Virgin Islands, U.s. +1340</option>
                                <option value="681">Wallis and Futuna +681</option>
                                <option value="212">Western Sahara +212</option>
                                <option value="967">Yemen +967</option>
                                <option value="260">Zambia +260</option>
                                <option value="263">Zimbabwe +263</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mobile">Phone Number</label>
                            <input type="text" class="form-control" name="mobile" id="m_mobile" value="{{old('mobile')}}" required>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="degree_type">Degree Type</label>
                            <select name="degree_type" class="form-control" id="degree_type" required>
                                <option value="none" selected disabled>Degree Program</option>
                                <option value="General">General</option>
                                <option value="Special">Special</option>
                            </select>
                        </div>
                        <div class="form-group" id="special_degree_div">
                            <label for="sp_degree">Select your Degree</label>
                            <select name="degree" class="form-control" id="sp_degree" >
                                <option value="" selected disabled>Select your Degree</option>
                                <option value="BCS Special in Computer Science">BCS Special in Computer Science </option>
                                <option value="BSc Special in Statistics">BSc Special in Statistics </option>
                                <option value="BSc Special in Applied Mathematics">BSc Special in Applied Mathematics</option>
                                <option value="BSc Special in Chemistry">BSc Special in Chemistry</option>
                                <option value="BSc Special in Physics">BSc Special in Physics</option>
                                <option value="BSc Special in Zoology">BSc Special in Zoology</option>
                                <option value="BSc Special in Botany">BSc Special in Botany</option>
                            </select>
                        </div>
                        <div class="form-group" id="General_degree_div">
                            <label for="g_degree">Select your Degree</label>
                            <select name="degree" class="form-control" id="g_degree" >
                                <option value="" selected disabled>Select your Degree</option>
                                <option value="BSc in physical sciences">BSc in physical sciences </option>
                                <option value="BSc in Bio Sciences">BSc in Bio Sciences </option>
                                <option value="BCS in Computer Science">BCS in Computer Science</option>
                            </select>
                        </div>
                            <script>
                                $(document).ready(function(){
                                    $("#special_degree_div").hide();
                                    $("#General_degree_div").hide();
                                    // When the value of the first select changes
                                    $("#degree_type").change(function(){

                                        // If "Have a Job" is selected, show the second select; otherwise, hide it
                                        if($(this).val() === "General"){
                                            $("#special_degree_div").hide();
                                            $("#General_degree_div").show();
                                            var selectElement = document.getElementById('sp_degree');
                                            selectElement.selectedIndex = -1;
                                        } else if($(this).val() === "Special"){
                                            $("#General_degree_div").hide();
                                            $("#special_degree_div").show();
                                            var selectElement = document.getElementById('g_degree');
                                            selectElement.selectedIndex = -1;
                                        }
                                    });
                                });
                            </script>
                            <div class="form-group">
                                <label for="user_type">Select User Type</label>
                                <select class="form-control" name="role" id="role" value="{{old('role')}}" required disabled>
                                    <option value="alumni" selected>Alumni Member</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>

                            <div class="text-center">
                                <button type="button" class="custom-button" id="addAlumni_btn">Add Member</button>
                            </div>
                    <style>
                        .custom-button {
                            background-color: #211046; /* Dark purple color */
                            color: #ffffff; /* White text color */
                            border: none;
                            padding: 10px 20px;
                            cursor: pointer;
                            border-radius: 4px;
                            transition: background-color 0.3s ease;
                        }

                        .custom-button:hover {
                            background-color: #007bff; /* Blue color on hover */
                        }
                    </style>

                </form>
                </div>
            </div>

          </div>

        </div>
      </section>


    <!-- ======= Testamonials Section ======= -->
    <section id="testamonials" class="contact">
        <div class="container">

          <div class="section-title">
            <h2>Add Testimonials</h2>
            <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
          </div>

          <div class="row" data-aos="fade-in">

            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55s</p>
                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.409982521399!2d80.57355947387634!3d5.93809209404631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae1391b4a29e707%3A0xd54277175e326bc2!2sUniversity%20of%20Ruhuna!5e0!3m2!1sen!2slk!4v1706937224326!5m2!1sen!2slk" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
              </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

              <form id="adminTestamonial" action="<?=url('/check_testamonials_admin')?>" method="POST" style="width:100%">

                  @csrf
                  <div class="row" style="width:100%">
                      <div class="form-group ">
                          <label for="name">Your Name</label>
                          <input type="text" name="name" class="form-control" id="name" style="width:100%" required>
                      </div>

                      <div class="form-group" style="width:100%">
                          <label for="topic">Subject</label>
                          <input type="text" class="form-control" name="topic" id="topic" style="width:100%" required>
                      </div>
                      <div class="form-group" style="width:100%">
                          <label for="notice">Message</label>
                          <textarea class="form-control" name="testamonial" rows="10" maxlength="350" style="width:100%" required></textarea>
                      </div>
                  </div>
                <div class="text-center">
                    <button type="button" class="custom-button" id="addTestamonial_btn">Add Testimonials</button>
                </div>
              </form>
            </div>

          </div>

        </div>
      </section><!-- End Testamonials Section -->

    <!-- ======= Display Alumni Member Section ======= -->
    <section id="alumni_member" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Alumni Members</h2>

        </div>

        <form action="<?=url('/search_alumni_member')?>" method="post">
            @csrf
                <div class="form-group">
                    <label for="search_alumni_member"><h4><b>Search Alumni Member</b></h4></label>
                    <input type="text" class="form-control" name="search_alumni_member" id="search_alumni_member">
                </div>
                <div class="text-center">
                    <button type="submit" class="custom-button">Search</button>
                </div>
        </form>

        <br>

        <table class="table" style="width: 100%">
            <thead>
                <tr>
                    <th style="width: 25%" scope="col">Name</th>
                    <th style="width: 20%" scope="col">Email</th>
                    <th style="width: 15%" scope="col">Student Number</th>
                    <th style="width: 15%" scope="col">Phone Number</th>
                    <th style="width: 25%" scope="col"></th>
                </tr>
            </thead>
            @if (isset($alumni_member) && $alumni_member->count() > 0)
                @foreach ($alumni_member as $alumni_member)
                    <tbody>
                        <tr>
                            <td style="width: 25%">{{ $alumni_member->name }}</td>
                            <td style="width: 20%">{{ $alumni_member->email }}</td>
                            <td style="width: 15%">{{ $alumni_member->sc_num }}</td>
                            <td style="width: 15%">{{ $alumni_member->m_code }}-{{ $alumni_member->mobile }}</td>
                            <td style="width: 25%">
                                <!-- Button to trigger the modal -->
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#updateModal{{ $alumni_member->id }}">
                                    Info/Update
                                </button>
                                <!-- Delete Button -->
                                <form action="{{ url('admin_userinfo_delete', $alumni_member->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>

                    <!-- Modal -->
                    <div class="modal fade" id="updateModal{{ $alumni_member->id }}" tabindex="-1" aria-labelledby="updateModalLabel{{ $alumni_member->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="updateModalLabel{{ $alumni_member->id }}">Update Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ url('admin_userinfo_update', $alumni_member->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        <!-- Input fields for updating alumni details -->
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ $alumni_member->name }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ $alumni_member->email }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="sc_num" class="form-label">Student Number</label>
                                            <input type="text" class="form-control" id="sc_num" name="sc_num" value="{{ $alumni_member->sc_num }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="m_code" class="form-label">Mobile Region Code</label>
                                            <select class="form-control" name="m_code" id="m_code" value="{{ $alumni_member->m_code }}" required>
                                                <option value="" disabled selected>Select Country Code</option>
                                                <option value="93" {{ $alumni_member->m_code === '93' ? 'selected' : '' }}>Afghanistan +93</option>
                                                <option value="358" {{ $alumni_member->m_code === '358' ? 'selected' : '' }}>Aland Islands +358</option>
                                                <option value="355" {{ $alumni_member->m_code === '355' ? 'selected' : '' }}>Albania +355</option>
                                                <option value="213" {{ $alumni_member->m_code === '213' ? 'selected' : '' }}>Algeria +213</option>
                                                <option value="1684" {{ $alumni_member->m_code === '1684' ? 'selected' : '' }}>American Samoa +1684</option>
                                                <option value="376" {{ $alumni_member->m_code === '376' ? 'selected' : '' }}>Andorra +376</option>
                                                <option value="244" {{ $alumni_member->m_code === '244' ? 'selected' : '' }}>Angola +244</option>
                                                <option value="1264" {{ $alumni_member->m_code === '1264' ? 'selected' : '' }}>Anguilla +1264</option>
                                                <option value="672" {{ $alumni_member->m_code === '672' ? 'selected' : '' }}>Antarctica +672</option>
                                                <option value="1268" {{ $alumni_member->m_code === '1268' ? 'selected' : '' }}>Antigua and Barbuda +1268</option>
                                                <option value="54" {{ $alumni_member->m_code === '54' ? 'selected' : '' }}>Argentina +54</option>
                                                <option value="374" {{ $alumni_member->m_code === '374' ? 'selected' : '' }}>Armenia +374</option>
                                                <option value="297" {{ $alumni_member->m_code === '297' ? 'selected' : '' }}>Aruba +297</option>
                                                <option value="61" {{ $alumni_member->m_code === '61' ? 'selected' : '' }}>Australia +61</option>
                                                <option value="43" {{ $alumni_member->m_code === '43' ? 'selected' : '' }}>Austria +43</option>
                                                <option value="994" {{ $alumni_member->m_code === '994' ? 'selected' : '' }}>Azerbaijan +994</option>
                                                <option value="1242" {{ $alumni_member->m_code === '1242' ? 'selected' : '' }}>Bahamas +1242</option>
                                                <option value="973" {{ $alumni_member->m_code === '973' ? 'selected' : '' }}>Bahrain +973</option>
                                                <option value="880" {{ $alumni_member->m_code === '880' ? 'selected' : '' }}>Bangladesh +880</option>
                                                <option value="1246" {{ $alumni_member->m_code === '1246' ? 'selected' : '' }}>Barbados +1246</option>
                                                <option value="375" {{ $alumni_member->m_code === '375' ? 'selected' : '' }}>Belarus +375</option>
                                                <option value="32" {{ $alumni_member->m_code === '32' ? 'selected' : '' }}>Belgium +32</option>
                                                <option value="501" {{ $alumni_member->m_code === '501' ? 'selected' : '' }}>Belize +501</option>
                                                <option value="229" {{ $alumni_member->m_code === '229' ? 'selected' : '' }}>Benin +229</option>
                                                <option value="1441" {{ $alumni_member->m_code === '1441' ? 'selected' : '' }}>Bermuda +1441</option>
                                                <option value="975" {{ $alumni_member->m_code === '975' ? 'selected' : '' }}>Bhutan +975</option>
                                                <option value="591" {{ $alumni_member->m_code === '591' ? 'selected' : '' }}>Bolivia +591</option>
                                                <option value="599" {{ $alumni_member->m_code === '599' ? 'selected' : '' }}>Bonaire, Sint Eustatius and Saba +599</option>
                                                <option value="387" {{ $alumni_member->m_code === '387' ? 'selected' : '' }}>Bosnia and Herzegovina +387</option>
                                                <option value="267" {{ $alumni_member->m_code === '267' ? 'selected' : '' }}>Botswana +267</option>
                                                <option value="55" {{ $alumni_member->m_code === '55' ? 'selected' : '' }}>Bouvet Island +55</option>
                                                <option value="55" {{ $alumni_member->m_code === '55' ? 'selected' : '' }}>Brazil +55</option>
                                                <option value="246" {{ $alumni_member->m_code === '246' ? 'selected' : '' }}>British Indian Ocean Territory +246</option>
                                                <option value="673" {{ $alumni_member->m_code === '673' ? 'selected' : '' }}>Brunei Darussalam +673</option>
                                                <option value="359" {{ $alumni_member->m_code === '359' ? 'selected' : '' }}>Bulgaria +359</option>
                                                <option value="226" {{ $alumni_member->m_code === '226' ? 'selected' : '' }}>Burkina Faso +226</option>
                                                <option value="257" {{ $alumni_member->m_code === '257' ? 'selected' : '' }}>Burundi +257</option>
                                                <option value="855" {{ $alumni_member->m_code === '855' ? 'selected' : '' }}>Cambodia +855</option>
                                                <option value="237" {{ $alumni_member->m_code === '237' ? 'selected' : '' }}>Cameroon +237</option>
                                                <option value="1" {{ $alumni_member->m_code === '1' ? 'selected' : '' }}>Canada +1</option>
                                                <option value="238" {{ $alumni_member->m_code === '238' ? 'selected' : '' }}>Cape Verde +238</option>
                                                <option value="1345" {{ $alumni_member->m_code === '1345' ? 'selected' : '' }}>Cayman Islands +1345</option>
                                                <option value="236" {{ $alumni_member->m_code === '236' ? 'selected' : '' }}>Central African Republic +236</option>
                                                <option value="235" {{ $alumni_member->m_code === '235' ? 'selected' : '' }}>Chad +235</option>
                                                <option value="56" {{ $alumni_member->m_code === '56' ? 'selected' : '' }}>Chile +56</option>
                                                <option value="86" {{ $alumni_member->m_code === '86' ? 'selected' : '' }}>China +86</option>
                                                <option value="61" {{ $alumni_member->m_code === '61' ? 'selected' : '' }}>Christmas Island +61</option>
                                                <option value="672" {{ $alumni_member->m_code === '672' ? 'selected' : '' }}>Cocos (Keeling) Islands +672</option>
                                                <option value="57" {{ $alumni_member->m_code === '57' ? 'selected' : '' }}>Colombia +57</option>
                                                <option value="269" {{ $alumni_member->m_code === '269' ? 'selected' : '' }}>Comoros +269</option>
                                                <option value="242" {{ $alumni_member->m_code === '242' ? 'selected' : '' }}>Congo +242</option>
                                                <option value="242" {{ $alumni_member->m_code === '242' ? 'selected' : '' }}>Congo, Democratic Republic of the Congo +242</option>
                                                <option value="682" {{ $alumni_member->m_code === '682' ? 'selected' : '' }}>Cook Islands +682</option>
                                                <option value="506" {{ $alumni_member->m_code === '506' ? 'selected' : '' }}>Costa Rica +506</option>
                                                <option value="225" {{ $alumni_member->m_code === '225' ? 'selected' : '' }}>Cote D Ivoire +225</option>
                                                <option value="385" {{ $alumni_member->m_code === '385' ? 'selected' : '' }}>Croatia +385</option>
                                                <option value="53" {{ $alumni_member->m_code === '53' ? 'selected' : '' }}>Cuba +53</option>
                                                <option value="357" {{ $alumni_member->m_code === '357' ? 'selected' : '' }}>Cyprus +357</option>
                                                <option value="420" {{ $alumni_member->m_code === '420' ? 'selected' : '' }}>Czech Republic +420</option>
                                                <option value="45" {{ $alumni_member->m_code === '45' ? 'selected' : '' }}>Denmark +45</option>
                                                <option value="253" {{ $alumni_member->m_code === '253' ? 'selected' : '' }}>Djibouti +253</option>
                                                <option value="1767" {{ $alumni_member->m_code === '1767' ? 'selected' : '' }}>Dominica +1767</option>
                                                <option value="1809" {{ $alumni_member->m_code === '1809' ? 'selected' : '' }}>Dominican Republic +1809</option>
                                                <option value="593" {{ $alumni_member->m_code === '593' ? 'selected' : '' }}>Ecuador +593</option>
                                                <option value="20" {{ $alumni_member->m_code === '20' ? 'selected' : '' }}>Egypt +20</option>
                                                <option value="503" {{ $alumni_member->m_code === '503' ? 'selected' : '' }}>El Salvador +503</option>
                                                <option value="240" {{ $alumni_member->m_code === '240' ? 'selected' : '' }}>Equatorial Guinea +240</option>
                                                <option value="291" {{ $alumni_member->m_code === '291' ? 'selected' : '' }}>Eritrea +291</option>
                                                <option value="372" {{ $alumni_member->m_code === '372' ? 'selected' : '' }}>Estonia +372</option>
                                                <option value="251" {{ $alumni_member->m_code === '251' ? 'selected' : '' }}>Ethiopia +251</option>
                                                <option value="500" {{ $alumni_member->m_code === '500' ? 'selected' : '' }}>Falkland Islands +500</option>
                                                <option value="298" {{ $alumni_member->m_code === '298' ? 'selected' : '' }}>Faroe Islands +298</option>
                                                <option value="33" {{ $alumni_member->m_code === '33' ? 'selected' : '' }}>France +33</option>
                                                <option value="594" {{ $alumni_member->m_code === '594' ? 'selected' : '' }}>French Guiana +594</option>
                                                <option value="689" {{ $alumni_member->m_code === '689' ? 'selected' : '' }}>French Polynesia +689</option>
                                                <option value="241" {{ $alumni_member->m_code === '241' ? 'selected' : '' }}>Gabon +241</option>
                                                <option value="220" {{ $alumni_member->m_code === '220' ? 'selected' : '' }}>Gambia +220</option>
                                                <option value="995" {{ $alumni_member->m_code === '995' ? 'selected' : '' }}>Georgia +995</option>
                                                <option value="49" {{ $alumni_member->m_code === '49' ? 'selected' : '' }}>Germany +49</option>
                                                <option value="233" {{ $alumni_member->m_code === '233' ? 'selected' : '' }}>Ghana +233</option>
                                                <option value="350" {{ $alumni_member->m_code === '350' ? 'selected' : '' }}>Gibraltar +350</option>
                                                <option value="30" {{ $alumni_member->m_code === '30' ? 'selected' : '' }}>Greece +30</option>
                                                <option value="299" {{ $alumni_member->m_code === '299' ? 'selected' : '' }}>Greenland +299</option>
                                                <option value="1473" {{ $alumni_member->m_code === '1473' ? 'selected' : '' }}>Grenada +1473</option>
                                                <option value="590" {{ $alumni_member->m_code === '590' ? 'selected' : '' }}>Guadeloupe +590</option>
                                                <option value="671" {{ $alumni_member->m_code === '671' ? 'selected' : '' }}>Guam +671</option>
                                                <option value="502" {{ $alumni_member->m_code === '502' ? 'selected' : '' }}>Guatemala +502</option>
                                                <option value="224" {{ $alumni_member->m_code === '224' ? 'selected' : '' }}>Guinea +224</option>
                                                <option value="240" {{ $alumni_member->m_code === '240' ? 'selected' : '' }}>Guinea-Bissau +240</option>
                                                <option value="595" {{ $alumni_member->m_code === '595' ? 'selected' : '' }}>Guyana +595</option>
                                                <option value="509" {{ $alumni_member->m_code === '509' ? 'selected' : '' }}>Haiti +509</option>
                                                <option value="504" {{ $alumni_member->m_code === '504' ? 'selected' : '' }}>Honduras +504</option>
                                                <option value="852" {{ $alumni_member->m_code === '852' ? 'selected' : '' }}>Hong Kong +852</option>
                                                <option value="36" {{ $alumni_member->m_code === '36' ? 'selected' : '' }}>Hungary +36</option>
                                                <option value="354" {{ $alumni_member->m_code === '354' ? 'selected' : '' }}>Iceland +354</option>
                                                <option value="91" {{ $alumni_member->m_code === '91' ? 'selected' : '' }}>India +91</option>
                                                <option value="62" {{ $alumni_member->m_code === '62' ? 'selected' : '' }}>Indonesia +62</option>
                                                <option value="98" {{ $alumni_member->m_code === '98' ? 'selected' : '' }}>Iran +98</option>
                                                <option value="964" {{ $alumni_member->m_code === '964' ? 'selected' : '' }}>Iraq +964</option>
                                                <option value="353" {{ $alumni_member->m_code === '353' ? 'selected' : '' }}>Ireland +353</option>
                                                <option value="972" {{ $alumni_member->m_code === '972' ? 'selected' : '' }}>Israel +972</option>
                                                <option value="39" {{ $alumni_member->m_code === '39' ? 'selected' : '' }}>Italy +39</option>
                                                <option value="1876" {{ $alumni_member->m_code === '1876' ? 'selected' : '' }}>Jamaica +1876</option>
                                                <option value="81" {{ $alumni_member->m_code === '81' ? 'selected' : '' }}>Japan +81</option>
                                                <option value="44" {{ $alumni_member->m_code === '44' ? 'selected' : '' }}>Jersey +44</option>
                                                <option value="962" {{ $alumni_member->m_code === '962' ? 'selected' : '' }}>Jordan +962</option>
                                                <option value="7" {{ $alumni_member->m_code === '7' ? 'selected' : '' }}>Kazakhstan +7</option>
                                                <option value="254" {{ $alumni_member->m_code === '254' ? 'selected' : '' }}>Kenya +254</option>
                                                <option value="686" {{ $alumni_member->m_code === '686' ? 'selected' : '' }}>Kiribati +686</option>
                                                <option value="850" {{ $alumni_member->m_code === '850' ? 'selected' : '' }}>Korea, Democratic People’s Republic of +850</option>
                                                <option value="82" {{ $alumni_member->m_code === '82' ? 'selected' : '' }}>Korea, Republic of +82</option>
                                                <option value="965" {{ $alumni_member->m_code === '965' ? 'selected' : '' }}>Kuwait +965</option>
                                                <option value="996" {{ $alumni_member->m_code === '996' ? 'selected' : '' }}>Kyrgyzstan +996</option>
                                                <option value="856" {{ $alumni_member->m_code === '856' ? 'selected' : '' }}>Lao People’s Democratic Republic +856</option>
                                                <option value="371" {{ $alumni_member->m_code === '371' ? 'selected' : '' }}>Latvia +371</option>
                                                <option value="961" {{ $alumni_member->m_code === '961' ? 'selected' : '' }}>Lebanon +961</option>
                                                <option value="266" {{ $alumni_member->m_code === '266' ? 'selected' : '' }}>Lesotho +266</option>
                                                <option value="231" {{ $alumni_member->m_code === '231' ? 'selected' : '' }}>Liberia +231</option>
                                                <option value="218" {{ $alumni_member->m_code === '218' ? 'selected' : '' }}>Libya +218</option>
                                                <option value="423" {{ $alumni_member->m_code === '423' ? 'selected' : '' }}>Liechtenstein +423</option>
                                                <option value="370" {{ $alumni_member->m_code === '370' ? 'selected' : '' }}>Lithuania +370</option>
                                                <option value="352" {{ $alumni_member->m_code === '352' ? 'selected' : '' }}>Luxembourg +352</option>
                                                <option value="261" {{ $alumni_member->m_code === '261' ? 'selected' : '' }}>Madagascar +261</option>
                                                <option value="265" {{ $alumni_member->m_code === '265' ? 'selected' : '' }}>Malawi +265</option>
                                                <option value="60" {{ $alumni_member->m_code === '60' ? 'selected' : '' }}>Malaysia +60</option>
                                                <option value="960" {{ $alumni_member->m_code === '960' ? 'selected' : '' }}>Maldives +960</option>
                                                <option value="223" {{ $alumni_member->m_code === '223' ? 'selected' : '' }}>Mali +223</option>
                                                <option value="356" {{ $alumni_member->m_code === '356' ? 'selected' : '' }}>Malta +356</option>
                                                <option value="692" {{ $alumni_member->m_code === '692' ? 'selected' : '' }}>Marshall Islands +692</option>
                                                <option value="596" {{ $alumni_member->m_code === '596' ? 'selected' : '' }}>Martinique +596</option>
                                                <option value="222" {{ $alumni_member->m_code === '222' ? 'selected' : '' }}>Mauritania +222</option>
                                                <option value="230" {{ $alumni_member->m_code === '230' ? 'selected' : '' }}>Mauritius +230</option>
                                                <option value="262" {{ $alumni_member->m_code === '262' ? 'selected' : '' }}>Mayotte +262</option>
                                                <option value="52" {{ $alumni_member->m_code === '52' ? 'selected' : '' }}>Mexico +52</option>
                                                <option value="691" {{ $alumni_member->m_code === '691' ? 'selected' : '' }}>Micronesia +691</option>
                                                <option value="373" {{ $alumni_member->m_code === '373' ? 'selected' : '' }}>Moldova +373</option>
                                                <option value="377" {{ $alumni_member->m_code === '377' ? 'selected' : '' }}>Monaco +377</option>
                                                <option value="976" {{ $alumni_member->m_code === '976' ? 'selected' : '' }}>Mongolia +976</option>
                                                <option value="1664" {{ $alumni_member->m_code === '1664' ? 'selected' : '' }}>Montserrat +1664</option>
                                                <option value="212" {{ $alumni_member->m_code === '212' ? 'selected' : '' }}>Morocco +212</option>
                                                <option value="258" {{ $alumni_member->m_code === '258' ? 'selected' : '' }}>Mozambique +258</option>
                                                <option value="95" {{ $alumni_member->m_code === '95' ? 'selected' : '' }}>Myanmar +95</option>
                                                <option value="264" {{ $alumni_member->m_code === '264' ? 'selected' : '' }}>Namibia +264</option>
                                                <option value="674" {{ $alumni_member->m_code === '674' ? 'selected' : '' }}>Nauru +674</option>
                                                <option value="977" {{ $alumni_member->m_code === '977' ? 'selected' : '' }}>Nepal +977</option>
                                                <option value="31" {{ $alumni_member->m_code === '31' ? 'selected' : '' }}>Netherlands +31</option>
                                                <option value="64" {{ $alumni_member->m_code === '64' ? 'selected' : '' }}>New Zealand +64</option>
                                                <option value="505" {{ $alumni_member->m_code === '505' ? 'selected' : '' }}>Nicaragua +505</option>
                                                <option value="227" {{ $alumni_member->m_code === '227' ? 'selected' : '' }}>Niger +227</option>
                                                <option value="234" {{ $alumni_member->m_code === '234' ? 'selected' : '' }}>Nigeria +234</option>
                                                <option value="683" {{ $alumni_member->m_code === '683' ? 'selected' : '' }}>Niue +683</option>
                                                <option value="672" {{ $alumni_member->m_code === '672' ? 'selected' : '' }}>Norfolk Island +672</option>
                                                <option value="670" {{ $alumni_member->m_code === '670' ? 'selected' : '' }}>Northern Mariana Islands +670</option>
                                                <option value="47" {{ $alumni_member->m_code === '47' ? 'selected' : '' }}>Norway +47</option>
                                                <option value="968" {{ $alumni_member->m_code === '968' ? 'selected' : '' }}>Oman +968</option>
                                                <option value="92" {{ $alumni_member->m_code === '92' ? 'selected' : '' }}>Pakistan +92</option>
                                                <option value="680" {{ $alumni_member->m_code === '680' ? 'selected' : '' }}>Palau +680</option>
                                                <option value="970" {{ $alumni_member->m_code === '970' ? 'selected' : '' }}>Palestine +970</option>
                                                <option value="507" {{ $alumni_member->m_code === '507' ? 'selected' : '' }}>Panama +507</option>
                                                <option value="675" {{ $alumni_member->m_code === '675' ? 'selected' : '' }}>Papua New Guinea +675</option>
                                                <option value="595" {{ $alumni_member->m_code === '595' ? 'selected' : '' }}>Paraguay +595</option>
                                                <option value="51" {{ $alumni_member->m_code === '51' ? 'selected' : '' }}>Peru +51</option>
                                                <option value="63" {{ $alumni_member->m_code === '63' ? 'selected' : '' }}>Philippines +63</option>
                                                <option value="48" {{ $alumni_member->m_code === '48' ? 'selected' : '' }}>Poland +48</option>
                                                <option value="351" {{ $alumni_member->m_code === '351' ? 'selected' : '' }}>Portugal +351</option>
                                                <option value="1787" {{ $alumni_member->m_code === '1787' ? 'selected' : '' }}>Puerto Rico +1787</option>
                                                <option value="974" {{ $alumni_member->m_code === '974' ? 'selected' : '' }}>Qatar +974</option>
                                                <option value="262" {{ $alumni_member->m_code === '262' ? 'selected' : '' }}>Réunion +262</option>
                                                <option value="40" {{ $alumni_member->m_code === '40' ? 'selected' : '' }}>Romania +40</option>
                                                <option value="7" {{ $alumni_member->m_code === '7' ? 'selected' : '' }}>Russian Federation +7</option>
                                                <option value="250" {{ $alumni_member->m_code === '250' ? 'selected' : '' }}>Rwanda +250</option>
                                                <option value="685" {{ $alumni_member->m_code === '685' ? 'selected' : '' }}>Samoa +685</option>
                                                <option value="378" {{ $alumni_member->m_code === '378' ? 'selected' : '' }}>San Marino +378</option>
                                                <option value="239" {{ $alumni_member->m_code === '239' ? 'selected' : '' }}>Sao Tome and Principe +239</option>
                                                <option value="966" {{ $alumni_member->m_code === '966' ? 'selected' : '' }}>Saudi Arabia +966</option>
                                                <option value="221" {{ $alumni_member->m_code === '221' ? 'selected' : '' }}>Senegal +221</option>
                                                <option value="381" {{ $alumni_member->m_code === '381' ? 'selected' : '' }}>Serbia +381</option>
                                                <option value="248" {{ $alumni_member->m_code === '248' ? 'selected' : '' }}>Seychelles +248</option>
                                                <option value="232" {{ $alumni_member->m_code === '232' ? 'selected' : '' }}>Sierra Leone +232</option>
                                                <option value="65" {{ $alumni_member->m_code === '65' ? 'selected' : '' }}>Singapore +65</option>
                                                <option value="421" {{ $alumni_member->m_code === '421' ? 'selected' : '' }}>Slovakia +421</option>
                                                <option value="386" {{ $alumni_member->m_code === '386' ? 'selected' : '' }}>Slovenia +386</option>
                                                <option value="677" {{ $alumni_member->m_code === '677' ? 'selected' : '' }}>Solomon Islands +677</option>
                                                <option value="252" {{ $alumni_member->m_code === '252' ? 'selected' : '' }}>Somalia +252</option>
                                                <option value="27" {{ $alumni_member->m_code === '27' ? 'selected' : '' }}>South Africa +27</option>
                                                <option value="82" {{ $alumni_member->m_code === '82' ? 'selected' : '' }}>South Korea +82</option>
                                                <option value="211" {{ $alumni_member->m_code === '211' ? 'selected' : '' }}>South Sudan +211</option>
                                                <option value="34" {{ $alumni_member->m_code === '34' ? 'selected' : '' }}>Spain +34</option>
                                                <option value="94" {{ $alumni_member->m_code === '94' ? 'selected' : '' }}>Sri Lanka +94</option>
                                                <option value="1" {{ $alumni_member->m_code === '1' ? 'selected' : '' }}>United States +1</option>
                                                <option value="598" {{ $alumni_member->m_code === '598' ? 'selected' : '' }}>Uruguay +598</option>
                                                <option value="998" {{ $alumni_member->m_code === '998' ? 'selected' : '' }}>Uzbekistan +998</option>
                                                <option value="678" {{ $alumni_member->m_code === '678' ? 'selected' : '' }}>Vanuatu +678</option>
                                                <option value="379" {{ $alumni_member->m_code === '379' ? 'selected' : '' }}>Vatican City +379</option>
                                                <option value="58" {{ $alumni_member->m_code === '58' ? 'selected' : '' }}>Venezuela +58</option>
                                                <option value="84" {{ $alumni_member->m_code === '84' ? 'selected' : '' }}>Vietnam +84</option>
                                                <option value="681" {{ $alumni_member->m_code === '681' ? 'selected' : '' }}>Wallis and Futuna +681</option>
                                                <option value="967" {{ $alumni_member->m_code === '967' ? 'selected' : '' }}>Yemen +967</option>
                                                <option value="260" {{ $alumni_member->m_code === '260' ? 'selected' : '' }}>Zambia +260</option>
                                                <option value="263" {{ $alumni_member->m_code === '263' ? 'selected' : '' }}>Zimbabwe +263</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="mobile" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" id="mobile" name="mobile" value="{{ $alumni_member->mobile }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="degree_type" class="form-label">Degree Programe</label>
                                            <select name="degree_type" id="degree_type" class="form-control" value="{{ $alumni_member->degree_type }}" required>
                                                <option value="none" selected disabled>Degree Programe</option>
                                                <option value="General">General</option>
                                                <option value="Special">Special</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="degree" class="form-label">Degree</label>
                                            <input type="text" class="form-control" id="degree" name="degree" value="{{ $alumni_member->degree }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="id_num" class="form-label">ID Number</label>
                                            <input type="text" class="form-control" id="id_num" name="id_num" value="{{ $alumni_member->id_num }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="country" class="form-label">Country</label>
                                            <input type="text" class="form-control" id="country" name="country" value="{{ $alumni_member->country }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="address" name="address" value="{{ $alumni_member->address }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="graduation_year" class="form-label">Graduation Year</label>
                                            <input type="text" class="form-control" id="graduation_year" name="graduation_year" required value="{{ $alumni_member->graduation_year }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="designation" class="form-label">Designation</label>
                                            <input type="text" class="form-control" id="designation" name="designation" value="{{ $alumni_member->designation }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="sector" class="form-label">Sector</label>
                                            <input type="text" class="form-control" id="sector" name="sector" value="{{ $alumni_member->sector }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="path" class="form-label">Profile Picture</label>
                                            <input type="file" class="form-control" id="path" name="path">
                                            <small>Current: {{ $alumni_member->path }}</small>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <tbody>
                    <tr>
                        <td colspan="5" style="text-align: center;">No Results Found</td>
                    </tr>
                </tbody>
            @endif
        </table>
    </div>
    </section><!-- End display alumni member Section -->


  </main><!-- End #main -->

  <!-- footer section start
    <div class="footer_section layout_padding">
        <div class="container">
        <div class="row" style="display:flex; align-items:right; justify-content:right;">
            <div class="col-lg-5 col-sm-6">
                <h3 class="useful_text">About</h3>
            </div>

            <div class="col-lg-4 col-sm-6">
                <h1 class="useful_text">Useful Link</h1>
                <div class="dummy_text">
                <ul>
                    <li><a href="https://www.sci.ruh.ac.lk/FacultyofScience/">Faculty of Science</a></li>
                    <li><a href="https://www.ruh.ac.lk/index.php/en/">University of Ruhuna</a></li>
                </ul>
                </div>
            </div>

        </div>
        </div>
    </div>
     footer section end -->



    <!--User Add Modal script-->
    <script>
        function showAddUserModal(actionFunction) {
            // Set the onclick event of the confirmation button to the passed function
            document.getElementById('confirmBtn').onclick = actionFunction;
            // Show the modal
            $('#staticBackdrop').modal('show');
            var paragraph1 = document.getElementById('staticBackdropLabel');
            paragraph1.innerHTML = 'Add Alumni Member Confirmation';
            var paragraph2 = document.getElementById('staticBackdropLabe2');
            paragraph2.innerHTML = 'Are you sure you want to add the user?';
            var button2 = document.getElementById('confirmBtn');
            button2.innerHTML = 'Confirm';
        }

        function addUser() {

            var updateForm = document.getElementById('addAlumni');
            if (updateForm) {
                updateForm.action = '<?=url('/add_member_by_admin')?>'; // Ensure this line is directly in the Blade file
                updateForm.submit();
            } else {
                console.error('Add form not found');
            }

        }

        // Triggering the modal with different actions
        document.getElementById('addAlumni_btn').addEventListener('click', function() {
            showAddUserModal(addUser);
        });

    </script>
<!-- Add Testamonials Modal script-->
<script>
    function showTestamonialModal(actionFunction) {
        // Set the onclick event of the confirmation button to the passed function
        document.getElementById('confirmBtn').onclick = actionFunction;
        // Show the modal
        $('#staticBackdrop').modal('show');
        var paragraph1 = document.getElementById('staticBackdropLabel');
        paragraph1.innerHTML = 'Add Testamonial Confirmation';
        var paragraph2 = document.getElementById('staticBackdropLabe2');
        paragraph2.innerHTML = 'Are you sure you want to add this?';
        var button2 = document.getElementById('confirmBtn');
        button2.innerHTML = 'Yes';
    }

    function addTestamonial() {
        // Correctly target the logout form by ID and submit it
        var testamonialForm = document.getElementById('adminTestamonial');
        if (testamonialForm) {
            testamonialForm.action =
            '<?=url('/check_testamonials_admin')?>'; // Ensure this line is directly in the Blade file
            testamonialForm.submit();
        } else {
            console.error('testamonialForm not found');
        }

    }
    // Triggering the modal with different actions
    document.getElementById('addTestamonial_btn').addEventListener('click', function() {
        showTestamonialModal(addTestamonial);
    });
</script>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('vendor/typed.js/typed.umd.js')}}"></script>
  <script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/user.js')}}"></script>

  <!--passwod-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>

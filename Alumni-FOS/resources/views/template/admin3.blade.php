<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Update Profile</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Template Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}">

    <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
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

            @if (session('succ_notice'))
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
                    <img src="{{ asset('storage/' . auth()->guard('webadmin')->user()->path) }}" alt=""
                        class="img-fluid rounded-circle">
                    <h4 style="text-align: center" class="text-light">{{ auth()->guard('webadmin')->user()->name }}
                    </h4>
                @else
                    <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
                    <h4 style="text-align: center" class="text-light">{{ auth()->guard('webadmin')->user()->name }}
                    </h4>
                @endif
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="#update" class="nav-link scrollto"><i class="bx bx-user-plus"></i> <span>Add
                                Admin</span></a></li>
                    <li><a href="#check_testimonials" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                            <span>Check Testimonials</span></a></li>
                    <li><a href="#notices" class="nav-link scrollto"><i class="bx bx-book-add"></i> <span>Add
                                Notices</span></a></li>
                    <li><a href="#search_nortices" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                            <span>Search Notices</span></a></li>
                    <li><a href="#add_images" class="nav-link scrollto"><i class="bx bx-image-add"></i> <span>Add
                                Images</span></a></li>
                    <li><a href="/admin" class="nav-link scrollto"><i class="bx bx-arrow-back"></i> <button
                                type="submit"><span style="color: #6f7180">Back</span></button></a></li>
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

        <!-- ======= Update Section ======= -->
        <section id="update" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>User Registration</h2>
                </div>

                <div class="row" data-aos="fade-in">


                    <div class="col-lg-12 d-flex align-items-stretch" style="padding-left: 5%">
                        <div id="admin_personal_details">
                            <form id="addAdminForm" action="<?= url('/add_admin_by_admin') ?>" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="address">
                                        <h2><b>Register Admin</b></h2>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="address">
                                        <h4><b>Admin Personal Details</b></h4>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="m_code">Mobile Code</label>
                                        <select name="m_code" class="form-control" id="m_code">
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
                                            <option value="242">Congo, Democratic Republic of the Congo +242
                                            </option>
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
                                            <option value="389">Macedonia, the Former Yugoslav Republic of +389
                                            </option>
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
                                            <option value="500">South Georgia and the South Sandwich Islands +500
                                            </option>
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
                                        <input type="text" class="form-control" name="mobile" id="mobile" required>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="user_type">Select User Type</label>
                                    <select class="form-control" name="role" id="role"
                                        value="{{ old('role') }}" required disabled>
                                        <option value="admin" selected>Admin</option>
                                    </select>
                                </div>

                                <br><br>

                                <div id="login_details">
                                    <div class="form-group">
                                        <label for="address">
                                            <h4><b>Login Details</b></h4>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name="email" id="email"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" name="password" id="a_password"
                                            onfocus="showaPassword()" onblur="maskaPassword()" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="a_confirmPassword">Confirm Password</label>
                                        <input type="text" class="form-control" name="confirmPassword"
                                            id="a_confirmPassword" onfocus="showaConfirmPassword()"
                                            onblur="maskaConfirmPassword()" required>
                                    </div>
                                </div>

                                <script>
                                    function showaPassword() {
                                        const passwordInput = document.getElementById('a_password');
                                        passwordInput.type = 'text';
                                    }

                                    function maskaPassword() {
                                        const passwordInput = document.getElementById('a_password');
                                        passwordInput.type = 'password';
                                    }

                                    function showaConfirmPassword() {
                                        const confirmPasswordInput = document.getElementById('a_confirmPassword');
                                        confirmPasswordInput.type = 'text';
                                    }

                                    function maskaConfirmPassword() {
                                        const confirmPasswordInput = document.getElementById('a_confirmPassword');
                                        confirmPasswordInput.type = 'password';
                                    }
                                </script>


                                <style>
                                    .custom-button {
                                        background-color: #211046;
                                        /* Dark purple color */
                                        color: #ffffff;
                                        /* White text color */
                                        border: none;
                                        padding: 10px 20px;
                                        cursor: pointer;
                                        border-radius: 4px;
                                        transition: background-color 0.3s ease;
                                    }

                                    .custom-button:hover {
                                        background-color: #007bff;
                                        /* Blue color on hover */
                                    }
                                </style>
                                <div class="text-center">
                                    <button type="button" class="custom-button" id="addAdmin_btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>


                    <style>
                        .custom-button {
                            background-color: #211046;
                            /* Dark purple color */
                            color: #ffffff;
                            /* White text color */
                            border: none;
                            padding: 10px 20px;
                            cursor: pointer;
                            border-radius: 4px;
                            transition: background-color 0.3s ease;
                        }

                        .custom-button:hover {
                            background-color: #007bff;
                            /* Blue color on hover */
                        }
                    </style>
                    </form>
                </div>
            </div>

            </div>

            </div>
        </section>
        <!-- End Update Section -->


        <!-- ======= Check Testimonials Section ======= -->


        <section id="check_testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Check Testimonials</h2>
                    <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
                </div>

          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up">
                  @if(isset($last_testamonials) && $last_testamonials->count() >= 1)
                      <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          {{ $last_testamonials[0]->testamonial }}
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                      <!--<img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">-->
                      <h2><b>{{ $last_testamonials[0]->topic }}</b></h2>
                      <form method="GET" action="<?= url('/accept_testamonials/' . $last_testamonials[0]->id) ?>">
                        @csrf
                        <h3 style="color: rgb(68, 68, 68)"><input type=submit value="Accept"></a></h3>
                        <h5><a href="/check_testamonials_del/{{$last_testamonials[0]->id}}">Delete</a></h5>
                      </form>
                  @else
                      <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              No More Records
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                  @endif
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="1000">
                  @if(isset($last_testamonials) && $last_testamonials->count() >= 2)
                      <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          {{ $last_testamonials[1]->testamonial }}
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                      <!--<img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">-->
                      <h2><b>{{ $last_testamonials[1]->topic }}</b></h2>
                      <form method="GET" action="<?=url('/accept_testamonials/' . $last_testamonials[1]->id)?>}">
                        @csrf
                        <h3 style="color: rgb(68, 68, 68)"><input type=submit value="Accept"></a></h3>
                        <h5><a href="/check_testamonials_del/{{$last_testamonials[1]->id}}">Delete</a></h5>
                      </form>
                  @else
                      <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              No More Records
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                  @endif
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="2000">
                  @if(isset($last_testamonials) && $last_testamonials->count() >= 3)
                      <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          {{ $last_testamonials[2]->testamonial }}
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                      <!--<img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">-->
                      <h2><b>{{ $last_testamonials[2]->topic }}</b></h2>
                      <form method="GET" action="<?=url('/accept_testamonials/' . $last_testamonials[2]->id)?>}">
                        @csrf
                        <h3 style="color: rgb(68, 68, 68)"><input type=submit value="Accept"></a></h3>
                        <h5><a href="/check_testamonials_del/{{$last_testamonials[2]->id}}">Delete</a></h5>
                      </form>
                  @else
                      <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              No More Records
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                  @endif
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="3000">
                  @if(isset($last_testamonials) && $last_testamonials->count() >= 4)
                      <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          {{ $last_testamonials[3]->testamonial }}
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                      <!--<img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">-->
                      <h2><b>{{ $last_testamonials[3]->topic }}</b></h2>
                      <form method="GET" action="<?=url('/accept_testamonials/' . $last_testamonials[3]->id)?>}">
                        @csrf
                        <h3 style="color: rgb(68, 68, 68)"><input type=submit value="Accept"></a></h3>
                        <h5><a href="/check_testamonials_del/{{$last_testamonials[3]->id}}">Delete</a></h5>
                      </form>
                  @else
                      <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              No More Records
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                  @endif
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="4000">
                  @if(isset($last_testamonials) && $last_testamonials->count() >= 5)
                      <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          {{ $last_testamonials[4]->testamonial }}
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                      <!--<img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">-->
                      <h2><b>{{ $last_testamonials[4]->topic }}</b></h2>
                      <form method="GET" action="<?=url('/accept_testamonials/' . $last_testamonials[4]->id)?>}">
                        @csrf
                        <h3 style="color: rgb(68, 68, 68)"><input type=submit value="Accept"></a></h3>
                        <h5><a href="/check_testamonials_del/{{$last_testamonials[4]->id}}">Delete</a></h5>
                      </form>
                  @else
                      <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              No More Records
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                  @endif
                </div>
              </div>


                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="3000">
                                @if (isset($last_testamonials) && $last_testamonials->count() >= 4)
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {{ $last_testamonials[3]->testamonial }}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <!--<img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">-->
                                    <h2><b>{{ $last_testamonials[3]->topic }}</b></h2>
                                    <h3 style="color: rgb(68, 68, 68)">Accept</h3>
                                    <h5><a href="/check_testamonials_del/{{ $last_testamonials[3]->id }}">Delete</a>
                                    </h5>
                                @else
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        No More Records
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="4000">
                                @if (isset($last_testamonials) && $last_testamonials->count() >= 5)
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {{ $last_testamonials[4]->testamonial }}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <!--<img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">-->
                                    <h2><b>{{ $last_testamonials[4]->topic }}</b></h2>
                                    <h3 style="color: rgb(68, 68, 68)">Accept</h3>
                                    <h5><a href="/check_testamonials_del/{{ $last_testamonials[4]->id }}">Delete</a>
                                    </h5>
                                @else
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        No More Records
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!--End Testimonials Section -->

        <!-- ======= Notices Section ======= -->
        <section id="notices" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Add Notices</h2>
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

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.409982521399!2d80.57355947387634!3d5.93809209404631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae1391b4a29e707%3A0xd54277175e326bc2!2sUniversity%20of%20Ruhuna!5e0!3m2!1sen!2slk!4v1706937224326!5m2!1sen!2slk"
                                frameborder="0" style="border:0; width: 100%; height: 290px;"
                                allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form id="addNoticeForm" action="<?= url('/add_notice') ?>" method="POST"
                            style="width:100%">
                            @csrf
                            <div class="row" style="width:100%">
                                <div class="form-group ">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        style="width:100%" required>
                                </div>
                                <div class="form-group" style="width:100%">
                                    <label for="topic">Subject</label>
                                    <input type="text" class="form-control" name="topic" id="topic"
                                        style="width:100%" required>
                                </div>
                                <div class="form-group" style="width:100%">
                                    <label for="notice">Message</label>
                                    <textarea class="form-control" name="notice" rows="10" style="width:100%" required></textarea>
                                </div>
                            </div>

                            <div class="text-center">

                                <button type="button" class="custom-button" id="addNotice_btn">Add Notice</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Notices Section -->

        <!-- ======= Check Nortices Section ======= -->
        <section id="search_nortices" class="testimonials section-bg">
            <div class="container">




                <div class="section-title">
                    <h2>Search Notices</h2>
                    <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
                </div>

                <form action="<?= url('/search_notice') ?>" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="search_notice">
                            <h4><b>Search Notice</b></h4>
                        </label>
                        <input type="date" class="form-control" name="search_notice" id="search_notice">
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
                            <th style="width: 20%" scope="col">Subject</th>
                            <th style="width: 15%" scope="col">Message</th>
                            <th style="width: 25%" scope="col"></th>
                        </tr>
                    </thead>
                    @foreach ($notice as $notice)
                        <tbody>
                            <tr>
                                <td style="width: 25%">{{ $notice->name }}</td>
                                <td style="width: 20%">{{ $notice->topic }}</td>
                                <td style="width: 15%">{{ $notice->notice }}</td>
                                <td style="width: 25%">
                                    <a class="btn btn-outline-danger"
                                        href="/notice_del/{{ $notice->id }}">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
                @if (session('succ_notice'))
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'success',
                            text: '{{ session('succ_notice') }}',
                        });
                    </script>
                @endif

            </div>
        </section>
        <!--End Nortices Section -->

        <!--Add Images-->
        <section id="add_images" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Add Image to gallery</h2>
                </div>

                <div class="row" data-aos="fade-in">


                    <div>
                        <div>
                            <form action="<?= url('/add_gallery') ?>" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <h4>Add a photo</h4>
                                    <input class="form-control" type="file" id="photo" name="photo"
                                        required>
                                </div>
                                <br>
                                <div class="photo_upload"><input type="submit" value="Add Photo"></div>
                            </form>
                        </div>
                        <br>
                    </div>
                </div>

            </div>
        </section>
        <!--end add images-->

    </main><!-- End #main -->

    <!--User Add Modal script-->
    <script>
        function showAddAdminModal(actionFunction) {
            // Set the onclick event of the confirmation button to the passed function
            document.getElementById('confirmBtn').onclick = actionFunction;
            // Show the modal
            $('#staticBackdrop').modal('show');
            var paragraph1 = document.getElementById('staticBackdropLabel');
            paragraph1.innerHTML = 'Add Admin member Confirmation';
            var paragraph2 = document.getElementById('staticBackdropLabe2');
            paragraph2.innerHTML = 'Are you sure you want to add the admin?';
            var button2 = document.getElementById('confirmBtn');
            button2.innerHTML = 'Confirm';
        }

        function addAdmin() {

            var updateForm = document.getElementById('addAdminForm');
            if (updateForm) {
                updateForm.action = '<?= url('/add_admin_by_admin') ?>'; // Ensure this line is directly in the Blade file
                updateForm.submit();
            } else {
                console.error('Add form not found');
            }

        }

        // Triggering the modal with different actions
        document.getElementById('addAdmin_btn').addEventListener('click', function() {
            showAddAdminModal(addAdmin);
        });
    </script>

    <!--Add Notice Modal script-->
    <script>
        function showNoticeModal(actionFunction) {
            // Set the onclick event of the confirmation button to the passed function
            document.getElementById('confirmBtn').onclick = actionFunction;
            // Show the modal
            $('#staticBackdrop').modal('show');
            var paragraph1 = document.getElementById('staticBackdropLabel');
            paragraph1.innerHTML = 'Add Notice Confirmation';
            var paragraph2 = document.getElementById('staticBackdropLabe2');
            paragraph2.innerHTML = 'Are you sure you want to add the notice?';
            var button2 = document.getElementById('confirmBtn');
            button2.innerHTML = 'Yes';
        }

        function addNotice() {

            var updateForm = document.getElementById('addNoticeForm');
            if (updateForm) {
                updateForm.action = '<?= url('/add_notice') ?>'; // Ensure this line is directly in the Blade file
                updateForm.submit();
            } else {
                console.error('Add form not found');
            }

        }

        // Triggering the modal with different actions
        document.getElementById('addNotice_btn').addEventListener('click', function() {
            showNoticeModal(addNotice);
        });
    </script>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/user.js') }}"></script>

    <!--passwod-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>

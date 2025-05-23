<html>
<head>
    <title>RUHSAA - Ruhuna Science Alumni</title>
    <link rel="icon" type="image/png" href="{{ asset('images/reg-img.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <meta name="description" content="RUHSAA - Ruhuna Science Alumni Association official website.">

    <!-- Load jQuery first -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!--header section start -->
    <div class="header_section">
        <div class="container-fluid">
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}"></a></div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav ml-auto">
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="{{ route('news') }}">News & Events</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="{{ route('login') }}">Log In</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                 </ul>
              </div>
           </nav>
        </div>
     </div>
     <!--header section end -->

     <!--registration section start -->
      <div class="contact_section layout_padding">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
         <div class="container">
            <h1 class="contact_text">Register Now</h1>
            <br><br><br><br>
         </div>
      </div>

      <div class="row">
        <div class="col-md-6 px-5">
            <div class="map_container">
              <div class="map">
                  <img src="{{ asset('images/reg.png') }}" class="map-image">
              </div>
            </div>
          </div>
            <br><br>
            <div class="col-md-6 px-5">
                <div class="form_container">
                    <form action="{{ url('/register_form') }}" method="POST" id="registrationForm">
                        @csrf
                        <div class="form-row">
                          <div class="form-group col">
                            <input type="text" class="email-bt" placeholder="Full Name" name="name" id="name" value="{{old('name')}}" required/>
                          </div>
                        </div>

                      <div class="form-row">
                        <div class="form-group col">
                            <input type="text" id="sc_number" name="sc_number" class="email-bt"
                                  placeholder="Enter Your Student Number" value="{{ old('sc_number') }}" onfocus="showsc_number()" onblur="masksc_number()" required/>

                            <!-- Message box -->
                            <small id="scNumberMsg" class="text-muted" style="display: none; color: red;">
                              Enter your Student Number in the format: (Registered Year)/(Register Number)<br>Example: 2024/123456
                            </small>

                            @error('sc_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                      <script>
                        document.getElementById('sc_number').addEventListener('focus', function () {
                            document.getElementById('scNumberMsg').style.display = 'block';
                        });

                        document.getElementById('sc_number').addEventListener('blur', function () {
                            document.getElementById('scNumberMsg').style.display = 'none';
                        });
                      </script>

                        <div class="form-row">
                          <div class="form-group col">
                            <input type="password" id="c_sc_number" name="sc_number_confirmation" class="email-bt" placeholder="Confirm Student Number" onfocus="showc_sc_number()" onblur="maskc_sc_number()" required/>
                            <p style="color: red" id="matchsc"></p>
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col">
                            <input type="text" class="email-bt" id="email" name="email" value="{{old('email')}}" placeholder="Email" required/>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-lg-5">
                              <select class="select-bt" id="m_code" name="m_code" value="{{old('m_code')}}" required>
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

                          <div class="form-group col-lg-7">
                            <input type="text" class="email-bt" placeholder="Phone Number" id="mobile" name="mobile" value="{{old('mobile')}}" required/>
                          </div>
                        </div>

                        <!-- Add this after the phone number field -->
                        <div class="form-row">
                          <div class="form-group col">
                              <select name="membership_category" id="membership_category" class="select-bt" required>
                                  <option value="" selected disabled>Membership Category</option>
                                  <option value="Full">Full Member</option>
                                  <option value="Associate">Associate Member</option>
                              </select>
                          </div>
                        </div>

                        <!-- Membership Details Modal -->
                        <div class="modal fade" id="membershipModal" tabindex="-1" role="dialog" aria-labelledby="membershipModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="membershipModalLabel">Membership Details</h5>
                                      <button type="button" class="close" id="customModalClose">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body" id="membershipDetails">
                                      <!-- Dynamic content will be inserted here -->
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeMembership">Close</button>
                                  </div>
                              </div>
                          </div>
                        </div>

                        <!-- Associate Member Field (initially hidden) -->
                        <div id="associateFields" style="display: none;">
                          <div class="form-row">
                            <div class="form-group col">
                              <select name="degree_type" id="degree_type_ass" class="select-bt" required>
                                  <option value="" selected disabled>Affiliation Type</option>
                                  <option value="Degree Programme Associate">Degree Programme</option>
                                  <option value="Traineeship">Traineeship</option>
                                  <option value="Internship">Internship</option>
                                  <option value="Research Affiliation">Research Affiliation</option>
                                  <option value="Support Staff Member">Support Staff Member</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col">
                              <input type="text" name="degree" id="degree_ass" class="email-bt" placeholder="Enter Programme Name" required></input>
                            </div>
                          </div>
                        </div>

                        <!-- Existing degree fields (wrap in container) -->
                        <div id="fullMemberFields">
                          <div class="form-row">
                            <div class="form-group col">
                                <select name="degree_type" id="degree_type" class="select-bt">
                                    <option value="none" selected disabled>Degree Program</option>
                                    <option value="General">General</option>
                                    <option value="Special">Special</option>
                                </select>
                            </div>
                          </div>
  
                          <div class="form-row" id="special_degree_div" >
                            <div class="form-group col">
                                <select name="degree" id="sp_degree" class="select-bt">
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
                          </div>
  
                          <div class="form-row" id="General_degree_div">
                            <div class="form-group col">
                                <select name="degree" id="g_degree" class="select-bt">
                                    <option value="" selected disabled>Select your Degree</option>
                                    <option value="BSc in physical sciences">BSc in physical sciences </option>
                                    <option value="BSc in Bio Sciences">BSc in Bio Sciences </option>
                                    <option value="BCS in Computer Science">BCS in Computer Science</option>
                                </select>
                            </div>
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col">
                            <input type="text" class="email-bt" placeholder="Password" id="password" name="password" onfocus="showPassword()" onblur="maskPassword()" required/>
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col">
                            <input type="text" class="email-bt" placeholder="Confirm Password" id="confirmPassword" name="password_confirmation" onfocus="showConfirmPassword()" onblur="maskConfirmPassword()" required/>

                                <p style="color: red" id="matchp"></p>

                          </div>
                        </div>

                        <div class="send_btn">
                          <div class="main_bt"><button type="submit" class="main_bt">Register</button></div>
                       </div>
                       <hr>
                       <div class="send_btn">
                        <div type="text" class="main_bt"><a href="login">SIGN IN</a></div>
                        </div>
                       <br><br>
                      </form>
                  </div>
            </div>
        </div>
      <!--registration section end -->

      <!-- footer section start -->
      <div class="footer_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-lg-2 col-sm-6">
                 <h3 class="useful_text">Menu</h3>
                 <div class="footer_menu">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About Us</a></li>
                        <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('/news') }}">News and Events</a></li>
                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                    </ul>
                 </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                 <h1 class="useful_text">Useful Links</h1>
                 <div class="dummy_text">
                   <ul>
                       <li><a href="https://www.sci.ruh.ac.lk/FacultyofScience/">Faculty of Science</a></li>
                       <li><a href="https://www.ruh.ac.lk/index.php/en/">University of Ruhuna</a></li>
                   </ul>
                 </div>
              </div>
              <div class="col-lg-7 col-sm-6">
                 <h1 class="useful_text">Contact Us</h1>
                 <div class="location_text">
                    <ul>
                       <li>
                          <a href="#">
                          <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_10">Address: Faculty of Science, University of Ruhuna, Matara, Sri Lanka.</span>
                          </a>
                       </li>
                       <li>
                          <a href="#">
                          <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">Call: {{ env('CONTACT_PHONE', '+94 123456789') }}</span>
                          </a>
                       </li>
                       <li>
                          <a href="#">
                          <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">Email: {{ env('CONTACT_EMAIL', 'info@ruhuna.ac.lk') }}</span>
                          </a>
                       </li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
     </div>

     <!-- footer section end -->

     <script>
        $(document).ready(function() {
          // Initialize modal
              var membershipModal = $('#membershipModal');

          // Custom close button handler
          $('#customModalClose').click(function() {
              membershipModal.modal('hide');
          });

          // close button handler
          $('#closeMembership').click(function() {
              membershipModal.modal('hide');
          });

            // Initialize fields visibility
            $("#special_degree_div").hide();
            $("#General_degree_div").hide();
            $('#fullMemberFields').hide();
            $('#associateFields').hide();

            // Membership category change handler
            $('#membership_category').change(function() {
                const membership = $(this).val();
                const modalContent = $('#membershipDetails');
                
                if(membership === 'Full') {
                    modalContent.html(`
                        <h3>Full Membership</h3>
                                        <ul>
                                          <li>
                                              Any individual who has graduated from the Faculty of Science, UoR receiving a 
                                              Bachelor's degree at any level (General/Special), internal or external.
                                          </li><br>
                                          <li>
                                              Any individual who has earned a postgraduate qualification at any level 
                                              (Certificate/Diploma/Masters/MPhil/PhD) from the University of Ruhuna, and was affiliated 
                                              during the degree program to any Department of the Faculty of Science.
                                          </li><br>
                                          <li>
                                              Any individual who was a registered student at the Faculty of Science for a particular 
                                              period of the degree program, duly transferred to continue the study program at 
                                              another university in Sri Lanka and completed the degree there.  
                                              <br><strong>Note:</strong> This applies to those who were selected for the Special degree 
                                              program after two/three years at the Faculty of Science and later transferred and 
                                              graduated from the University of Kelaniya.
                                          </li><br>
                                          <li>
                                              Any individual who was a registered student at the Faculty of Science for a particular 
                                              degree program for three or four academic years, but could not receive the degree 
                                              within the stipulated period.
                                          </li>
                                        </ul>
                    `);
                    $('#fullMemberFields').show();
                    $('#associateFields').hide();
                    // Handle required attributes
                    $('#associateFields select, #associateFields input').removeAttr('required');
                    $('#fullMemberFields select').prop('required', true);
                } else if(membership === 'Associate') {
                    modalContent.html(`
                        <h3>Associate Membership</h3>
                        <!-- Your associate membership content here -->
                    `);
                    $('#fullMemberFields').hide();
                    $('#associateFields').show();
                    // Handle required attributes
                    $('#fullMemberFields select').removeAttr('required');
                    $('#associateFields select, #associateFields input').prop('required', true);
                }
                
                $('#membershipModal').modal('show');
            });

            // Degree type handling
            $("#degree_type").change(function(){
                if($(this).val() === "General"){
                    $("#special_degree_div").hide();
                    $("#General_degree_div").show();
                    $('#sp_degree').val('').removeAttr('required');
                    $('#g_degree').prop('required', true);
                } else if($(this).val() === "Special"){
                    $("#General_degree_div").hide();
                    $("#special_degree_div").show();
                    $('#g_degree').val('').removeAttr('required');
                    $('#sp_degree').prop('required', true);
                }
            });

            // Form submission handler
            $('#registrationForm').on('submit', function(e) {
                // Add any final validation checks here
                if (!validateForm()) {
                    e.preventDefault(); // Prevent form submission
                }
            });
        });

        function validateForm() {
            // Add your custom validation logic here
            return true; // Return false if validation fails
        }

        function showPassword() {
            const passwordInput = document.getElementById('password');
            passwordInput.type = 'text';
        }

        function maskPassword() {
            const passwordInput = document.getElementById('password');
            passwordInput.type = 'password';
        }

        function showConfirmPassword() {
            const confirmPasswordInput = document.getElementById('confirmPassword');
            confirmPasswordInput.type = 'text';
        }

        function maskConfirmPassword() {
            const confirmPasswordInput = document.getElementById('confirmPassword');
            confirmPasswordInput.type = 'password';
        }

        function showsc_number() {
            const sc_numberInput = document.getElementById('sc_number');
            sc_numberInput.type = 'text';
        }

        function masksc_number() {
            const sc_numberInput = document.getElementById('sc_number');
            sc_numberInput.type = 'password';
        }

        function showc_sc_number() {
            const c_sc_numberInput = document.getElementById('c_sc_number');
            c_sc_numberInput.type = 'text';
        }

        function maskc_sc_number() {
            const c_sc_numberInput = document.getElementById('c_sc_number');
            c_sc_numberInput.type = 'password';
        }

      </script>
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
      <script src="js/custom.js"></script>

     <!-- Include Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

     <style>
        .map img {
            width: 100%;
            vertical-align: middle;
        }
     </style>
</body>
</html>
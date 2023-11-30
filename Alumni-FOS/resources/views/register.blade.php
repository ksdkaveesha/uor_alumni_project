<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/register.css')}}" />
    <link rel="stylesheet" href="{{asset('css/register.css')}}" />

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <title>Registration | Alumni-FOS</title>
  </head>
  <body style="background-color: #fcf3d2;">

    <div class="auto-group-gybt-ZHB">
        <div class="top-nav-bar-background-f5K">
        </div>
        <img class="rectangle-4-NVX" src="{{asset('./image/index/rectangle-4-GRF.png')}}"/>
        <div class="fos-logo-qnR">
          <img class="rectangle-5-Ygq" src="{{asset('./image/index/rectangle-5-zEu.png')}}"/>
          <p class="faculty-of-science-E3s">
          Faculty of Science
          <br/>

          </p>
        </div>
    </div>

    <div class="container2">

        <form>
            <div class="mb-3">
            <label for="name" class="form-label">Name with Initials</label>
            <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="sc_number" class="form-label">Student Number</label>
                <input type="text" class="form-control" id="sc_number" name="sc_number">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Residential Address</label>
                <input type="address" class="form-control" id="address" name="address">
            </div>

            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <select class="form-select" name="country">
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antartica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                        <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Bouvet Island">Bouvet Island</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Congo">Congo, the Democratic Republic of the</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cota D'Ivoire">Cote d Ivoire</option>
                        <option value="Croatia">Croatia(Hrvatska)</option>
                        <option value="Cuba">Cuba</option>
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
                        <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="France Metropolitan">France, Metropolitan</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Territories">French Southern Territories</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                        <option value="Holy See">Holy See (Vatican City State)</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran (Islamic Republic of)</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Democratic People's Republic of Korea">Korea, Democratic People s Republic of</option>
                        <option value="Korea">Korea, Republic of</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao">Lao People s Democratic Republic</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon" selected>Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia">Micronesia, Federated States of</option>
                        <option value="Moldova">Moldova, Republic of</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russian Federation</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint LUCIA">Saint LUCIA</option>
                        <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia (Slovak Republic)</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                        <option value="Span">Spain</option>
                        <option value="SriLanka" selected>Sri Lanka</option>
                        <option value="St. Helena">St. Helena</option>
                        <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syrian Arab Republic</option>
                        <option value="Taiwan">Taiwan, Province of China</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania, United Republic of</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos">Turks and Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Viet Nam</option>
                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                        <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                        <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Mobile Number</label>
                <div style="display:flex;">
                    <select class="form-select" name="m_code" style="width:10%">
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

                    <input type="text" class="form-control" placeholder="Enter number without leading 0" name="mobile" id="mobile">
                </div>
            </div>

            <!--
            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <select class="form-select" name="department">
                    <option value="" selected disabled>Select</option>
                    <option value="Botany">Botany</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Physics">Physics</option>
                    <option value="Zoology">Zoology</option>
                </select>
            </div>
            -->

            <div class="mb-3">
                <label for="degree_type" class="form-label">Degree Type</label>
                <select class="form-select" name="degree_type" id="degree_type">
                    <option value="" selected disabled>Select</option>
                    <option value="General">General</option>
                    <option value="Special">Special</option>
                </select>
            </div>

            <div class="mb-3" style="display: none" id="special_degree_div">
                <label for="sp_degree" class="form-label">Special Degree</label>
                <select class="form-select" name="sp_degree" id="sp_degree">
                    <option value="" selected disabled>Select</option>
                    <option value="Botany">Botany</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Statistics">Statistics</option>
                    <option value="Applied Mathematics">Applied Mathematics</option>
                    <option value="Physics">Physics</option>
                    <option value="Zoology">Zoology</option>
                </select>
            </div>

            <script>
                $(document).ready(function(){
                    // When the value of the first select changes
                    $("#degree_type").change(function(){
                        // If "Special" is selected, show the second select; otherwise, hide it
                        if($(this).val() === "Special"){
                            $("#special_degree_div").show();
                        } else {
                            $("#special_degree_div").hide();
                        }
                    });
                });
            </script>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
  session_start();
  if (isset( $_SESSION['weather_user'])) {
    $code = $_SESSION['weather_user']['location_code'];
  }
  else{
    $code = '';
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <?php include_once 'components/head.php' ?>
  </head>

<body 

  <?php if (isset( $_SESSION['weather_user'])) :?>
    onload=getIndexTodayForecast(<?php echo $code ?>)
  <?php else: ?>
    onload=getIndexTodayForecast()
  <?php endif ?>

  
  
>
  
<?php include_once 'components/header.php' ?>

<section class="float-start w-100 banner-part1 sub-page-banner">

      <div class="container">
           <div class="d-md-flex align-items-center justify-content-between">
                <h1 class="m-0"> Location Current Forecast
                </h1>
                <nav aria-label="breadcrumb m-0">
                    <p>Select a city/town to get their current days forecasts</p>
                </nav>
           </div>
      </div>

</section>

<section class="body-part float-start w-100">
   
      <div class="new-page-toal map-page-total">
          <div class="container">
             
            <form method="post" id="selector">                
                <select class="form-control SelectLoc" id="SelectLoc">
                    <option value="" selected="">Select a city</option>
                    <option value="100891">Aba</option>
                    <option value="100892">Abak</option>
                    <option value="100893">Abakaliki</option>
                    <option value="100894">Abeokuta</option>
                    <option value="100895">Abocho</option>
                    <option value="100896">Abraka</option>
                    <option value="100897">Abuja</option>
                    <option value="100898">Adani</option>
                    <option value="100899">Ado Odo</option>
                    <option value="100900">Ado-Ekiti</option>
                    <option value="100901">Adoru</option>
                    <option value="100902">Afikpo</option>
                    <option value="100903">Agaie</option>
                    <option value="100904">Agbabu</option>
                    <option value="100905">Agbor</option>
                    <option value="100906">Agenebode</option>
                    <option value="100907">Ago Are</option>
                    <option value="100908">Agulu</option>
                    <option value="100909">Ahoada</option>
                    <option value="100910">Ajaokuta</option>
                    <option value="100911">Ajasse Ipo</option>
                    <option value="100912">Akankpa</option>
                    <option value="100913">Ake-Eze</option>
                    <option value="100914">Akko</option>
                    <option value="100915">Aku</option>
                    <option value="100916">Akure</option>
                    <option value="100917">Akwanga</option>
                    <option value="100918">Alapa</option>
                    <option value="100919">Aliade</option>
                    <option value="100920">Amagunze</option>
                    <option value="100921">Amaigbo</option>
                    <option value="100922">Amassoma</option>
                    <option value="100923">Amper</option>
                    <option value="100924">Anchau</option>
                    <option value="100925">Anka</option>
                    <option value="100926">Ankpa</option>
                    <option value="100927">Apomu</option>
                    <option value="100928">Araomoko Ekiti</option>
                    <option value="100929">Argungu</option>
                    <option value="100930">Arochukwu</option>
                    <option value="100931">Asaba</option>
                    <option value="100932">Auchi</option>
                    <option value="100933">Auna</option>
                    <option value="100934">Awgu</option>
                    <option value="100935">Awka</option>
                    <option value="100936">Azare</option>
                    <option value="100937">Babana</option>
                    <option value="100938">Babura</option>
                    <option value="100939">Badagry</option>
                    <option value="100940">Badeggi</option>
                    <option value="100941">Bagudo</option>
                    <option value="100942">Baissa</option>
                    <option value="100943">Bakori</option>
                    <option value="100944">Bama</option>
                    <option value="100945">Bara</option>
                    <option value="100946">Baro</option>
                    <option value="100947">Batsari</option>
                    <option value="100948">Bauchi</option>
                    <option value="100949">Bebeji</option>
                    <option value="100950">Beli</option>
                    <option value="100951">Bena</option>
                    <option value="100952">Bende</option>
                    <option value="100953">Benin City</option>
                    <option value="33636">Benin City(Civ/M</option>
                    <option value="100954">Benisheik</option>
                    <option value="100955">Bida</option>
                    <option value="100956">Biliri</option>
                    <option value="100957">Bin Yauri</option>
                    <option value="100958">Binji</option>
                    <option value="100959">Birnin Kebbi</option>
                    <option value="100960">Birnin Kudu</option>
                    <option value="100961">Birniwa</option>
                    <option value="100962">Biu</option>
                    <option value="100963">Bode Sadu</option>
                    <option value="100964">Boi</option>
                    <option value="100965">Boju</option>
                    <option value="100966">Bokani</option>
                    <option value="100967">Bokkos</option>
                    <option value="100968">Bomadi</option>
                    <option value="100969">Bonny</option>
                    <option value="100970">Bopo</option>
                    <option value="100971">Bori</option>
                    <option value="100972">Bornu Yassu</option>
                    <option value="100973">Brass</option>
                    <option value="100974">Buga</option>
                    <option value="100975">Bugana</option>
                    <option value="100976">Buguma</option>
                    <option value="100977">Bukuru</option>
                    <option value="100978">Bununu Dass</option>
                    <option value="100979">Bununu Kasa</option>
                    <option value="100980">Bunza</option>
                    <option value="100981">Burumburum</option>
                    <option value="100982">Burutu</option>
                    <option value="100983">Calabar</option>
                    <option value="100984">Chafe</option>
                    <option value="100985">Dabai</option>
                    <option value="100986">Dadiya</option>
                    <option value="100987">Dakingari</option>
                    <option value="100988">Damasak</option>
                    <option value="100989">Damaturu</option>
                    <option value="100990">Dambarta</option>
                    <option value="100991">Damboa</option>
                    <option value="100992">Dan Gora</option>
                    <option value="100993">Dan Sadau</option>
                    <option value="100994">Dange</option>
                    <option value="100995">Danja</option>
                    <option value="100996">Dankalwa</option>
                    <option value="100997">Dankama</option>
                    <option value="100998">Dapchi</option>
                    <option value="100999">Darazo</option>
                    <option value="101000">Daura</option>
                    <option value="101001">Deba Habe</option>
                    <option value="101002">Degema Hulk</option>
                    <option value="101003">Dekina</option>
                    <option value="101004">Dengi</option>
                    <option value="101005">Dikwa</option>
                    <option value="101006">Dindima</option>
                    <option value="101007">Disina</option>
                    <option value="101008">Doma</option>
                    <option value="101009">Dukku</option>
                    <option value="101010">Duku</option>
                    <option value="101011">Dutse</option>
                    <option value="101012">Dutsen Wai</option>
                    <option value="101013">Dutsin Ma</option>
                    <option value="101014">Ebute Ikorodu</option>
                    <option value="101015">Effium</option>
                    <option value="101016">Effon Alaiye</option>
                    <option value="101017">Egbe</option>
                    <option value="101018">Eha Amufu</option>
                    <option value="101019">Ejigbo</option>
                    <option value="101020">Ejirin</option>
                    <option value="101021">Eket</option>
                    <option value="101022">Ekpoma</option>
                    <option value="101023">Elele</option>
                    <option value="101024">Emure-Ekiti</option>
                    <option value="101025">Enugu</option>
                    <option value="101026">Enugu-Ezike</option>
                    <option value="101027">Enugu-Ukwu</option>
                    <option value="101028">Epe</option>
                    <option value="101029">Esuk Oron</option>
                    <option value="101030">Ete</option>
                    <option value="101031">Etinan</option>
                    <option value="101032">Ezza Ohu</option>
                    <option value="101033">Fiditi</option>
                    <option value="101034">Funtua</option>
                    <option value="101035">Gabarin</option>
                    <option value="101036">Gagarawa</option>
                    <option value="101037">Gakem</option>
                    <option value="101038">Gamawa</option>
                    <option value="101039">Gambaru</option>
                    <option value="101040">Gandi</option>
                    <option value="101041">Ganye</option>
                    <option value="101042">Garko</option>
                    <option value="101043">Gashua</option>
                    <option value="101044">Gassol</option>
                    <option value="101045">Gaya</option>
                    <option value="101046">Gbongan</option>
                    <option value="101047">Geidam</option>
                    <option value="101048">Gembu</option>
                    <option value="101049">Gombe</option>
                    <option value="101050">Goniri</option>
                    <option value="101051">Gora</option>
                    <option value="101052">Gorgoram</option>
                    <option value="101053">Goronyo</option>
                    <option value="101054">Gujba</option>
                    <option value="101055">Gulma</option>
                    <option value="101056">Gumel</option>
                    <option value="101057">Gummi</option>
                    <option value="101058">Gusau</option>
                    <option value="101059">Gwadabawa</option>
                    <option value="101060">Gwandu</option>
                    <option value="101061">Gwaram</option>
                    <option value="101062">Gwarzo</option>
                    <option value="101063">Gwasero</option>
                    <option value="101064">Gwio Kura</option>
                    <option value="101065">Gwoza</option>
                    <option value="101066">Hadejia</option>
                    <option value="101067">Hinna</option>
                    <option value="101068">Holma</option>
                    <option value="101069">Hunkuyi</option>
                    <option value="101070">Ibadan</option>
                    <option value="101071">Ibeto</option>
                    <option value="101072">Ibi</option>
                    <option value="101073">Icheu</option>
                    <option value="101074">Idah</option>
                    <option value="101075">Idanre</option>
                    <option value="101076">Idi Iroko</option>
                    <option value="101077">Ifaki</option>
                    <option value="101078">Ifo</option>
                    <option value="101079">Ifon</option>
                    <option value="101080">Igabi</option>
                    <option value="101081">Igarra</option>
                    <option value="101082">Igbara-Odo</option>
                    <option value="101083">Igbeti</option>
                    <option value="101084">Igbo Ora</option>
                    <option value="101085">Igbo-Ukwu</option>
                    <option value="101086">Igboho</option>
                    <option value="101087">Igbor</option>
                    <option value="101088">Igede-Ekiti</option>
                    <option value="101089">Ihiala</option>
                    <option value="101090">Ihuo</option>
                    <option value="101091">Ijebu Ijesha</option>
                    <option value="101092">Ijebu-Ife</option>
                    <option value="101093">Ijebu-Igbo</option>
                    <option value="101094">Ijebu-Ode</option>
                    <option value="101095">Ijero-Ekiti</option>
                    <option value="101096">Ikang</option>
                    <option value="101097">Ikeja</option>
                    <option value="101098">Ikem</option>
                    <option value="101099">Ikerre</option>
                    <option value="101100">Ikire</option>
                    <option value="101101">Ikirun</option>
                    <option value="101102">Ikom</option>
                    <option value="101103">Ikot-Ekpene</option>
                    <option value="101104">Ila Orangun</option>
                    <option value="101105">Ilare</option>
                    <option value="101106">Ilaro</option>
                    <option value="101107">Ilesa</option>
                    <option value="101108">Illela</option>
                    <option value="101109">Illushi</option>
                    <option value="101110">Ilobu</option>
                    <option value="101111">Ilorin</option>
                    <option value="101112">Inisa</option>
                    <option value="101113">Iperu</option>
                    <option value="101114">Ipoti</option>
                    <option value="101115">Isanlu Itedoijowa</option>
                    <option value="101116">Isara</option>
                    <option value="101117">Ise-Ekiti</option>
                    <option value="101118">Isieke</option>
                    <option value="101119">Itu</option>
                    <option value="101120">Iwo</option>
                    <option value="101121">Jajere</option>
                    <option value="101122">Jalingo</option>
                    <option value="101123">Jebba</option>
                    <option value="101124">Jega</option>
                    <option value="101125">Jibiya</option>
                    <option value="101126">Jikamshi</option>
                    <option value="101127">Jimeta</option>
                    <option value="101128">Jos</option>
                    <option value="101129">Kabba</option>
                    <option value="101130">Kachia</option>
                    <option value="101131">Kaduna</option>
                    <option value="101132">Kafachan</option>
                    <option value="101133">Kafarati</option>
                    <option value="101134">Kagoro</option>
                    <option value="101135">Kaiama</option>
                    <option value="101136">Kaingiwa</option>
                    <option value="101137">Kajuru</option>
                    <option value="101138">Kaltungo</option>
                    <option value="101139">Kamba</option>
                    <option value="101140">Kankara</option>
                    <option value="101141">Kano</option>
                    <option value="101142">Kari</option>
                    <option value="101143">Katagum</option>
                    <option value="101144">Katsina</option>
                    <option value="101145">Katsina Ala</option>
                    <option value="101146">Kaura Namoda</option>
                    <option value="101147">Kazaure</option>
                    <option value="101148">Keffi</option>
                    <option value="101149">Keffin Hausa</option>
                    <option value="101150">Kende</option>
                    <option value="101151">Kibiya</option>
                    <option value="101152">Kishi</option>
                    <option value="101153">Konduga</option>
                    <option value="101154">Konkwesso</option>
                    <option value="101155">Kontagora</option>
                    <option value="101156">Koton Karifi</option>
                    <option value="101157">Kujama</option>
                    <option value="101158">Kukawa</option>
                    <option value="101159">Kumagunnam</option>
                    <option value="101160">Kumo</option>
                    <option value="101161">Kura</option>
                    <option value="101162">Kusheriki</option>
                    <option value="101163">Kuta</option>
                    <option value="101164">Kwale</option>
                    <option value="101165">Kwali</option>
                    <option value="101166">Kwatarkwashi</option>
                    <option value="101167">Kwolla</option>
                    <option value="101168">Lafia</option>
                    <option value="101169">Lafiagi</option>
                    <option value="101170">Lagos</option>
                    <option value="26677">Lagos / Ikeja</option>
                    <option value="101171">Lalupon</option>
                    <option value="101172">Lame</option>
                    <option value="101173">Langtang</option>
                    <option value="101174">Lapai</option>
                    <option value="101175">Lau</option>
                    <option value="101176">Lere</option>
                    <option value="101177">Little Gombi</option>
                    <option value="101178">Lokoja</option>
                    <option value="101179">Madagali</option>
                    <option value="101180">Madala</option>
                    <option value="101181">Madara</option>
                    <option value="101182">Magumeri</option>
                    <option value="101183">Mahuta</option>
                    <option value="101184">Maiduguri</option>
                    <option value="101185">Maiyema</option>
                    <option value="101186">Makurdi</option>
                    <option value="101187">Malumfashi</option>
                    <option value="101188">Malummaduri</option>
                    <option value="101189">Mando</option>
                    <option value="101190">Marte</option>
                    <option value="101191">Maru</option>
                    <option value="101192">Mashi</option>
                    <option value="101193">Matsena</option>
                    <option value="101194">Mayo Belwa</option>
                    <option value="101195">Mekkaw</option>
                    <option value="101196">Minna</option>
                    <option value="101197">Miringa</option>
                    <option value="101198">Misau</option>
                    <option value="101199">Modakeke</option>
                    <option value="101200">Mokwa</option>
                    <option value="101201">Mongonu</option>
                    <option value="101202">Moriki</option>
                    <option value="101203">Mubi</option>
                    <option value="101204">Musawa</option>
                    <option value="101205">Mutum Biyu</option>
                    <option value="101206">Nafada</option>
                    <option value="101207">Nassarawa</option>
                    <option value="101208">New Shagunnu</option>
                    <option value="101209">Ngala</option>
                    <option value="101210">Ngurore</option>
                    <option value="101211">Nguru</option>
                    <option value="101212">Nkpor</option>
                    <option value="101213">Nkwerre</option>
                    <option value="101214">Nnewi</option>
                    <option value="101215">Nsukka</option>
                    <option value="101216">Numan</option>
                    <option value="101217">Obiaruku Quarters</option>
                    <option value="101218">Obolo-Eke (1)</option>
                    <option value="101219">Obonoma</option>
                    <option value="101220">Obubra</option>
                    <option value="101221">Obudu</option>
                    <option value="101222">Ochobo</option>
                    <option value="101223">Ode</option>
                    <option value="101224">Offa</option>
                    <option value="101225">Ogaminan</option>
                    <option value="101226">Ogoja</option>
                    <option value="101227">Ogurugu</option>
                    <option value="101228">Oguta</option>
                    <option value="101229">Ogwashi-Uku</option>
                    <option value="101230">Ohafia-Ifigh</option>
                    <option value="101231">Oke Iho</option>
                    <option value="101232">Oke Mesi</option>
                    <option value="101233">Okigwi</option>
                    <option value="101234">Okrika</option>
                    <option value="101235">Okuta</option>
                    <option value="101236">Olupona</option>
                    <option value="101237">Omoku</option>
                    <option value="101238">Omu Aran</option>
                    <option value="101239">Omuo-Ekiti</option>
                    <option value="101240">Ondo</option>
                    <option value="101241">Onitsha</option>
                    <option value="101242">Opi</option>
                    <option value="101243">Ore</option>
                    <option value="101244">Orerokpe</option>
                    <option value="101245">Orita Eruwa</option>
                    <option value="101246">Orlu</option>
                    <option value="101247">Orodo</option>
                    <option value="26678">Oshogbo</option>
                    <option value="101248">Osogbo</option>
                    <option value="101249">Otukpa</option>
                    <option value="101250">Owerri</option>
                    <option value="101251">Owo</option>
                    <option value="101252">Owode</option>
                    <option value="101253">Oyan</option>
                    <option value="101254">Oyo</option>
                    <option value="101255">Ozubulu</option>
                    <option value="101256">Pankshin</option>
                    <option value="101257">Panyam</option>
                    <option value="101258">Patani</option>
                    <option value="101259">Pategi</option>
                    <option value="101260">Pindiga</option>
                    <option value="101261">Port Harcourt</option>
                    <option value="101262">Potiskum</option>
                    <option value="101263">Rabah</option>
                    <option value="101264">Rahama</option>
                    <option value="101265">Rano</option>
                    <option value="101266">Rijau</option>
                    <option value="101267">Ringim</option>
                    <option value="101268">Riti</option>
                    <option value="101269">Ruma</option>
                    <option value="101270">Runka</option>
                    <option value="101271">Sade</option>
                    <option value="101272">Saki</option>
                    <option value="101273">Samamiya</option>
                    <option value="101274">Sapele</option>
                    <option value="101275">Sauri</option>
                    <option value="101276">Shaffa</option>
                    <option value="101277">Shagamu</option>
                    <option value="101278">Shanga</option>
                    <option value="101279">Shani</option>
                    <option value="101280">Shinkafe</option>
                    <option value="101281">Siluko</option>
                    <option value="101282">Soba</option>
                    <option value="101283">Sofo-Birnin-Gwari</option>
                    <option value="101284">Sokoto</option>
                    <option value="101285">Suya</option>
                    <option value="101286">Takai</option>
                    <option value="101287">Takum</option>
                    <option value="101288">Talata Mafara</option>
                    <option value="101289">Tambawel</option>
                    <option value="101290">Tegina</option>
                    <option value="101291">Tokombere</option>
                    <option value="101292">Toungo</option>
                    <option value="101293">Uba</option>
                    <option value="101294">Ubiaja</option>
                    <option value="101295">Udi</option>
                    <option value="101296">Uga</option>
                    <option value="101297">Ugep</option>
                    <option value="101298">Ughelli</option>
                    <option value="101299">Ukata</option>
                    <option value="101300">Umuahia</option>
                    <option value="101301">Umunede</option>
                    <option value="101302">Uromi</option>
                    <option value="101303">Uruobo-Okija</option>
                    <option value="101304">Uyo</option>
                    <option value="101305">Vom</option>
                    <option value="101306">Wagini</option>
                    <option value="101307">Wamba</option>
                    <option value="101308">Warri</option>
                    <option value="101309">Wasagu</option>
                    <option value="101310">Wawa</option>
                    <option value="101311">Wudil</option>
                    <option value="101312">Wukari</option>
                    <option value="101313">Wurno</option>
                    <option value="101314">Wuyo</option>
                    <option value="101315">Yajiwa</option>
                    <option value="101316">Yamrat</option>
                    <option value="101317">Yanda Bayo</option>
                    <option value="101318">Yandev</option>
                    <option value="101319">Yashikera</option>
                    <option value="101320">Yelwa</option>
                    <option value="101321">Yenagoa</option>
                    <option value="101322">Yola</option>
                    <option value="101323">Yuli</option>
                    <option value="101324">Zadawa</option>
                    <option value="101325">Zaki Biam</option>
                    <option value="101326">Zalanga</option>
                    <option value="101327">Zango</option>
                    <option value="101328">Zaria</option>
                    <option value="101329">Zungeru</option>
                    <option value="101330">Zuru</option>
                </select>
            </form>

            <div class="text-center my-3">
                <div class="spinner" id="spinner">
                    <span
                        class="spinner-grow spinner-grow-lg"
                        role="status"
                        aria-hidden="true"
                    ></span>
                    <span
                        class="spinner-grow spinner-grow-lg"
                        role="status"
                        aria-hidden="true"
                    ></span>
                    <span
                        class="spinner-grow spinner-grow-lg"
                        role="status"
                        aria-hidden="true"
                    ></span>
                </div>
            </div>
          </div>

          <div class="dya-mn mb-5" id="resultArea">
            <div class="container">
                
              <div class="all-forcuset mt-4">
                <div class="tab-content"  id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                         
                    <div class="comon-report-divbn">
                        <h2 class="today-hilights mt-0"> Today's Highlights </h2>
                        <div class="row mt-0 gx-lg-5">
                        <div class="col-lg-4">
                        <div class="left-sec-d1">
                          <div class="mainIcon"></div>
                          <h2 class="currentTemp"></h2>
                          <div class="d-flex justify-content-between">
                            
                        <span class="location">Lagos</span> 
                        <span class="dateToday"> September 18, 2022</span>
                          </div>
                          <hr />
                          <ul class="list-unstyled mt-3 mb-0">
                            <li>
                              <i class="fas fa-cloud"></i> <span id="condition">Patchy Culdy Day</span>
                            </li>
                          </ul>
                        </div>
                      </div>
                        <div class="col-lg-8">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                          <div class="col-md-6">
                            <div class="comon-report uv">
                              <h5>Wind Direction</h5>
                              
                              <h2 id="windDirection"></h2>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="comon-report uv">
                              <h5>Wind Staus</h5>
                              <h2 id="wind"></h2>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="comon-report sun-set-div">
                              <h5>Sunrise & Sunset</h5>
                              <div class="sum">
                                <h6><i class="fas fa-moon"></i> <span id="sunset">06:30 AM</span></h6>
                              </div>
                              <div class="sum">
                                <h6><i class="fas fa-sun"></i> <span id="sunrise">06:30 AM</span></h6>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="comon-report uv">
                              <h5>Humidity</h5>
                              <h2 id="humidity">20 <sup> % </sup></h2>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
    
                  </div>
                </div>
              </div>

              
                <div class="hours-div">
                    <h2> 24 Hours Forecast </h2>
                    
                    <div class="row" id="hourly">
                    </div>
                </div>

               <div class="content-sec-wh">
               <h1> Daily Forecast </h1>
                <div class="row weekly-div mt-4" id="daily">
                  
                </div>
    
            </div>
    

            
        </div>
      </div>

   






</section>

<?php include_once 'components/footer.php' ?>
<?php include_once 'components/modal.php' ?>
<?php include_once 'components/scripts.php' ?>

</body>

</html>

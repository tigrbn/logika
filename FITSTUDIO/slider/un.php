<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Клубные карты");?>
<!-- CSS only -->

<main>
   <div class="row" style="margin-top: 50px;">
    <div class="col-xl-12">
        <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
            <h2>Клубные карты</h2>
        </div>
    </div>
     <div class="flex-column">
           <div id="myBtnContainer">
        <div class="slider multiple-items">
            <a class="nav-link" href="#"><button  class="card_btn active" onclick="filterSelection('all')" > Показать все</button></a>
            <a class="nav-link" href="#"> <button class="card_btn" onclick="filterSelection('one')"> Ознакомительные </button></a>
            <!-- <a class="nav-link" href="#">  <button class="card_btn" onclick="filterSelection('litestart')"> Легкий старт</button></a>
            <a class="nav-link" href="#">  <button class="card_btn" onclick="filterSelection('std')">Студент</button></a> -->
            <a class="nav-link" href="#"> <button class="card_btn" onclick="filterSelection('utro')"> Утро</button></a>
            <a class="nav-link" href="#">  <button class="card_btn" onclick="filterSelection('day')"> День</button></a>
            <a class="nav-link" href="#">  <button class="card_btn" onclick="filterSelection('dnevnoy')"> Дневной старт</button></a>
            <a class="nav-link" href="#">  <button class="card_btn" onclick="filterSelection('bezlimit')"> Безлимит</button></a>
            <a class="nav-link" href="#">  <button class="card_btn" onclick="filterSelection('weekends')"> Выходные дни</button></a>
       </div>
    </div>
    </div>
      <div class="filter"  > 
            <!-- РАЗОВОЕ НАЧАЛО -->
            <div class="filterDiv one">
            <div class="perevorot"> 
                <div class="details">
                  <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                  <div class="front">
                    <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/1разовое ст1.png" class="img_top" style="width: 90%; height:90%">
                  </div>

                 <div class="back">
                  <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/1разовое ст2.png" class="img_bottom" style="width: 90%; height:90%">       
                  </div>
                </div>
              </div>
            </div>
            <h1 class="club_price">750₽</h1>
            <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 1 ДЕНЬ</h1>
                </div>
            </div>
      
        <!-- РАЗОВОЕ КОНЕЦ -->
          <!-- ЛЕГКИЙ СТАРТ -->
         <a class="filterDiv one">
         <div class="perevorot"> 
            <div class="details">
              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
              <div class="front">
                <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/2легкий ст1.png" class="img_top" style="width: 90%; height:90%">
              </div>

             <div class="back">
              <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/2легкий ст2.png" class="img_bottom" style="width: 90%; height:90%">       
              </div>
            </div>
          </div>
            </div>
          <h1 class="club_price">1900₽</h1>
          <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 7 ДНЕЙ</h1>
          </div>
         </a> 

          <!-- ЛЕГКИЙ КОНЕЦ -->
          <a class="filterDiv one">      
            <div class="perevorot"> 
              <div class="details">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                  <div class="flipper">
                <div class="front">
                  <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/3 студ ст1.png" class="img_top" style="width: 90%; height:90%">
                </div>

               <div class="back">
                <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/3 студ ст2.png" class="img_bottom" style="width: 90%; height:90%">       
                </div>
              </div>
            </div>
              </div>
              <h1 class="club_price">2500₽</h1>
              <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 1 МЕСЯЦ</h1>
            </div>
          </a>
          <!-- ЛЕГКИЙ КОНЕЦ -->
          <a class="filterDiv one" style="visibility: hidden;">
          <div class="perevorot"> 
              <div class="details">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                  <div class="flipper">
                <div class="front">
                  <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/2легкий ст1.png" class="img_top" style="width: 90%; height:90%">
                </div>
          
               <div class="back">
                <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/2легкий ст2.png" class="img_bottom" style="width: 90%; height:90%">       
                </div>
              </div>
            </div>
              </div>
            <h1 class="club_price">1900₽</h1>
            <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 7 ДНЕЙ</h1>
            </div>
           </a> 
         <!-- УТРО НАЧАЛО -->
         <a class="filterDiv utro">
         <div class="perevorot"> 
            <div class="details">
              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
              <div class="front">
                <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/4 утро ст1.png" class="img_top" style="width: 90%; height:90%">
              </div>

             <div class="back">
              <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/4 утро ст2.png" class="img_bottom" style="width: 90%; height:90%">       
              </div>
            </div>
          </div>
            </div>
            <h1 class="club_price">4550₽</h1>
            <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 1 МЕСЯЦ</h1>
          </div>
        </a>  
           <a class="filterDiv utro">
           <div class="perevorot"> 
              <div class="details">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                  <div class="flipper">
                <div class="front">
                  <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/5  утро 3 ст1.png" class="img_top" style="width: 90%; height:90%">
                </div>
     
               <div class="back">
                <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/5  утро 3 ст2.png" class="img_bottom" style="width: 90%; height:90%">       
                </div>
              </div>
            </div>
              </div>
              <h1 class="club_price">11450₽</h1>
              <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 3 МЕСЯЦА</h1>
            </div>
          </a>  
          <a class="filterDiv utro">
          <div class="perevorot"> 
              <div class="details">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                  <div class="flipper">
                <div class="front">
                  <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/6  утро 6 ст1.png" class="img_top" style="width: 90%; height:90%">
                </div>

               <div class="back">
                <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/6  утро 6 ст2.png" class="img_bottom" style="width: 90%; height:90%">       
                </div>
              </div>
            </div>
              </div>
              <h1 class="club_price">20900₽</h1>
              <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 6 МЕСЯЦЕВ</h1>
            </div>
          </a>  
  
          <a class="filterDiv utro">
         <div class="perevorot"> 
              <div class="details">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                  <div class="flipper">
                <div class="front">
                  <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/7  утро 12 ст1.png" class="img_top" style="width: 90%; height:90%">
                </div>

               <div class="back">
                <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/7  утро 12 ст2.png" class="img_bottom" style="width: 90%; height:90%">       
                </div>
              </div>
            </div>
              </div>
              <h1 class="club_price">39900₽</h1>
              <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 12 МЕСЯЦЕВ</h1>
            </div>
          </a>  
          <!-- УТРО КОНЕЦ -->
  
          <!-- ДЕНЬ НАЧАЛО -->
          <a class="filterDiv day">
           <div class="perevorot"> 
              <div class="details">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                  <div class="flipper">
                <div class="front">
                  <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/12 день 1 ст 1.png" class="img_top" style="width: 90%; height:90%">
                </div>

               <div class="back">
                <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/12 день 1 ст 2.png" class="img_bottom" style="width: 90%; height:90%">       
                </div>
              </div>
            </div>
              </div>
              <h1 class="club_price">4950₽</h1>
              <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 1 МЕСЯЦ</h1>
            </div>
          </a> 
          <a class="filterDiv day">
          <div class="perevorot"> 
              <div class="details">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                  <div class="flipper">
                <div class="front">
                  <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/13 день 3 ст 1.png" class="img_top" style="width: 90%; height:90%">
                </div>

               <div class="back">
                <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/13 день 3 ст 2.png" class="img_bottom" style="width: 90%; height:90%">       
                </div>
              </div>
            </div>
              </div>
              <h1 class="club_price">13450₽</h1>
              <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 3 МЕСЯЦА</h1>
            </div>
          </a> 
          <a class="filterDiv day">
          <div class="perevorot"> 
              <div class="details">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                  <div class="flipper">
                <div class="front">
                  <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/14 день 6 ст 1.png" class="img_top" style="width: 90%; height:90%">
                </div>
     
               <div class="back">
                <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/14 день 6 ст 2.png" class="img_bottom" style="width: 90%; height:90%">       
                </div>
              </div>
            </div>
              </div>
              <h1 class="club_price">22900₽</h1>
              <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 6 МЕСЯЦЕВ</h1>
            </div>
          </a> 
          <a class="filterDiv day">
          <div class="perevorot"> 
              <div class="details">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                  <div class="flipper">
                <div class="front">
                  <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/15 день 12 ст 1.png" class="img_top" style="width: 90%; height:90%">
                </div>

               <div class="back">
                <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/15 день 12 ст 2.png" class="img_bottom" style="width: 90%; height:90%">       
                </div>
              </div>
            </div>
              </div>
              <h1 class="club_price">42900₽</h1>
              <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 12 МЕСЯЦЕВ</h1>
            </div>
          </a> 
          <!-- ДЕНЬ КОНЕЦ -->
          <a class="filterDiv utro">
            <!-- ДНЕВНОЙ СТАРТ НАЧАЛО -->
            <a class="filterDiv dnevnoy">
            <div class="perevorot"> 
                <div class="details">
                  <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                  <div class="front">
                    <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/8 днев стар 1 ст1.png" class="img_top" style="width: 90%; height:90%">
                  </div>

                 <div class="back">
                  <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/8 днев стар 1 ст2.png" class="img_bottom" style="width: 90%; height:90%">       
                  </div>
                </div>
              </div>
                </div>
                <h1 class="club_price">4450₽</h1>
                <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 1 МЕСЯЦ</h1>
              </div>
            </a>
  
        <a class="filterDiv dnevnoy">
        <div class="perevorot"> 
            <div class="details">
              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
              <div class="front">
                <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/9 днев стар 3 ст1.png" class="img_top" style="width: 90%; height:90%">
              </div>

             <div class="back">
              <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/9 днев стар 3 ст2.png" class="img_bottom" style="width: 90%; height:90%">       
              </div>
            </div>
          </div>
            </div>
            <h1 class="club_price">11450₽</h1>
            <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 3 МЕСЯЦА</h1>
          </div>
        </a>
        <a class="filterDiv dnevnoy">
         <div class="perevorot"> 
            <div class="details">
              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
              <div class="front">
                <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/10 днев стар 6 ст1.png" class="img_top" style="width: 90%; height:90%">
              </div>

             <div class="back">
              <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/10 днев стар 6 ст2.png" class="img_bottom" style="width: 90%; height:90%">       
              </div>
            </div>
          </div>
            </div>
            <h1 class="club_price">20900₽</h1>
            <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 6 МЕСЯЦЕВ</h1>
          </div>
        </a>
  
    <a class="filterDiv dnevnoy">
      <div class="perevorot"> 
        <div class="details">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
          <div class="front">
            <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/11 днев стар 12 ст1.png" class="img_top" style="width: 90%; height:90%">
          </div>

         <div class="back">
          <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/11 днев стар 12 ст2.png" class="img_bottom" style="width: 90%; height:90%">       
          </div>
        </div>
      </div>
        </div>
        <h1 class="club_price">39900₽</h1>
        <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 12 МЕСЯЦЕВ</h1>
      </div>
    </a>
        <!-- ДНЕВНОЙ СТАРТ КОНЕЦ -->

          <!-- БЕЗЛИМИТ НАЧАЛО -->
    <a class="filterDiv bezlimit">
               <div class="perevorot"> 
                  <div class="details">
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                      <div class="flipper">
                    <div class="front">
                      <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/16 безлимит 1 ст 1.png" class="img_top" style="width: 90%; height:90%">
                    </div>

                   <div class="back">
                    <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/16 безлимит 1 ст 2.png" class="img_bottom" style="width: 90%; height:90%">       
                    </div>
                  </div>
                </div>
                  </div>
                  <h1 class="club_price">5950₽</h1>
                  <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 1 МЕСЯЦ</h1>
                </div>
          </a>
          <a class="filterDiv bezlimit">      
              <div class="perevorot"> 
                <div class="details">
                  <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                  <div class="front">
                    <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/17 безлимит 3 ст 1.png" class="img_top" style="width: 90%; height:90%">
                  </div>
  
                 <div class="back">
                  <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/17 безлимит 3 ст 2.png" class="img_bottom" style="width: 90%; height:90%">       
                  </div>
                </div>
              </div>
                </div>
                <h1 class="club_price">15450₽</h1>
                <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 3 МЕСЯЦА</h1>
              </div>
            </a>
            <a class="filterDiv bezlimit">
             <div class="perevorot"> 
                <div class="details">
                  <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                  <div class="front">
                    <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/18 безлимит 6 ст 1.png" class="img_top" style="width: 90%; height:90%">
                  </div>

                 <div class="back">
                  <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/18 безлимит 6 ст 2.png" class="img_bottom" style="width: 90%; height:90%">       
                  </div>
                </div>
              </div>
                </div>
                <h1 class="club_price">27900₽</h1>
                <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 6 МЕСЯЦЕВ</h1>
              </div>
        </a>
        <a class="filterDiv bezlimit">      
          <div class="perevorot"> 
              <div class="details">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                  <div class="flipper">
                <div class="front">
                  <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/19 безлимит 12 ст 1.png" class="img_top" style="width: 90%; height:90%">
                </div>

               <div class="back">
                <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/19 безлимит 12 ст 2.png" class="img_bottom" style="width: 90%; height:90%">       
                </div>
              </div>
            </div>
              </div>
              <h1 class="club_price">49900₽</h1>
              <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 12 МЕСЯЦЕВ</h1>
            </div>
          </a>
            <!-- БЕЗЛИМИТ КОНЕЦ -->
              <!-- ВЫХОДНЫЕ НАЧАЛО -->
          <a class="filterDiv weekends">
          <div class="perevorot"> 
              <div class="details">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                  <div class="flipper">
                <div class="front">
                  <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/20 выходные 1 ст 1.png" class="img_top" style="width: 90%; height:90%">
                </div>

               <div class="back">
                <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/20 выходные 1 ст 2.png" class="img_bottom" style="width: 90%; height:90%">       
                </div>
              </div>
            </div>
              </div>
              <h1 class="club_price">2900₽</h1>
              <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 1 МЕСЯЦ</h1>
            </div>
      </a>
  
      <a class="filterDiv weekends">      
           <div class="perevorot"> 
            <div class="details">
              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
              <div class="front">
                <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/21 выходные 3 ст 1.png" class="img_top" style="width: 90%; height:90%">
              </div>

             <div class="back">
              <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/21 выходные 3 ст 2.png" class="img_bottom" style="width: 90%; height:90%">       
              </div>
            </div>
          </div>
            </div>
            <h1 class="club_price">7450₽</h1>
            <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 3 МЕСЯЦА</h1>
          </div>
        </a>
        <a class="filterDiv weekends">
         <div class="perevorot"> 
            <div class="details">
              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
              <div class="front">
                <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/22 выходные 6 ст 1.png" class="img_top" style="width: 90%; height:90%">
              </div>

             <div class="back">
              <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/22 выходные 6 ст 2.png" class="img_bottom" style="width: 90%; height:90%">       
              </div>
            </div>
          </div>
            </div>
            <h1 class="club_price">12900₽</h1>
            <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 6 МЕСЯЦЕВ</h1>
          </div>
    </a>

    <a class="filterDiv weekends">      
     <div class="perevorot"> 
          <div class="details">
            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
              <div class="flipper">
            <div class="front">
              <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/23 выходные 12 ст 1.png" class="img_top" style="width: 90%; height:90%">
            </div>

           <div class="back">
            <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/23 выходные 12 ст 2.png" class="img_bottom" style="width: 90%; height:90%">       
            </div>
          </div>
        </div>
          </div>
          <h1 class="club_price">22900₽</h1>
          <h1 class="club_day"> <img src="<?=SITE_TEMPLATE_PATH?>/cart_gallery/календарь для срока действия карты.png" alt=""> 12 МЕСЯЦЕВ</h1>
        </div>
      </a>
        <!-- ВЫХОДНЫЕ КОНЕЦ -->
        </div>
      </div>
</main>
   
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
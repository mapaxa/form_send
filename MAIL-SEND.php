           <div class="btn-wrapper">

            <button type="button"  data-toggle="modal" class="btn-fastorder" data-target="#myModal">
              Заказать
            </button>              
          </div>

          <?php 



          $to = 'info@anti-gepatit.com';
         

          if(isset($_POST['submit'])) {

            $name = trim(htmlspecialchars($_POST['name43']));
            $phone = trim(htmlspecialchars($_POST['phone43']));
            $goods = trim(htmlspecialchars($_POST['product_name43']));


            if(isset($_POST['phone43']) && !empty($_POST['phone43'])) {
              $suffix_message_phone = "Телефон: $phone";  
            }
            if(isset($_POST['name43']) && !empty($_POST['name43'])) {
              $suffix_message_name = "Имя: $name";
            }

            if(isset($_POST['product_name43']) && !empty($_POST['product_name43'])) {
              $suffix_message_goods = "Продукт: $goods";
            }

            if(isset($_POST['messenger']) && !empty($_POST['messenger'])) {
              $messenger = "Предпочтительно связаться через: " . $_POST['messenger'];
            }


            $message = 'Клиент хочет сделать заказ. ' . "\r\n" .  $suffix_message_name . "\r\n" . $suffix_message_phone . "\r\n" . $suffix_message_goods . "\r\n" . $messenger;

            $subject = 'anti-gepatit.com/';

            $headers = 'From: http://anti-gepatit.com/' . "\r\n" .
            'Reply-To: http://anti-gepatit.com/' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            mail($to, $subject, $message, $headers);


            unset($name, $phone, $messenger, $_POST );
          }






          ?>




          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" style="width: 450px" role="document">
              <div class="modal-content" style="padding: 20px; border-radius: 15px;">
                <div class="modal-header">
                  <!--<button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                  <h2 class=" text-center modal-title h1 modal_cus" id="bs-fastorderLabel">Контакты для связи</h2>
                  <br>
                  <ul class="list-inline">

                   <li style="padding: 0">
                    <label>
                    <input type="radio" form="main-contact-form" name="messenger" value="watsup" />
                      <img src="/image/catalog/social/wap.png" alt="">
                    </label>
                  </li>

                  <li style="padding: 0">
                    <label>
                    <input type="radio" form="main-contact-form" name="messenger" value="viber" />
                      <img src="/image/catalog/social/viber.png" alt="">
                    </label>
                  </li>

                  <li style="padding: 0">
                    <label>
                    <input type="radio" form="main-contact-form" name="messenger" value="telegram" />
                      <img src="/image/catalog/social/tele.png" alt="">
                    </label>
                  </li>


                  <li style="padding: 0">
                    <label>
                    <input type="radio" form="main-contact-form" name="messenger" value="Телефон" />
                     <img src="/image/catalog/social/phone.png" alt="">
                    </label>
                  </li>

                  <li style="padding: 13px 0 0 0; float: right; padding-top: 13px;"><a href="tel:+79254491039" style="color: #575757;"><b>+7 925 <span style="font-size: 22px;">449-10-39</span></b></a></li>
                </ul>
                <div class="text-uppercase text-center h3" style="color:#8e0000; margin-top: 40px; font-size: 23px"><b>Оставить заявку на товар</b></div>
              </div>
              <div class="modal-body" style="padding-top: 0">
                <div role="form" id="fastorder_main">
                 <form id="main-contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="alert('Ваш заказ обрабатывается')">
                  <fieldset>
                    <!-- Alert form validation -->
                    <div id="error-msg" class="alert alert-danger" role="alert" style="display: none;">
                      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                      Все поля со звездочкой должны быть заполнены!                        </div>

                      <div id="wait-msg" class="alert alert-info" role="alert" style="display: none;">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        Дождитесь завершения заказа, после чего форма закроется автоматически!                        </div>
                        <label></label>





                        <div class="form-group input-group-sm text-left">
                          <label class="h4" for="txt_name" style="font-size: 16px; color:#5f5b5b"><b>Представьтесь</b><span class="text-danger">*</span></label>
                          <input class="form-control" name="name43" required value="" type="text">
                        </div>
                        <div class="form-group input-group-sm text-left" style="">
                          <label class="text-uppercase h4" style="font-size: 16px; margin-top: 20px; color:#5f5b5b" for="txt_phone"><b>Номер телефона</b><span class="text-danger">*</span></label>
                          <input class="form-control" style="" name="phone43" required placeholder="" value="" type="tel" pattern="[0-9]{,3}">
                        </div>
                        <div class="form-group input-group-sm text-left hidden">
                          <label class="text-uppercase h4" style="font-size: 16px; margin-top: 20px; color:#5f5b5b" for="txt_phone"><b><?php echo $product['name']; ?></b><span class="text-danger"></span></label>
                          <input class="form-control" name="goods" placeholder="" value="" type="text">
                        </div>
                        <button type="submit" style="float: left" id="btn_submit43" name="submit" class="btn btn-success btn-lg btn_fin_ord"><b>ОТПРАВИТЬ</b></button>
                        <div id="tt" class="form-group">
                          <label for="txta_comment"></label>
                          <input class="form-control" style="display:none" id="product_name43" name="product_name43" value="ДАКЛАТАСВИР — DAKLATASVIR NATDAC">
                          <input class="form-control" style="display:none" id="price43" name="price43" value="7500">
                          <input class="form-control" style="display:none" id="product_id43" name="product_id43" value="43">
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
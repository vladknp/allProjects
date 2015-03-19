<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Pay</title>

	<!-- // <script src="js/form.js"></script> -->
</head>
<body>
<!-- 
	<script src='https://auth.robokassa.ru/Merchant/PaymentForm/FormMS.js?
MrchLogin=$mrh_login&OutSum=$out_summ&InvId=$inv_id
&Desc=$inv_desc&SignatureValue=$crc&Shp_item=$shp_item
&Culture=$culture'></script>
 -->

 <div>
        <?
          // 2.
          // Оплата заданной суммы с выбором валюты на сайте ROBOKASSA
          // Payment of the set sum with a choice of currency on site ROBOKASSA

          // регистрационная информация (логин, пароль #1)
          // registration info (login, password #1)
          $mrh_login = "Kk7nTp9r";
          $mrh_pass1 = "afd1987c";

          // номер заказа
          // number of order
          $inv_id = 0;

          // описание заказа
          // order description
          $inv_desc = "ДС-5";

          // сумма заказа
          // sum of order
          $out_summ = "3990.00";

          // тип товара
          // code of goods
          $shp_item = "0";

          // предлагаемая валюта платежа
          // default payment e-currency
          $in_curr = "";

          // язык
          // language
          $culture = "ru";

          // формирование подписи
          // generate signature
          $crc  = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:Shp_item=$shp_item");

          // форма оплаты товара
          // payment form
          print "<html><script language=JavaScript ".
                "src='https://auth.robokassa.ru/Merchant/PaymentForm/FormMS.js?".
                "MrchLogin=$mrh_login&OutSum=$out_summ&InvId=$inv_id".
                "&Desc=$inv_desc&SignatureValue=$crc&Shp_item=$shp_item".
                "&Culture=$culture'></script></html>";
        ?>
      </div>
 
</body>
</html>
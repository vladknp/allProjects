<?

// 2.
// Оплата заданной суммы с выбором валюты на сайте ROBOKASSA
// Payment of the set sum with a choice of currency on site ROBOKASSA

// регистрационная информация (логин, пароль #1)
// registration info (login, password #1)
$mrh_login = "5445";
$mrh_pass1 = "PrNs7NPr9";

// номер заказа
// number of order
$inv_id = 1227221027;

// описание заказа
// order description
$inv_desc = "ДС-1";

// сумма заказа
// sum of order
$out_summ = "6490.00";

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
      "MerchantLogin=$mrh_login&OutSum=$out_summ&InvoiceID=$inv_id".
      "&Description=$inv_desc&SignatureValue=$crc&shpItem=$shp_item".
      "&Culture=$culture&Encoding=$encoding'></script></html>";
?>
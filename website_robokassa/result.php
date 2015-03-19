// as a part of ResultURL script

// your registration data
$mrh_pass2 = "PrNs7NPr92";   // merchant pass2 here

// HTTP parameters:
$out_summ = $_REQUEST["OutSum"];
$inv_id = $_REQUEST["InvId"];
$crc = $_REQUEST["SignatureValue"];

// HTTP parameters: $out_summ, $inv_id, $crc
$crc = strtoupper($crc);   // force uppercase

// build own CRC
$my_crc = strtoupper(md5("$out_summ:$inv_id:$mrh_pass2"));

if (strtoupper($my_crc) != strtoupper($crc))
{
  echo "bad sign\n";
  exit();
}

// print OK signature
echo "OK$inv_id\n";

// perform some action (change order state to paid)
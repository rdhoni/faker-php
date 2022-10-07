<?php

namespace Rdhoni\FakerPhp\Generate;


/**
 * Generate Other Data
 * • Kode Poss
 * • Nik KTP
 */
class Other
{
  private function grab($file)
  {
    $aaaa = file(dirname(__FILE__) . "/data/" . $file . ".txt");
    $aaab = array($aaaa);
    $aaac = trim($aaaa[array_rand($aaaa)]);
    return $aaac;
  }
  private function explo($data)
  {
    $aaaa = explode(",", $data);
    $res['code']  = trim($aaaa[0]);
    $res['value'] = trim(strtolower($aaaa[1]));
    return $res;
  }
  private function remove_kab($kab)
  {
    $aaaa = str_replace("kabupaten", "", $kab);
    $aaab = str_replace("kota", "", $aaaa);
    $aaac = str_replace("kab", "", $aaab);
    return trim($aaac);
  }
  public function tgl()
  {
    return rand(1, 30) . "-" . rand(1, 12) . "-" . rand(1945, 2000);
  }
  private function fix($data)
  {
    $aaaa = explode(",", $data);
    $kode = trim($aaaa[0]);
    if ($kode == "klebet") {
      $data = str_replace("klebet", "kjlebet", $data);
    } elseif (trim($aaaa[1]) == "siotapina") {
      $data = str_replace("siotapina", "siontapia", $data);
    } elseif (trim($aaaa[1]) == "pasimasunggu") {
      $data = str_replace("pasimasunggu", "pasimassunggu", $data);
    } elseif ($data == "ruang,satarmeseutara") {
      $data = "ruang,satarmesebarat";
    } elseif ($data == "kepayang,kepenuhanhulu") {
      $data = "kepayan,kepenuhanhulu";
    } elseif ($data == "iemasenkayeeadang,syiahkuala") {
      $data = "iemasenkayeadang,syiahkuala";
    } else {
      $data = $data;
    }
    return $data;
  }
  private function get_nomor($len)
  {
    $data = "1234567890";
    $word = array();
    for ($a = 0; $a < $len; $a++) {
    $rand = rand(0, strlen($data) - 1);
    $word[$a] = $data[$rand];
    }
    $ww = implode("", $word);
    return $ww;
  }
  public function kodepos($kode)
  {
    $kode = $this->fix($kode);
    $aaa = file_get_contents(dirname(__FILE__) . "/data/pos/pos.txt");
    $aab = explode($kode, $aaa);
    $aac = explode("\n", $aab[0]);
    $jml = count($aac) - 1;
    $aad = explode(",", $aac[$jml]);
    
    if ($aad[0]) {
      return $aad[1];
    } else {
      return $this->get_nomor(5);
    }
  }
  private function hapus($kata)
  {
    $aaaa = str_replace(" ", "", $kata);
    return strtolower($aaaa);
  }
  public function any()
  {
    $aaaa = $this->grab("provinsi/provinsi");
    if ($aaaa) {
      $aaab = $this->explo($aaaa);
      $aaac = $this->grab("kabupaten/" . $aaab['code']);
      if ($aaac) {
        $aaad = $this->explo($aaac);
        $aaae = $this->grab("kecamatan/" . $aaad['code']);
        if ($aaae) {
          $aaaf = $this->explo($aaae);
          $aaag = $this->grab("desa/" . $aaaf['code']);
          if ($aaag) {
            $aaah = $this->explo($aaag);
            $aaai = array("Ds.", "Dsn.", "Prum.");
            $aaaj = $aaai[array_rand($aaai)];
            /** explode tanggal **/
            $aaal = $this->tgl();
            $aaak = explode("-", $aaal);
            $code = rand(1, 2);
            if (strlen($aaak[0]) == 1) {
              if ($code == 1) {
                $klm = "laki-laki";
                $tgl = "0" . trim($aaak[0]);
              } else {
                $klm = "perempuan";
                $tgl = $aaak[0] + 40;
              }
            } else {
              if ($code == 1) {
                $klm = "laki-laki";
                $tgl = "0" . trim($aaak[0]);
              } else {
                $klm = "perempuan";
                $tgl = $aaak[0] + 40;
              }
            }
            if (strlen($aaak[1]) == 1) {
              $bln = "0" . trim($aaak[1]);
            } else {
              $bln = trim($aaak[1]);
            }
            
            $kodeprov = substr($aaaf['code'], 0, 6);
            
            $thn  = substr($aaak[2], 2);
            $nik  = $kodeprov . $tgl . $bln . $thn . "000" . rand(1, 6);
            $nor  = rand(01,99);
            $rt   = rand(1,30);
            $rw   = rand(1,20);
            $nrmh = "No. ".$nor." RT ".$rw."/ RW ".$rw;
            if(strlen($nik) == 17){
              $nik = substr($nik, 0, 6).substr($nik, 7,17);
            }
            $res['nik']          = $nik;
            $res['tanggal']      = ucwords($this->remove_kab($aaad['value'])) . "," . $aaal;
            $res['kelamin']      = $klm;
            $res['alamat']       = $nrmh." ".$aaaj . " " . ucwords($aaah['value']) . " Kec. " . ucwords($aaaf['value']) . " Kab. " . ucwords($this->remove_kab($aaad['value'])) . " Prov. " . ucwords($aaab['value']);
            $res['code']         = $code;
            $res['pos']          = $this->kodepos($this->hapus($aaah['value'] . "," . $aaaf['value']));
            $res['data']['rmh']  = $nrmh;
            $res['data']['desa'] = ucwords($aaah['value']);
            $res['data']['kec']  = ucwords($aaaf['value']);
            $res['data']['kab']  = ucwords($this->remove_kab($aaad['value']));
            $res['data']['prov'] = ucwords($aaab['value']);
            return $res;
          }
        }
      }
    }
  }
}


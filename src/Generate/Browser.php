<?php

/**
 * For php random user-agent
 * Creator : rdhoni
 **/

namespace Rdhoni\FakerPhp\Generate;

/**
 * random user agent Android, Pc, iPhone, Linux
 * for namespace call path location file
 * and call namespace use \rdhoni\connect\agent;
 * for use only call $ua = new ua;
 * get ua android => ua_android();
 * get random ua  => ua_rand();
 **/
class UaRand
{
  var $linux_proc;
  var $mac_proc;
  var $lang;
  function __construct()
  {
    $this->linux_proc = array(
      'i686',
      'x86_64'
    );
    $this->mac_proc = array(
      'Intel',
      'PPC',
      'U; Intel',
      'U; PPC'
    );
    $this->lang = array(
      'en-US',
      'sl-SI'
    );
  }
  private function firefox()
  {
    $ver = array(
      'Gecko/' . date('Ymd', rand(strtotime('2011-1-1'), mktime())) . ' Firefox/' . rand(5, 7) . '.0',
      'Gecko/' . date('Ymd', rand(strtotime('2011-1-1'), mktime())) . ' Firefox/' . rand(5, 7) . '.0.1',
      'Gecko/' . date('Ymd', rand(strtotime('2010-1-1'), mktime())) . ' Firefox/3.6.' . rand(1, 20),
      'Gecko/' . date('Ymd', rand(strtotime('2010-1-1'), mktime())) . ' Firefox/3.8'
    );
    $platforms = array(
      '(Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . '; ' . $this->lang[array_rand($this->lang, 1)] . '; rv:1.9.' . rand(0, 2) . '.20) ' . $ver[array_rand($ver, 1)],
      '(X11; Linux ' . $this->linux_proc[array_rand($this->linux_proc, 1)] . '; rv:' . rand(5, 7) . '.0) ' . $ver[array_rand($ver, 1)],
      '(Macintosh; ' . $this->mac_proc[array_rand($this->mac_proc, 1)] . ' Mac OS X 10_' . rand(5, 7) . '_' . rand(0, 9) . ' rv:' . rand(2, 6) . '.0) ' . $ver[array_rand($ver, 1)]
    );
    return $platforms[array_rand($platforms, 1)];
  }
  private function safari()
  {
    $saf = rand(531, 535) . '.' . rand(1, 50) . '.' . rand(1, 7);
    if (rand(0, 1) == 0) {
      $ver = rand(4, 5) . '.' . rand(0, 1);
    } else {
      $ver = rand(4, 5) . '.0.' . rand(1, 5);
    }
    $platforms = array(
      '(Windows; U; Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . ") AppleWebKit/$saf (KHTML, like Gecko) Version/$ver Safari/$saf",
      '(Macintosh; U; ' . $this->mac_proc[array_rand($this->mac_proc, 1)] . ' Mac OS X 10_' . rand(5, 7) . '_' . rand(0, 9) . ' rv:' . rand(2, 6) . '.0; ' . $this->lang[array_rand($this->lang, 1)] . ") AppleWebKit/$saf (KHTML, like Gecko) Version/$ver Safari/$saf",
      '(iPod; U; CPU iPhone OS ' . rand(3, 4) . '_' . rand(0, 3) . ' like Mac OS X; ' . $this->lang[array_rand($this->lang, 1)] . ") AppleWebKit/$saf (KHTML, like Gecko) Version/" . rand(3, 4) . ".0.5 Mobile/8B" . rand(111, 119) . " Safari/6$saf",
    );
    return $platforms[array_rand($platforms, 1)];
  }
  private function iexplorer()
  {
    $ie_extra = array(
      '',
      '; .NET CLR 1.1.' . rand(4320, 4325) . '',
      '; WOW64'
    );
    $platforms = array(
      '(compatible; MSIE ' . rand(5, 9) . '.0; Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . '; Trident/' . rand(3, 5) . '.' . rand(0, 1) . ')'
    );
    return $platforms[array_rand($platforms, 1)];
  }
  private function opera()
  {
    $op_extra = array(
      '',
      '; .NET CLR 1.1.' . rand(4320, 4325) . '',
      '; WOW64'
    );
    $platforms = array(
      '(X11; Linux ' . $this->linux_proc[array_rand($this->linux_proc, 1)] . '; U; ' . $this->lang[array_rand($this->lang, 1)] . ') Presto/2.9.' . rand(160, 190) . ' Version/' . rand(10, 12) . '.00',
      '(Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . '; U; ' . $this->lang[array_rand($this->lang, 1)] . ') Presto/2.9.' . rand(160, 190) . ' Version/' . rand(10, 12) . '.00'
    );
    return $platforms[array_rand($platforms, 1)];
  }
  private function chrome()
  {
    $saf = rand(531, 536) . rand(0, 2);

    $platforms = array(
      '(X11; Linux ' . $this->linux_proc[array_rand($this->linux_proc, 1)] . ") AppleWebKit/$saf (KHTML, like Gecko) Chrome/" . rand(13, 15) . '.0.' . rand(800, 899) . ".0 Safari/$saf",
      '(Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . ") AppleWebKit/$saf (KHTML, like Gecko) Chrome/" . rand(13, 15) . '.0.' . rand(800, 899) . ".0 Safari/$saf",
      '(Macintosh; U; ' . $this->mac_proc[array_rand($this->mac_proc, 1)] . ' Mac OS X 10_' . rand(5, 7) . '_' . rand(0, 9) . ") AppleWebKit/$saf (KHTML, like Gecko) Chrome/" . rand(13, 15) . '.0.' . rand(800, 899) . ".0 Safari/$saf"
    );
    return $platforms[array_rand($platforms, 1)];
  }
  public function generate()
  {
    $x = rand(1, 5);
    switch ($x) {
      case 1:
        return "Mozilla/5.0 " . $this->firefox();
        break;
      case 2:
        return "Mozilla/5.0 " . $this->safari();
        break;
      case 3:
        return "Mozilla/" . rand(4, 5) . ".0 " . $this->iexplorer();
        break;
      case 4:
        return "Opera/" . rand(8, 9) . '.' . rand(10, 99) . ' ' . $this->opera();
        break;
      case 5:
        return 'Mozilla/5.0' . $this->chrome();
        break;
    }
  }
}
class Browser extends UaRand
{
  private function hashh($len)
  {
    $data = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
    $word = array();
    for ($a = 0; $a < $len; $a++) {
      $rand = rand(0, strlen($data) - 1);
      $word[$a] = $data[$rand];
    }
    $ww = implode("", $word);
    return $ww;
  }
  private function samsung()
  {
    $list  = array("SM-S111DL","SM-A015V","SM-A015U1","SM-A015U","SM-A015T1","SM-A015AZ","SM-A015A","SM-A015F","SM-A015G","SM-A015M","SM-A107F","SM-A107M","SM-M017F","SM-A115M","SM-A115F","SM-A115W","SM-A115AP","SM-A115A","SM-A115AZ","SM-A115U1","SM-A115U","SM-S115DL","SM-A2070","SM-A207M","SM-A207F","SM-A215W","SM-S215DL","SM-A215U1","SM-A215U","SM-G6200","SM-J106F","SM-J250N","SM-J320F","SM-M015G","SM-M015F","SM-M105F","SM-M105G","SM-M105M","SM-M105Y","SM-M115M","SM-M115F","SM-M205F","SM-M205FN","SM-M205G","SM-M205M","SM-M205N","SM-M215F","SM-M305F","SM-M305M","SM-M3070","SM-M307F","SM-M307FN","SM-M315F","SM-F415F","SM-M405F","SM-N980F","SM-N981N","SM-N981U","SM-N981W","SM-N981U1","SM-N9810","SM-N981BR","SM-N981B","SM-N986U","SM-N986W","SM-N986N","SM-N986U1","SM-N986BR","SM-N9860","SM-N986B","SM-N985F","SM-N986J","SM-G550FY","SM-G780F","SM-G781U1","SM-G781V","SM-G781U","SM-G781W","SM-G781N","SM-G781B","SM-T285","SM-T295N","SM-T290","SM-T295","SM-T295C","SM-T297","SM-T307U","SM-T570","SM-T575","SM-T875N","SM-T875","SM-T870","SM-T878U","SM-T976N","SM-T975N","SM-T975","SM-T976B","SM-T970","SM-T978U","SM-F707W","SM-F707U1","SM-F707U","SM-F7070","SM-F7070Y","SM-F707B","SM-F707N","SM-F916B","SM-F916U","SM-F916W","SM-F916U1","SM-F916N","SM-F9160","SM-R210","SM-R260","SM-R365","SM-A105F","SM-A105G","SM-A105M","SM-A105N","SM-A105FN","SM-A102U","SM-S102DL","SM-A102U1","SM-A102W","SM-A102D","SM-A102J","SM-A102N","SM-A102DU","SM-A205F","SM-A205FN","SM-A205G","SM-A205GN","SM-A205YN","SM-A205S","SM-A205W","SM-A205U","SM-A205U1","SM-S205DL","SM-A202F","SM-A202K","SM-A217N","SM-A217M","SM-A217F","SM-A307FN","SM-A307G","SM-A307GN","SM-A307GT","SM-A315N","SM-A315F","SM-A315G","SM-A405FM","SM-A405FN","SM-A405S","SM-A415F","SM-A415J","SM-A415D","SM-A505F","SM-A505FM","SM-A505FN","SM-A505G","SM-A505GN","SM-A505GT","SM-A505YN","SM-A505N","SM-A505W","SM-A505U","SM-S506DL","SM-A505U1","SM-A507FN","SM-A5070","SM-A516N","SM-A516U1","SM-A516V","SM-A516U","SM-A516B","SM-A5160","SM-A600FN","SM-A600F","SM-A600G","SM-A600GN","SM-A600N","SM-A600P","SM-A600A","SM-A600AZ","SM-A600T","SM-A600T1","SM-A600U","SM-A605FN","SM-A6050","SM-A605F","SM-A605G","SM-A605GN","SM-A605K","SM-A6058","SM-A6060","SM-A606Y","SM-A750F","SM-A750FN","SM-A750G","SM-A750GN","SM-A750N","SM-A750C","SM-A7050","SM-A705F","SM-A705FN","SM-A705GM","SM-A705MN","SM-A705W","SM-A705YN","SM-A705U","SM-A707F","SM-A7070","SM-A716S","SM-A716B","SM-A7160","SM-A716V","SM-A716U1","SM-A716U","SM-A530D","SM-G8850","SM-G8858","SM-G885F","SM-G885S","SM-G885Y","SM-A805F","SM-A8050","SM-A805N","SM-G8870","SM-G887F","SM-A920F","SM-A9200","SM-A920N","SM-G887N","SM-A908N","SM-A9080","SM-A908B","SM-F900U","SM-F900F","SM-F907N","SM-F907B","SM-F900U1","SM-F9000","SM-F900J","SM-F900W","SM-J400M","SM-J400G","SM-J400F","SM-J415N","SM-J600F","SM-J600FN","SM-J600G","SM-J600GT","SM-J600GF","SM-J600L","SM-J600N","SM-J610G","SM-J610F","SM-J610FN","SM-J720F","SM-J720M","SM-J737S","SM-J810F","SM-J810M","SM-J810Y","SM-J810GF","SM-J810G","SM-M107F","SM-M317F","SM-M515F","SM-G980F","SM-G981W","SM-G981U","SM-G981D","SM-G981J","SM-G981N","SM-G9810","SM-G981U1","SM-G981B","SM-G981V","SM-G988BR","SM-G988W","SM-G988U","SM-G988N","SM-G9880","SM-G988U1","SM-G988B","SM-G988J","SM-G985F","SM-G986W","SM-G986U","SM-G986N","SM-G9860","SM-G986BR","SM-G986U1","SM-G986B","SM-G986J","SM-G986D","SM-G8750","SM-T510","SM-T515","SM-T517","SM-T515N","SM-T517P","SM-T595C","SM-T595N","SM-T597","SM-T597V","SM-T597P","SM-T597W","SM-T590","SM-T595","SM-T387P","SM-T387V","SM-T387AA","SM-T387T","SM-T387R4","SM-P200","SM-T387W","SM-P205","SM-T505N","SM-T505C","SM-T500","SM-T505","SM-T545","SM-T540","SM-T547U","SM-T547","SM-T835N","SM-T837","SM-T830","SM-T835","SM-T837A","SM-T837P","SM-T837V","SM-T837R4","SM-T837T","SM-T835C","SM-T720","SM-T725","SM-T725N","SM-T727","SM-T725C","SM-T727V","SM-T727A","SM-T727U","SM-T727R4","SM-T865","SM-T865N","SM-T860","SM-T867","SM-T867U","SM-T867V","SM-T867R4","SM-T866N","SM-P617","SM-P615N","SM-P615","SM-P615C","SM-P610","SM-G398FN","SM-F700J","SM-F700U1","SM-F700U","SM-F700W","SM-F700F","SM-F7000","SM-F700N","SM-W2020","SM-A305F","SM-A305FN","SM-A305G","SM-A305GN","SM-A3050","SM-A3058","SM-A305GT","SM-A305N","SM-A305YN","SM-A305J","SM-A305JX","SM-A3051","SM-A515F","SM-A515W","SM-A515U1","SM-A515U","SM-S515DL","SM-A715F","SM-A715W","SM-N970U","SM-N970U1","SM-N970W","SM-N970F","SM-N9700","SM-N971N","SM-N770F","SM-N975U","SM-N975W","SM-N975U1","SM-N9750","SM-N975F","SM-N975J","SM-N975D","SM-N975C","SM-N976U","SM-N976V","SM-N976N","SM-N976B","SM-N9760","SM-N976Q","SM-N960F","SM-N9600","SM-N960N","SM-N960U","SM-N960W","SM-N960J","SM-N960U1","SM-N960D","SM-G9730","SM-G973F","SM-G973N","SM-G973U","SM-G973U1","SM-G973W","SM-G9738","SM-G973J","SM-G973D","SM-G973C","SM-G977N","SM-G977U","SM-G977B","SM-G977T","SM-G977P","SM-G770F","SM-G770U1","SM-G9750","SM-G9750C","SM-G975F","SM-G975FC","SM-G975N","SM-G975NC","SM-G975U","SM-G975U1","SM-G975U2","SM-G975UC","SM-G975W","SM-G975WC","SM-G9758","SM-G975J","SM-G975D","SM-G975DS","SM-G9700","SM-G9708","SM-G970F","SM-G970N","SM-G970U","SM-G970U1","SM-G970W","SM-G9600","SM-G9608","SM-G960J","SM-G960U","SM-G960U1","SM-G960W","SM-G960D","SM-G960N","SM-G960F","SM-G965F","SM-G965N","SM-G9650","SM-G965J","SM-G965U","SM-G965U1","SM-G965W","SM-G965D","SM-G715FN","SM-G715U1","SM-G715U","SM-G715W","SM-G889F","SM-G889N","SM-G889G","SM-J260A","SM-S260DL","SM-J260AZ","SM-J530G","SM-J530GM","SM-J530K","SM-J530L","SM-J530S","SM-J530Y","SM-J530YM","SM-J530F","SM-J530FM","SM-G889N0","SM-G889YB","SM-A720S","SM-A530F","SM-A530N","SM-A530W","SM-A730F","SM-J330L","SM-J330N","SM-J3308","SM-J330F","SM-J330FN","SM-J330G","SM-J3300","SM-J337P","SM-J337V","SM-J337VPP","SM-J337U","SM-J337W","SM-S357BL","SM-S367VL","SM-J337R4","SM-J337R7","SM-J337A","SM-J415GN","SM-J415FN","SM-J415G","SM-J415F","SM-J730K","SM-J730G","SM-J730GM","SM-J730F","SM-J730FM","SM-J701F","SM-J701M","SM-J701MT","SM-J737T","SM-J737V","SM-J737VPP","SM-J737R4","SM-J737U","SM-J737T1","SM-S767VL","SM-S757BL","SM-J737A","SM-J737P","SM-N935F","SM-N935S","SM-G611F","SM-G611K","SM-G611L","SM-G611S","SM-G611FF","SM-G611M","SM-G611MT","SM-G892U","SM-G892A","SM-T385K","SM-T385L","SM-T385M","SM-T385S","SM-T380","SM-T385","SM-T387VK","SM-T395","SM-T395N","SM-T397U","SM-T390","SM-T825C","SM-T825Y","SM-T827","SM-T827V","SM-T827R4","SM-T820","SM-T825N0","SM-T825","SM-G390W","SM-G390Y","SM-G390F","SM-W2018","SM-N950F","SM-N950N","SM-N950D","SM-N950U1","SM-N9500","SM-N9508","SM-N950J","SM-N950U","SM-N950W","SM-G950F","SM-G950FD","SM-G950N","SM-G9500","SM-G9508","SM-G950D","SM-G950J","SM-G950U","SM-G950U1","SM-G950W","SM-G955F","SM-G955FD","SM-G955N","SM-G9550","SM-G955D","SM-G955U","SM-G955U1","SM-G955W","SM-C7108","SM-C710F","SM-C7100","SM-J260T1","SM-J327A","SM-J327R4","SM-J327R6","SM-J327R7","SM-J327U","SM-J327V","SM-J327VPP","SM-J327W","SM-J710MN","SM-J710F","SM-J710FN","SM-J710GN","SM-J710K","SM-G615F","SM-G615FU","SM-J727U","SM-J727T","SM-J727T1","SM-J727V","SM-J727VPP","SM-S737TL","SM-J727A","SM-J727AZ","SM-J727P","SM-J727R4","SM-G5510","SM-G5520","SM-G5528","SM-G610F","SM-G610K","SM-G610L","SM-G610M","SM-G610S","SM-T580","SM-T585","SM-T585C","SM-T585N0","SM-T587","SM-T587P","SM-P580","SM-P585","SM-P585M","SM-P585N0","SM-P585Y","SM-P587","SM-P583","SM-P588C","SM-T380C","SM-T385C","SM-T378V","SM-T927A","SM-A310D","SM-A320F","SM-A320FL","SM-A320Y","SM-A520F","SM-A520K","SM-A520L","SM-A520S","SM-A520W","SM-A720F","SM-A810F","SM-A810YZ","SM-A810S","SM-A9100","SM-A910F","SM-C5000","SM-C5010","SM-C5018","SM-C7000","SM-C7010","SM-C7018","SM-C701F","SM-C9000","SM-C9008","SM-C900F","SM-C900Y","SM-J337AZ","SM-J336AZ","SM-J337T","SM-G570F","SM-G570M","SM-G570Y","SM-G6100","SM-G930F","SM-G930FD","SM-G930K","SM-G930L","SM-G930S","SM-G9300","SM-G9308","SM-G930A","SM-G930AZ","SM-G930P","SM-G930R4","SM-G930R6","SM-G930R7","SM-G930T","SM-G930T1","SM-G930V","SM-G930VL","SM-G930W8","SM-G930U","SM-G891A","SM-G935F","SM-G935K","SM-G935L","SM-G935S","SM-G9350","SM-G935A","SM-G935P","SM-G935R4","SM-G935T","SM-G935U","SM-G935V","SM-G935VC","SM-G935W8","SM-G935FD","SM-T583","SM-T230NZ","SM-G5700","SM-A5100","SM-A5108","SM-A7100","SM-A7108","SM-G1650","SM-J250F","SM-J250G","SM-J250M","SM-J250Y","SM-J320A","SM-J320AZ","SM-J320V","SM-J320W8","SM-J510F","SM-J510FN","SM-J510FQ","SM-J510GN","SM-J510H","SM-J510L","SM-J510MN","SM-J510S","SM-G600S","SM-A310F","SM-A310M","SM-A310N0","SM-A310Y","SM-A510F","SM-A510FD","SM-A510M","SM-A510Y","SM-A710F","SM-A710FD","SM-A710K","SM-A710L","SM-A710M","SM-A710S","SM-J700P","SM-J700T1","SM-J700T","SM-G610Y","SM-G903W","SM-P355","SM-P355M","SM-T355","SM-T355Y","SM-T350","SM-T555","SM-T550","SM-P555","SM-P555M","SM-P550","SM-P555S","SM-T395C","SM-T377A","SM-T377P","SM-T377R4","SM-T377T","SM-T377V","SM-T377W","SM-T560NU","SM-T567V","SM-J326AZ","SM-J327AZ","SM-J327T","SM-J327T1","SM-S337TL","SM-N9200","SM-N9208","SM-N920A","SM-N920C","SM-N920CD","SM-N920G","SM-N920I","SM-N920K","SM-N920L","SM-N920P","SM-N920S","SM-N920V","SM-N920W8","SM-N920T","SM-N920R4","SM-G920AZ","SM-G9200","SM-G9208","SM-G920A","SM-G920F","SM-G920FD","SM-G920FQ","SM-G920I","SM-G920P","SM-G920T","SM-G920V","SM-G920W8","SM-G920S","SM-G920R4","SM-G890A","SM-G9250","SM-G925A","SM-G925F","SM-G925FQ","SM-G925I","SM-G925T","SM-G925V","SM-G925W8","SM-G925S","SM-G9280","SM-G9287","SM-G9287C","SM-G928A","SM-G928C","SM-G928F","SM-G928G","SM-G928I","SM-G928W8","SM-G928T","SM-G928V","SM-T710","SM-T713","SM-T715","SM-T715C","SM-T715Y","SM-T719","SM-T719C","SM-T719Y","SM-T810","SM-T813","SM-T815","SM-T815C","SM-T815N0","SM-T815Y","SM-T817","SM-T817A","SM-T817P","SM-T817R4","SM-T817T","SM-T817V","SM-T817W","SM-T818","SM-T818A","SM-T818V","SM-T818W","SM-T819","SM-T819C","SM-T819Y","SM-T818T","SM-G9298","SM-G532F","SM-G532G","SM-G532M","SM-G532MT","SM-G888N0","SM-J327P","SM-S327VL","SM-S727VL","SM-W2017","SM-A300FU","SM-A500F","SM-A500FQ","SM-A500FU","SM-A500H","SM-A500HQ","SM-A500M","SM-A500Y","SM-A500G","SM-A7000","SM-A700F","SM-A700FD","SM-A700FQ","SM-A710Y","SM-A8000","SM-A800F","SM-A800I","SM-A9000","SM-G1600","SM-G160N","SM-G165N","SM-J120A","SM-J120AZ","SM-J120W","SM-S120VL","SM-J320N0","SM-J320R4","SM-J320VPP","SM-S320VL","SM-J500FN","SM-J500G","SM-J500H","SM-J500M","SM-J500Y","SM-J500F","","SM-J5108","SM-J510UN","SM-J700H","SM-J700M","SM-J700F","SM-J7108","SM-N9150","SM-N915F","SM-N915FY","SM-N915G","SM-N915T","SM-N9100","SM-N910C","SM-N910CQ","SM-N910F","SM-N910G","SM-N910H","SM-N910U","SM-N910V","SM-G550T1","SM-S550TL","SM-G600F","SM-G600FY","SM-G900A","SM-G900F","SM-G900FQ","SM-G900H","SM-G900I","SM-G900M","SM-G900MD","SM-G900V","SM-G901F","SM-S903VL","SM-G900P","SM-G900T","SM-G9008W","SM-G870A","SM-G800F","SM-G800H","SM-G800HQ","SM-G800M","SM-G800Y","SM-G903F","SM-G903M","SM-S907VL","SM-P350","SM-P355C","SM-P355Y","SM-T355C","SM-T555C","SM-T375L","SM-T375S","SM-T378K","SM-T378L","SM-T378S","SM-T800","SM-T805","SM-T805C","SM-T805M","SM-T807","SM-T807P","SM-T807V","SM-T700","SM-T705","SM-T705C","SM-T705M","SM-T705Y","SM-T707A","SM-T707V","SM-T536","SM-T230NW","SM-G389F","SM-J120F","SM-J120FN","SM-J120G","SM-J120M","SM-J120ZN","SM-J320Y","SM-J320ZN","SM-J320P","SM-J3110","SM-J3119","SM-J3119S","SM-T116IR","SM-T670","SM-T677V","SM-T360","SM-T365","SM-T365F0","SM-T365M","SM-T365Y","SM-W2016","SM-G9198","SM-E700F","SM-E700H","SM-E700M","SM-J200BT","SM-J200F","SM-J200G","SM-J200GU","SM-J200M","SM-J200Y","SM-P600","SM-P601","SM-P605","SM-P605V","SM-P905V","SM-P907A","SM-N750","SM-N7505","SM-T3777","SM-T900","SM-T905","SM-T530","SM-T235","SM-T237P","SM-G388F","SM-A5000","SM-A700YD","SM-G360G","SM-G361F","SM-E500H","SM-E500HQ","SM-E500M","SM-G150N0","SM-G530BT","SM-G530FQ","SM-G530FZ","SM-G530H","SM-G530M","SM-G530W","SM-G531F","SM-G531M","SM-J500N0","SM-J5008","SM-J7008","SM-P555Y","SM-T530NU","SM-T531","SM-T532","SM-T535","SM-T533","SM-T330","SM-T330NU","SM-T331","SM-T332","SM-T335","SM-T337A","SM-T337T","SM-T337V","SM-A013F","SM-A013G","SM-M013F","SM-A013M","SM-A260G","SM-A260F","SM-J260M","SM-J260Y","SM-J260G","SM-J260F","SM-J260GU","SM-J260MU","SM-J260FU","SM-J410G","SM-J410F","SM-R830S","SM-R830","SM-R835US","SM-R835FS","SM-R835F","SM-R820","SM-R820S","SM-R825US","SM-R825FS","SM-R825F","SM-R855U","SM-R855N","SM-R855F","SM-R850","SM-R845U","SM-R840T","SM-R845N","SM-R8450","SM-R845F","SM-R840","SM-R810","SM-R815U","SM-R815W","SM-R815F","SM-R815N","SM-R800","SM-R805U","SM-R805W","SM-R805F","SM-R8050","SM-R805N","SM-R500","SM-R775A","SM-R775S","SM-R775T","SM-R770","SM-R765","SM-R765A","SM-R765T","SM-R760","SM-R765F","SM-R765N","SM-R600","SM-R775V","SM-R765V","SM-R720","SM-R730A","SM-R730S","SM-R730V","SM-R732","SM-R735","SM-R735A","SM-R735V","SM-R735S");
    $brand = $list[array_rand($list)];
    return trim($brand);
  }
  private function vivo()
  {
    $list  = array("vivo 1904","vivo 1938","vivo 1901","vivo 1902","vivo 1907","vivo 1915","vivo 1935","vivo 1918","vivo 1820","vivo 1817","vivo 1814","vivo 1808","vivo 1807","vivo 1816","vivo 1802","vivo 1812","vivo 1724","vivo 1719","vivo 1714","vivo 1727","vivo 1718","vivo 1716","vivo 1723","vivo 1606","vivo 1601","vivo 1609","vivo 1612","vivo 1610","vivo 1603","vivo 1611");
    $brand = $list[array_rand($list)];
    return trim($brand);
  }
  private function xiaomi()
  {
    $list  = array("Mi MIX 3 5G","Redmi 1S","Redmi 1S"," Redmi Note","Redmi K30S","Redmi Note 8 Pro","Redmi Note 8 Pro","Redmi 10X"," Redmi 10X Pro","Redmi 6A"," Redmi 6","Redmi 6A"," Redmi 6","Mi 3"," Mi 4"," Mi Note","Mi 3"," Mi 4"," Mi Note","Mi Pad 3","Mi 10"," Mi 10 Pro"," Mi 10"," Redmi K30 Pro","Mi 9","Mi 9"," Redmi K20 Pro","Redmi K30","Mi Pad 4","Mi9 Pro 5G","Redmi Note 9 Pro","Redmi Note 9 Pro Max","Mi A2 lite"," Redmi 6pro","Mi A2 lite","Mi A2 Lite","Redmi K20","Redmi Note","Mi 8","POCOPHONE F1","MIX2S"," MIX3"," MI 8"," POCOPHONE F1"," MI 8UD"," MI 8","MI 8"," MIX2S"," POCOPHONE F1"," MI 8UD"," MIX 3"," MI 8","Mi 4i","MI POCO M2 Pro","Redmi Note 9 Pro","Redmi Note 9 Pro Max","Mi 5","Redmi Note 8","Mi 8SE"," Mi 9SE","Redmi Note","Redmi Note 9 Pro","Redmi Note3","Redmi Note2","Redmi Note2 Pro","Mi Max"," Mi Max Pro","Redmi 2"," Redmi 3","Mi A2","Mi A2","Mi A2","Mi Note 3","Mi Note 3","Redmi Note 3 Full Netcom","Redmi 3S"," Redmi 3X","Mi Pad 2","Mi A3","MI CC 9e"," Mi A3","Redmi Note 7","Redmi 10X 4G","Redmi 9","Redmi POCO M2","Mi 4S"," Mi 4C"," Mi Note Pro","Mi 4S"," Mi 4C"," Mi Note Pro","Redmi K30 Pro","Mi Play","Redmi Note 9 4G","Redmi POCO M3","Redmi 10X 4G","Redmi 9","Redmi POCO M2","Redmi 4 Premium","Mi 1","Mi 2"," Mi 2A"," Mi 2S","Redmi Note 4X Standard","Redmi Note 4X Standard","Mi Pad","MI MAX3","Mi Note 3","MI MAX3","MI 8Lite","MI MAX3","MI 8Lite","Redmi 8"," Redmi 8A","Redmi 8A Dual","Redmi 7"," Redmi Y3","Redmi 7"," Redmi Y3","Mi Max 2","MIX 3","Redmi K30"," Redmi K20","Redmi K30 5G","Redmi 7A","Mi 3 China Mobile","MI 8 Lite","Mi MIX 2S","MI CC 9"," MI CC 9 Meitu Edition","Redmi K20 Pro","Redmi 4A"," Redmi 5"," Redmi 5A","Redmi 5"," Redmi 5A","Mi 6"," Mi MIX 2","Mi 6"," Mi MIX 2","Mi 6"," Mi MIX 2","Redmi 6Pro"," Redmi 5Plus","Mi 5X","Redmi 6Pro","Redmi 4X","Mi 5"," Mi 5s"," Mi 5s Plus"," Mi MIX"," Mi Note 2","Mi 5"," Mi 5s"," Mi 5s Plus"," Mi MIX"," Mi Note 2","Mi 5"," Mi 5s"," Mi 5s Plus"," Mi MIX"," Mi Note 2","Mi 8 SE","MI 8SE"," MI 9SE"," MI CC 9"," MI CC 9 Meitu Edition","Redmi POCO X3","Redmi 2 Standard","Redmi Go","Mi 5X"," Redmi 5 Plus","Mi A1","Mi A1","Mi A1","Mi A1","Redmi Note 5"," Redmi Note6 Pro"," Mi 6X","Mi CC9 Pro","Redmi Note 5A","Mi 10 Pro"," Mi 10","Mi 10 Lite 5G"," Mi 10 Lite Zoom","Redmi Note 7Pro","Redmi Note 5","Redmi Note 5"," Redmi Note6 Pro"," Mi 6X","Redmi Note 8T","Redmi S2","Redmi S2");
    $brand = $list[array_rand($list)];
    return trim($brand);
  }
  private function realme()
  {
    $list  = array("rmx1941","rmx1821","rmx2030","rmx1911","rmx2180","rmx2185","rmx1971","rmx1801","rmx1945","rmx1825","rmx1807","rmx2020","rmx1941","rmx1811","rmx1851","rmx1821","rmx1805","rmx1831","rmx1941","rmx1921","rmx1925","rmx1931","rmx1903","rmx2061","rmx2001","rmx2185","rmx2151","rmx2103");
    $brand = $list[array_rand($list)];
    return trim($brand);
  }
  private function brand()
  {
    $rand = rand(1,9);
    if($rand == 1){
      $ua['brand'] = "Xiaomi";
      $ua['ua']    = $this->xiaomi();
    }elseif($rand == 2){
      $ua['brand'] = 'Vivo';
      $ua['ua']    = $this->vivo();
    }elseif($rand == 3){
      $ua['brand'] = 'Realme';
      $ua['ua']    = $this->realme();
    }else{
      $ua['brand'] = "Samsung";
      $ua['ua']    = $this->samsung();
    }
    return $ua;
  }
  private function build($len)
  {
    $data = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $word = array();
    for ($a = 0; $a < $len; $a++) {
      $rand = rand(0, strlen($data) - 1);
      $word[$a] = $data[$rand];
    }
    $ww = implode("", $word);
    return $ww;
  }
  public function ua_android()
  {
    $aaa = array(21, 22, 23, 24, 25, 26, 27, 28);
    $sdk = $aaa[array_rand($aaa)];
    $aab = array("5.0", "5.0.1", "6.0", "7.0", "7.1", "7.1.1", "7.1.2", "8.0", "9.0","10.0");
    $android = $aab[array_rand($aab)];
    $andro   = $android;
    $android = "Android ".$android;
    $brands  = $this->brand();
    $brand   = $brands['ua'];
    $build   = $this->build(6);
    switch ($sdk) {
      case 21:
        /** Firefox Lite **/
        $ua['id']      = "org.mozilla.rocket";
        $ua['brand']   = $brands['brand'];
        $ua['type']    = $brands['ua'];
        $ua['os']      = $andro;
        $ua['browser'] = "Firefox Lite|87.0.4280.101";
        $ua['ua']      = "Mozilla/5.0 (Linux; {$android}; {$brand}; Build/{$build}; rv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Rocket/2.5.2(20647) Chrome/87.0.4280.101 Mobile Safari/537.36";
        return $ua;
        break;
      case 22:
        /** Chrome 87 **/
        $ua['id']      = "mark.via.gp";
        $ua['brand']   = $brands['brand'];
        $ua['type']    = $brands['ua'];
        $ua['os']      = $andro;
        $ua['browser'] = "Chrome|87.0.4280.101";
        $ua['ua']      = "Mozilla/5.0 (Linux; {$android}; {$brand}; Build/{$build}; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/87.0.4280.101 Mobile Safari/537.36";
        return $ua;
        break;
      case 23:
        /** Puffin 8.5 **/
        $ua['id']      = "com.cloudmosa.puffinFree";
        $ua['brand']   = $brands['brand'];
        $ua['type']    = $brands['ua'];
        $ua['os']      = $andro;
        $ua['browser'] = "Puffin|69.0.3497.100";
        $ua['ua']      = "Mozilla/5.0 (Linux; {$android}; {$brand}; Build/{$build}; rv) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36 Puffin/8.5.0.42207AP";
        return $ua;
        break;
      case 24:
        /** Chrome 83 **/
        $ua['id']      = "com.android.chrome";
        $ua['brand']   = $brands['brand'];
        $ua['type']    = $brands['ua'];
        $ua['os']      = $andro;
        $ua['browser'] = "Chrome|83.0.4103.106";
        $ua['ua']      = "Mozilla/5.0 (Linux; {$android}; {$brand};) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36";
        return $ua;
        break;
      case 25;
        /** Yandex Browser **/
        $ua['id']      = "com.yandex.browser";
        $ua['brand']   = $brands['brand'];
        $ua['type']    = $brands['ua'];
        $ua['os']      = $andro;
        $ua['browser'] = "Yandex Browser|87.0.4280.101";
        $ua['ua']      = "Mozilla/5.0 (Linux; arm_64; {$android}; {$brand};) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 YaBrowser/20.11.0.180 Mobile Safari/537.36";
        return $ua;
        break;
      case 26;
        /** Uc Browser **/
        $ua['id']      = "com.UCMobile.intl";
        $ua['brand']   = $brands['brand'];
        $ua['type']    = $brands['ua'];
        $ua['os']      = $andro;
        $ua['browser'] = "Uc Browser|78.0.3904.108";
        $ua['ua']      = "Mozilla/5.0 (Linux; U; Android 9; {$brand}; Build/PKQ1.190101.001) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/78.0.3904.108 UCBrowser/13.3.2.1303 Mobile Safari/537.36";
        return $ua;
        break;
      case 27;
        /** Opera 61.2 **/
        $ua['id']      = "com.opera.browser";
        $ua['brand']   = $brands['brand'];
        $ua['type']    = $brands['ua'];
        $ua['os']      = $andro;
        $ua['browser'] = "Opera|86.0.4240.198";
        $ua['ua']      = "Mozilla/5.0 (Linux; {$android}; {$brand};) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36 OPR/61.2.3076.56749";
        return $ua;
        break;
      case 28;
        /** Firefox 84 **/
        $ua['id']      = "org.mozilla.firefox";
        $ua['brand']   = $brands['brand'];
        $ua['type']    = $brands['ua'];
        $ua['os']      = $andro;
        $ua['browser'] = "Firefox|84.0";
        $ua['ua']      = "Mozilla/5.0 ({$android}; Mobile; {$brand}; rv:68.0) Gecko/68.0 Firefox/84.0";
        return $ua;
        break;
    }
  }
  public function ua_rand()
  {
    $x = rand(1, 2);
    if ($x == 2) {
      $ua = $this->ua_android();
    } else {
      $ua = $this->ua_android();
    }
    return $this->ua_android();
  }
}

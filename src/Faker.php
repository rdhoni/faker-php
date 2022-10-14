<?php

namespace Rdhoni\FakerPhp;

use Rdhoni\FakerPhp\Generate\Ip;
use Rdhoni\FakerPhp\Generate\User;
use Rdhoni\FakerPhp\Generate\Other;
use Rdhoni\FakerPhp\Generate\Browser;

/**
 * Generate Data Faker
 */
class Faker
{
  public function json()
  {
    return json_decode($this->generate());
  }
  public function generate($code=null)
  {
    $generate_ip      = new Ip();
    $generate_user    = new User();
    $generate_other   = new Other();
    $generate_browser = new Browser();
    
    /** retrieve data from that class **/
    $ip        = $generate_ip->indo();
    $any       = $generate_other->any($code);
    $user      = $generate_user->fake($any['code']);
    $browser   = $generate_browser->ua_android();

    /** Return get array **/
    $res['name']           = ucwords($user['nama']);
    $res['user']           = $user['user'];
    $res['pass']           = $user['pass'];
    $res['ttl']            = strtolower($any['tanggal']);
    $res['email']          = $user['email'];
    $res['gender']         = ucwords($any['kelamin']);
    $res['phone']          = $user['phone'];
    $res['ip']             = $ip;
    $res['ua']             = $browser['ua'];
    $res['address']        = $any['alamat'];
    $res['details']        = $any['data'];
    $res['hp']['brand']    = $browser['brand'];
    $res['hp']['type']     = $browser['type'];
    $res['hp']['os']       = $browser['os'];
    $res['hp']['browser']  = $browser['browser'];
    $res['hp']['path']     = $browser['id'];
    $res['kodepos']        = $any['pos'];
    $res['imei']['number'] = $browser['imei_number'];
    $res['imei']['string'] = $browser['imei_string'];

    
    return json_encode($res);
  }
}

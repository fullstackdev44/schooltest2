<?php
namespace MailPoetVendor\Egulias\EmailValidator\Warning;
if (!defined('ABSPATH')) exit;
class IPV6DoubleColon extends Warning
{
 const CODE = 73;
 public function __construct()
 {
 $this->message = 'Double colon found after IPV6 tag';
 $this->rfcNumber = 5322;
 }
}
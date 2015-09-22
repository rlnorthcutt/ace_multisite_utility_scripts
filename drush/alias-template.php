<?php
$acquia_account = 'mysite';
$domain = 'mysite.com';

$aliases['dev'] = array(
  'parent' => $acquia_account . '.dev',
  'uri' => 'dev.SUBDOMAIN.' . $domain,
);
$aliases['stage'] = array(
  'parent' => $acquia_account . '.stage',
  'uri' => 'stage.SUBDOMAIN.' . $domain,
);
$aliases['prod'] = array(
  'parent' => $acquia_account . '.prod',
  'uri' => 'SUBDOMAIN.' . $domain,
  // Read only - force the sql-sync & rsync to simulate transfer to this server
  'command-specific' => array (
    'sql-sync' => array (
      'simulate' => '1',
    ),
    'rsync' => array (
      'simulate' => '1',
    ),
  ),
);

<?php
global $databases;
// Set the fredge db to create tables in the drupal db.
// This is a temporary step until we can sort out
// the grant permissions.
$databases['fredge']['default'] = $databases['default']['default'];

<?php

namespace Drupal\Tests\rest\Functional\EntityResource\BaseFieldOverride;

use Drupal\Tests\rest\Functional\AnonResourceTestTrait;

/**
 * @group rest
 */
class BaseFieldOverrideJsonAnonTest extends BaseFieldOverrideResourceTestBase {

  use AnonResourceTestTrait;

  /**
   * {@inheritdoc}
   */
  protected static $format = 'json';

  /**
   * {@inheritdoc}
   */
  protected static $mimeType = 'application/json';

}

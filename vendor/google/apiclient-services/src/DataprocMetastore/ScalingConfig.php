<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\DataprocMetastore;

class ScalingConfig extends \Google\Model
{
  /**
   * @var string
   */
  public $instanceSize;
  /**
   * @var float
   */
  public $scalingFactor;

  /**
   * @param string
   */
  public function setInstanceSize($instanceSize)
  {
    $this->instanceSize = $instanceSize;
  }
  /**
   * @return string
   */
  public function getInstanceSize()
  {
    return $this->instanceSize;
  }
  /**
   * @param float
   */
  public function setScalingFactor($scalingFactor)
  {
    $this->scalingFactor = $scalingFactor;
  }
  /**
   * @return float
   */
  public function getScalingFactor()
  {
    return $this->scalingFactor;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ScalingConfig::class, 'Google_Service_DataprocMetastore_ScalingConfig');

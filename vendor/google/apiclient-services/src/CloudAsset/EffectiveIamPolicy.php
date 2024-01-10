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

namespace Google\Service\CloudAsset;

class EffectiveIamPolicy extends \Google\Collection
{
  protected $collection_key = 'policies';
  /**
   * @var string
   */
  public $fullResourceName;
  /**
   * @var PolicyInfo[]
   */
  public $policies;
  protected $policiesType = PolicyInfo::class;
  protected $policiesDataType = 'array';

  /**
   * @param string
   */
  public function setFullResourceName($fullResourceName)
  {
    $this->fullResourceName = $fullResourceName;
  }
  /**
   * @return string
   */
  public function getFullResourceName()
  {
    return $this->fullResourceName;
  }
  /**
   * @param PolicyInfo[]
   */
  public function setPolicies($policies)
  {
    $this->policies = $policies;
  }
  /**
   * @return PolicyInfo[]
   */
  public function getPolicies()
  {
    return $this->policies;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EffectiveIamPolicy::class, 'Google_Service_CloudAsset_EffectiveIamPolicy');

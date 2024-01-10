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

namespace Google\Service\Recommender;

class GoogleCloudRecommenderV1RecommendationContent extends \Google\Collection
{
  protected $collection_key = 'operationGroups';
  /**
   * @var GoogleCloudRecommenderV1OperationGroup[]
   */
  public $operationGroups;
  protected $operationGroupsType = GoogleCloudRecommenderV1OperationGroup::class;
  protected $operationGroupsDataType = 'array';
  /**
   * @var array[]
   */
  public $overview;

  /**
   * @param GoogleCloudRecommenderV1OperationGroup[]
   */
  public function setOperationGroups($operationGroups)
  {
    $this->operationGroups = $operationGroups;
  }
  /**
   * @return GoogleCloudRecommenderV1OperationGroup[]
   */
  public function getOperationGroups()
  {
    return $this->operationGroups;
  }
  /**
   * @param array[]
   */
  public function setOverview($overview)
  {
    $this->overview = $overview;
  }
  /**
   * @return array[]
   */
  public function getOverview()
  {
    return $this->overview;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRecommenderV1RecommendationContent::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1RecommendationContent');

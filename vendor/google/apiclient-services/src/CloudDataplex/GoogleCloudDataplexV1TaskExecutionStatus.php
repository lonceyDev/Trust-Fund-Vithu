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

namespace Google\Service\CloudDataplex;

class GoogleCloudDataplexV1TaskExecutionStatus extends \Google\Model
{
  /**
   * @var GoogleCloudDataplexV1Job
   */
  public $latestJob;
  protected $latestJobType = GoogleCloudDataplexV1Job::class;
  protected $latestJobDataType = '';
  /**
   * @var string
   */
  public $updateTime;

  /**
   * @param GoogleCloudDataplexV1Job
   */
  public function setLatestJob(GoogleCloudDataplexV1Job $latestJob)
  {
    $this->latestJob = $latestJob;
  }
  /**
   * @return GoogleCloudDataplexV1Job
   */
  public function getLatestJob()
  {
    return $this->latestJob;
  }
  /**
   * @param string
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1TaskExecutionStatus::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1TaskExecutionStatus');

<?php

namespace Google\AdsApi\AdManager\v201811;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContentMetadataKeyHierarchyTargeting
{

    /**
     * @var int[] $customTargetingValueIds
     */
    protected $customTargetingValueIds = null;

    /**
     * @param int[] $customTargetingValueIds
     */
    public function __construct(array $customTargetingValueIds = null)
    {
      $this->customTargetingValueIds = $customTargetingValueIds;
    }

    /**
     * @return int[]
     */
    public function getCustomTargetingValueIds()
    {
      return $this->customTargetingValueIds;
    }

    /**
     * @param int[]|null $customTargetingValueIds
     * @return \Google\AdsApi\AdManager\v201811\ContentMetadataKeyHierarchyTargeting
     */
    public function setCustomTargetingValueIds(array $customTargetingValueIds = null)
    {
      $this->customTargetingValueIds = $customTargetingValueIds;
      return $this;
    }

}

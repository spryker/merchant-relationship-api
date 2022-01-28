<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantRelationshipApi\Business\Updater;

use Generated\Shared\Transfer\ApiDataTransfer;
use Generated\Shared\Transfer\ApiItemTransfer;

interface MerchantRelationshipUpdaterInterface
{
    /**
     * @param int $idMerchantRelationship
     * @param \Generated\Shared\Transfer\ApiDataTransfer $apiDataTransfer
     *
     * @return \Generated\Shared\Transfer\ApiItemTransfer
     */
    public function updateMerchantRelationship(int $idMerchantRelationship, ApiDataTransfer $apiDataTransfer): ApiItemTransfer;
}

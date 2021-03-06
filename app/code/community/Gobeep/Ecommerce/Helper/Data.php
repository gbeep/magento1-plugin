<?php

/**
 * GoBeep
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    GoBeep
 * @package     Gobeep_Ecommerce
 * @author      Christophe Eblé <ceble@gobeep.co>
 * @copyright   Copyright (c) GoBeep (https://gobeep.co)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

require_once 'vendor/autoload.php';

use Gobeep\Ecommerce\SdkInterface;

class Gobeep_Ecommerce_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Returns possible module statuses
     * 
     * @return array
     */
    public function getStatuses()
    {
        return [
            SdkInterface::STATUS_PENDING => $this->__('Pending'),
            SdkInterface::STATUS_REFUNDED => $this->__('Refunded'),
        ];
    }
}

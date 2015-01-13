<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Sales\Block\Adminhtml\Order\View\Tab\Stub;

/**
 * Stub for an online payment method
 */
class OnlineMethod extends \Magento\Payment\Model\Method\AbstractMethod
{
    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = false;
}

<?php
/**
 * Created by Metagento.com
 * Date: 11/1/2018
 */

namespace Metagento\DisableNewsletterSuccess\Plugin\Newsletter\Model;


class Subscriber
{
    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function beforeSendConfirmationSuccessEmail(\Magento\Newsletter\Model\Subscriber $subject)
    {
        if ($this->scopeConfig->getValue('newsletter/subscription/disable_newsletter_success',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE)) {
            $subject->setImportMode(true);
        }
    }
}
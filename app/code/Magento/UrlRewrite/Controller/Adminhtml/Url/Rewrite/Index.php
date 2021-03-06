<?php
/**
 *
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\UrlRewrite\Controller\Adminhtml\Url\Rewrite;

class Index extends \Magento\UrlRewrite\Controller\Adminhtml\Url\Rewrite
{
    /**
     * Show URL rewrites index page
     *
     * @return void
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_setActiveMenu('Magento_UrlRewrite::urlrewrite');
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('URL Rewrites'));
        $this->_view->renderLayout();
    }
}

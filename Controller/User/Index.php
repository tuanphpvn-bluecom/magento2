<?php

namespace Expressly\Expressly\Controller\User;

use Expressly\Presenter\PingPresenter;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{

    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function execute()
    {
        $presenter = new PingPresenter();

        $result = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        $result->setData($presenter->toArray());

        return $result;
    }
}
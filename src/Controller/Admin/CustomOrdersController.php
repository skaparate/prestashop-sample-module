<?php

namespace Skaparate\Controller\Admin;

if (!defined('_PS_VERSION_')) {
    die;
}

use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use PrestaShopBundle\Security\Annotation\AdminSecurity;
use PrestaShopBundle\Security\Annotation\ModuleActivated;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class CustomOrdersController extends FrameworkBundleAdminController
{
    /**
     * Shows list of orders
     *
     * @param Request $request
     * @param OrderFilters $filters
     *
     * @return Response
     */
    public function indexAction(Request $request)
    {
        return $this->render(
            '@Modules/sk_testmodule/views/templates/admin/sell/order/index.html.twig',
            [
                'enableSidebar' => true,
            ]
        );
    }
}

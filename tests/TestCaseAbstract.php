<?php

/*
 * This file is part of gpupo/mercadolivre-sdk
 * Created by Gilmar Pupo <g@g1mr.com>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 * For more information, see <http://www.g1mr.com/>.
 */

namespace Gpupo\Tests\MercadolivreSdk;

use Gpupo\MercadolivreSdk\Factory;
use Gpupo\Tests\CommonSdk\TestCaseAbstract as CommonSdkTestCaseAbstract;

abstract class TestCaseAbstract extends CommonSdkTestCaseAbstract
{
    private $factory;

    public static function getResourcesPath()
    {
        return dirname(dirname(__FILE__)).'/Resources/';
    }

    public function factoryClient()
    {
        return $this->getFactory()->getClient();
    }

    protected function getOptions()
    {
        return [
            'app_id'        => $this->getConstant('APP_ID'),
            'secret_key'    => $this->getConstant('SECRET_KEY'),
            'verbose'       => $this->getConstant('VERBOSE'),
            'dryrun'        => $this->getConstant('DRYRUN'),
            'registerPath'  => $this->getConstant('REGISTER_PATH'),
        ];
    }

    protected function getFactory()
    {
        if (!$this->factory) {
            $this->factory = Factory::getInstance()->setup($this->getOptions(), $this->getLogger());
        }

        return $this->factory;
    }

    /**
     * Requer Implementação mas não será abstrato para não impedir testes que não o usam.
     */
    protected function getManager($filename = null)
    {
        unset($filename);

        return;
    }

    protected function hasToken()
    {
        return $this->hasConstant('SECRET_KEY');
    }

    public function providerProducts()
    {
        $manager = $this->getFactory()->factoryManager('product');
        $manager->setDryRun($this->factoryResponseFromFixture('fixture/Product/list.json'));

        return $manager->fetch();
    }

    public function dataProviderProducts()
    {
        $list = [];

        foreach ($this->providerProducts() as $product) {
            $list[] = [$product];
        }

        return $list;
    }

    public function providerOrders()
    {
        $manager = $this->getFactory()->factoryManager('order');
        $manager->setDryRun($this->factoryResponseFromFixture('fixture/Order/list.json'));

        return $manager->fetch();
    }

    public function dataProviderOrders()
    {
        $list = [];

        foreach ($this->providerOrders() as $order) {
            $list[] = [$order];
        }

        return $list;
    }
}
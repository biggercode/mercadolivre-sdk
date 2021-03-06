<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/mercadolivre-sdk
 * Created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 * For more information, see <https://opensource.gpupo.com/>.
 *
 */

namespace Gpupo\MercadolivreSdk\Console\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @codeCoverageIgnore
 */
final class ProductListCommand extends AbstractCommand
{
    public function main($app)
    {
        $this->getApp()->appendCommand('catalog:product:list', 'Get the product list')
            ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
                $list = $app->processInputParameters([], $input, $output);
                $pm = $app->factorySdk($list)->factoryManager('product');

                try {
                    $request = $pm->fetch();
                    dump($request);
                } catch (\Exception $e) {
                    $app->showException($e, $output);
                }
            });
    }
}

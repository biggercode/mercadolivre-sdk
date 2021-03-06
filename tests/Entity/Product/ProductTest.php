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

namespace Entity\Product;

use Gpupo\MercadolivreSdk\Entity\Product\Product;
use Gpupo\Tests\CommonSdk\Traits\EntityTrait;
use Gpupo\Tests\MercadolivreSdk\TestCaseAbstract;

/**
 * @coversDefaultClass \Gpupo\MercadolivreSdk\Entity\Product\Product
 *
 * @method string getTitle()                                Acesso a title
 * @method        setTitle(string $title)                   Define title
 * @method string getCategoryId()                           Acesso a category_id
 * @method        setCategoryId(string $category_id)        Define category_id
 * @method float  getPrice()                                Acesso a price
 * @method        setPrice(float $price)                    Define price
 * @method string getCurrencyId()                           Acesso a currency_id
 * @method        setCurrencyId(string $currency_id)        Define currency_id
 * @method string getBuyingMode()                           Acesso a buying_mode
 * @method        setBuyingMode(string $buying_mode)        Define buying_mode
 * @method string getListingTypeId()                        Acesso a listing_type_id
 * @method        setListingTypeId(string $listing_type_id) Define listing_type_id
 * @method string getCondition()                            Acesso a condition
 * @method        setCondition(string $condition)           Define condition
 * @method string getDescription()                          Acesso a description
 * @method        setDescription(string $description)       Define description
 */
class ProductTest extends TestCaseAbstract
{
    use EntityTrait;

    /**
     * @return \Gpupo\MercadolivreSdk\Entity\Product\Product
     */
    public function dataProviderProduct()
    {
        $data = json_decode(file_get_contents('Resources/fixture/Product/item.json'), true);

        return $this->dataProviderEntitySchema(Product::class, $data);
    }

    /**
     * @testdox ``getSchema()``
     * @cover ::getSchema
     * @dataProvider dataProviderProduct
     */
    public function testGetSchema(Product $product)
    {
        $this->markTestIncomplete('getSchema() incomplete!');
    }

    /**
     * @testdox Possui método ``getTitle()`` para acessar Title
     * @dataProvider dataProviderProduct
     * @cover ::get
     * @cover ::getSchema
     * @small
     *
     * @param null|mixed $expected
     */
    public function testGetTitle(Product $product, $expected = null)
    {
        $this->assertSchemaGetter('title', 'string', $product, $expected);
    }

    /**
     * @testdox Possui método ``setTitle()`` que define Title
     * @dataProvider dataProviderProduct
     * @cover ::set
     * @cover ::getSchema
     * @small
     *
     * @param null|mixed $expected
     */
    public function testSetTitle(Product $product, $expected = null)
    {
        $this->assertSchemaSetter('title', 'string', $product);
    }

    /**
     * @testdox Possui método ``getCategoryId()`` para acessar CategoryId
     * @dataProvider dataProviderProduct
     * @cover ::get
     * @cover ::getSchema
     * @small
     *
     * @param null|mixed $expected
     */
    public function testGetCategoryId(Product $product, $expected = null)
    {
        $this->assertSchemaGetter('category_id', 'string', $product, $expected);
    }

    /**
     * @testdox Possui método ``setCategoryId()`` que define CategoryId
     * @dataProvider dataProviderProduct
     * @cover ::set
     * @cover ::getSchema
     * @small
     *
     * @param null|mixed $expected
     */
    public function testSetCategoryId(Product $product, $expected = null)
    {
        $this->assertSchemaSetter('category_id', 'string', $product);
    }

    /**
     * @testdox Possui método ``getPrice()`` para acessar Price
     * @dataProvider dataProviderProduct
     * @cover ::get
     * @cover ::getSchema
     * @small
     *
     * @param null|mixed $expected
     */
    public function testGetPrice(Product $product, $expected = null)
    {
        $this->assertSame($product['price'], $expected['price']);
    }

    /**
     * @testdox Possui método ``setPrice()`` que define Price
     * @dataProvider dataProviderProduct
     * @cover ::set
     * @cover ::getSchema
     * @small
     *
     * @param null|mixed $expected
     */
    public function testSetPrice(Product $product, $expected = null)
    {
        $this->assertSchemaSetter('price', 'number', $product);
    }

    /**
     * @testdox Possui método ``getCurrencyId()`` para acessar CurrencyId
     * @dataProvider dataProviderProduct
     * @cover ::get
     * @cover ::getSchema
     * @small
     *
     * @param null|mixed $expected
     */
    public function testGetCurrencyId(Product $product, $expected = null)
    {
        $this->assertSchemaGetter('currency_id', 'string', $product, $expected);
    }

    /**
     * @testdox Possui método ``setCurrencyId()`` que define CurrencyId
     * @dataProvider dataProviderProduct
     * @cover ::set
     * @cover ::getSchema
     * @small
     *
     * @param null|mixed $expected
     */
    public function testSetCurrencyId(Product $product, $expected = null)
    {
        $this->assertSchemaSetter('currency_id', 'string', $product);
    }

    /**
     * @testdox Possui método ``getBuyingMode()`` para acessar BuyingMode
     * @dataProvider dataProviderProduct
     * @cover ::get
     * @cover ::getSchema
     * @small
     *
     * @param null|mixed $expected
     */
    public function testGetBuyingMode(Product $product, $expected = null)
    {
        $this->assertSchemaGetter('buying_mode', 'string', $product, $expected);
    }

    /**
     * @testdox Possui método ``setBuyingMode()`` que define BuyingMode
     * @dataProvider dataProviderProduct
     * @cover ::set
     * @cover ::getSchema
     * @small
     *
     * @param null|mixed $expected
     */
    public function testSetBuyingMode(Product $product, $expected = null)
    {
        $this->assertSchemaSetter('buying_mode', 'string', $product);
    }

    /**
     * @testdox Possui método ``getListingTypeId()`` para acessar ListingTypeId
     * @dataProvider dataProviderProduct
     * @cover ::get
     * @cover ::getSchema
     * @small
     *
     * @param null|mixed $expected
     */
    public function testGetListingTypeId(Product $product, $expected = null)
    {
        $this->assertSchemaGetter('listing_type_id', 'string', $product, $expected);
    }

    /**
     * @testdox Possui método ``setListingTypeId()`` que define ListingTypeId
     * @dataProvider dataProviderProduct
     * @cover ::set
     * @cover ::getSchema
     * @small
     *
     * @param null|mixed $expected
     */
    public function testSetListingTypeId(Product $product, $expected = null)
    {
        $this->assertSchemaSetter('listing_type_id', 'string', $product);
    }

    /**
     * @testdox Possui método ``getCondition()`` para acessar Condition
     * @dataProvider dataProviderProduct
     * @cover ::get
     * @cover ::getSchema
     * @small
     *
     * @param null|mixed $expected
     */
    public function testGetCondition(Product $product, $expected = null)
    {
        $this->assertSchemaGetter('condition', 'string', $product, $expected);
    }

    /**
     * @testdox Possui método ``setCondition()`` que define Condition
     * @dataProvider dataProviderProduct
     * @cover ::set
     * @cover ::getSchema
     * @small
     *
     * @param null|mixed $expected
     */
    public function testSetCondition(Product $product, $expected = null)
    {
        $this->assertSchemaSetter('condition', 'string', $product);
    }

    /**
     * @testdox Possui método ``getDescription()`` para acessar Description
     * @dataProvider dataProviderProduct
     * @cover ::get
     * @cover ::getSchema
     * @small
     *
     * @param null|mixed $expected
     */
    public function testGetDescription(Product $product, $expected = null)
    {
        $this->assertSchemaGetter('description', 'string', $product, $expected);
    }

    /**
     * @testdox Possui método ``setDescription()`` que define Description
     * @dataProvider dataProviderProduct
     * @cover ::set
     * @cover ::getSchema
     * @small
     *
     * @param null|mixed $expected
     */
    public function testSetDescription(Product $product, $expected = null)
    {
        $this->assertSchemaSetter('description', 'string', $product);
    }
}

<?php

declare(strict_types=1);

namespace ShopifyTest\Rest;

use Shopify\Auth\Session;
use Shopify\Context;
use Shopify\Rest\PriceRule;
use ShopifyTest\BaseTestCase;
use ShopifyTest\Clients\MockRequest;

final class PriceRule202110Test extends BaseTestCase
{
    /** @var Session */
    private $test_session;

    public function setUp(): void
    {
        parent::setUp();

        Context::$API_VERSION = "2021-10";

        $this->test_session = new Session("session_id", "test-shop.myshopify.io", true, "1234");
        $this->test_session->setAccessToken("this_is_a_test_token");
    }

    /**

     *
     * @return void
     */
    public function test_1(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, ""),
                "https://test-shop.myshopify.io/admin/api/2021-10/price_rules.json",
                "POST",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["price_rule" => ["title" => "SUMMERSALE10OFF", "target_type" => "line_item", "target_selection" => "all", "allocation_method" => "across", "value_type" => "fixed_amount", "value" => "-10.0", "customer_selection" => "all", "starts_at" => "2017-01-19T17:59:10Z"]]),
            ),
        ]);

        $price_rule = new PriceRule($this->test_session);
        $price_rule->title = "SUMMERSALE10OFF";
        $price_rule->target_type = "line_item";
        $price_rule->target_selection = "all";
        $price_rule->allocation_method = "across";
        $price_rule->value_type = "fixed_amount";
        $price_rule->value = "-10.0";
        $price_rule->customer_selection = "all";
        $price_rule->starts_at = "2017-01-19T17:59:10Z";
        $price_rule->save();
    }

    /**

     *
     * @return void
     */
    public function test_2(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, ""),
                "https://test-shop.myshopify.io/admin/api/2021-10/price_rules.json",
                "POST",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["price_rule" => ["title" => "15OFFCOLLECTION", "target_type" => "line_item", "target_selection" => "entitled", "allocation_method" => "across", "value_type" => "percentage", "value" => "-15.0", "customer_selection" => "all", "entitled_collection_ids" => [841564295], "starts_at" => "2017-01-19T17:59:10Z"]]),
            ),
        ]);

        $price_rule = new PriceRule($this->test_session);
        $price_rule->title = "15OFFCOLLECTION";
        $price_rule->target_type = "line_item";
        $price_rule->target_selection = "entitled";
        $price_rule->allocation_method = "across";
        $price_rule->value_type = "percentage";
        $price_rule->value = "-15.0";
        $price_rule->customer_selection = "all";
        $price_rule->entitled_collection_ids = [
            841564295
        ];
        $price_rule->starts_at = "2017-01-19T17:59:10Z";
        $price_rule->save();
    }

    /**

     *
     * @return void
     */
    public function test_3(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, ""),
                "https://test-shop.myshopify.io/admin/api/2021-10/price_rules.json",
                "POST",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["price_rule" => ["title" => "FREESHIPPING", "target_type" => "shipping_line", "target_selection" => "all", "allocation_method" => "each", "value_type" => "percentage", "value" => "-100.0", "usage_limit" => 20, "customer_selection" => "all", "prerequisite_subtotal_range" => ["greater_than_or_equal_to" => "50.0"], "starts_at" => "2017-01-19T17:59:10Z"]]),
            ),
        ]);

        $price_rule = new PriceRule($this->test_session);
        $price_rule->title = "FREESHIPPING";
        $price_rule->target_type = "shipping_line";
        $price_rule->target_selection = "all";
        $price_rule->allocation_method = "each";
        $price_rule->value_type = "percentage";
        $price_rule->value = "-100.0";
        $price_rule->usage_limit = 20;
        $price_rule->customer_selection = "all";
        $price_rule->prerequisite_subtotal_range = [
            "greater_than_or_equal_to" => "50.0"
        ];
        $price_rule->starts_at = "2017-01-19T17:59:10Z";
        $price_rule->save();
    }

    /**

     *
     * @return void
     */
    public function test_4(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, ""),
                "https://test-shop.myshopify.io/admin/api/2021-10/price_rules.json",
                "POST",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["price_rule" => ["title" => "5OFFCUSTOMERGROUP", "target_type" => "line_item", "target_selection" => "all", "allocation_method" => "across", "value_type" => "fixed_amount", "value" => "-5.0", "customer_selection" => "prerequisite", "prerequisite_saved_search_ids" => [789629109], "starts_at" => "2017-01-19T17:59:10Z"]]),
            ),
        ]);

        $price_rule = new PriceRule($this->test_session);
        $price_rule->title = "5OFFCUSTOMERGROUP";
        $price_rule->target_type = "line_item";
        $price_rule->target_selection = "all";
        $price_rule->allocation_method = "across";
        $price_rule->value_type = "fixed_amount";
        $price_rule->value = "-5.0";
        $price_rule->customer_selection = "prerequisite";
        $price_rule->prerequisite_saved_search_ids = [
            789629109
        ];
        $price_rule->starts_at = "2017-01-19T17:59:10Z";
        $price_rule->save();
    }

    /**

     *
     * @return void
     */
    public function test_5(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, ""),
                "https://test-shop.myshopify.io/admin/api/2021-10/price_rules.json",
                "POST",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["price_rule" => ["title" => "Buy2iPodsGetiPodTouchForFree", "value_type" => "percentage", "value" => "-100.0", "customer_selection" => "all", "target_type" => "line_item", "target_selection" => "entitled", "allocation_method" => "each", "starts_at" => "2018-03-22T00:00:00-00:00", "prerequisite_collection_ids" => [841564295], "entitled_product_ids" => [921728736], "prerequisite_to_entitlement_quantity_ratio" => ["prerequisite_quantity" => 2, "entitled_quantity" => 1], "allocation_limit" => 3]]),
            ),
        ]);

        $price_rule = new PriceRule($this->test_session);
        $price_rule->title = "Buy2iPodsGetiPodTouchForFree";
        $price_rule->value_type = "percentage";
        $price_rule->value = "-100.0";
        $price_rule->customer_selection = "all";
        $price_rule->target_type = "line_item";
        $price_rule->target_selection = "entitled";
        $price_rule->allocation_method = "each";
        $price_rule->starts_at = "2018-03-22T00:00:00-00:00";
        $price_rule->prerequisite_collection_ids = [
            841564295
        ];
        $price_rule->entitled_product_ids = [
            921728736
        ];
        $price_rule->prerequisite_to_entitlement_quantity_ratio = [
            "prerequisite_quantity" => 2,
            "entitled_quantity" => 1
        ];
        $price_rule->allocation_limit = 3;
        $price_rule->save();
    }

    /**

     *
     * @return void
     */
    public function test_6(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, ""),
                "https://test-shop.myshopify.io/admin/api/2021-10/price_rules.json",
                "GET",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
            ),
        ]);

        PriceRule::all(
            $this->test_session,
            [],
            [],
        );
    }

    /**

     *
     * @return void
     */
    public function test_7(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, ""),
                "https://test-shop.myshopify.io/admin/api/2021-10/price_rules/507328175.json",
                "PUT",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["price_rule" => ["id" => 507328175, "title" => "WINTER SALE"]]),
            ),
        ]);

        $price_rule = new PriceRule($this->test_session);
        $price_rule->id = 507328175;
        $price_rule->title = "WINTER SALE";
        $price_rule->save();
    }

    /**

     *
     * @return void
     */
    public function test_8(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, ""),
                "https://test-shop.myshopify.io/admin/api/2021-10/price_rules/507328175.json",
                "GET",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
            ),
        ]);

        PriceRule::find(
            $this->test_session,
            507328175,
            [],
            [],
        );
    }

    /**

     *
     * @return void
     */
    public function test_9(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, ""),
                "https://test-shop.myshopify.io/admin/api/2021-10/price_rules/507328175.json",
                "DELETE",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
            ),
        ]);

        PriceRule::delete(
            $this->test_session,
            507328175,
            [],
            [],
        );
    }

    /**

     *
     * @return void
     */
    public function test_10(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, ""),
                "https://test-shop.myshopify.io/admin/api/2021-10/price_rules/count.json",
                "GET",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
            ),
        ]);

        PriceRule::count(
            $this->test_session,
            [],
            [],
        );
    }

}

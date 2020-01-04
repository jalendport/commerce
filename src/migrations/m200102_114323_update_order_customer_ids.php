<?php

namespace craft\commerce\migrations;

use Craft;
use craft\commerce\queue\ConsolidateGuestOrders;
use craft\commerce\records\Order;
use craft\db\Migration;
use craft\db\Query;
use craft\helpers\ArrayHelper;

/**
 * m200102_114323_update_order_customer_ids migration.
 */
class m200102_114323_update_order_customer_ids extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {

        // get a list of emails and customerIds from all completed orders
        $allCustomers = (new Query())
            ->select('[[orders.email]] email')
            ->from('{{%commerce_orders}} orders')
            ->where(['[[orders.isCompleted]]' => true])
            ->distinct()
            ->column();

        foreach ($allCustomers as $customer) {
            // Consolidate guest orders
            Craft::$app->getQueue()->push(new ConsolidateGuestOrders([
                'email' => $customer
            ]));
        }
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m200102_114323_update_order_customer_ids cannot be reverted.\n";
        return false;
    }
}
<?php

class Subscription 
{ 
    public function __construct(
        protected BillingPortal $BillingPortal
        ) {
      //
    }
    public function create()
    {
        $this->BillingPortal->getCustomer();

    }

    public function cancel()
    {

    }

    public function swap(string $newPlan)
    {

    }
    
    public function invoice()
    {

    }
}

    interface BillingPortal
 {
    
    public function getCustomer();
    public function getStripeSubsription(); 
}

class StripeBillingPortal implements BillingPortal
{
    public function getCustomer()
    {
        // TODO: Implement getCustomer() method. 
    }

    public function getSubscription()
    {
        // TODO: Implement getSubscription() method. 
    }
}

 $subscription = new Subscription(
    new BraintreeBillingPortal()
 );
 $subscription-> create(); 
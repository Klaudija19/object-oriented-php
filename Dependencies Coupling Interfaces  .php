<?php

class User
{

}

class Newsletter
{
    public function __construct(public NewsletterProvider $provider)
    {

    }
    public function subsrcibe(User $user)
    {

        $this->provider->addToList('default', $user->email);

        //Update the user and mark them as subsrcibed.
        $user->update(['subscribed' =>true]);

        return true;

    }
}

interface NewsletterProvider{
    public function addToList(string $list, string $email): void;

}


class CampaignMonitorProvider impelements NewsletterProvider
{
    public function addToList(string $list, string $email): void
    {
         
        $cm = new CampaignMonitorAPI();

        $cm->addApiKey('asgagsghrfd');

        $list = $cm->lists->find($list);

        $list->addToList($email);


    }
}

class PostmarkProvider impelements NewsletterProvider
{
    public function addToList(string $list, string $email): void
    {
         
        $cm = new PostmarkAPI('asgagsghrfd');

        $list = $cm->addToDefaultList($email);

        $list->addToList($email);


    }
}

$newsletter = new Newsletter(
    new CampaignMonitorProvider()
);
$newsletter->subscribe(new User);



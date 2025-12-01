<?php

class User
{

}

class Newsletter
{
    public function subsrcibe(User $user)
    {
    
        $cm = new CampaignMonitor();

        $cm->addToList('default', $user->email);

        //Update the user and mark them as subsrcibed.
        $user->update(['subscribed' =>true]);

        return true;

    }
}

interface NewsletterProvider{
    public function addToList(string $list, string $email);

}


class CampaignMonitorProvider impelements NewsletterProvider
{
    public function addToList(string $list, string $email)
    {
         
        $cm = new CampaignMonitorAPI();

        $cm->addApiKey('asgagsghrfd');

        $list = $cm->lists->find($list);

        $list->addToList($email);


    }
}

$newsletter = new Newsletter();

$newsletter->subscribe(new User);

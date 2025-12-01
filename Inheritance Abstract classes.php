<?php

class User{}


abstract class Achievement
{
public function __construct(
    public string $name, 
    public string $description, 
    public string $icon
){
    

}
abstract public function qualifier(User $user)
}

class FirstPostAchievement extends Achievement
{
    public function qualifier(User, $user)
    {
        // TODO: Implement qualifier() method. 
    }
    }
  class TalkativeAchievement extends Achievement 
  {
    public function qualifier(User $user)
    {
      // $user->comments()->count()>= 200;
    }
    
  }

new Achievement();

//$firstPost = new FirstPostAchievement(
  //  'First Post' ,
    //'Granted when you create your first post.',
    //'first-post.svg'
//);

//echo $firstPost->qualifier(new User) ? 'They qualify' : 'They do not qualify';
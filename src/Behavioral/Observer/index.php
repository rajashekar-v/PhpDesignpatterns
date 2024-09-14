<?php 
namespace Rajashekar\Designpatterns\Behavioral\Observer;

use Rajashekar\Designpatterns\Behavioral\Observer\AddedComment;
use Rajashekar\Designpatterns\Behavioral\Observer\EmailAuthor;
use Rajashekar\Designpatterns\Behavioral\Observer\IncrementCommentCount;
use Rajashekar\Designpatterns\Behavioral\Observer\EmailOtherCommentators;

$new_comment = 'hello, world';
$blog_post_id = 123;

echo "Created Blog Post\n"; 

echo "Adding observers to subject\n";

$addedComment = new AddedComment($new_comment, $blog_post_id); 

$addedComment->attach(new IncrementCommentCount())->attach(new EmailOtherCommentators())->attach(new EmailAuthor());
echo "Now going to notify() them...\n";
$addedComment->notify();
echo "Done\n";
?>
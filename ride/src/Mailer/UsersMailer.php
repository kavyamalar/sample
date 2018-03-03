<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;
use Cake\Filesystem\File;
use Cake\Filesystem\Folder;
use Cake\Mailer\Email;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * Users mailer.
 */
class UsersMailer extends Mailer
{

    /**
     * Mailer's name.
     *
     * @var string
     */
    static public $name = 'Users';

    public function welcome($user){
    	$email = new Email('karthik');
		$email->from(['me@example.com' => 'My Site'])
		->attachments('files/1.pdf')
		->template('karthik', 'users')
    	->emailFormat('html')
    	->to($user->email)
    	->subject(sprintf('Welcome %s',$user->name))
    	->send();
         
    	die('Email Sent!');
    }
}

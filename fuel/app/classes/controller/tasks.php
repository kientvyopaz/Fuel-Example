<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.9-dev
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Tasks extends Controller
{
	public function action_index()
	{
		$tasks = Model_Task::query()->get();

		$view = View::forge('tasks/index');
		$view->set('tasks', $tasks);  

		return Response::forge($view);
	}


	public function action_create()
	{
		$props = array('property' => 'something');
		$new = new Model_Task([
			'title' => Input::post('title'),
			'body' => Input::post('body'),
		]);
		$new->save();

		Response::redirect('tasks');
	}
}

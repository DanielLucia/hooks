<?php

/*
FORK
*/

namespace daniellucia\Hooks;

class Hook
{
	/**
	 * list of hooks
	 * @var array
	 */
	protected $hooks = array();

	/**
	 * @param string $name The name of the hook.
	 * @param callback $function
	 * @param integer $priority
	 */
	public function add($name, $function, $priority = 10)
	{
		$this->hooks[ $name ][ $priority ][] = $function;
	}

	/**
	 * @param string $name The name of the hook.
	 * @return boolean
	 */
	public function has($name)
	{
		if (isset($this->hooks[$name]) && !empty($this->hooks[$name]))
		{
			return true;
		}

		return false;
	}
}

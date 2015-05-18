<?php namespace Twist\Support;

use ArrayAccess;

class Config implements ArrayAccess
{
	protected $directory;

	protected $config;

	public function __construct($directory)
	{
		$this->directory = $directory;
	}

	public function set($key, $value)
	{
		$keys = $this->split($key);

		$last = array_pop($keys);

		if (! isset($this->config[$keys[0]]))
		{
			// if the 'group' is not loaded yet, load it to prevent
			// the set item to be overwritten when a different item from
			// that group is requested
			$this->load($keys[0], true);
		}

		$conf =& $this->config;

		while (! empty($keys))
		{
			$key = array_shift($keys);

			if (! isset($conf[$key]))
			{
				$conf[$key] = array();
			}

			$conf =& $conf[$key];
		}

		$conf[$last] = $value;

		return $value;
	}

	public function get($key)
	{
		$key = $this->split($key);

		$first = array_shift($key);

		if (! isset($this->config[$first]))
		{
			$this->load($first);
		}

		$conf = $this->config[$first];

		while (! empty($key))
		{
			$conf = $conf[array_shift($key)];
		}

		return $conf;
	}

	public function load($key, $soft = false)
	{
		$path = $this->createPath($key);

		if ($soft && ! file_exists($path))
		{
			$this->config[$key] = array();

			return;
		}

		$this->config[$key] = require $path;
	}

	public function has($key)
	{
		return isset($this->config[$key]) || file_exists($this->createPath($key));
	}

	protected function createPath($key)
	{
		return "{$this->directory}/{$key}.php";
	}

	protected function split($key)
	{
		return str_replace('\\', '', preg_split('/(?<!\\\)\./', $key));
	}

	public function delete($key)
	{
		unset($this->config[$key]);
	}

	public function offsetSet($key, $value)
	{
		$this->set($key, $value);
	}

	public function offsetGet($key)
	{
		return $this->get($key);
	}

	public function offsetExists($key)
	{
		return $this->has($key);
	}

	public function offsetUnset($key)
	{
		$this->delete($key);
	}
}

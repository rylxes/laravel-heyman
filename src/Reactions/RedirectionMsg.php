<?php

namespace Imanghafoori\HeyMan\Reactions;

use Imanghafoori\HeyMan\Chain;

class RedirectionMsg
{
    private $chain;

    private $redirect;

    /**
     * Redirector constructor.
     *
     * @param Chain      $chain
     * @param Redirector $redirect
     */
    public function __construct(Chain $chain, Redirector $redirect)
    {
        $this->chain = $chain;
        $this->redirect = $redirect;
    }

    /**
     * Flash a piece of data to the session.
     *
     * @param string|array $key
     * @param mixed        $value
     *
     * @return $this
     */
    public function with($key, $value = null)
    {
        $this->chain->commitArray([__FUNCTION__, func_get_args()], 'redirect');

        return $this;
    }

    /**
     * Add multiple cookies to the response.
     *
     * @param array $cookies
     *
     * @return $this
     */
    public function withCookies(array $cookies)
    {
        $this->chain->commitArray([__FUNCTION__, func_get_args()], 'redirect');

        return $this;
    }

    /**
     * Flash an array of input to the session.
     *
     * @param array $input
     *
     * @return $this
     */
    public function withInput(array $input = null)
    {
        $this->chain->commitArray([__FUNCTION__, func_get_args()], 'redirect');

        return $this;
    }

    /**
     * Flash an array of input to the session.
     *
     * @return $this
     */
    public function onlyInput()
    {
        $this->chain->commitArray([__FUNCTION__, func_get_args()], 'redirect');

        return $this;
    }

    /**
     * Flash an array of input to the session.
     *
     * @return RedirectionMsg
     */
    public function exceptInput(): self
    {
        $this->chain->commitArray([__FUNCTION__, func_get_args()], 'redirect');

        return $this;
    }

    /**
     * Flash a container of errors to the session.
     *
     * @param \Illuminate\Contracts\Support\MessageProvider|array|string $provider
     * @param string                                                     $key
     *
     * @return $this
     */
    public function withErrors($provider, $key = 'default')
    {
        $this->chain->commitArray([__FUNCTION__, func_get_args()], 'redirect');

        return $this;
    }

    /**
     * Dynamically bind flash data in the session.
     *
     * @param string $method
     * @param array  $parameters
     *
     * @throws \BadMethodCallException
     *
     * @return $this
     */
    public function __call($method, $parameters)
    {
        $this->chain->commitArray([$method, $parameters], 'redirect');

        return $this;
    }
}

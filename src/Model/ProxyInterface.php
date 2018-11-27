<?php

namespace Shapecode\FUT\Client\Model;

/**
 * Interface ProxyInterface
 *
 * @package Shapecode\FUT\Client\Model
 * @author  Shapecode
 */
interface ProxyInterface
{

    /**
     * @return string
     */
    public function getProtocol();

    /**
     * @return string
     */
    public function getIp();

    /**
     * @return string
     */
    public function getPort();

    /**
     * @return null|string
     */
    public function getUsername();

    /**
     * @return null|string
     */
    public function getPassword();

    /**
     * @return string
     */
    public function getProxyProtocol();
}
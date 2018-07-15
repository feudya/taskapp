<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Usuario extends \AppBundle\Entity\Usuario implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'nombre', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'username', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'tipoUsuario', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'contrasena', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'tickets', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'ticketasignado'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'nombre', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'username', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'tipoUsuario', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'contrasena', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'tickets', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'ticketasignado'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Usuario $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __constructc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__constructc', []);

        return parent::__constructc();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoUsuario', []);

        return parent::getTipoUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoUsuario($tipoUsuario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoUsuario', [$tipoUsuario]);

        return parent::setTipoUsuario($tipoUsuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getContrasena()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContrasena', []);

        return parent::getContrasena();
    }

    /**
     * {@inheritDoc}
     */
    public function setContrasena($contrasena)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContrasena', [$contrasena]);

        return parent::setContrasena($contrasena);
    }

    /**
     * {@inheritDoc}
     */
    public function getTickets()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTickets', []);

        return parent::getTickets();
    }

    /**
     * {@inheritDoc}
     */
    public function setTickets($tickets)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTickets', [$tickets]);

        return parent::setTickets($tickets);
    }

    /**
     * {@inheritDoc}
     */
    public function getTicketasignado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTicketasignado', []);

        return parent::getTicketasignado();
    }

    /**
     * {@inheritDoc}
     */
    public function setTicketasignado($ticketasignado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTicketasignado', [$ticketasignado]);

        return parent::setTicketasignado($ticketasignado);
    }

}

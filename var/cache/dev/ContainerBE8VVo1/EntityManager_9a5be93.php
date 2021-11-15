<?php

namespace ContainerBE8VVo1;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera99f8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere3e78 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb4dc1 = [
        
    ];

    public function getConnection()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'getConnection', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'getMetadataFactory', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'getExpressionBuilder', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'beginTransaction', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'getCache', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->getCache();
    }

    public function transactional($func)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'transactional', array('func' => $func), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'wrapInTransaction', array('func' => $func), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'commit', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->commit();
    }

    public function rollback()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'rollback', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'getClassMetadata', array('className' => $className), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'createQuery', array('dql' => $dql), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'createNamedQuery', array('name' => $name), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'createQueryBuilder', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'flush', array('entity' => $entity), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'clear', array('entityName' => $entityName), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->clear($entityName);
    }

    public function close()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'close', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->close();
    }

    public function persist($entity)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'persist', array('entity' => $entity), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'remove', array('entity' => $entity), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'refresh', array('entity' => $entity), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'detach', array('entity' => $entity), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'merge', array('entity' => $entity), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'getRepository', array('entityName' => $entityName), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'contains', array('entity' => $entity), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'getEventManager', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'getConfiguration', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'isOpen', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'getUnitOfWork', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'getProxyFactory', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'initializeObject', array('obj' => $obj), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'getFilters', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'isFiltersStateClean', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'hasFilters', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return $this->valueHoldera99f8->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializere3e78 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera99f8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera99f8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera99f8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, '__get', ['name' => $name], $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        if (isset(self::$publicPropertiesb4dc1[$name])) {
            return $this->valueHoldera99f8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera99f8;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera99f8;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera99f8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera99f8;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, '__isset', array('name' => $name), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera99f8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera99f8;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, '__unset', array('name' => $name), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera99f8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera99f8;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, '__clone', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        $this->valueHoldera99f8 = clone $this->valueHoldera99f8;
    }

    public function __sleep()
    {
        $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, '__sleep', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;

        return array('valueHoldera99f8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere3e78 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere3e78;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere3e78 && ($this->initializere3e78->__invoke($valueHoldera99f8, $this, 'initializeProxy', array(), $this->initializere3e78) || 1) && $this->valueHoldera99f8 = $valueHoldera99f8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera99f8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera99f8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

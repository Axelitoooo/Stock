<?php

namespace ContainerBm7G650;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0989e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4afa2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5e52f = [
        
    ];

    public function getConnection()
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'getConnection', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'getMetadataFactory', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'getExpressionBuilder', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'beginTransaction', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'getCache', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'transactional', array('func' => $func), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'commit', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->commit();
    }

    public function rollback()
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'rollback', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'getClassMetadata', array('className' => $className), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'createQuery', array('dql' => $dql), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'createNamedQuery', array('name' => $name), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'createQueryBuilder', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'flush', array('entity' => $entity), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'clear', array('entityName' => $entityName), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->clear($entityName);
    }

    public function close()
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'close', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->close();
    }

    public function persist($entity)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'persist', array('entity' => $entity), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'remove', array('entity' => $entity), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'refresh', array('entity' => $entity), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'detach', array('entity' => $entity), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'merge', array('entity' => $entity), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'contains', array('entity' => $entity), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'getEventManager', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'getConfiguration', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'isOpen', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'getUnitOfWork', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'getProxyFactory', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'initializeObject', array('obj' => $obj), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'getFilters', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'isFiltersStateClean', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'hasFilters', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return $this->valueHolder0989e->hasFilters();
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

        $instance->initializer4afa2 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder0989e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0989e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0989e->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, '__get', ['name' => $name], $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        if (isset(self::$publicProperties5e52f[$name])) {
            return $this->valueHolder0989e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0989e;

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

        $targetObject = $this->valueHolder0989e;
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
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0989e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0989e;
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
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, '__isset', array('name' => $name), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0989e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0989e;
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
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, '__unset', array('name' => $name), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0989e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0989e;
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
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, '__clone', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        $this->valueHolder0989e = clone $this->valueHolder0989e;
    }

    public function __sleep()
    {
        $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, '__sleep', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;

        return array('valueHolder0989e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4afa2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4afa2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4afa2 && ($this->initializer4afa2->__invoke($valueHolder0989e, $this, 'initializeProxy', array(), $this->initializer4afa2) || 1) && $this->valueHolder0989e = $valueHolder0989e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0989e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0989e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
